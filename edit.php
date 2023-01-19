<?php
  require_once('./secure.php');
  if (!$loggedIn) {
    header('Location: login.php');
  } else {
    $client_id = isset($_POST['client_id']) ? $_POST['client_id'] : null;
    $nume = trim(isset($_POST['nume'])) ? trim($_POST['nume']) : null;
    $adresa = trim(isset($_POST['adresa'])) ? trim($_POST['adresa']) : null;
    $telefon = trim(isset($_POST['telefon'])) ? trim($_POST['telefon']) : null;
    $email = trim(isset($_POST['email'])) ? trim($_POST['email']) : null;
    


    if ($client_id && strlen($nume) && strlen($adresa) && strlen($telefon) && strlen($email)) {
      require_once('mysql.php');
      editTodo($client_id,$nume,$adresa,$telefon,$email);
    } 

    header('Location: index.php');
  }
?>