<?php
  function connect () {
    $connection = mysqli_connect(
      'localhost',
      'root',
      null,
      'proiect'
    );

    return $connection;
  }

  function auth ($user, $pass) {
    $connection = connect();
    $sql = "SELECT id, username FROM `users` WHERE username = '$user' and active = 1 and password = '$pass';";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $close = mysqli_close($connection);

      return $row;
    } else {
      $close = mysqli_close($connection);

      return false;

    }
  }

  function readClients () {
    $connection = connect();

    if (isset($_SESSION['id_user'])) {
        $sql = "SELECT * FROM clients";

      $result = mysqli_query($connection, $sql);

      if (mysqli_num_rows($result) > 0) {
        $clients = [];
        while ($row = mysqli_fetch_assoc($result)) {
          $clients[] = $row;
        }
        $close = mysqli_close($connection);
        

        return $clients;
      } else {
        
        $close = mysqli_close($connection);

        return [];
      }
    } else{
      return [];
    }
  }

  function addClient ($nume,$adresa,$telefon,$email) {
    $connection = connect();
    if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];

      $sql = "INSERT INTO `clients` (`nume`,`adresa`,`telefon`,`email`) VALUES ('$nume', '$adresa', '$telefon', '$email');";

      mysqli_query($connection, $sql);
    }
  }

  function editClient ($client_id, $nume, $adresa, $telefon, $email) {
    $connection = connect();
    if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];

      $sql = "UPDATE `clients` SET (`nume`,`adresa`,`telefon`,`email`) VALUES ('$nume', '$adresa', '$telefon', '$email') WHERE `client_id` = $cliend_id;";

      mysqli_query($connection, $sql);
    }
  }

  function deleteClient ($client_id) {
    $connection = connect();
    if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];

      $sql = "DELETE FROM `clients` WHERE `client_id` = $client_id ";

      mysqli_query($connection, $sql);
    }
  }


  function readFormulare ($vClient=null) {
    $connection = connect();
    

    if (isset($_SESSION['id_user']) && $vClient) {
        $sql = "SELECT * FROM `formulare` WHERE client_id=$vClient";

      $result = mysqli_query($connection, $sql);

      if (mysqli_num_rows($result) > 0) {
        $formulare = [];
        while ($row = mysqli_fetch_assoc($result)) {
          $formulare[] = $row;
        }
        $close = mysqli_close($connection);
        

        return $formulare;
      } else {
        
        $close = mysqli_close($connection);

        return [];
      }
    } else{
      return [];
    }
  }

?>