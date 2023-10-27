"use strict";

let lazy = () => {
  //for IE cancel the lazy load
  var features = [];
  'IntersectionObserver' in window || features.push('IntersectionObserver');
  if (features.length) {
    let lazyImages = document.querySelectorAll(`[lazy]`);
    var i;
    for (i = 0; i < lazyImages.length; i++) {
      let lazyImagesAttr = lazyImages[i].getAttribute("lazy");
      if (lazyImages[i].hasAttribute("lazy-bg") == false) {
        lazyImages[i].setAttribute("src", lazyImagesAttr);
      }
    }
    let lazyBgImages = document.querySelectorAll(`[lazy-bg]`);
    var j;
    for (j = 0; j < lazyBgImages.length; j++) {
      let lazyBgImagesAttr = lazyBgImages[j].getAttribute("lazy");
      lazyBgImages[j].style.backgroundImage = "url('" + lazyBgImagesAttr + "')";
    }
    return;
  } else {
    // Lazy Load Options
    let lazyOption = {
      tag: "lazy",
      // Default Lazy Loader
      srcset: "lazy-srcset",
      // Picture Image srcset attributes
      backgroundImage: "lazy-bg",
      // Background Image attributes,
      functions: "lazy-js",
      // Load js function attributes
      element: "lazy-element",
      // Lazy Load elements
      animation: "-done",
      // When Image or Video loaded added animation class
      done: "done",
      // When Video loaded added attribute
      track: "lazy-track" // Should keep tracking after enter view
    };

    let lazyisImage = item => item.tagName.toLowerCase() === "img";
    let lazyisBackgroundImage = item => item.hasAttribute(lazyOption.backgroundImage);
    let lazyisVideo = item => item.tagName.toLowerCase() === "video";
    let lazyisSource = item => item.tagName.toLowerCase() === "source";
    let lazyisIframe = item => item.tagName.toLowerCase() === "iframe";
    let lazyisFunction = item => item.hasAttribute(lazyOption.functions);
    let lazyisElement = item => item.hasAttribute(lazyOption.element);
    let lazyReset = (item, attr) => item.removeAttribute(attr); // Reset after src replaced

    let lazyItems = document.querySelectorAll(`[${lazyOption.tag}]`); // Get all lazy items

    let lazyLoad = new IntersectionObserver(entry => {
      entry.map(item => {
        let target = item.target; // HTML item
        let isTracking = target.getAttribute(lazyOption.track); // Keep tracking? Default: false

        if (!item.isIntersecting && !!!isTracking) return false; // If it's not in view and shouldn't tracking after enter the view. Default tracking: false

        let isImage = lazyisImage(target);
        let isVideo = lazyisVideo(target);
        let isIframe = lazyisIframe(target);
        let isFunction = lazyisFunction(target);
        let isElement = lazyisElement(target);
        let isBackgroundImage = lazyisBackgroundImage(target);
        let src = target.getAttribute(lazyOption.tag);
        if (!!!isTracking) lazyLoad.unobserve(target); // Remove observe after enter view if it shouldn't tracking

        if (isFunction && typeof eval(src) === 'function') {
          eval(src);
          return true;
        }
        if (isElement) {
          if (item.isIntersecting) target.classList.add(src);
          if (!item.isIntersecting && target.classList.contains(src)) target.classList.remove(src);
        }
        if (isImage && !!src) {
          return lazyImageLoad(target, src);
        }
        if (isBackgroundImage) {
          return lazyBackgroundImageLoad(target, src);
        }
        if (isVideo) {
          let isDone = target.hasAttribute(lazyOption.done); // Is video loaded before?

          // When video enter first time to view video source should load
          if (item.isIntersecting && !!!isDone) {
            target.load();
            target.setAttribute(lazyOption.done, "");
          }
          // When video leave the view video should pause
          if (!item.isIntersecting && !!isDone) {
            target.pause();
          }
          // When video enter the view video should play
          if (item.isIntersecting && !!isDone) {
            target.play();
          }
        }
        if (isIframe) {
          return lazyIframeLoad(target, src);
        }

        // If lazy at parent element
        if (target.children) {
          let items = [].slice.call(target.children); // Get all child elements
          for (let item of items) {
            let isImage = lazyisImage(item);
            let isSource = lazyisSource(item);
            let src = item.getAttribute(lazyOption.tag);
            let srcset = item.hasAttribute(lazyOption.srcset);
            if (isImage) lazyImageLoad(item, src);
            if (isSource && lazyisVideo(item.parentElement)) lazyVideoLoad(item, src);
            if (isSource && srcset) lazyPictureLoad(item, src);
          }
        }
        return true;
      });
    });
    let lazyImageLoad = (item, src) => {
      if (!!!src) return false;
      item.setAttribute("src", src);
      lazyReset(item, lazyOption.tag);
      item.onload = () => {
        if (item.parentElement.hasAttribute(lazyOption.tag) && !!lazyOption.animation) item.parentElement.classList.add(lazyOption.animation);
      };
      return true;
    };
    let lazyBackgroundImageLoad = (item, src) => {
      if (!!!src) return false;
      item.style.backgroundImage = `url('${src}')`;
      return lazyReset(item, lazyOption.tag);
    };
    let lazyVideoLoad = (item, src) => {
      if (!!!src) return false;
      item.setAttribute("src", src);
      return lazyReset(item, lazyOption.tag);
    };
    let lazyIframeLoad = (item, src) => {
      if (!!!src) return false;
      item.setAttribute("src", src);
      return lazyReset(item, lazyOption.tag);
    };
    let lazyPictureLoad = (item, srcset) => {
      if (!!!srcset) return false;
      item.setAttribute("srcset", srcset);
      return lazyReset(item, lazyOption.tag);
    };
    for (let entry of lazyItems) {
      lazyLoad.observe(entry);
    }
  }
};

