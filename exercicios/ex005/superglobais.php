<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <pre><?php
          echo "<h1>Superglobais GET</h1>";
          var_dump($_GET);

          echo "<h1>Superglobais POST</h1>";
          var_dump($_POST);

          echo "<h1>Superglobais REQUEST</h1>";
          var_dump($_REQUEST);

          ?></pre>
  </main>
</body>

</html>