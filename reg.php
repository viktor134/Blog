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
            <h1>форма регистрации</h1>
            <form action="reg/reg.php" method="post">
                <label for="username">имя</label>
                <input type="text"  name="username" id="name" class="form-control" required>
                <label for="mail">email</label>
                <input type="email"  name="email" id="email" class="form-control">
                <label for="pass">пароль</label>
                <input type="password"  name="pass" id="pass" class="form-control">
                <label for="pass">повтарите пароль</label>
                <input type="password"  name="pass1" id="pass1" class="form-control">


                <button type="submit" class="btn btn-success mt-5">зарегистрироваться</button>


            </form>

        </div>

        <?php include"blocks/aside.php";
        ?>
    </div>
</main>
<?php include "blocks/footer.php"; ?>
