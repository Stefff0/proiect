<?php
  require_once('./secure.php');

  if (!$loggedIn) {
    header('Location: login.php');
  } else {
      if ((isset($_POST['nume']) && isset($_POST['adresa']) && isset($_POST['telefon']) && isset($_POST['email']))) {
        // adding
        $nume = trim($_POST['nume']);
        $adresa = trim($_POST['adresa']);
        $telefon=trim($_POST['telefon']);
        $email = trim($_POST['email']);

        if (strlen($nume) && strlen($adresa) && strlen($telefon)  && strlen($email)> 0) {         
            require_once('mysql.php');
            addClient($nume,$adresa,$telefon,$email);
        }
        else{
          $msg = 'Completeaza toate campurile';
          echo "<script>alert('$msg');</script>";
          header('refresh:1; url=addForm.php');
          
        }    

      }
        header('Location: index.php');
      

    
  }
?>