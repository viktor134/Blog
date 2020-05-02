<?php
session_start();
include_once("../db.php");

if(isset($_POST['email']) && isset($_POST['pass'])){
    $email=$_POST['email'];
    $password=$_POST['pass'];

    $query="SELECT * FROM users WHERE email='$email' and pass='$password'";

    $query=$pdo->prepare($query);
    $query->execute();

    $user=$query->fetch(PDO::FETCH_OBJ);
    if($user->id==0)
        echo "none  users";
    else{
        setcookie('email',$email,time() + 36000);
        echo "done";

    }
}
