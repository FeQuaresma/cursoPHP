<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP 2</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>
      Trabalhando com números aleatórios
    </h1>
  </header>
  <section>
    <p>Gerando um número aleatório entre 0 e 100...</p>

    <?php
    $ramnum = random_int(0, 100);
    echo "<p>o valor gerado foi <strong>$ramnum</strong></p>";
    ?>

    <button onclick="location.reload()"> 
        <?= "\u{1F503}" ?>
        Gerar outro</button>
  </section>
</body>

</html>