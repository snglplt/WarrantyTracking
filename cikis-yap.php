<?php
     
     include 'database/baglan.php';

     
     
    
     session_start();
     $_SESSION['user']="";
     $_SESSION['id']="";
     session_destroy();
     $cikis="evet";
      // Bu Fonksiyon ile tüm Session siliyoruz.
     header('Location: Anasayfa?cikis='.$cikis);
     
    ?>