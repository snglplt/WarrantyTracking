<?php
     ob_start();
     session_start();
     include_once 'database/baglan.php';

     if ( isset($_SESSION['user'])!="" ) {
     // header("Location: index.php");
      //exit;
     }
     
     
     if( isset($_POST['mesaj_gonder']) ) { 
      
      $name = trim($_POST['name']);
      $surname = trim($_POST['surname']);
      $email = trim($_POST['email']);
      $subject = trim($_POST['subject']);
      $message = trim($_POST['message']);                         
      
      
     
       
      
       $res=mysqli_query($baglan,"INSERT INTO bize_mesaj(ad,soyad,email,baslik,mesaj)
        VALUES('$name','$surname','$email','$subject','$message')");
       
       if( $res ) {
        $kayit="basarili";
        echo "<script>
          Swal.fire({
            icon: 'success',
            title: 'Başarılı!',
            text: 'Mesajınız Kaydedildi',
            confirmButtonText:'Tamam',
          });
          </script>";
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
          $mail->CharSet  ="utf-8";
          
          $mail->Username = "info@vtmteknik.com.tr"; // Mail adresi
          $mail->Password = "Vtmteknik6543@"; // Parola
          $mail->SetFrom("info@vtmteknik.com.tr", " Yeni Üyelik Formu"); // Mail adresi
          
          $mail->AddAddress("info@vtmteknik.com.tr"); // Gönderilecek kişi
          $mail->AddAddress("snglplt.36@gmail.com"); // Gönderilecek kişi
         // $mail->AddAddress("elcierkan@gmail.com"); // Gönderilecek kişi
          
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
          $mail->Body="<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">                 
          <tr>
            <td align=\"left\" valign=\"middle\">&nbsp;</td>
            <td height=\"40\" colspan=\"3\" align=\"left\"><h5><a href='vtmteknik.com.tr'>vtmteknik.com.tr</a> Mesaj Bildirimi</h5></td>
            </tr>
            <tr>
            <td align=\"left\" valign=\"middle\">&nbsp;</td>
            <td height=\"40\" colspan=\"3\" align=\"left\"><h5>$name  $surname kullanıcısı size mesaj bırakmıştır</h5></td>
            </tr>
            <tr>
            <td align=\"left\" valign=\"middle\">&nbsp;</td>
            <td height=\"40\" colspan=\"3\" align=\"left\"><h5>Mail Adresi: $email</h5></td>
            </tr>
            <tr>
            <td align=\"left\" valign=\"middle\">&nbsp;</td>
            <td height=\"40\" colspan=\"3\" align=\"left\"><h5>Konusu: $subject</h5></td>
            </tr>
            <tr>
            <td align=\"left\" valign=\"middle\">&nbsp;</td>
            <td height=\"40\" colspan=\"3\" align=\"left\"><h5>Mesajı: $message</h5></td>
            </tr>
            
            
            
             
          </table>";
  //$mail->Send();
  if(!$mail->Send()){
                 // echo "Mailer Error: ".$mail->ErrorInfo;
  } else {
                 // echo "Message has been sent";
  }
          header("Location: Iletisim?kayit=".$kayit);
          
       } else {
          $kayit="basarisiz";
          echo "<script>
          Swal.fire({
            icon: 'warning',
            title: 'Uyarı!',
            text: 'Mesajınız Kaydedilmedi',
            confirmButtonText:'Tamam',
          });
          </script>";
          }
        header("Location: Iletisim?kayit=".$kayit);
       }
        
      
      
     
    ?>