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





<title>Teknik Pro | Kart Bilgisi</title>

<link rel="alternate icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="css/swiper-bundle.min.css">

	<link rel="stylesheet" href="css/assets_css_main.css_1693903237707.css">

<link rel="stylesheet" href="css/home.css_1693903237707.css">
<link rel="stylesheet" href="css/minified-header.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/iamdustan-smoothscroll/0.4.0/smoothscroll.min.js" defer></script>
	<style>
		.box{
			width:50px;
			height:35px;
			border:0.5px solid #3571a9;
			margin:10px;
		}
	</style>
</head>

<body>

<?php include "inc/nav.php";?>
<div role="main" class="main">
				<hr>
		<div class="container">
		<!--<form action="device_save.php" method="post" autocomplete="off">-->
	<div class="row">
		<form action="soap.php" method="get">
		
<!-----  -->
<div class="col-md-6">
<h3> KART BİLGİSİ</h3>
<div class="mb-3">
  <label  class="form-label">Kart No</label>
  <input type="text" class="form-control"  required  name="kartnumber" maxlength="16" >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Kart Sahibi</label>
  <input type="text" class="form-control" name="kartowner" required ></input>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Son Kullanma Tarihi</label>
  Ay<input type="text" required class="box"  name="month" maxlength="2">Yıl<input type="text" required class="box"  name="year" maxlength="2">
  CVV<input type="text" required class="box"  name="ccv" maxlength="3">
  <input style="visibility: hidden" type="text"   name="fiyat" value="<?php if(isset($_GET['fiyat']))echo $_GET['fiyat'];?>">
  <input style="visibility: hidden" type="text"   name="sanal_pos" value="<?php if(isset($_GET['sanal_pos']))echo $_GET['sanal_pos'];?>">
  <input style="visibility: hidden" type="text"   name="taksitsayisi" value="<?php if(isset($_GET['taksitsayisi']))echo $_GET['taksitsayisi'];?>">
</div>


<div class="mb-3" style="margin-top:10px;margin-right:20px">
	<input type="submit" value="ÖDEME YAP"  name="kaydet_cihaz"
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
	<!-- Google Tag Manager (noscript) -->
		
	<!-- End Google Tag Manager (noscript) -->
</body>
</html>