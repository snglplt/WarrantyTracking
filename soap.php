<?php
/*
error_reporting(E_ALL);
ini_set("display_errors", 1);*/



/////////////////////////////////////congig başlangıç////////////////////////////////////////////////////////////
$_url="https://posws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl";
//$_url="https://test-dmz.param.com.tr:4443/turkpos.ws/service_turkpos_test.asmx?wsdl";

$GUID="1582893D-9F14-48B2-AA30-0FF5A9073AC8";//$alveri['guid_'];
//$GUID            = "0c13d406-873b-403b-9c09-a5766840d98c";
//$GUIDa['deger'];
$CLIENT_CODE="33326"; //$alveri['client_code'];
// $CLIENT_CODEa['deger'];
$CLIENT_USERNAME ="TP10053714"; //$alveri['username'];
// $CLIENT_USERNAMEa['deger'];
$CLIENT_PASSWORD = "C9EC198C5F739BB5";//$alveri['sifre'];
// $CLIENT_PASSWORD['deger'];
$MODE            = "PROD"; //  TEST

$hosturl         = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$failUrl         = $hosturl . "/netting/teknikpro/unsuccesfull.php";
$successUrl      = $hosturl . "/netting/teknikpro/succesfull.php";
$payAction       = $hosturl . "/netting/teknikpro/soap.php";
$ipAddress       = ($_SERVER['REMOTE_ADDR'] == "::1") ? '127.0.0.1' : $_SERVER['REMOTE_ADDR'];

$cardHolderPhone ="";// "05315801798";
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


//Kart Bilgileri Alma
$donemyil = date("Y");
//$tarihal = (explode("/", $_GET['sonkullanma']));

$ay = $_GET['month'];//tarihal[0];
$testyil=20;
$yil = $testyil.$_GET['year'];
//echo $yil;

$kartnumarasi =$_GET['kartnumber'];
$fiyat=explode(".",$_GET['fiyat']);
if(count($fiyat)>1){
  $tutar        = $fiyat[0].",".$fiyat[1];
}else{
  $tutar        = $_GET['fiyat'].",00";
}
//$tutar        = $_GET['fiyat'].",00";
$musteriid      =1;// $firma_id;
$cardname =@$_GET['kartowner'];

//////////////////////////kart klomisyon oranmları///////////////////////////////
$xml_datak = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:s="http://www.w3.org/2001/XMLSchema" xmlns:tns="https://turkpos.com.tr/">
  <soap:Body>
    <tns:TP_Ozel_Oran_SK_Liste>
      <tns:G>
        <tns:CLIENT_CODE>' . $CLIENT_CODE . '</tns:CLIENT_CODE>
        <tns:CLIENT_USERNAME>' . $CLIENT_USERNAME . '</tns:CLIENT_USERNAME>
        <tns:CLIENT_PASSWORD>' . $CLIENT_PASSWORD . '</tns:CLIENT_PASSWORD>
      </tns:G>
      <tns:GUID>' . $GUID . '</tns:GUID>
    </tns:TP_Ozel_Oran_SK_Liste>
  </soap:Body>
</soap:Envelope>';
//echo $xml_data;//exit;

$chk = curl_init($_url);
curl_setopt($chk, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($chk, CURLOPT_POST, 1);
curl_setopt($chk, CURLOPT_POSTFIELDS, "$xml_datak");
curl_setopt($chk, CURLOPT_RETURNTRANSFER, 1);
$outputk = curl_exec($chk);
curl_close($chk);


$clean_xml = str_ireplace(['SOAP-ENV:', 'SOAP:'], '', $outputk);
$xml = simplexml_load_string($clean_xml);
$result = $xml->Body->TP_Ozel_Oran_SK_ListeResponse->TP_Ozel_Oran_SK_ListeResult->DT_Ozel_Oranlar_SK;

//var_dump($outputk);

//$xml = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $result);
$xml = simplexml_load_string($xml);
$json = json_encode($xml);
$responseArray = json_decode($json);

foreach ($result as $item) {
  //echo $item->getElementsByTagName->item(0)->nodeValue;
}


if (isset($result)) {
  $message = $result->Ozel_Oran_SK_ID;
  //echo $message ."<br>";
  $code    = $result->Islem_ID;
}


$xml = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $outputk);
$xml = simplexml_load_string($xml);
$json = json_encode($xml);
$responseArray = json_decode($json, true);
//$gelenfatura = $responseArray->ns2faturaOlusturResponse('Invoice');
foreach ($responseArray as $item) {
  //print_r($item);

  //array(1) { ["ns2faturaOlusturResponse"]=> array(1) { ["return"]=> array(3) { ["resultCode"]=> string(7) "AE00083" ["resultExtra"]=> array(0) { } ["resultText"]=> string(121) "9880032524 VKN'sine ait ERP2023000000556 fatura numarası ABF6E854-7BE4-4CF8-9F85-AD0F6D071CF7 UUID'si ile kayıtlıdır!" } } }
  $donencevap = $item['TP_Ozel_Oran_SK_ListeResponse']['TP_Ozel_Oran_SK_ListeResult']['DT_Bilgi'];
  foreach($donencevap as $item2){
    foreach($item2 as $item3){
      foreach($item3 as $item4){
        foreach($item4 as $item5){
          $kartgorsel=$item5['Kredi_Karti_Banka_Gorsel'];
          $kartbanka=$item5['Kredi_Karti_Banka'];
          $taksit01= $item5['MO_01'];
          $taksit02= $item5['MO_02'];
          $taksit03= $item5['MO_03'];
          $taksit04= $item5['MO_04'];
          $taksit05= $item5['MO_05'];
          $taksit06= $item5['MO_06'];
          $taksit07= $item5['MO_07'];
          $taksit08= $item5['MO_08'];
          $taksit09= $item5['MO_09'];
          $taksit10= $item5['MO_10'];
          $taksit11= $item5['MO_11'];
          $taksit12= $item5['MO_12'];
          
        }
      }
    }
  }
  
}



