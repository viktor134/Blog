<?php


include ('../db.php');

$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$passrepeat = $_POST['pass1'];

if(!empty($username) && !empty($email) && !empty($pass) && $pass == $passrepeat)
{
    $sql='INSERT INTO users(name, email, pass) VALUES(?,?,?)';
    $query=$pdo->prepare($sql);
    $query->execute([$username,$email,$pass]);

    header("Location: /registratedusers.php"); /* Redirect browser */
    exit();
}
else{
    echo "ERROR REGISTRATION";
}
