<?php
$user='root';
$password='';
$db='tutor';
$host='localhost';


$dsn='mysql:host=' .$host. ';dbname=' .$db;
$pdo=new PDO($dsn,$user,$password);
$stmt=$pdo->prepare("SELECT * from users ");
$users=$stmt->execute();
$users=$stmt->fetchAll();

include ("usertableresult.php");


//echo "<table style='border: 9px black'>";
//foreach ($name as $user){
//    echo "<tr>";
//    echo  '<td>' . $user['id'] . '</td>';
//    echo '<td>' . $user['name'] . '</td>';
//    echo "</tr>";
//
//}
//echo "</table>";

