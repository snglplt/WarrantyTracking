<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="language" content="Turkish"/>
<meta http-equiv="content-language" content="tr"/>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#FFFFFF">

<title>Giriş Yap</title>

<meta name="robots" content="index, follow">
<meta name="keywords" content="Hesaplar, Giriş Yap">
<meta name="description" content="Hesaplar, Giriş Yap">
<base >

<meta name="msapplication-TileColor" content="#FFFFFF" />
<link rel="preconnect" href="https://fonts.gstatic.com/"  />
<link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
<link rel="preconnect" href="https://www.gstatic.com/"  />
<link rel="dns-prefetch" href="https://www.gstatic.com/" />
<link rel="preconnect" href="https://www.google-analytics.com/" crossorigin />
<link rel="dns-prefetch" href="https://www.google-analytics.com/" />
<link rel="preconnect" href="https://www.google.com/" crossorigin />
<link rel="dns-prefetch" href="https://www.google.com/" />
<link rel="preconnect" href="https://stats.g.doubleclick.net/"  />
<link rel="dns-prefetch" href="https://stats.g.doubleclick.net/" />

<meta name="google-site-verification" content="wBzrFah-Q6O_kaWsI6rPB8xfLNoEcfWqBkFSpRONNvY" /><meta name="msvalidate.01" content="90616D475F50E371D3032BDF7971342F">
<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114216339-1"></script>
	<script>
	    window.dataLayer = window.dataLayer || [];
	    function gtag(){dataLayer.push(arguments);}
	    gtag('js', new Date());

	    gtag('config', 'UA-114216339-1');
	</script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/minified-header.css" type="text/css" data-ver="1.0.0">
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
.counters label { font-size: 18px; }
#footer .footer-ribbon::before { left: -9px; top: 1px; }
body.sticky-menu-active #header .nav-main-collapse, #header.fixed .nav-main-collapse { max-height: 100% !important; }
</style>
<style>
.form-group{position:relative}
 #degistir{position:absolute;bottom:0px;right:0px;top:28px;width:40px;display:flex;justify-content:center;align-items:center;border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}
											</style>
<script>

//document.addEventListener("mousewheel", { passive: false });
//document.addEventListener('wheel', function(e) {e.preventDefault();}, { passive: false });
window.addEventListener('wheel', function(e) { }, { passive: false });

</script>
<link rel="stylesheet" href="css/swiper-bundle.min.css">

	<link rel="stylesheet" href="css/assets_css_main.css_1693903237707.css">

<link rel="stylesheet" href="css/home.css_1693903237707.css">
<script src="js/cdn.jsdelivr.net_npm_sweetalert2@11.js"></script>

<link rel="icon" type="image/x-icon" href="images/fav.png">

</head>
<body oncontextmenu="return false;">


<div class="body">
		<?php include 'inc/nav.php'; ?>
		<div role="main" class="main">
		
		<div class="container">
	<div class="row" id="loginloadmsg" style="display:none;">
		<div class="col-md-12">
			<div style="text-align:center">
			 					<br>&nbsp; Kullanıcı bilgileri kontrol ediliyor, Lütfen Bekleyiniz.			</div>
		</div>
	</div>
		<div class="row">
		<div class="col-md-12">
			<h2>Bu sayfaya erişmek için sisteme giriş yapmalısınız.</h2>
			<div class="row featured-boxes login">
				<div class="col-sm-6">
					<div class="featured-box featured-box-secundary default info-content">
						<div class="box-content">
															<h4><span style="text-transform: uppercase;">Müşteri Girişi</span></h4>
								<form action="yap_giris.php" id="loginform" method="post" autocomplete="off">
									<input type="hidden" name="login" value="1">
									<input type="hidden" name="referer_url" value="../index.html">
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>E-Posta</label>
												<input type="text" name="email" id="uname" class="form-control input-lg" required="required" value="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												
												<label>Parola</label>
												<input class="form-control input-lg sifre"  type="password" name="pass"  id="parola3"   required  >
											    <i  id="degistir" class="fa fa-eye text-white bg-primary" onclick="parolaGoster3()" ></i>
											
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label></label>
												<div id="g-recaptcha-login" class="g-recaptcha" data-sitekey="6Ld2d44UAAAAAEevL-wY_JpQQ_y9_CnBuuzf6Bh6"></div>
																							</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6"></div>
										<div class="col-md-6">
											<input type="submit" name="gonder" id="gonder" value="Giriş Yap" 
												class="btn btn-primary pull-right push-bottom">
										</div>
									</div>
								</form>
								<p class="sign-up-info">Henüz bir hesabınız yokmu?	<a href="KayitOl">Kayıt Ol</a></p>
													</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>	</div>
	<?php include 'inc/footer.php'; ?>
</div>
<script>
	function parolaGoster3() {
  var x = document.getElementById("parola3");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
	jQuery('.lazy').Lazy();
});

</script>
<script src="js/jquery.min.js" data-ver="2.1.3"></script>

<script src="js/minified-footer.js" defer="defer" data-ver="1.0.0"></script>

<script src="js/login.js" defer="defer"></script>
<script src="js/view.contact.js" defer="defer"></script>
<script src="js/write-comment.js" defer="defer"></script>
</body>

</html>
