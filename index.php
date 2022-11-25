<?php 




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
<div>
    <form action="receiver.php" method="GET">
                <div class="mb-3 ">
                  <label for="paragraph" class="form-label">Write your paragraph...</label>
                  <input type="text" name="paragraph" id="paragraph" class="form-control" placeholder="type your paragraph here">
                </div>
    
                <div class="mb-3">
                  <label for="badword" class="form-label">Write a word to censor from your paragraph</label>
                  <input type="text" name="badword" id="badword" class="form-control" placeholder="type your censored word here">
                </div>
    
                <button type="submit" class="btn btn-primary mt-3">Print</button>
            </form>
</div>
</body>
</html>