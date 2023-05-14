<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop shoes</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/13fa55244c.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="menu_toggle">
            <span></span>
        </div>
        <div class="logo">
            <p><span>SHOP</span>shoes</p>
        </div>
        <ul class="menu">
            <li><a href="#home">Accueil</a></li>
            <li><a href="#shoes">Shoes</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="ABOUT.html">About</a></li>
        </ul>
        <button class="login_btn"><a href="connexion.php">Se connecter</a> </button>
        <button class="login_btn"><a href="trait.php"> S'inscrire</a></button>
    </header>

    <section id="home">
        <div class="left">
            <h1>Buy <span>a shoes </span>from cameroon</h1>
            <p>Bienvenue sur le site de vente de chaussures en ligne, ici nous vous proposons des chaussures de bonne qualité et à d'exellents prix</p>
            <a href="Achat.html">Buy now</a>
        </div>
        <div class="right">
            <img src="images/istockphoto-172417586-612x612.jpg">
        </div>
    </section>
    <div class="tan">
    <section id="shoes">
        
            <h1 class="section_title"><center> Nos produits</center></h1>
        
            <div class="images">
                <ul>
                    <li class="chaussure">
                        <div>
                            <img src="images/istockphoto-628210852-612x612.jpg" alt="">
                        </div>
                            <span>Tenis</span>
                             <span class="prix">50.000$</span>
                            <a href="Achat.html">Acheter maintenant</a>
                    </li>
                    <li class="chaussure">
                        <div>
                             <img src="images/istockphoto-466843741-612x612.jpg" alt="">
                        </div>
                        <span>Bottes</span>
                        <span class="prix">100.000$</span>
                        <a href="Achat.html">Acheter maintenant</a>
                    </li>
                    <li class="chaussure">
                        <div>
                            <img src="images/1.jpg" alt="">
                        </div>
                        <span>Basquettes NIKE</span>
                        <span class="prix">300.000$</span>
                        <a href="Achat.html">Acheter maintenant</a>
                    </li>
                    <li class="chaussure">
                        <div>
                            <img src="images/2.jpg" alt="">
                        </div>
                        <span>air NIKE</span>
                        <span class="prix">240.000$</span>
                        <a href="Achat.html">Acheter maintenant</a>
                    </li>
                    <li class="chaussure">
                        <div>
                            <img src="images/3.jpg" alt="">
                        </div>
                        <span>Paire</span>
                        <span class="prix">400.000$</span>
                        <a href="Achat.html">Acheter maintenant</a>
                    </li>
                    <li class="chaussure">
                        <div>
                            <img src="images/4.jpg" alt="">
                        </div>
                        <span>Tenis ADIDAS</span>
                        <span class="prix">60.000$</span>
                        <a href="Achat.html">Acheter maintenant</a>
                    </li>
                </ul>
                <a href="page2.html"><h1> Page suivante -></h1></a>
            </div>
            
           
    </section>

    
    <section id="services">
        <h1 class="section_title"><center> Nos services</center></h1>
        <div class="list_services">
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Depannage</h3>
                <p>Nous vous proposons de l'aide afin de reconnaitre l'exellente qualité du produit</p>
                <a href="#" class="read_more">lire plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Aide</h3>
                <p>Nous vous garantisson et vous permettons de prendre un delais d'essaie</p>
                <a href="#" class="read_more">lire plus</a>
            </div>
            <div class="service">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Avis</h3>
                <p>Nous vous permettons d'apporter certaines ameliorations au site ou de critiquer certains elements du site</p>
                <a href="#" class="read_more">lire plus</a>
            </div>
        </div>
    </section>

    <section id="contact">
        <h1 class="section_title"><center> Contact</center></h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre adresse</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1397522142115!2d13.566806500000002!3d7.3381984000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10f002a1b3347f77%3A0xb76e1e45f85da88c!2zVW5pdmVyc2l0w6kgRGUgTmdhb3VuZMOpcsOp!5e0!3m2!1sfr!2scm!4v1683997937100!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="form_contact">
                <h3>Envoyer un message</h3>
                <form action="#">
                    <input type="text" placeholder="Nom">
                    <input type="email" placeholder="Adresse mail">
                    <input type="text" placeholder="objet">
                    <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
                    
                    <button onclick="Envoyer('Envoi réussi!')">Envoyer</button>
                    <script>
                        function Envoyer(msg){
                            alert(msg)
                        }
                        
                    </script> 
                   
                </form>
                
            </div>
        </div>
    </section>
</div> 
    <FOOter>
        <p>SITEPIN NOUMSSI junior 21B072FS</p>
    </FOOter>

    <script>
        var menu_toggle=document.querySelector('.menu_toggle');
        var menu=document.querySelector('.menu');
        var menu_toggle_span=document.querySelector('.menu_toggle span');
        menu_toggle.onclick=function(){
           menu_toggle.classlist.toggle('active');
           menu_toggle_span.classlist.toggle('active');
           menu.classList.toggle('responsive');
        
        }
    </script>
</body>
</html>