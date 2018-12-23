<?php

//get values

$email = $_POST['email'];
$passe = sha1($_POST['passe']);
header("location: http://localhost/jwt-server/index.php?token:$email,$passe");
/*
echo $email; 
echo '<pre>';
echo $passe
*/
?>