$xmldekode = json_encode($outputk);
$fiyat=explode(".",$_GET['fiyat']);
if(count($fiyat)>1){
  $Toplam_Tutar       = $fiyat[0].",".$fiyat[1];
}else{
  $Toplam_Tutar       = $_GET['fiyat'].",00";
}
//$Toplam_Tutar=$_GET['fiyat'].",00";

$successUrl1      = $hosturl . "https://pratikhasar.com/netting/succesfull.php?musteriid=$musteriid";
$pos_id = @$_GET['sanal_pos'];
$taksitData = @$_GET['taksitsayisi'];
$securityString      = $CLIENT_CODE . $GUID . $pos_id . $taksitData . $tutar . $Toplam_Tutar . $orderId . $failUrl . $successUrl1;
$xml_data1 = '<?xml version="1.0" encoding="utf-8"?> <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"> <soap:Body>
<SHA2B64 xmlns="https://turkpos.com.tr/">
<Data>' . $securityString . '</Data>
</SHA2B64>
</soap:Body>
</soap:Envelope>';

$ch = curl_init($_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
$clean_xml = str_ireplace(['SOAP-ENV:', 'SOAP:'], '', $output);
$xml = simplexml_load_string($clean_xml);
$islem_Hash = $xml->Body->SHA2B64Response->SHA2B64Result;
$ccv=@$_GET["ccv"];
$xml_data = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:s="http://www.w3.org/2001/XMLSchema" xmlns:tns="https://turkpos.com.tr/">
  <soap:Body>
    <tns:TP_Islem_Odeme_WNS>
      <tns:G>
        <tns:CLIENT_CODE>' . $CLIENT_CODE . '</tns:CLIENT_CODE>
        <tns:CLIENT_USERNAME>' . $CLIENT_USERNAME . '</tns:CLIENT_USERNAME>
        <tns:CLIENT_PASSWORD>' . $CLIENT_PASSWORD . '</tns:CLIENT_PASSWORD>
      </tns:G>
      <tns:SanalPOS_ID>'.$pos_id.'</tns:SanalPOS_ID>
      <tns:GUID>' . $GUID . '</tns:GUID>
      <tns:KK_Sahibi>' . $cardname. '</tns:KK_Sahibi>
      <tns:KK_No>' . $kartnumarasi . '</tns:KK_No>
      <tns:KK_SK_Ay>' . $ay . '</tns:KK_SK_Ay>
      <tns:KK_SK_Yil>' . $yil . '</tns:KK_SK_Yil>
      <tns:KK_CVC>'.$ccv.'</tns:KK_CVC>
      <tns:KK_Sahibi_GSM>' . $cardHolderPhone . '</tns:KK_Sahibi_GSM>
      <tns:Hata_URL>' . $failUrl . '</tns:Hata_URL>
      <tns:Basarili_URL>' . $successUrl1 . '</tns:Basarili_URL>
      <tns:Siparis_ID>' . $orderId . '</tns:Siparis_ID>
      <tns:Siparis_Aciklama>Açıklama gelecek</tns:Siparis_Aciklama>
      <tns:Taksit>' . $taksitData . '</tns:Taksit>
      <tns:Islem_Tutar>' . $tutar . '</tns:Islem_Tutar>
      <tns:Toplam_Tutar>' . $Toplam_Tutar . '</tns:Toplam_Tutar>
      <tns:Islem_Hash>' . $islem_Hash . '</tns:Islem_Hash>
      <tns:Islem_Guvenlik_Tip>3D</tns:Islem_Guvenlik_Tip>
      <tns:Islem_ID>'.$transactionId.'</tns:Islem_ID>
      <tns:IPAdr>' . $ipAddress . '</tns:IPAdr>
      <tns:Ref_URL>' . $referenceUrl . '</tns:Ref_URL>
      <tns:Data1/>
      <tns:Data2/>
      <tns:Data3/>
      <tns:Data4/>
      <tns:Data5/>
    </tns:TP_Islem_Odeme_WNS>
  </soap:Body>
</soap:Envelope>';
//echo $xml_data;//exit;

$ch = curl_init($_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);

$clean_xml = str_ireplace(['SOAP-ENV:', 'SOAP:'], '', $output);
$xml = simplexml_load_string($clean_xml);
$result = $xml->Body->TP_Islem_Odeme_WNSResponse->TP_Islem_Odeme_WNSResult;

//print_r($xml);
if($result->Islem_ID == 0){
  if(isset($result->Sonuc_Str)){
  $message = $result->Sonuc_Str;
  $code    = $result->Islem_ID;
  echo "<script>window.location.href='".$failUrl."?message=".$message."&code=".$code."';</script>";
     // echo $result->Sonuc_Str;
  }
} else{
  //echo $result->Sonuc_Str;

  echo "<script>window.location.href='".$xml->Body->TP_Islem_Odeme_WNSResponse->TP_Islem_Odeme_WNSResult->UCD_URL."';</script>";
}