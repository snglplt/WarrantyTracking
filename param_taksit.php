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





<title>Teknik Pro | Satın Alma</title>

<link rel="alternate icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="css/swiper-bundle.min.css">

	<link rel="stylesheet" href="css/assets_css_main.css_1693903237707.css">

<link rel="stylesheet" href="css/home.css_1693903237707.css">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/iamdustan-smoothscroll/0.4.0/smoothscroll.min.js" defer></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/iamdustan-smoothscroll/0.4.0/smoothscroll.min.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

<?php include "inc/nav.php";?>
<?php
/*
error_reporting(E_ALL);
ini_set("display_errors", 1);*/

include "database/baglan.php";


/////////////////////////////////////congig başlangıç////////////////////////////////////////////////////////////
//$_url = 'http://test-dmz.ew.com.tr:8080/turkpos.ws/service_turkpos_test.asmx';
//$_url = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_prod.asmx';
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

/////////////////////////////////////congig bitiş////////////////////////////////////////////////////////////


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


$xml = simplexml_load_string($xml);
$json = json_encode($xml);
$responseArray = json_decode($json);




if (isset($result)) {
  $message = $result->Ozel_Oran_SK_ID;
  $code    = $result->Islem_ID;
}


$xml = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $outputk);
$xml = simplexml_load_string($xml);
$json = json_encode($xml);
$responseArray = json_decode($json, true);
foreach ($responseArray as $item) {
  //print_r($item);
?>
<br><br><br>

<div class="mb-3" style="text-align:center;font-size:20px;margin-bottom:20px">
    <label >Fiyat:</label>
    <span style="color:red" ><?php if(isset($_SESSION['fiyat'] )) echo $_SESSION['fiyat'] ;?></span>
 

  </div>
 

<div class="container" ><?php
  $donencevap = $item['TP_Ozel_Oran_SK_ListeResponse']['TP_Ozel_Oran_SK_ListeResult']['DT_Bilgi'];
  foreach($donencevap as $item2){
    foreach($item2 as $item3){
      foreach($item3 as $item4){
        if (is_array($item4) || is_object($item4))
        {
        foreach($item4 as $item5){
          if (is_array($item5) || is_object($item5))
        {
          if($item5['Kredi_Karti_Banka']!="N" ){
            if($item5['Kredi_Karti_Banka_Gorsel']!=null){
        ?>
        <style>
          @import url("https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400;500&display=swap");
a{
  text-decoration:none;
}
.container {
  display: grid;
  grid-template-columns: 300px 300px 300px;
  grid-gap: 50px;
  justify-content: center;
  align-items: center;
  height: 140vh;
  font-family: 'Baloo Paaji 2', cursive;
}

.card {
  float:left;
  background-color: #636363;
  height: 45rem;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
  align-items: center;
  box-shadow: rgba(0, 0, 0, 0.7);
  color: white;
}

.card__name {
  margin-top: 15px;
  font-size: 1.5em;
}

.card__image {
  height: 160px;
  width: 160px;
  border-radius: 50%;
  border: 5px solid #272133;
  margin-top: 20px;
  box-shadow: 0 10px 50px rgba(235, 25, 110, 1);
}


.draw-border {
  box-shadow: inset 0 0 0 4px #58cdd1;
  color: #58afd1;
  -webkit-transition: color 0.25s 0.0833333333s;
  transition: color 0.25s 0.0833333333s;
  position: relative;
}

.draw-border::before,
.draw-border::after {
  border: 0 solid transparent;
  box-sizing: border-box;
  content: '';
  pointer-events: none;
  position: absolute;
  width: 0rem;
  height: 0;
  bottom: 0;
  right: 0;
}

.draw-border::before {
  border-bottom-width: 4px;
  border-left-width: 4px;
}

.draw-border::after {
  border-top-width: 4px;
  border-right-width: 4px;
}

.draw-border:hover {
  color: #ffe593;
}

.draw-border:hover::before,
.draw-border:hover::after {
  border-color: #eb196e;
  -webkit-transition: border-color 0s, width 0.25s, height 0.25s;
  transition: border-color 0s, width 0.25s, height 0.25s;
}

.draw-border:hover::before {
  -webkit-transition-delay: 0s, 0s, 0.25s;
  transition-delay: 0s, 0s, 0.25s;
}

.draw-border:hover::after {
  -webkit-transition-delay: 0s, 0.25s, 0s;
  transition-delay: 0s, 0.25s, 0s;
}





.social-icons {
  padding: 0;
  list-style: none;
  margin: 1em;
}

.social-icons li {
  display: inline-block;
  margin: 0.15em;
  position: relative;
  font-size: 1em;
}

.social-icons i {
  color: #fff;
  position: absolute;
  top: 0.95em;
  left: 0.96em;
  transition: all 265ms ease-out;
}

.social-icons a {
  display: inline-block;
}

.social-icons a:before {
  transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
  content: " ";
  width: 45px;
  height: 45px;
  border-radius: 100%;
  display: block;
  background: linear-gradient(45deg, #ff003c, #c648c8);
  transition: all 265ms ease-out;
}

.social-icons a:hover:before {
  transform: scale(0);
  transition: all 265ms ease-in;
}

.social-icons a:hover i {
  transform: scale(2.2);
  -ms-transform: scale(2.2);
  -webkit-transform: scale(2.2);
  color: #ff003c;
  background: -webkit-linear-gradient(45deg, #ff003c, #c648c8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: all 265ms ease-in;
}

.grid-container {
  display: grid;
  
  font-size: 1.2em;
  
}

        </style>
        
  
  <div class="card" style="float:left;text-align:left;">
  <img style="padding:20px;margin-top:20px" src="<?php echo $item5['Kredi_Karti_Banka_Gorsel'];?> "/><p class="card__name"><span style="color:black;font-weight: bold;"><?php echo $item5['Kredi_Karti_Banka'];?><span></p>
    <div class="grid-container">

      

      <div class="grid-child-followers">
       
          <span style="float:left;margin:5px;width:200px">Tek Çekim <?php echo $_SESSION['fiyat'];$fiyat=$_SESSION['fiyat'];?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat; ?>&sanal_pos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=1"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><br>
          <?php if($item5['MO_02']>0){?><span style="float:left;margin:5px;width:200px">2 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_02']/100;$fiyat2=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_02']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat2;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=2"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          <?php if($item5['MO_03']>0){?><span style="float:left;margin:5px;width:200px">3 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_03']/100;$fiyat3=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_03']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat3;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=3"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          <?php if($item5['MO_04']>0){?><span style="float:left;margin:5px;width:200px">4 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_04']/100;$fiyat4=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_04']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat4;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=4"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          <?php if($item5['MO_05']>0){?><span style="float:left;margin:5px;width:200px">5 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_05']/100;$fiyat5=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_05']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat5;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=5"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          <?php if($item5['MO_06']>0){?><span style="float:left;margin:5px;width:200px">6 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_06']/100;$fiyat6=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_06']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat6;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=6"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          <?php if($item5['MO_07']>0){?><span style="float:left;margin:5px;width:200px">7 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_07']/100;$fiyat7=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_07']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat7;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=7"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          <?php if($item5['MO_08']>0){?><span style="float:left;margin:5px;width:200px">8 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_08']/100;$fiyat8=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_08']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat8;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=8"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          <?php if($item5['MO_09']>0){?><span style="float:left;margin:5px;width:200px">9 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_09']/100;$fiyat9=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_09']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat9;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=9"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          <?php if($item5['MO_10']>0){?><span style="float:left;margin:5px;width:200px">10 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_10']/100;$fiyat10=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_10']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat10;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=10"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          <?php if($item5['MO_11']>0){?><span style="float:left;margin:5px;width:200px">11 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_11']/100;$fiyat11=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_11']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat11;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=11"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          <?php if($item5['MO_12']>0){?><span style="float:left;margin:5px;width:200px">12 Taksit <?php  echo $_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_12']/100;$fiyat12=$_SESSION['fiyat']+$_SESSION['fiyat']*$item5['MO_12']/100;?></span><a href="kartbilgisi.php?fiyat=<?php echo $fiyat12;?>&sanalpos=<?php echo $item5['SanalPOS_ID'];?>&taksitsayisi=12"><button style="margin:5px" type="button" class="btn btn-success">Öde</button></a><?php }?> <br>
          
      </div>

    </div>
    
   
  </div>
     

<?php
          $kartgorsel=$item5['Kredi_Karti_Banka_Gorsel'];
          $kartbanka=$item5['Kredi_Karti_Banka'];
          $sanal_pos=$item5['SanalPOS_ID'];
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
          $stack = array($kartgorsel);
          array_push($stack, $kartgorsel);
          
            $evrak_listeksper[] = array(
                'kartgorsel' => $kartgorsel,
                'kartbanka'=>$kartbanka,
                'sanal_pos'=>$sanal_pos,
                'taksit01'=>$taksit01,
                'taksit02'=>$taksit02,
                'taksit03'=>$taksit03,
                'taksit04'=>$taksit04,
                'taksit05'=>$taksit05,
                'taksit06'=>$taksit06,
                'taksit07'=>$taksit07,
                'taksit08'=>$taksit08,
                'taksit09'=>$taksit09,
                'taksit10'=>$taksit10,
                'taksit11'=>$taksit11,
                'taksit12'=>$taksit12,
            );
        }
        
       
        }
      }
  
    }
  }
  }
  

    }
$xmldekode = json_encode($outputk);

}}?>
</div> 
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>



<?php include 'inc/footer.php';?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.1/swiper-bundle.min.js"
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="js/assets_script_main.js"></script>

<script src="js/home.js"></script>
	<!-- Google Tag Manager (noscript) -->
		
	<!-- End Google Tag Manager (noscript) -->
</body>
</html>