// Polyfill for IntersectionObserve
// var features = [];
// ('IntersectionObserver' in window) || features.push('IntersectionObserver');

// if (features.length) {
// 	var s = document.createElement('script');
// 	s.src = 'https://polyfill.io/v3/polyfill.min.js?features=' + features.join(',') + '&flags=gated,always&callback=lazy';
// 	s.async = true;
// 	document.head.appendChild(s);
// } else {
// 	lazy();
// }

lazy();

// Google Map Init
var map;
let initGoogleMap = () => {
  var s = document.createElement('script');
  s.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCqxxOJ9SsSpNNeOCPzwPb88pEVwIxkaUA&callback=initMap';
  s.async = true;
  document.head.appendChild(s);
};
let initMap = () => {
  map = new google.maps.Map(document.querySelector('[googlemap]'), {
    center: {
      lat: -34.397,
      lng: 150.644
    },
    zoom: 8
  });
};

// // Just random bg colors - Not related with lazyload
// const initColors = () => {
// 	let items = document.querySelectorAll("section");
// 	for (let i = 0; i < items.length; i++) {
// 		items[i].style.background = randomColor({ luminosity: "light" });
// 	}
// };

// initColors();
"use strict";

let body = document.querySelector('body');
let headerElem = document.querySelector('[header]');
let headerNav = document.querySelector('[header-nav]');
let iconNav = document.querySelector('[menu="toggle"]');
let navItems = document.querySelectorAll('[nav-item]');
let navSubItems = document.querySelectorAll('[nav-item-sub]');
let navSubContainer = document.querySelector('[nav-mobile-button]');
let navSubButton = document.querySelector('[nav-mobile-content]');
let active = "-active";
const headerMenu = () => {
  navItems.forEach(item => {
    let itemLink = item.querySelector('[nav-link]');
    itemLink.addEventListener('click', function () {
      setTimeout(() => {
        item.classList.toggle(active);
      }, 50);
    });
  });
  navSubItems.forEach(item => {
    let itemLink = item.querySelector('[nav-link-sub]');
    itemLink.addEventListener('click', function () {
      setTimeout(() => {
        item.classList.toggle(active);
      }, 50);
    });
  });
};
navSubButton.addEventListener("click", function () {
  navSubContainer.classList.toggle(active);
});
const reset = () => {
  navItems.forEach(item => item.classList.remove(active));
  navSubItems.forEach(item => item.classList.remove(active));
};
(function () {
  const openMenu = () => {
    iconNav.classList.toggle('-on');
    headerElem.classList.toggle('-on');
    document.body.classList.toggle('-fixed');
    navItems.forEach(item => item.classList.remove(active));
    navSubItems.forEach(item => item.classList.remove(active));
  };

  // open menu
  if (iconNav) {
    iconNav.addEventListener("click", openMenu);
  }
  headerMenu();

  // keyup
  window.addEventListener("keyup", function (e) {
    if (e.key === 'Escape' || e.keyCode == 27) {
      reset();
    }
  });
})();
let documentClick = event => {
  if (window.innerWidth > 1024) {
    let targetElement = event.target;
    let allSubElements = document.querySelector('[nav-item]').getElementsByTagName("*");
    for (let i = 0; i < allSubElements.length; i++) {
      if (targetElement == allSubElements[i]) return;
    }
    reset();
  }
};

