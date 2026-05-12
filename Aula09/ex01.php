<!DOCTYPE html>
<html lang="PT-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 1 | AULA 09</title>
</head>

<body>
  <form method="GET">
    <input type="text" placeholder="Seu nome:" name="nome">
    <input type="number" name="idade" placeholder="Sua idade:">
    <input type="submit">
  </form>

  <?php
  $nome = $_GET["nome"];
  $idade = $_GET["idade"];

  echo "<hr>";
  echo "Nome informado: $nome";
  echo "<hr>";
  echo "Idade informada: $idade";
  echo "<hr>";

  var_dump($_GET);
  ?>
</body>

</html>