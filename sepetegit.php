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





<title>Teknik Pro | Sigorta</title>

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
				<form action="" method="get">
	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Fiyat</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" required name="fiyat" value="<?php if(isset($_SESSION['fiyat'] )) echo $_SESSION['fiyat'] ;?>">
 <br> 
  <input type="submit" value="SATIN AL"  name="satinal" onclick="over()"
	class="btn btn-primary pull-right push-bottom" data-loading-text="Yükleniyor...">
	</form></div></div>
		<!--<form action="device_save.php" method="post" autocomplete="off">-->
	
	
	
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