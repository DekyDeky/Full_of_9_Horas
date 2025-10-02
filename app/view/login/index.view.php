<?php

    require 'components\window\window.php';

    $loginPage = true;

    if(isset($_POST['toggleForgot'])) {
        $loginPage = false;
    }

    if(isset($_POST['toggleLogin'])) {
        $loginPage = true;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles\main.css">
    <link rel="stylesheet" href="styles\login\login.css">
    <link rel="stylesheet" href="components\window\window.css">
</head>
<body class="body">  

    <section class="decorations left">
        <img class="decorations-hello" src="assets/main/hello.webp" alt="">
        <img class="decorations-hello" src="assets/main/hello.webp" alt="">
    </section>

    <main class="main centrilize">

        <div class="login-window">

            <img src="assets/main/logo.gif" alt="" class="main-logo">    

            <?php windowBar("login.exe");?>

            <?php
            
                if($loginPage) {
                    require 'loginForm.php';
                } else {
                    require 'forgotPassword.php';
                }
            
            ?>

        </div>
    </main>


    <section class="decorations right">
        <img class="decorations-hello" src="assets/main/hello.webp" alt="">
        <img class="decorations-hello" src="assets/main/hello.webp" alt="">
    </section>

</body>
</html>