<?php
  require_once('./secure.php');
  if (!$loggedIn) {
    header('Location: login.php');
  } else {
    if (isset($_POST['client_id'])) {
      // deleting
      $client_id = $_POST['client_id'];
      require_once('mysql.php');

      deleteClient($client_id);
    } 
    header('Location: index.php');
  }
?>