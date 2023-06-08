
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form render</title>
</head>
<body>
    <?php
    $paragrafoRender = $_GET["paragrafo"];
    $parolaRender = $_GET["parola"];
    $paragrafoArray = explode(" ", $paragrafoRender);
    // parole che saranno rimpiazzate
    $badWord = [$parolaRender];
    $paragrafoFiltrato = str_replace($badWord, '***', $paragrafoRender)
    ?>

    <div>
        <!-- qui il paragrafo stampato -->
        <h2>
            <?php echo $paragrafoRender?>
        </h2>
        <p><?php  var_dump($paragrafoArray)?></p>
        <!-- qui il paragrafo stampato  con la sua lunghezza-->
        <p>
            <?php  echo $paragrafoRender . " <br> " .
            'il paragrafo è lungo: ' . strlen($paragrafoRender) . ' ' . 'caratteri' ?>
        </p>
        <p>
        <?php echo $paragrafoFiltrato ?>
        </p>
        
    </div>
</body>
</html>
