<?php

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.final.page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title>Formulário</title>
    
  </head>
  <body>

    <section id="container">
      <div class="content">
          <div class="title-container">
            <label for="Title">Título:</label>
            <?php 
              echo $_POST["title"]; 
            ?>
          </div>

          <div class="conteudo-container">
            <?php 
              echo $_POST["conteudo"];
            ?>
          </div>

          <div class="autor-container">
            <label for="Autor">Autor:</label>
            <?php 
              echo $_POST["autor"];
            ?>
          </div>

          <form action="index.html">
            <input type="submit" value="Retornar a tela inicial">
          </form>
      </div>
    </section>
  </body>
</html>