// resize
window.addEventListener('resize', function () {
  if (headerElem && headerElem.classList.contains('-on')) {
    iconNav.classList.remove('-on');
    headerElem.classList.remove('-on');
    document.body.classList.remove('-fixed');
    navItems.forEach(item => item.classList.remove(active));
  }
});
document.addEventListener('click', documentClick);
"use strict";

const popupActions = () => {
  const popups = document.querySelectorAll("[popup]");
  const activeClass = "-active";
  const scroll = function () {
    let status = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
    if (status == false) {
      document.body.style.overflowY = "hidden";
      return;
    }
    document.body.style.overflowY = "auto";
  };
  const open = element => {
    element.classList.add(activeClass);
    scroll(false);
  };
  const close = element => {
    element.classList.remove(activeClass);
    scroll(true);
  };
  let uxEvent = event => {
    const {
      key,
      target
    } = event;
    let openedPopup = document.querySelector("[popup].-active");
    if (!openedPopup) return;
    let popupContent = openedPopup.querySelector("[popup-content]");
    let isKeyPress = key != undefined && key === "Escape";
    let isOutClick = key == undefined && !popupContent.contains(target);
    let status = isKeyPress || isOutClick;
    if (!status) return;
    close(openedPopup);
    document.removeEventListener("keydown", uxEvent, true);
    document.removeEventListener("click", uxEvent, true);
  };
  popups.forEach(popup => {
    let delay = popup.getAttribute("delay") || 0;
    let closeButton = popup.querySelector("[close-popup]");
    let isActive = popup.getAttribute("active") || "false";
    if (isActive == "false") return;
    setTimeout(() => {
      open(popup);
      document.addEventListener("keydown", uxEvent, true);
      document.addEventListener("click", uxEvent, true);
    }, delay);
    closeButton.addEventListener("click", () => {
      close(popup);
    });
  });
};
window.onload = popupActions();
"use strict";

const header = document.querySelector("[header]");
const breadcrumb = document.querySelector("[breadcrumb]");
const main = document.querySelector("main");
const headerHeight = header.offsetHeight;
if (breadcrumb) {
  window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
      header.classList.add("-sticky");
      breadcrumb.classList.add("-sticky");
      main.style.paddingTop = `${headerHeight}px`;
    } else {
      header.classList.remove("-sticky");
      breadcrumb.classList.remove("-sticky");
      main.style.paddingTop = "0px";
    }
  });
}
"use strict";

let attr = 'tab';
let tabs = document.querySelectorAll(`[${attr}]`);
tabs.forEach(item => item.addEventListener('click', function () {
  open(this);
}));
let open = el => {
  let active = el.getAttribute(attr);
  let group = el.getAttribute('group');
  let contents = document.querySelectorAll(`[${group}]`);
  contents.forEach(item => item.classList.remove('-active'));
  let tabs = document.querySelectorAll(`[${attr}][group="${group}"]`);
  tabs.forEach(item => item.classList.remove('-active'));
  let content = document.querySelector(`[${group}="${active}"]`);
  content.classList.add('-active');
  el.classList.add('-active');

  // select element
  let selectElemAttr = document.querySelector(`[select-tab="${group}"]`);
  if (selectElemAttr) {
    Array.from(selectElemAttr.options).forEach(function (element) {
      element.removeAttribute('selected');
      if (element.value == active) element.setAttribute('selected', 'selected');
    });
  }
};

// mobil select box tab change
let selectElem = document.querySelector('[select-tab]');
if (selectElem) {
  selectElem.addEventListener('change', function () {
    let active = selectElem.value;
    let group;

    // related group
    tabs.forEach(item => group = item.getAttribute('group'));
    let tabsItems = document.querySelectorAll(`[${attr}][group="${group}"]`);
    tabsItems.forEach(item => {
      item.classList.remove('-active');
      let itemAttr = item.getAttribute(attr);
      if (itemAttr == active) item.classList.add('-active');
    });
    let contents = document.querySelectorAll(`[${group}]`);
    contents.forEach(item => item.classList.remove('-active'));
    let content = document.querySelector(`[${group}="${active}"]`);
    content.classList.add('-active');
  });
}