<?php
     session_start();
     include 'database/baglan.php';

     
     //$error = false;
     if(isset($_POST['kaydet_cihaz'])) { 
      $sepet+=1;
      $marka=$_POST['marka'];
      $sorgula=mysqli_query($baglan,"SELECT * FROM garanti_urunler WHERE marka='$marka'");
        while($id = $sorgula->fetch_assoc()) {
             $fiyat=$id['fiyat'];
        }
        $_SESSION['fiyat']=$fiyat;      
        header('Location: param_taksit.php?firma_id=1&sepet='.$sepet);
      
     }
    ?>