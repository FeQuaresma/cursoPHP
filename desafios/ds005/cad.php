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
    $numtopo = number_format($num, 3, ",", ".");
    $numint = (int) $num;
    $numfrac = number_format($num - $numint, 3, ",", ".");

    echo "<p>Analisando o número <strong>$numtopo</strong> informado pelo usuário:</p>";

    echo "<p>A parte inteira do número é <strong>$numint</strong></p>";
    echo "<p>A parte fracionada do número é <strong>$numfrac</strong></p>";

    ?>

<button onclick="history.back()">Voltar</button>
  </section>
</body>

</html>