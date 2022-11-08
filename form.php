<?php
    require_once 'session.php';
    $session = new Session();
    $user = $session->get('user');
    $email = $session->get('email');
    $cpf = $session->get('cpf');
    $link = $session->get('link');
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.form.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title>Novo Post</title>
    
  </head>
  <body>
    <div id="header">
      <div class="content" align="center">
        <img src="<?php echo $link ?> "width="100">
        <h4><?php echo "Bem vindo ".$user?></h3>
        <p><?php echo "Email: ".$email?></p>
        <p><?php echo "CPF: ".$cpf?></p>
      </div>
        

    </div>

    <div id="central-form">
      <div class="content" align="center">
        <form action="final.page.php" method="POST" class="col-sm-4">
          <div class="input-container">
            <input type="text" name="title" class="form-control" placeholder="Título"><br>
          </div>

          <div class="input-container">
            <textarea type="text" name="conteudo" cols="140" rows="10" placeholder="Conteúdo"></textarea><br>
          </div>

          <div class="input-container">
            <input type="text" name="autor" class="form-control" placeholder="Autor"><br>
          </div>

          <input type="submit" name="EnviarDados" class="btn btn-outline-primary btn-lg btn-block"><br>       
        </form> 
      </div>
    </div>
  </body>
</html>