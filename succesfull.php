<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php //include "inc/baglan.php"; 
include "baglan.php";

/////////////////////////////////////congig başlangıç////////////////////////////////////////////////////////////
$_url = 'http://test-dmz.ew.com.tr:8080/turkpos.ws/service_turkpos_test.asmx';
//$_url = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_prod.asmx';
/*
$poscaribilgisial = $baglanti->query("SELECT * from webposhesaplari where aktif=1 and altyapi=10 $firmasi_sor")->fetch();
$GUIDa = $baglanti->query("SELECT * from webposhesapayar where webposhesabicat='" . $poscaribilgisial['cat'] . "' and anahtar='GUID' $firmasi_sor")->fetch();
$CLIENT_CODEa = $baglanti->query("SELECT * from webposhesapayar where webposhesabicat='" . $poscaribilgisial['cat'] . "' and anahtar='CLIENT_CODE' $firmasi_sor")->fetch();
$CLIENT_USERNAMEa = $baglanti->query("SELECT * from webposhesapayar where webposhesabicat='" . $poscaribilgisial['cat'] . "' and anahtar='CLIENT_USERNAME' $firmasi_sor")->fetch();
$CLIENT_PASSWORDa = $baglanti->query("SELECT * from webposhesapayar where webposhesabicat='" . $poscaribilgisial['cat'] . "' and anahtar='CLIENT_PASSWORD' $firmasi_sor")->fetch();
//echo "SELECT * from WebPosHesaplari where webposhesabicat='" . $poscaribilgisial['cat'] . "' $firmasi_sor";
$GUID            = $GUIDa['deger'];
$CLIENT_CODE     = $CLIENT_CODEa['deger'];
$CLIENT_USERNAME = $CLIENT_USERNAMEa['deger'];
$CLIENT_PASSWORD = $CLIENT_PASSWORD['deger'];
$MODE            = "TEST"; // PROD

$hosturl         = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$failUrl         = $hosturl . "srv/parampos/unsuccesfull.php";
$successUrl      = $hosturl . "srv/parampos/succesfull.php";
$payAction       = $hosturl . "srv/parampos/soap.php";
$ipAddress       = ($_SERVER['REMOTE_ADDR'] == "::1") ? '127.0.0.1' : $_SERVER['REMOTE_ADDR'];
*/
$GUID            ="0c13d406-873b-403b-9c09-a5766840d98c";
//$GUIDa['deger'];
$CLIENT_CODE     ="10738";
// $CLIENT_CODEa['deger'];
$CLIENT_USERNAME ="Test";
// $CLIENT_USERNAMEa['deger'];
$CLIENT_PASSWORD ="Test";
// $CLIENT_PASSWORD['deger'];
$MODE            = "Test"; // PROD

$hosturl         = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$failUrl         = $hosturl . "/netting/unsuccesfull.php";
$successUrl      = $hosturl . "/netting/succesfull.php";
$payAction       = $hosturl . "/netting/soap.php";
$ipAddress       = ($_SERVER['REMOTE_ADDR'] == "::1") ? '127.0.0.1' : $_SERVER['REMOTE_ADDR'];

$cardHolderPhone = "";
$transactionId   = time();
$orderId         = "1" . time();
$orderId         = time();
$referenceUrl    = $hosturl;
$extraData1      = " ";
$extraData2      = " ";
$extraData3      = " ";
$extraData4      = " ";
$extraData5      = " ";
/////////////////////////////////////congig bitiş////////////////////////////////////////////////////////////

