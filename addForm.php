<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">       
  </head>
  <body>
    <div class="row">
      <div class="input-field col s4">
        <button class="waves-effect waves-light btn black">
          <a href="index.php">Back</a>
          <i class="material-icons left">arrow_back</i>
        </button>
      </div>
      <form class="col s12" action="add.php" method="post">
        <div class="row">
          <div class="input-field col s8">
            <input placeholder="Introdu numele clientului" id="nume" type="text" name="nume">
            <label for="title">Nume client</label>
          </div>
          <div class="input-field col s4">
            <button class="waves-effect waves-light btn">
              Adauga
              <i class="material-icons right">add</i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8">
            <input placeholder="Introdu adresa" id="adresa" type="text" name="adresa">
            <label for="title">Adresa</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8">
            <input placeholder="Introdu telefonul" id="telefon" type="text" name="telefon">
            <label for="title">Telefon</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8">
            <input placeholder="Introdu email" id="email" type="email" name="email">
            <label for="title">Email</label>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>