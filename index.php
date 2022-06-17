<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
  </head>
  <body>
    <div class="title">
      <img src="./MyContact.svg" alt="logo">
    </div>
    <div class="form-container">
      <form  action="#" method="post">
      <?php
      if (empty($_POST)) {
      ?>
        <h1>Digite seu nome: </h1>
        <input type="text" name="nome"><br>
        <button type="submit">Enviar</button>
      <?php 
      } else {
        $nome = $_POST['nome'];
        echo "<h1>Boa tarde $nome!</h1>";
      }?>
      </form>
    </div>
  </body>
</html>