/*
$uye_cat = $_SESSION['uye_cat'];
echo  $uye_cat;
$sorguu = "SELECT * FROM kullanici where cat='$uye_cat'";
$caliss = $baglanti->query($sorguu);
$sonucc = $caliss->fetch();
$firmasi = $sonucc['firmasi'];
$firmasi_sor = " and firmasi='$firmasi'";
$kullaniziindirimyuzdesi = $sonucc['indirimyuzdesi'];
//session_start();*/
?>
<?php
$virmanno = date("dmY") . rand();
$cariid2 = $_GET['musteriid'];
$tutar = $_GET['tutar'];
$tarihal = (explode("-", $cariid2));
$cariid = $tarihal[0];
$tutar1 = $tarihal[1];
$tarihal2 = (explode("=", $tutar1));
$tutar = $tarihal[1];
//echo $tutar;
/*
echo "$cariid2 <br> $cariid <br>";
//echo "SELECT * from cari_hareket where tipi='TAHSİLAT' and sil=0 $firmasi_sor order by evrakno+0 desc limit 1";
$odeme_soru = $baglanti->query("SELECT * from cari_hareket where tipi='TAHSİLAT' and sil=0 $firmasi_sor order by evrakno+0 desc limit 1")->fetch();
//echo $odeme_sor['evrakno'];
$evraknosu = $odeme_soru['evrakno'] + 1;
echo "SELECT * from cari where cat='$cariid' and firmasi='$firmasi'";
$caribilgisial = $baglanti->query("SELECT * from cari where cat='$cariid' $firmasi_sor")->fetch();
$poscaribilgisial = $baglanti->query("SELECT * from webposhesaplari where aktif=1 $firmasi_sor")->fetch();

$musterikod     = $caribilgisial['musterikod'];
$musteriid      = $caribilgisial['cat'];
$kodu           = $caribilgisial['kodu'];
$ozelkod        = $caribilgisial['ozelkod'];
$unvan          = $caribilgisial['unvan'];
$tipi           = $caribilgisial['tipi'];
$turu           = $caribilgisial['turu'];
$vno            = $caribilgisial['vno'];
$tcno           = $caribilgisial['tcno'];
$vdairesi       = $caribilgisial['vdairesi'];
$yetkili        = $caribilgisial['yetkili'];
$adresi         = $caribilgisial['adresi'];
//$il             = $caribilgisial['il'];
$ilce           = $caribilgisial['ilce'];
$iladi          = $caribilgisial['iladi'];
$ilceadi        = $caribilgisial['ilceadi'];
$telefon        = $caribilgisial['telefon'];
$gsm            = $caribilgisial['gsm'];


$musterikodv     = $caribilgisial['musterikod'];
$musteriidv      = $caribilgisial['cat'];
$koduv           = $caribilgisial['kodu'];
$ozelkodv        = $caribilgisial['ozelkod'];
$unvanv          = $caribilgisial['unvan'];
$tipiv           = $caribilgisial['tipi'];
$turuv           = $caribilgisial['turu'];
$vnov            = $caribilgisial['vno'];
$tcnov           = $caribilgisial['tcno'];
$vdairesiv       = $caribilgisial['vdairesi'];
$yetkiliv        = $caribilgisial['yetkili'];
$adresiv         = $caribilgisial['adresi'];
//$il             = $caribilgisial['il'];
$ilcev           = $caribilgisial['ilce'];
$iladiv          = $caribilgisial['iladi'];
$ilceadiv        = $caribilgisial['ilceadi'];
$telefonv        = $caribilgisial['telefon'];
$gsmv            = $caribilgisial['gsm'];

//virman seçiliyse başlangıç

$kaydetv = $baglanti->prepare("INSERT INTO cari_hareket (dkuru,dpbirimi,formen,formenadi,plakasase,kabulno, kabulcat,virmanno,donem,odemetarihi,evraktipi,evrakno,evrakturu, evraktarihi, evrakcat, tumu, caricat, carikod,cariadi, carivn, carivd, tarih, kullanici, firmasi, saat, aciklama,borc, alacak,tipi,borcu,alacagi) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$insertv = $kaydetv->execute(array("TRY", "TRY", "$formen", "$formenadi", "$plaka", "$kabulno", "$kabulcat", "$virmanno", "$donem", "$bugun", "sanal", "$evraknosu", "SANAL POS", "$bugun", "$evrakcati", "$tumu", "$musteriidv", "$koduv", "$unvanv", "$vnov", "$vdairesiv", "$bugun", "$uye_cat", "$firmasi", "$saat", "$unvan CARİDEN ÇEKİLEN", "$tutar", "0", "TAHSİLAT", "$tutar", "0"));

$kaydet = $baglanti->prepare("INSERT INTO cari_hareket (dkuru,dpbirimi,formen,formenadi,plakasase,kabulno, kabulcat,virmanno,virmancari, virmanaciklama, donem,odemetarihi,evraktipi,evrakno,evrakturu, evraktarihi, evrakcat, tumu, caricat, carikod,cariadi, carivn, carivd, tarih, kullanici, firmasi, saat, aciklama,borc, alacak,tipi,borcu,alacagi) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
$insert = $kaydet->execute(array("TRY", "TRY", "$formen", "$formenadi", "$plaka", "$kabulno", "$kabulcat", "$virmanno", "$unvanv", "$odemeaciklama", "$donem", "$bugun", "sanal", "$evraknosu", "SANAL POS", "$bugun", "$evrakcati", "$tumu", "$musteriid", "$kodu", "$unvan", "$vno", "$vdairesi", "$bugun", "$uye_cat", "$firmasi", "$saat", "SANAL POSTAN ÇEKİLEN", "0", "$tutar", "TAHSİLAT", "0", "$tutar")) or die("hata verdi virman");

$cari_sorgula = $baglanti->query("select * from cari where cat='$musteriid' $firmasi_sor")->fetch();
@$cari_mevcut_borcu = round(($cari_sorgula['borc'] + $borc), 3);
@$cari_mevcut_alacak = round(($cari_sorgula['alacak'] + $alacak), 3);
@$cari_mevcut_kalan = round(($cari_mevcut_borcu - $cari_mevcut_alacak), 3);
$baglanti->query("update cari set  alacak='$cari_mevcut_alacak', borc='$cari_mevcut_borcu', bakiye='$cari_mevcut_kalan' where cat='$musteriid' $firmasi_sor");

$cari_sorgulav = $baglanti->query("select * from cari where cat='$musteriidv' $firmasi_sor")->fetch();
@$cari_mevcut_borcuv = round(($cari_sorgulav['borc'] + $borcv), 3);
@$cari_mevcut_alacakv = round(($cari_sorgulav['alacak'] + $alacakv), 3);
@$cari_mevcut_kalanv = round(($cari_mevcut_borcuv - $cari_mevcut_alacakv), 3);
$baglanti->query("update cari set  alacak='$cari_mevcut_alacakv', borc='$cari_mevcut_borcuv', bakiye='$cari_mevcut_kalanv' where cat='$musteriidv' $firmasi_sor");
$tum_aciklamalar = "cariid: $musteriid - cariadi: $unvan - borc: $borc - alacak: $alacak - virmanvirmanno: $virmanno, - tipi: $islemtipi - evrakturu: VİRMAN";
*///virman seçiliyse sonu///
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
