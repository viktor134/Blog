<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>PHP BLOG</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"  href="css/au">
<body class="text-center">
<form class="form-signin" action="reg/authphp.php" method="post">
    <img class="mb-4" src="/img/1.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">ВХОД В GPU-STORE</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required="">
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">ВОЙТИ</button>
    <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
</form>


</body>