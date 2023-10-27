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





<title>Teknik Pro | Garanti</title>

<link rel="alternate icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="css/swiper-bundle.min.css">

	<link rel="stylesheet" href="css/assets_css_main.css_1693903237707.css">

<link rel="stylesheet" href="css/home.css_1693903237707.css">
<link rel="stylesheet" href="css/minified-header.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/iamdustan-smoothscroll/0.4.0/smoothscroll.min.js" defer></script>
</head>

<body>

<?php include "inc/nav.php";?>
<div role="main" class="main">
				<hr>
		<div class="container">
		<div class="row"><div class="col-md-12">
				<form action="serino-sorgula.php" method="get">
	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Seri No</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" required name="search" value="<?php if(isset($_SESSION['search'] )) echo $_SESSION['search'] ;?>">
 <br> 
  <input type="submit" value="Sorgula"  name="seri_sorgula" onclick="over()"
	class="btn btn-primary pull-right push-bottom" data-loading-text="Yükleniyor...">
	</form></div></div>
		<!--<form action="device_save.php" method="post" autocomplete="off">-->
	<div class="row">
		<form action="device_save.php" method="post">
		
<!-----  -->
<div class="col-md-6">
<h3> CİHAZ BİLGİSİ</h3>
<div class="mb-3">
  <label  class="form-label">Seri No</label>
  <input type="text" class="form-control" id="marka" required  name="serino" value="<?php if(isset($_GET['serino'] )) echo $_GET['serino']  ;?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Cihaz Id</label>
  <input type="text" class="form-control" name="cihazId" required value="<?php if(isset($_GET['CihazId'])) echo $_GET['CihazId'];?>"></input>
</div>
<div class="mb-3">
  <label  class="form-label">Marka</label>
  <input type="text" class="form-control" id="marka" required  name="marka" value="<?php if(isset($_GET['marka'] )) echo $_GET['marka']  ;?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Model</label>
  <input type="text" class="form-control" required   name="model" value="<?php if(isset($_GET['model'] )) echo $_GET['model'] ;?>">
</div>

<div class="mb-3" style="margin-top:10px;margin-right:20px">
	<input type="submit" value="Garanti Uzat"  name="kaydet_cihaz"
	class="btn btn-primary pull-right push-bottom" data-loading-text="Yükleniyor...">
	
</div>


		</div>
	</div><form>
<!--</form>-->
					
	</div>
	
	
</div>	</div>

<?php include 'inc/footer.php';?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.1/swiper-bundle.min.js"
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="js/assets_script_main.js"></script>

<script src="js/home.js"></script>
<script src="js/cdn.jsdelivr.net_npm_sweetalert2@11.js"></script>
<?php
//echo $_SESSION['cihaz'];
if(isset($_SESSION['cihaz'])){
$cihaz=$_SESSION['cihaz'];
if($cihaz=="Yok"){

echo "<script>
Swal.fire({
  icon: 'warning',
  title: 'Uyarı!',
  text: 'Bu seri numarasına ait cihaz bulunmamaktır',
  confirmButtonText:'Tamam',
});
</script>";
}}
?>
	<!-- Google Tag Manager (noscript) -->
		
	<!-- End Google Tag Manager (noscript) -->
</body>
</html>