<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./dependances/gsap-public/">
    <link rel="icon" type="image/png" href="./images/Sans titre - 2_Plan de travail 1.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Hugo F. - Portfolio</title>
    <!--<meta content="url=http://localhost:8888/pf/?p=en">-->
</head>
<body>
<?php

        $lang = "en";        

        if ( isset($_GET["p"]) ) {

            $lang = $_GET["p"];

        }

        $lg = array(
            'fr' => array(
            "texte" => "Vous êtes en France",
            "mn1" => "Accueil",
            "mn2" => "A propos",
            "mn3" => "Réalisations",
            "mn4" => "Contact",
            "T1" => "DESIGNER &",
            "T2" => "DEVELOPPEUR",
            "f1" => "Jeune",
            "f2" => "freelance",
            "f3" => "étudiant",
            "f4" => "en",
            "f5" => "école",
            "f6" => "du digital",
            "titrequi" => "Qui je suis ?", 
            "para1" => "👋🏼 Salut, je m'appelle Hugo et j'ai 21 ans. Je suis actuellement dans une école d'informatique et je travail en freelance en tant que designer et développeur web. <br><br>
            J'ai des compétences en développement web, design, communication et marketing, systèmes et réseaux. <br>C'est grâce à mes années d'expérience, mes projets et mes années d'études 🎓 que je suis capable de réaliser de nombreuses choses.  <br><br>
            Découvrez mes réalisations et mon travail, et pourquoi pas réaliser votre prochain projet avec moi. 😉",
            "titre2" => "Mes réalisations",
            "para2" => "C'est le podcast qui décrypte les métiers des start-ups. Proposé par French Tech in the Alps, le collectif des start-up alpines, il vous invite à découvrir les métiers de demain à travers les yeux de ceux qui les exercent aujourd'hui. <br><br>
            Dans ce projet, j'ai réalisé la 'one page' du site du podcast. Avec l'aide du CMS WordPress et des morceaux de code que j'ai fait moi-même, le projet a pris vie avec beaucoup de succès.",
            "btn" => "Découvrir",
            "para3" => "'Au Bonheur des Mômes' est né en 1992 de la rencontre entre le Théâtre de la Toupine et le village du Grand-Bornand. Forts de leurs expériences respectives dans l'organisation d'événements et de spectacles vivants, ils ont fixé dès le départ les exigences qui permettraient au festival de devenir une référence en Europe. <br><br>
            Pour ma part, j'ai créé les pages du site et certaines parties en pur code php js css. J'ai également participé au référencement de ce projet pour certaines pages.",
            "para4" => "Drive laser a été fondé par Arnaud Lhermite en 2021. Il dirige l'entreprise depuis 1989, et possède de nombreuses connaissances et expériences dans le domaine de la métallurgie et de la chaudronnerie.<br> <br>
            Finir la mise en page et commencer à créer les pages étaient mes tâches pour ce projet. J'ai également travaillé sur le référencement du site et ajouté une vidéo en direct.",
            "T12" => "Pour me contacter",
            "btn2" => "Envoyé",
            "form1" => "Prénom" ,
            "form2" => "Nom",
            "form3" => "Votre eMail",
            "form4" => "Message(s)"
            ),


            'en' => array(
            "texte" => "You're in England",
            "mn1" => "Home",
            "mn2" => "About",
            "mn3" => "Portfolio",
            "mn4" => "Contact",
            "T1" => "DESIGN AND",
            "T2" => "DEVELOPMENT",
            "f1" => "Freelance",
            "f2" => "junior",
            "f3" => "student",
            "f4" => "in",
            "f5" => "IT",
            "f6" => "school",
            "titrequi" => "Who I am ?", 
            "para1" => "👋🏼 Hey, my name is Hugo and I'm 21 years old. I am currently in a IT high school and freelance as a designer and developer. <br><br>
            I have skills in web development, design, communication and marketing, systems and networks. <br> It is thanks to my years of experience, my projects and my years of study 🎓 that I am able to achieve many things. <br><br>
            Discover my achievements and my work, and why not realize your next project with me. 😉",
            "titre2" => "My achievements",
            "para2" => "This is the podcast that deciphers the jobs in start-ups. Proposed by French Tech in the Alps, the Alpine start-up collective, it invites you to discover the jobs of tomorrow through the eyes of those who work in them today. <br><br>
            In this project, I made the 'one page' of the podcast site. With the help of the WordPress CMS and pieces of code that I made myself the project came to life with great success.",
            "btn" => "Discover",
            "para3" => "'Au Bonheur des Mômes' was born in 1992 from the meeting between the Théâtre de la Toupine and the village of Grand-Bornand. With their respective experience in the organisation of events and live shows, they set from the start the requirements that would allow the festival to become a reference in Europe. <br><br>
            For my part I made the pages of the site and some parts in pure php js css code. I also participated in the SEO of this project for some pages.",
            "para4" => "Drive laser was created by Arnaud Lhermite in 2021. He has been running the company since 1989, and has a wealth of knowledge and experience in the field of metalworking and boiler making. <br><br>
            Finishing the layout and starting to create the pages were my tasks for this project. I also worked on the seo of the site and added a live video.",
            "T12" => "To contact me",
            "btn2" => "Send me",
            "form1" => "First Name" ,
            "form2" => "Last Name",
            "form3" => "Your eMail",
            "form4" => "Requirement"
        )
    );
    //header("Location: http://localhost:8888/pf/?p=en"); 
    ?>
    <div class="mouse"></div>
    <div class="navigation">
        <button class="hamburger" onclick="show()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        </button>
        <nav>
            <ul>
                <li><a><?= $lg[$lang]["mn1"]?></a></li>
                <li><a><?= $lg[$lang]["mn2"];?></a></li>
                <li><a><?= $lg[$lang]["mn3"];?></a></li>
                <li><a><?= $lg[$lang]["mn4"];?></a></li>
                <div style="display: flex;justify-content: flex-end;padding-top: 30px;">
                    <a href="?p=fr"><img id="fr" style="height: 40px;" src="./images/la-france.png" alt=""></a>
                    <a href="?p=en"><img id="en" style="height: 40px;padding: 0px 20px;" src="./images/royaume-uni.png" alt=""></a>
                </div>
            </ul>
        </nav>
    </div>
    <div class="pres">
        <div class="soustitre">
            <p class="paraphrase"><span><?= $lg[$lang]["f1"];?></span> <span><?= $lg[$lang]["f2"];?></span> <span>&</span> <span><?= $lg[$lang]["f3"];?></span> <span><?= $lg[$lang]["f4"];?></span> <span><?= $lg[$lang]["f5"];?></span> <span><?= $lg[$lang]["f6"];?></span></p>
        </div>
        <div class="titre">
            <h1><?= $lg[$lang]["T1"];?><br><?= $lg[$lang]["T2"];?></h1>
        </div>
    </div>
    <div class="me">
        <div class="right">
            <div class='container'>
                <div class='reveal'>
                    <div class="image-wrap">
                        <img src='./images/metoseesunshine.jpg'>
                    </div>
                </div>
            </div>
        </div>
        <div class="left">
            <h2><?= $lg[$lang]["titrequi"];?></h2>
            <?= $lg[$lang]["para1"];?>
        </div>
    </div>
    <div class="portfolio">
        <h2><?= $lg[$lang]["titre2"];?></h2>
        <div class="separation">
            <div class="sepGauche">
                <img src="./images/61215367-0-logo-blanc.png" alt="">
                <p><?= $lg[$lang]["para2"];?></p>
                    <div class="btn">
                    <button class="buttonCheck" type="button"><a href="https://startupjobstory.com/" target="_blank"> <?= $lg[$lang]["btn"];?> </a>
                    </button>
                </div>
            </div>
            <div class="sepDroite">
                <img src="./images/65968.png" alt="">
            </div>
        </div>
        <div class="separationSecond">
            <div class="sepGaucheSecond">
                <img src="./images/1482.png" alt="">
            </div>
            <div class="sepDroiteSecond">
                <div class="logocompagny">
                    <img src="./images/Fichier-51x.svg" alt="">
                </div>
                <p><?= $lg[$lang]["para3"];?></p>
                    <div class="btn2">
                        <button class="buttonCheck2" type="button2"><a href="https://www.aubonheurdesmomes.com/" target="_blank"> <?= $lg[$lang]["btn"];?> </a>
                        </button>
                    </div>Ò
            </div>
        </div>
        <div class="separationTres">
            <div class="sepGaucheTres">
                <img src="./images/logo2.png" alt="">
                <p><?= $lg[$lang]["para4"];?></p>
                    <div class="btn">
                    <button class="buttonCheck" type="button"><a href="https://www.laser-drive.com/" target="_blank"> <?= $lg[$lang]["btn"];?> </a>
                    </button>
                </div>
            </div>
            <div class="sepDroiteTres">
                <img src="./images/laser.png" alt="">
            </div>
        </div>
        <div class="all">
                <h2><?= $lg[$lang]["T12"];?></h2>
                <div class="allClessa">
                <form>
                    <label for="fname"><?= $lg[$lang]["form1"];?></label>
                    <input type="text" id="fname" name="fname"><br><br><br>
                    <label for="lname"><?= $lg[$lang]["form2"];?></label>
                    <input type="text" id="lname" name="lname">
                    <br><br><br>
                    <label for="lname"><?= $lg[$lang]["form3"];?></label>
                    <input type="mail" id="lname" name="lname">
                    <br><br><br>
                    <label for="lname"><?= $lg[$lang]["form4"];?></label>
                    <textarea id="story" name="story" rows="5" cols="33"></textarea>
                </form>
                <div class="bbttnn" style="display:flex; justify-content:end;">
                    <button onclick="fun()" class="buttonCheck" type="button"><a href=""> <?= $lg[$lang]["btn2"];?> </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="logo">
                <img src="./images/Logo_FNsf.png" alt="">
            </div>
            <div class="nom">
                <p>2022 - ©Hugo_F.</p>
            </div>
            <div class="rs">
                <img src="./images/facebook.png" alt="">
                <img src="./images/instagram.png" alt="">
                <img src="./images/linkedin.png" alt="">
            </div>
        </div>
    </div>
</body>
<script src="./script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.js" integrity="sha512-judXDFLnOTJsUwd55lhbrX3uSoSQSOZR6vNrsll+4ViUFv+XOIr/xaIK96soMj6s5jVszd7I97a0H+WhgFwTEg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js" integrity="sha512-RvUydNGlqYJapy0t4AH8hDv/It+zKsv4wOQGb+iOnEfa6NnF2fzjXgRy+FDjSpMfC3sjokNUzsfYZaZ8QAwIxg==" crossorigin="anonymous"></script>
</html>