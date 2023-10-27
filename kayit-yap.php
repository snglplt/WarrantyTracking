<?php
ob_start();
session_start();
include_once 'database/baglan.php';


error_reporting(E_ALL);
ini_set("display_errors", 1);
$error = false;

if (isset($_POST['registerBtn'])) {


  $email = trim($_POST['eposta']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST['parola']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

  $name = trim($_POST['name']);
  $surname = trim($_POST['surname']);
  $gsm = trim($_POST['gsm']);
  $adres = trim($_POST['adres']);
  $tc = trim($_POST['tc']);
  $vergidairesi = trim($_POST['vergidairesi']);
  $unvan = trim($_POST['unvan']);
  $sabittel = trim($_POST['sabittel']);


  if (empty($email)) {
    $error = true;
    $emailError = "Please enter your email address.";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = true;
    $emailError = "Please enter a valid email address.";
  }

  if (empty($pass)) {
    $error = true;
    $passError = "Please enter your password.";
  }

  if (!$error) {

    $kulaniciVarmi = mysqli_query($baglan, "SELECT * FROM kullanicilar WHERE email='$email'");
    $verisay = mysqli_num_rows($kulaniciVarmi);
    if ($verisay > 0) {
      $kayitdurumu = "kayitVar";
      header("Location: Anasayfa?kayitdurumu=" . $kayitdurumu);
    } else {
      $res = mysqli_query($baglan, "INSERT INTO kullanicilar(ad,soyad,email,gsm1,adres,sifre,tc,sabittel,vergidairesi,unvan)
        VALUES('$name','$surname','$email','$gsm','$adres','$pass','$tc','$sabittel','$vergidairesi','$unvan')");

      $sec = mysqli_query($baglan, "SELECT id FROM kullanicilar WHERE ad='$name' AND soyad='$surname'");
      $row = mysqli_fetch_array($sec);
      if ($res) {
        $_SESSION['user'] = $name . "  " . $surname;
        $_SESSION['id'] = $row['id'];
        echo "	
	    <script>
          Swal.fire({
            icon: 'success',
            title: 'Başarılı!',
            text: 'Kullanıcı başarıyla oluşturuldu',
            confirmButtonText:'Tamam',
          });
          </script>";

        $kayitdurumu = "basarili";


        require("class.phpmailer.php");
        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled


        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'mail.vtmteknik.com.tr';
        $mail->Port = 465;

        $mail->IsHTML(true);
        $mail->SetLanguage("tr", "phpmailer/language");
        $mail->CharSet = "utf-8";

        $mail->Username = "info@vtmteknik.com.tr"; // Mail adresi
        $mail->Password = "Vtmteknik6543@"; // Parola
        $mail->SetFrom("info@vtmteknik.com.tr", " Yeni Üyelik Formu"); // Mail adresi

        $mail->AddAddress("info@vtmteknik.com.tr"); // Gönderilecek kişi
        $mail->AddAddress("snglplt.36@gmail.com"); // Gönderilecek kişi


        $mail->SMTPOptions = array(
          'ssl' => array(
            'verify_peer' => true,
            'verify_peer_name' => true,
            'allow_self_signed' => false,
            'cafile' => '[path-to-cert].crt'
          )
        );

        //$mail->Subject="vtmteknik.com.tr üzerinden gelen yeni üyelik.";
        //$mail->SetFrom("vtmteknik.com.tr", "www.basitservis.com Yeni Üyelik Formu"); 
        $mail->Body = "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">                 
        <tr>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
          <td height=\"40\" colspan=\"3\" align=\"left\"><h5><a href='vtmteknik.com.tr'>vtmteknik.com.tr</a> Yeni Üyelik Bildirimi</h5></td>
          </tr>
          <tr>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
          <td height=\"40\" colspan=\"3\" align=\"left\"><h5>$name  $surname kullanıcısı oluşturuldu</h5></td>
          </tr>
          <tr>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
          <td height=\"40\" colspan=\"3\" align=\"left\"><h5>Unvan: $unvan</h5></td>
          </tr>
          <tr>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
          <td height=\"40\" colspan=\"3\" align=\"left\"><h5>Vergi Dairesi: $vergidairesi</h5></td>
          </tr>
          
          <tr>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
          <td height=\"40\" colspan=\"3\" align=\"left\"><h5>Telefon: $gsm</h5></td>
          </tr>
           
        </table>";
        //$mail->Send();
        if (!$mail->Send()) {
          // echo "Mailer Error: ".$mail->ErrorInfo;
        } else {
          // echo "Message has been sent";
        }

        header("Location: Anasayfa?kayitdurumu=" . $kayitdurumu);
      } else {
        $errMSG = "Incorrect Credentials, Please try again...";
        $kayitdurumu = "basarisiz";
        header("Location: Anasayfa?kayitdurumu=" . $kayitdurumu);
      }

    }
  }
} 

?>