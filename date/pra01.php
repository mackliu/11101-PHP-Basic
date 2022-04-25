<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>日期/時間練習</h1>
    <h3>未設定時區</h3>
    <?php

    echo date("Y-m-d H:i:s");
    echo "<hr>";
    ?>
    <h3>有設定時區(Asia/Taipei)</h3>
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("Y-n-d H:i:s");
    echo "<br>";
    echo date("Y 年 n 月 d 日 H 點 i 分 s 秒");
    ?>
</body>
</html>