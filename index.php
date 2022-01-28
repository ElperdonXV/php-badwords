<?php
$p = "Questa è una prova di php, questo è un paragrafo, ciao a tutti prova prova";
$censura = $_GET["cen"];
$p2 = str_replace($censura, "***", $p);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <p><?php echo $p; ?></p>
    <h2>Lunghezza paragrafo: <?php echo strlen($p); ?></h2>
    <h3>Parola da censurare: <?= $censura; ?></h3>
    <h1>Paragrafo censurato: <?php echo $p2; ?></h1>
    <p>Lunghezza nuovo paragrafo: <?php echo strlen($p2); ?></p>
</body>
</html>
