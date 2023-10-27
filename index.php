<?php session_start();?>
<!DOCTYPE html>
<html lang="tr">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="format-detection" content="telephone=no">

<meta name="description" content="">
<link rel="canonical" href="https://www.vtmteknik.com.tr/"/>

<meta name="twitter:card" content="summary"/>
<meta property="og:url" content="https://www.vtmteknik.com.tr/"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="Ana Sayfa"/>
<meta property="og:description" content=""/>
<link rel="shortcut icon" href="images/fav.jpg" type="image/x-icon" />





<title>Ana Sayfa |  Teknik Pro Garanti</title>

<link rel="alternate icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="css/swiper-bundle.min.css">

	<link rel="stylesheet" href="css/assets_css_main.css_1693903237707.css">

<link rel="stylesheet" href="css/home.css_1693903237707.css">
<script src="js/cdn.jsdelivr.net_npm_sweetalert2@11.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iamdustan-smoothscroll/0.4.0/smoothscroll.min.js" defer></script>
  <style>
	{box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 250px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>

<body>

<?php include "inc/nav.php";?>
<div class="form-popup" id="myForm">
  <form action="yap_giris.php" class="form-container" method="post">
    <h1>Giriş yap</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Lütfen email giriniz" name="email" required>

    <label for="psw"><b>Şifre</b></label>
    <input type="password" placeholder="Lütfen şifrenizi giriniz" name="pass" required>

    <button type="submit" name="gonder" class="btn">Giriş</button>
    <p class="sign-up-info">Henüz bir hesabınız yokmu?<a href="KayitOl">Kayıt Ol</a></p>

    <button type="button" class="btn cancel" onclick="closeForm()">Kapat</button>
  </form>
</div>
	<main>

<div class="popup" popup active="false" delay="2000">
	<div class="popup__inner" popup-content>
		<button class="popup__close-button" close-popup>
			<img src="/assets/svg/icon-close.svg" alt="Close svg icon"/>
		</button>
		<article class="popup__content -left">
		</article>
	</div>
</div>
<section class="main-slider">

  <!-- Swiper -->
  <div class="swiper main-slider__swiper">
    <div class="swiper-wrapper">


        <div class="swiper-slide">
          <div class="main-slider__image swiper-lazy"  style="background-image: url('images/slider/DEERMA.jpg');background-size: cover;">
            <div class="swiper-lazy-preloader">
              
            </div>
          </div>

          <div class="content-wrapper">
            <div class="main-slider__text-content">


                <div class="main-slider__desc">
                  <p><em>*VTM Teknik Sigorta Çağrı Merkezi 0 (850) 441 23 06’ten satın alınan ve kampanyaya dahil yıllık poliçelerde geçerlidir.</em></p>
                </div>

                <a href="# " class="main-slider__button button-type -ocean">Detaylı Bilgi</a>
            </div>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="main-slider__image swiper-lazy" style="background-image: url('images/slider/VIOMI.jpg');background-size: cover;">
            <div class="swiper-lazy-preloader"></div>
          </div>

          <div class="content-wrapper">
            <div class="main-slider__text-content">


                <div class="main-slider__desc">
                </div>

            </div>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="main-slider__image swiper-lazy" style="background-image: url('images/slider/TMARK.jpg');background-size: cover;">
            <div class="swiper-lazy-preloader"></div>
          </div>

          <div class="content-wrapper">
            <div class="main-slider__text-content">


                <div class="main-slider__desc">
                </div>

            </div>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="main-slider__image swiper-lazy" style="background-image: url('images/slider/XIAOMI.jpg');background-size: cover;"">
            <div class="swiper-lazy-preloader"></div>
          </div>

          <div class="content-wrapper">
            <div class="main-slider__text-content">


                <div class="main-slider__desc">
                </div>

            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-slider__image swiper-lazy" style="background-image: url('images/slider/ROBOROCK.jpg');background-size: cover;"">
            <div class="swiper-lazy-preloader"></div>
          </div>

          <div class="content-wrapper">
            <div class="main-slider__text-content">


                <div class="main-slider__desc">
                </div>

            </div>
          </div>
        </div>
    </div>

      <div class="swiper-button swiper-button-next -sunrise"></div>
      <div class="swiper-button swiper-button-prev -sunrise"></div>
      <div class="swiper-pagination"></div>
  </div>
</section>



	</main>

<?php include 'inc/footer.php';?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.1/swiper-bundle.min.js"
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="js/assets_script_main.js"></script>

<script src="js/home.js"></script>
<!-- The form -->

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<?php
$cikis=$_GET['cikis'];
if($cikis=="evet"){
  echo "<script>
  Swal.fire({
    icon: 'success',
    title: 'Başarılı!',
    text: 'Sisteme Başarılı Bir Şekilde Çıkış Yaptınız',
    confirmButtonText:'Tamam',
  });
  </script>";
}else{}
if(isset($_GET['giris'])){
$giris=$_GET['giris'];
if($giris=="Var"){
	echo "<script>
          Swal.fire({
            icon: 'success',
            title: 'Başarılı!',
            text: 'Sisteme Başarılı Bir Şekilde Giriş Yaptınız',
            confirmButtonText:'Tamam',
          });
          </script>";
}else if($giris=="Yok"){
	echo "<script>
          Swal.fire({
            icon: 'warning',
            title: 'Uyarı!',
            text: 'Kullanıcı adı ve şifrenizi kontrol edin',
            confirmButtonText:'Tamam',
          });
          </script>";
}else{}}
if(isset($_GET['kayitdurumu'])){
$varYok=$_GET['kayitdurumu'];
if($varYok=="basarisiz"){
	echo "<script>
          Swal.fire({
            icon: 'warning',
            title: 'Uyarı!',
            text: 'Kullanıcı oluşturulamadı',
            confirmButtonText:'Tamam',
          });
          </script>";
}else if($varYok=="basarili"){
	echo"	
	<script>
          Swal.fire({
            icon: 'success',
            title: 'Başarılı!',
            text: 'Kullanıcı başarıyla oluşturuldu',
            confirmButtonText:'Tamam',
          });
          </script>";
}else if($varYok=="kayitVar"){
	echo"	
	<script>
          Swal.fire({
            icon: 'warning',
            title: 'Uyarı!',
            text: 'Bu kullanıcı adına kayıtlı kullanıcı vardır',
            confirmButtonText:'Tamam',
          });
          </script>";
}
else if($varYok=="kvk"){
	echo"	
	<script>
          Swal.fire({
            icon: 'warning',
            title: 'Uyarı!',
            text: 'KVKK Metnini Onaylayınız!',
            confirmButtonText:'Tamam',
          });
          </script>";
}else{}}
?>
<?php
if(isset($_GET['kayit']))
if($_GET['kayit']=="evet"){
echo "<script>
Swal.fire({
  icon: 'success',
  title: 'Başarılı!',
  text: 'Cihazınız başarıyla kaydedilmiştir',
  confirmButtonText:'Tamam',
});
</script>";
}else if($_GET['kayit']=="hayır"){
	echo "<script>
Swal.fire({
  icon: 'warning',
  title: 'Uyarı!',
  text: 'Cihazınız kaydedilmedi',
  confirmButtonText:'Tamam',
});
</script>";
}
if(isset($_GET['guncelle'])){
$guncelle=$_GET['guncelle'];
if($guncelle=="evet"){
	echo "<script>
Swal.fire({
  icon: 'success',
  title: 'Başarılı!',
  text: 'Şifreniz Güncellenmiştir',
  confirmButtonText:'Tamam',
});
</script>";
}else{}}
?>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
	jQuery('.lazy').Lazy();
});

</script>
	<!-- Google Tag Manager (noscript) -->
		
	<!-- End Google Tag Manager (noscript) -->
</body>
</html>