<?php
  require('mysql.php');

  $headers = ["client_id","nume","adresa","telefon","email"];

  $clients = readClients();

  if(isset($vClient) && $vClient){
    $headersformular=["clint_id","formular_id","descriere","data_depunere"];

    $formulare= readFormulare($vClient);  
  }else{
    $headersformular=["clint_id","formular_id","descriere","data_depunere"];
    $formulare=readFormulare(null);
  }
  
  
?>