<?php session_start();?>
<!DOCTYPE html>
<html lang="tr">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="language" content="Turkish"/>
<meta http-equiv="content-language" content="tr"/>
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#FFFFFF">

<title>Teknik Pro | İletişim</title>

<meta name="robots" content="index, follow">
<meta name="keywords" content="VTM TEKNİK, İletişim">
<meta name="description" content="VTM TEKNİK, İletişim">
<base >
<link rel="icon" type="image/x-icon" href="images/fav.png">


<link rel="alternate" hreflang="tr" href="/index.php" />
<link rel="alternate" hreflang="en" href="/en/index.php" />

<link rel="amphtml" href="contact-us.php">
<link rel="stylesheet" href="css/swiper-bundle.min.css">

	<link rel="stylesheet" href="css/assets_css_main.css_1693903237707.css">

<link rel="stylesheet" href="css/home.css_1693903237707.css">



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
<script>

//document.addEventListener("mousewheel", { passive: false });
//document.addEventListener('wheel', function(e) {e.preventDefault();}, { passive: false });
window.addEventListener('wheel', function(e) { }, { passive: false });

</script>

</head>
<?php include 'database/baglan.php'; ?>
<body>

		<?php include 'inc/nav.php'; ?>
		
			
		<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
<div id="googlemaps" class="google-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3060.3103359363377!2d32.764896074966806!3d39.91207078620172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347133f160bad%3A0x61f6322f3f339abb!2zS8SxbMSxw6cgT2ZmaWNlIFNpdGUgWcO2bmV0aW1p!5e0!3m2!1str!2str!4v1692364538767!5m2!1str!2str" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<div class="container" >

	<div class="row">
				<div class="col-md-6 col-sm-12">			
			<h2 class="short"><strong>Bize</strong> Ulaşın</h2>
			<form id="contactform" action="bize_mesaj.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" value="1" name="contactus" id="contactus">
				<div class="row">
					<div class="form-group">
						<div class="col-md-6 col-sm-12">
							<label>Adınız *</label>
							<input type="text" value="" maxlength="100" class="form-control" name="name" id="name" required>
						</div>
						<div class="col-md-6 col-sm-12">
							<label>Soyadınız *</label>
							<input type="text" value="" maxlength="100" class="form-control" name="surname" id="surname" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-6 col-sm-12">
							<label>E-Posta *</label>
							<input type="email" value="" maxlength="100" class="form-control" name="email" id="email" required>
						</div>
						<div class="col-md-6 col-sm-12">
							<label>Başlık *</label>
							<select class="form-control" name="subject" id="subject" required>
								<option value="Bilgi Almak Istiyorum">Bilgi Almak İstiyorum</option>
								<option value="Tesekkur Ederim">Teşekkür Ederim</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-12">
							<label>Mesajınız *</label>
							<textarea maxlength="5000" rows="10" class="form-control" name="message" id="message" required></textarea>
						</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-md-12">
						<input type="submit" id="contactFormSubmit" name="mesaj_gonder" value="Mesajını Gönder" class="btn btn-primary btn-lg pull-right" data-loading-text="Loading...">
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-6 col-sm-12">
							

			<h4>TEKNİK <strong>PRO</strong></h4>
			<ul class="list-unstyled">
				<li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> 
					Mustafa Kemal Mahallesi 2127. Caddesi Kılıç Office No:9 Kat: -1 D2 Çankaya Ankara</li>
				<li><i class="fa fa-phone"></i> <strong>Sabit Hat:</strong> 
					<a href="tel:03124000421">0 (312) 400 04 21</a></li>
					<li><i class="fa fa-phone"></i> <strong>Telefon:</strong> 
					<a href="tel:08504412306">0 (850) 441 23 06</a></li>
				<li><i class="fa fa-envelope"></i> <strong>E-Posta:</strong> <a href="mailto:info@vtmteknik.com.tr"> info@vtmteknik.com.tr</a></li>
				<li><i class="fa fa-envelope"></i> <strong>E-Posta Servis:</strong> <a href="mailto:servis@vtmteknik.com.tr"> servis@vtmteknik.com.tr</a></li>
				<li><i class="fa fa-envelope"></i> <strong>E-Posta VTM:</strong> <a href="mailto:vtm@vtmteknik.com.tr"> vtm@vtmteknik.com.tr</a></li>
			</ul>
			<hr />
			<h4>Çalışma <strong>Saatlerimiz</strong></h4>
			<ul class="list-unstyled">
				<li><i class="fa fa-time"></i> Pazartesi - Cuma | 09:00 - 18:00</li>
				<li><i class="fa fa-time"></i>  Cumartesi | 09:00 - 13:30</li>
				<li><i class="fa fa-time"></i> Pazar | Kapalı</li>
			</ul>
		</div>
	
