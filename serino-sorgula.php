<?php
     ob_start();
     session_start();

     
     if( isset($_GET['seri_sorgula']) ) { 
      
      $search = trim($_GET['search']);
      
      $api_url = "https://basitservis.com/api/?kaynak=CihazSorgula&username=demo&uid=4DD0CEDE-5BE3-6B9C-1C53-C87AA3224393&search=$search";

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and store the response
$response = curl_exec($ch);
$output = curl_exec($ch);
curl_close($ch);

$xmlString = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $output);

//$xml = SimpleXML_Load_String($xmlString);

// Close cURL session
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

// Check if decoding was successful
echo $api_url;
$responsetoken = json_decode($response);

if ($responsetoken->data==''){
    //$responsetoken->message=='Girilen seri numarasi baska bir kullaniciya aittir') {
    echo "Error decoding JSON response.";
    $_SESSION['cihaz']="Yok";    
    header('Location: GarantiUzatma');
    

} else {
    // Process the $data as needed
   // print_r($xmlString);
    $data = json_decode($xmlString, true);
    
    $responsetoken = json_decode($response);
    //print_r($data['data']);
    echo print_r($responsetoken);
    foreach($responsetoken->data as $mydata) { 
     //   echo print_r($mydata->CihazId);
        $CihazId=$mydata->CihazId;
        $Marka=$mydata->Marka;
        $Model=$mydata->Model;
        $CihazSeriNo=$mydata->CihazSeriNo;
        $GarantiBaslama=$mydata->GarantiBaslama;
        $GarantiBitis=$mydata->GarantiBitis;
    }
    
    $_SESSION['search'] = $search;
    $_SESSION['Marka'] = $Marka;
    $_SESSION['Model'] = $Model;
    $_SESSION['cihaz']="Var"; 
    //echo $GarantiBitis;
    header('Location: GarantiUzatma?serino='.$search.'&marka='.$Marka.'&model='.$Model.'&CihazId='.$CihazId.'&GarantiBaslama='.$GarantiBaslama.'&GarantiBitis='.$GarantiBitis);
    //echo $CihazId."-".$Marka."-".$Model."-".$CihazSeriNo;
     //echo $_SESSION['Model'];
      
     }}
    ?>