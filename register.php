<?php session_start(); ?>
<!DOCTYPE html>
<html lang="tr">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="language" content="Turkish" />
	<meta http-equiv="content-language" content="tr" />
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#FFFFFF">

	<title>Kayıt Ol</title>

	<meta name="robots" content="index, follow">
	<meta name="keywords" content="Hesaplar, Kayıt Ol">
	<meta name="description" content="Hesaplar, Kayıt Ol">
	<base>

	<meta property="og:url" content="index">

	<link rel="alternate" hreflang="tr" href="index" />
	<link rel="alternate" hreflang="en" href="en/index" />

	<meta name="application-name" content="TEKNİK PRO" />
	<meta name="msapplication-TileColor" content="#FFFFFF" />

	<link rel="preconnect" href="https://fonts.gstatic.com/" />
	<link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
	<link rel="preconnect" href="https://www.gstatic.com/" />
	<link rel="dns-prefetch" href="https://www.gstatic.com/" />
	<link rel="preconnect" href="https://www.google-analytics.com/" crossorigin />
	<link rel="dns-prefetch" href="https://www.google-analytics.com/" />
	<link rel="preconnect" href="https://www.google.com/" crossorigin />
	<link rel="dns-prefetch" href="https://www.google.com/" />
	<link rel="preconnect" href="https://stats.g.doubleclick.net/" />
	<link rel="dns-prefetch" href="https://stats.g.doubleclick.net/" />
	<link rel="stylesheet" href="css/swiper-bundle.min.css">

	<link rel="stylesheet" href="css/assets_css_main.css_1693903237707.css">

	<link rel="stylesheet" href="css/home.css_1693903237707.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/iamdustan-smoothscroll/0.4.0/smoothscroll.min.js"
		defer></script>

	<meta name="google-site-verification" content="wBzrFah-Q6O_kaWsI6rPB8xfLNoEcfWqBkFSpRONNvY" />
	<meta name="msvalidate.01" content="90616D475F50E371D3032BDF7971342F">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114216339-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-114216339-1');
	</script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
		rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/minified-header.css" type="text/css" data-ver="1.0.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<style>
		.form-group {
			position: relative
		}

		#degistir {
			position: absolute;
			bottom: 0px;
			right: 0px;
			top: 28px;
			width: 40px;
			display: flex;
			justify-content: center;
			align-items: center;
			border-top-right-radius: .25rem;
			border-bottom-right-radius: .25rem
		}
	</style>
	<style>
		.counters label {
			font-size: 18px;
		}

		#footer .footer-ribbon::before {
			left: -9px;
			top: 1px;
		}

		body.sticky-menu-active #header .nav-main-collapse,
		#header.fixed .nav-main-collapse {
			max-height: 100% !important;
		}
	</style>
	<script>

		//document.addEventListener("mousewheel", { passive: false });
		//document.addEventListener('wheel', function(e) {e.preventDefault();}, { passive: false });
		window.addEventListener('wheel', function (e) { }, { passive: false });

	</script>
	<link rel="icon" type="image/x-icon" href="images/fav.png">

</head>

