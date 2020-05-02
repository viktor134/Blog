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
<main class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h1>Изменение данных</h1>
            <form action="userupdate.php" method="post">
                <label for="username">имя</label>
                <input type="text"  name="username" id="name"  <?php user id class="form-control" required>
                <label for="mail">email</label>
                <input type="email"  name="email" id="email"  class="form-control">
                <label for="pass">пароль</label>
                <input type="password"  name="pass" id="pass"  class="form-control">
                <br>
                <button type="submit">Изменить</button>
            </form>
