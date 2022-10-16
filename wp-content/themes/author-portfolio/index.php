<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .card {
      width: 100%;
      display: grid;
      grid-template-columns: 1fr;
      background-color: #ffff,
    }
  </style>
</head>
<body>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://61bc10bcd8542f001782451a.mockapi.io/T_product',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);


$data = json_decode($response);
// echo "<b>Total APIs: $data->count </b><br>";
// $entries = $data->entries[0]->API;

foreach ($data as $value) {
  
 echo " <div class ='card'> 
 <img  src = ".$value->Image." > 
 <p>$value->name </p>
 </div>
 "
  ;
}


?>
</body>
</html>

