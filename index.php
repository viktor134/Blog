<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8">
    <title>PHP BLOG</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="icon"  href="img/ico.png">
</head>
<body>
<?php
include "blocks/header.php";?>




<main class="container mt-5">
<div class="row">
    <div class="col-md-8">
        основная часть
    </div>

<?php include"blocks/aside.php";
?>
</div>
</main>
<?php include "blocks/footer.php"; ?>



