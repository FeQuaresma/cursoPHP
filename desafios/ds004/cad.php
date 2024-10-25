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
      Conversor de Moedas v2.0
    </h1>
  </header>

  <section>

    <?php
    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='" . date('m-d-Y') . "'".'&$top=1&$format=json';

    $dados = file_get_contents($url);
    $dados_json = json_decode($dados, true);
    $dol = (float) 1;

    if (isset($dados_json['value'][0]['cotacaoCompra'])) {
      $dol = $dados_json['value'][0]['cotacaoCompra'];
    };

    $num = (float) $_GET["num"];
    $final = (float) $num / 5.22;
    $final = number_format($final, 2, ',', '');
    $dol = number_format($dol, 2, ",", "");
    $num = number_format($num, 2, ",", ".");

    echo "<p>Seus R$ $num equivalem a <strong>USD $final</strong></p>";
    ?>

    <p>*Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br/">Banco Central do Brasil</a></p>
    <p><?= "$dol"?></p>

    <button onclick="history.back()">Voltar</button>
  </section>
</body>

</html>