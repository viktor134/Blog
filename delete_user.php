<?php

include ('db.php');

$id=$_GET['id'];
$sql='DELETE FROM users WHERE id=?';
$query=$pdo->prepare($sql);
$query->execute([$id]);

header("Location: /registratedusers.php"); /* Redirect browser */
exit();