<?php

    require 'components\window\window.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles\main.css">
    <link rel="stylesheet" href="components\window\window.css">
    <link rel="stylesheet" href="styles\home\home.css">
</head>
<body>
    <header class="home-header">
        <img class="home-logo" src="assets\main\logo.gif" alt="logo">
    </header>
    <main class="home container">
        <section class="section1 home-section">
            <div class="profile-info home-section-item">
                <?php windowBar("i/me/myself.docx");?>
                <div class="profile-info-content window-content">
                    <div class="profile-info-section1">
                        <img class="profile-photo-img" src="assets\teto.png" alt="">
                        <aside class="profile-info-content-text">
                            <h1 class="profile-name-text">Usuário Anônimo</h1>
                            <h2 class="">They/Them</h2>
                            <ul class="profile-interests">
                                <li class="profile-interests-item">:3</li>
                                <li class="profile-interests-item">ᓚᘏᗢ</li>
                                <li class="profile-interests-item">Anarquismo</li>
                            </ul>
                        </aside>
                    </div>
                    <h2 class="profile-blogs-title">Meus Blogs</h2>
                    <ul class="profile-blogs">
                        <li class="profile-blogs-item">Full of 9 Hours</li>
                        <li class="profile-blogs-item">K-Loop</li>
                    </ul>
                    
                </div>
            </div>
            <div class="profile-about home-section-item">
                <?php windowBar("sobre.txt");?>
                <p class="window-content home-section-item-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rhoncus placerat urna pulvinar ornare. Curabitur porttitor, diam id pretium imperdiet, augue ante porttitor.</p>
            </div>
            <div class="profile-song home-section-item">
                <?php windowBar("weathergirl.mp3");?>
                <div class="window-content spotify-embed">
                    <iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/track/6c6tr4abddHm3MRsU0QUt9?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                </div>
            </div>
        </section>

        <section class="section2 home-section">
            <div class="post">
                <?php windowBar("Hello_World.html");?>
                <div class="window-content post-content">
                    <div class="post-content-1">
                        <div class="post-owner-photo"></div>
                        <div class="post-texts">
                            <div class="post-text-header">
                                <h2>Olá mundo!</h2>
                                <h4>por: Full of 9 Hours</h4>
                            </div>
                            <p>Olá a todos e sejam bem-vindo a central <strong>Full of 9 Hours!!</strong><br>Aqui você encontrá as postanges dos blogs dessa bizonha comunidade. Sinta-se livre para interagir com os escritores em seus devidos espaços e redes!</p>
                        </div>    
                    </div>
                    <div class="post-content-2">
                        <img class="post-img" src="assets\main\hello.webp" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section3 home-section">
            <div class="of_the_day home-section-item">
                <?php windowBar("of_the_day.ppt");?>
                <div class="of_the_day-content window-content">
                    <img class="home-photo-img" src="assets\placeholder.gif" alt="">
                    <h4 class="word_of_the_day-title">Palavra do dia: </h4>
                    <h2 class="word_of_the_day">Sonic</h2>    
                </div>
            </div>

            <div class="all-blogs home-section-item">
                <?php windowBar("blogs.php");?>
                <ul class="window-content all-blogs-content">
                    <li class="blog-item ninehours"> <img class="blog-logo" src="assets\main\logo.gif" alt="logo"> </li>
                    <li class="blog-item sink"> </li>
                    <li class="blog-item k-loop"> <h1>ヾ(≧▽≦*)o</h1> </li>
                </ul>
            </div>
        </section>
    </main>
</body>
</html>