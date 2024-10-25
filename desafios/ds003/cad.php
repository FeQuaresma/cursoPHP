<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP 3.2</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>
      Conversor de Moedas v1.0
    </h1>
  </header>

  <section>

    <?php
    $num = (float) $_GET["num"];
    $dol = (float) 5.22;
    $final = (float) $num/5.22;
    $final = number_format($final, 2, ',', '');
    $dol = number_format($dol,2,",","");
    $num = number_format($num,2,",",".");

    echo "<p>Seus R$ $num equivalem a <strong>USD $final</strong></p>";
    echo "<p><strong>*Cotação fixa de R$ $dol</strong> informada diretamente no código.</p>";

    ?>

<button onclick="history.back()">Voltar</button>
  </section>
</body>

</html>