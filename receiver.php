<?php

$paragraph = trim($_GET['paragraph']);
$badword = trim($_GET['badword']);

$new_paragraph = str_replace($badword, '***', $paragraph);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h3>Original paragraph</h3>
        <p><?php echo $paragraph; ?></p>
        <div class="mb-4">Lunghezza: <?php echo strlen($paragraph); ?> caratteri.</div>

        <h3>Censored paragraph</h3>
        <p><?php echo $new_paragraph; ?></p>
        <div class="mb-4">Lunghezza: <?php echo strlen($new_paragraph); ?> caratteri.</div>
    </div>

</body>
</html>



<!DOCTYPE html>
<html lang="en">

