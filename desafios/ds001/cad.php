<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP 1.2</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>
      Resultado Final
    </h1>
  </header>

  <section>

    <?php
    $num = $_GET["num"];
    $numante = $num - 1;
    $numsuce = $num + 1;

    echo "<p>O número escolhido foi <strong>$num</strong></p>";
    echo "<p>O seu antecessor é $numante</p>";
    echo "<p>O seu sucessor é $numsuce</p>";
    ?>

    <button onclick="history.back()">Voltar</button>
  </section>
</body>

</html>