<body>


	<div class="body">
		<?php include 'inc/nav.php'; ?>
		<div role="main" class="main">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Neden <strong> TEKNİK PRO</strong> Sistemine Üye Olmalıyım?</h2>
						<div class="row">
							<div class="col-md-12">
								<p class="lead" style="text-align:justify">
									Eğer hala üye değilseniz, bu sayfadaki formu doldurarak hızlı bir şekilde bir çok
									avantajın bulunduğu <strong>TEKNİK PRO</strong> sistemine sizde katılabilirsiniz.
									<strong>TEKNİK PRO</strong> Sistemi’ne üye olarak </p>

								<p class="panel-subtitle">
									<i class="fa fa-exclamation fa-1x" style="color:blue;"></i> Cihazınızı anlık takip
									edebilmeniz için üye olurken belirttiğiniz <strong>iletişim</strong> numaralarından
									en azından biri, servise ürün gönderirken belirttiğiniz telefon numarası ile
									<strong>eşleşmelidir.</strong>
								</p>
							</div>
						</div>
						<hr class="tall" style="margin: 22px 0 22px 0;">
						<div class="row" id="registerloadmsg" style="display:none;">
							<div class="col-md-12">
								<div style='text-align:center'>
									<img src='#'>
									<br>&nbsp; İşlem Yapılıyor, Lütfen Bekleyiniz...
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<form action="kayit-yap.php" id="registerform" method="post" autocomplete="off">
									<input type="hidden" name="register" value="1">
									<input type="hidden" name="referer_url" value="index">


									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>Ad <code>*</code></label>
												<input type="text" name="name" id="name" class="form-control input-lg"
													value="" required>
											</div>
											<div class="col-md-6">
												<label>Soyad <code>*</code></label>
												<input type="text" name="surname" id="surname"
													class="form-control input-lg" value="" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>TC </label>
												<input type="text" name="tc" id="name" class="form-control input-lg"
													value="">
											</div>
											<div class="col-md-6">
												<label>Vergi Dairesi </label>
												<input type="text" name="vergidairesi" id="surname"
													class="form-control input-lg" value="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>Unvan </label>
												<input type="text" name="unvan" id="name" class="form-control input-lg"
													value="">
											</div>
											<div class="col-md-6">
												<label>Sabit Telefon </label>
												<input type="text" name="sabittel" id="surname"
													class="form-control input-lg" value="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>GSM <code>*</code></label>
												<input type="text" name="gsm" id="gsm" required
													class="form-control input-lg" maxlength="11" value="">
											</div>
											<div class="col-md-6">
												<label>Adres <code>*</code></label>
												<input type="text" name="adres" class="form-control input-lg" required>
											</div>

										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-6">
												<label>E-Posta <code>*</code></label>
												<input type="text" name="eposta" id="eposta"
													class="form-control input-lg" required="" value="">
											</div>
											<div class="col-md-6">
												<label>Parola <code>*</code></label>

												<input class="form-control input-lg sifre" type="password" name="parola"
													id="parola" required>
												<i id="degistir" class="fa fa-eye text-white bg-primary"
													onclick="myFunction()"></i>




											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<label style="background-color:#000">KVKK Aydınlatma Metni Onaylıyorum
												<input type="checkbox" onclick="git()" name="onay" /></label>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<button type="submit" class="btn btn-primary" name="registerBtn">Hesap
												Oluştur</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'inc/footer.php'; ?>
	</div>




	<script src="js/jquery.min.js" data-ver="2.1.3"></script>
	<script src="js/cdn.jsdelivr.net_npm_sweetalert2@11.js"></script>
	<script src="js/minified-footer.js" defer="defer" data-ver="1.0.0"></script>

	<script src="js/login.js" defer="defer"></script>
	<script src="js/view.contact.js" defer="defer"></script>
	<script src="js/write-comment.js" defer="defer"></script>
	<script>
		function git() {
			window.open("KisiselVeriSozlesme", 'orneksayfa', "width=1000,height=600");
		}



		function myFunction() {
			var x = document.getElementById("parola");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
		var captchaCallback = function () {
			grecaptcha.render('g-recaptcha-menu-login', {
				'sitekey': '6Ld2d44UAAAAAEevL-wY_JpQQ_y9_CnBuuzf6Bh6',
				'lang': 'tr'
			}); grecaptcha.render('g-recaptcha-login', {
				'sitekey': '6Ld2d44UAAAAAEevL-wY_JpQQ_y9_CnBuuzf6Bh6',
				'lang': 'tr'
			});
		};
	</script>
	<script src="../../../www.google.com/recaptcha/api6f2b.js?onload=captchaCallback&amp;render=explicit&amp;hl=tr"
		async defer></script>
	<script>
		document.addEventListener("DOMContentLoaded", function (event) {
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
		document.addEventListener("DOMContentLoaded", function (event) {
			jQuery('.lazy').Lazy();
		});

	</script>
	<?php
	$varYok = $_GET['kayitdurumu'];
	if ($varYok == "kvk") {
		echo "	
	<script>
          Swal.fire({
            icon: 'warning',
            title: 'Uyarı!',
            text: 'KVKK Metnini Onaylayınız!',
            confirmButtonText:'Tamam',
          });
          </script>";
	} else if ($kayitdurumu == "basarili") {
		echo "	
	<script>
          Swal.fire({
            icon: 'success',
            title: 'Başarılı!',
            text: 'Kaydınız Başarılı bir şekilde oluşturulmuştur :)',
            confirmButtonText:'Tamam',
          });
          </script>";

	} else {
	}

	?>
</body>

</html>