</div>

</div>
<?php include 'inc/footer.php'; ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.1/swiper-bundle.min.js"
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="js/assets_script_main.js"></script>

<script src="js/home.js"></script>
<script>
		var captchaCallback = function() {
			grecaptcha.render('g-recaptcha-menu-login', {
		    		'sitekey' : '6Ld2d44UAAAAAEevL-wY_JpQQ_y9_CnBuuzf6Bh6',
		    		'lang' : 'tr'
		    	});grecaptcha.render('g-recaptcha-contact', {
		    		'sitekey' : '6Ld2d44UAAAAAEevL-wY_JpQQ_y9_CnBuuzf6Bh6',
		    		'lang' : 'tr'
		    	});		};
		</script>
		<script src="../../../www.google.com/recaptcha/api6f2b.js?onload=captchaCallback&amp;render=explicit&amp;hl=tr" async defer></script>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
	$.extend($.validator.messages, {
		required: "Bu alanın doldurulması zorunludur.",
		remote: "Lütfen bu alanı düzeltin.",
		email: "Lütfen geçerli bir e-posta adresi giriniz.",
		url: "Lütfen geçerli bir web adresi (URL) giriniz.",
		date: "Lütfen geçerli bir tarih giriniz.",
		dateISO: "Lütfen geçerli bir tarih giriniz(ISO formatında)",
		number: "Lütfen geçerli bir sayı giriniz.",
		digits: "Lütfen sadece sayısal karakterler giriniz.",
		creditcard: "Lütfen geçerli bir kredi kartı giriniz.",
		equalTo: "Lütfen aynı değeri tekrar giriniz.",
		extension: "Lütfen geçerli uzantıya sahip bir değer giriniz.",
		maxlength: $.validator.format("Lütfen en fazla {0} karakter uzunluğunda bir değer giriniz."),
		minlength: $.validator.format("Lütfen en az {0} karakter uzunluğunda bir değer giriniz."),
		rangelength: $.validator.format("Lütfen en az {0} ve en fazla {1} uzunluğunda bir değer giriniz."),
		range: $.validator.format("Lütfen {0} ile {1} arasında bir değer giriniz."),
		max: $.validator.format("Lütfen {0} değerine eşit ya da daha küçük bir değer giriniz."),
		min: $.validator.format("Lütfen {0} değerine eşit ya da daha büyük bir değer giriniz.")
	});
});
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
<script src="js/cdn.jsdelivr.net_npm_sweetalert2@11.js"></script>
</body>
<?php
if($_GET){
     if($_GET['kayit']=="basarili"){
		echo "<script>
		Swal.fire({
		  icon: 'success',
		  title: 'Başarılı!',
		  text: 'Mesajınız Kaydedildi',
		  confirmButtonText:'Tamam',
		});
		</script>";
	 }else if($_GET['kayit']=="basarisiz"){
		echo "<script>
          Swal.fire({
            icon: 'warning',
            title: 'Uyarı!',
            text: 'Mesajınız Kaydedilmedi',
            confirmButtonText:'Tamam',
          });
          </script>";
	 }
}
?>
</html>
