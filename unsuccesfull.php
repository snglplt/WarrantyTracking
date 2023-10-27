<?php

/*
 $_GET['message'] = "Hata mesajı";
 $_GET['code']    = "Hata kodu";
*/
if(isset($_GET['message'])){
	echo ($_GET['message']);
	
} else{
	echo "Banka parayı çekemedi.No otorozizasyon.";
}
echo  "
<script>
swal({
  title: 'Kayıt Başarılı',
  text: 'Tahsilat başarıyla kayıt altına alındı.',
  icon: 'success',
  button: 'Kapat',
  dangerMode: true,
  closeOnClickOutside: false,
}).then(function() {
    window.location.href = 'odemetahsilat_giris_sanal.php'; 
    console.log('The Ok Button was clicked.');
    });
 </script>
";

