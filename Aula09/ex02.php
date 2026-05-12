<!DOCTYPE html>
<html lang="PT-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 2 | AULA 09</title>
</head>

<body>
  <form method="POST">
    <input type="email" name="mail" id="mail" placeholder="email@dominio.com">
    <input type="password" name="senha" id="senha" placeholder="Senha">
    <input type="submit" value="Enviar">
  </form>

  <?php
  $email = $_POST["mail"];

  echo "<p>E-mail: $email</p>"
  ?>
</body>

</html>