<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./fullpage.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap?family=Heebo:wght@100&family=Lobster&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body>


<main>
    <section class="landing">
<!-- Menu -->
<div class="cursor"></div>
<nav>

    <h1 id="logo">VDesiGn</h1>
    <img id="logoV" src="logoval2.png" alt="">
    <ul class="nav-links">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="work.php">Projets</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="form.php">Contact</a></li>
    </ul>

    <div class="burger">
       <div class="line1"></div>
       <div class="line2"></div>
       <div class="line3"></div>
       <div class="line4"></div>
    </div>

</nav>

        <div id="fullpage">
            <section class="section s1">
                <!--<h1>V-DesiGn</h1>-->

                <h2 class="big-text">Nous mettons notre créativité au service de la votre.</h2>
                <button class="btn" type="button"><a href="form.php">Contactez-Nous</a> </button>

            </section>
            <section class="section s2">
                <h1>VOUS-ÊTES ARTISTE</h1>
                <div class="description">



                </div>
                <img src="img/pexels-rodnae-productions-6192171.jpg" class="pic" alt="">
                <img  src="img/pexels-wesley-carvalho-3778702.jpg" class="pic" alt="">
               <img  src="img/pexels-jennifer-enujiugha-4166353.jpg" alt="" class="pic">



            </section>
            <section class="section s3">
                <h1>VOUS-ÊTES SOLOPRENEUR </h1>


                <img src="img/pexels-vlada-karpovich-4050348.jpg" class="picsolo" alt="">
                <img  src="img/pexels-anthony-shkraba-4348403.jpg" class="picsolo" alt="">
                <img  src="img/pexels-karolina-grabowska-5311526.jpg" class="picsolo" alt="">

            </section>

            <section class="section s4">
                <h1>VOUS-ÊTES ARTISAN</h1>

                    <div class="description4">


                    </div>

                    <img src="img/pexels-anthony-shkraba-4348078.jpg" class="picart" alt="">
                    <img  src="img/pexels-oleg-magni-890520.jpg" class="picart" alt="">
                    <!--<img  id="chef" src="img/pexels-taryn-elliott-4457125.jpg" class="picart" alt="">
                    <img  id="couturiere" src="img/pexels-cottonbro-3738087%20(2).jpg" class="picart" alt="">-->

            </section>

            <section class="section s5">
                <h1>NOUS SOMMES A VOTRE DISPOSITION</h1>

            <div class="description5">
                <p>Vous gérez votre communication tout seul depuis un moment déjà et vous voulez être plus performant ?</p>
                <p>Vous êtes au bon endroit, V-DESIgN vous apporte le soutien dont vous avez besoin, n'hésitez pas à nous <a href="">contacter.</a></p>
            </div>

            </section>
        </div>

<!--<div class="big-text">
      <h2 class="big-text">Nous mettons notre créativité au service de la votre.</h2>

    <button class="btn" type="button">Contactez-Nous</button>



</div>-->


    </section>
</main>

<div class="intro">
    <div class="intro-text">
        <h1 class="hide">
            <span class="text">La créativité </span>
        </h1>
        <h1 class="hide">
            <span class="text">Demande du courage</span>
        </h1>
        <h1 class="hide">
            <span class="text">Matisse</span>
        </h1>
    </div>
    <div class="slider"></div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
        integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>
<script rel="stylesheet" src="./fullpage.min.js"></script>
<script src="app.js"></script>
</body>

</html>

<?php include 'footer.php'; ?>