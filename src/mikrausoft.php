<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title color="red" font="bold">Mykrôsauft</title>

    <video autoplay muted loop id="bgVideo">
        <source src="img\logo.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>


    

     <!-- PARTIE CSS--> 
     <style>

        
        
       
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins','Open Sans',Arial;
}
h1:hover, p:hover {
            color: white;
            text-shadow: 0 0 10px white, 0 0 20px white, 0 0 30px white;
            animation: flicker 0.05s infinite;
        }

        @keyframes flicker {
            0%, 18%, 22%, 25%, 53%, 57%, 100% {
                text-shadow: 0 0 10px white, 0 0 20px white, 0 0 30px white, 0 0 40px white;
                opacity: 1;
            }
            20%, 24%, 55% {
                text-shadow: white;
                opacity: 0.7;
            }
        }

        #logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 50px;
            height: 50px;
            background: url('path/to/logo.png') no-repeat center center;
            background-size: contain;
            transition: transform 0.6s ease-in-out, filter 0.6s ease-in-out;
        }

        #logo:hover {
            transform: rotate(360deg);
            filter: blur(5px);
        }

body {
    min-height: 100vh;
    
/* Chemin relatif vers l'image */
    background-size: cover;
    background-position: center;
    cursor: none;
}

button{
            border-radius: 10%;
            color : rgb(0, 0, 0);
            padding: 15px 35px;
            border : 5px;
            background-color: aquamarine;
            transition: .5s;
        }
           
        button:hover{
            -webkit-box-reflect: below 1px linear-gradient(transparent,black);
            box-shadow: 0 0 5px  aquamarine,
                        0 0 25px aquamarine,
                        0 0 50px aquamarine,
                        0 0 200px aquamarine;

            text-shadow:0 0 5px  aquamarine,
                        0 0 25px aquamarine,
                        0 0 50px aquamarine,
                        0 0 200px aquamarine;
            color:rgb(77, 76, 76)
                       
            



        }     

.nav-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 60px 2.5rem;
    height: 60px;
    background-color: rgba(0, 0, 0, 0.2);
    max-width:100%;
    position: fixed; /* Ajout de la propriété pour que la barre reste fixe */
    width: 100%;
    z-index: 1000; /* Assure que la barre reste au-dessus du contenu */
    
    
}


.icon-nav {
            
            transition: transform 0.6s ease-in-out, box-shadow 0.6s ease-in-out;
        }

        .icon-nav:hover {
            transform: rotateY(360deg);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .icon-nav .logo img {
            width: 100px;
            height: auto;
            margin-top: 19px;
        }

        .icon-nav i {
            font-size: 24px;
            margin-right: 10px;
        }

#bgVideo {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
}




.list-nav-bar {
    list-style: none;
    text-transform: uppercase;
    display: flex;
    gap: 20px;
    text-align: center;
    
    
}

.list-item a {
    cursor: pointer;
    font-size: 1.25rem;
    text-decoration: none;
    color: #fff;
    font-family: Georgia;
    margin-left: 0.5rem;
    letter-spacing: 0.1rem;
    font-family: 'arial';
    font-weight :bold;
    
}

.list-item a:hover {
    color :rgb(142, 228, 181);            
            height: 100px;
            text-shadow: 0 0 5px  aquamarine,
                        0 0 25px aquamarine,
                        0 0 50px aquamarine,
                        0 0 200px aquamarine;
                
}

.burger-menu {
    display: none;
    text-align: center;
    
}

.main-content {
    text-align: center;
    margin-top: 25vh;
    text-align: center;
    
}

.main-content h1 {
    font-size: 3.5rem;
    text-align: center;
    color : aquamarine;
    
}


.main-content h1:hover{

    text-shadow: 0 0 5px  white,
                        0 0 25px white,
                        0 0 50px white,
                        0 0 200px white;
                
cursor: pointer;
}



@media screen and (max-width: 768px) {

    .list-item a {
        font-size: 0.875rem;
    }

    .logo {
        font-size: 0.875rem;
    }
}

@media screen and (max-width: 578px) {

    .list-item a {
        font-size: 1rem;

    }

    .list-nav-bar.active {
        right: 0;
      
        
        
    }

    .list-nav-bar {
        display: flex;
        position: fixed;
        right: -100%;
        top: 60px;
        width: 35%;
        background-color: rgba(0, 0, 0, 0.2);
        text-align: center;
        flex-direction: column;
        transition: 0.7s;
        gap: 18px;
        border-radius: 0 0 10px 10px;
        
        
        
    }

    .burger-menu {
        display: block;
        cursor: pointer;
    }
}

.main-content a {
        text-decoration: none; /* Supprime la décoration du lien */
        color: inherit; /* Garde la couleur par défaut */
        transition: transform 1.3s; /* Ajoute une transition pour l'effet 3D */
    }

    .main-content a:hover {
        transform: translateY(-4px) translateZ(3); /* Effet 3D au survol */
    }



    .radio-container {
  position: fixed;
  bottom: 20px;
  right: 20px; /* Positionner à droite */
}

.btn-radio {
  font-size: 18px;
  padding: 10px 20px;
  border: none;
  border-radius: 30px;
  background: aquamarine; /* Arrière-plan aquamarine */
  color: black; /* Texte blanc */
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.btn-radio:hover {
  background: #7fffd4; /* Arrière-plan avec hover */
  box-shadow: 0 4px 20px aquamarine; /* Effet de relief et glow */
  color: black;
}

.radio-box {
  display: none;
  position: absolute;
  bottom: 0; /* Positionner en bas */
  right: 0; /* Positionner à droite */
  width: 300px;
  padding: 20px;
  border-radius: 10px;
  background: aquamarine; /* Arrière-plan aquamarine */
  color: black; /* Texte blanc */
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.close-icon {
  font-size: 18px;
  background: transparent;
  border: none;
  color: black; /* Couleur de l'icône */
  cursor: pointer;
  float: right;
}

.close-text {
  font-size: 16px;
  color: black; /* Couleur du texte (blanc) */
  margin-left: 10px; /* Marge à gauche pour l'espacement */
}

/* Pour le texte en blanc */
@media (prefers-color-scheme: dark) {
  .close-text {
    color: black; /* Couleur du texte (blanc) */
  }
}  

/* Responsive Styles */
@media (max-width: 600px) {
  .radio-container {
    bottom: 10px;
    right: 10px;
  }

  .btn-radio {
    font-size: 16px;
    padding: 8px 16px;
  }

  .radio-box {
    width: 90%;
    padding: 10px;
  }

  .close-icon {
    font-size: 16px;
  }
}


.bottom-center {
            position: fixed;
            bottom: 20px;
            text-align: center;
            width: 100%;
        }

        .bottom-center h3 a {
            color: aquamarine;
            text-decoration: none;
            font-size: 1.5em;
            transition: all 0.3s ease-in-out;
        }

        .bottom-center h3 a:hover {
            color: aquamarine;
            text-shadow: 0 0 10px aquamarine, 0 0 20px aquamarine, 0 0 30px aquamarine;
            transform: perspective(1000px) rotateY(10deg);
            animation: flicker 0.05s infinite;
        }

        @keyframes flicker {
            0%, 18%, 22%, 25%, 53%, 57%, 100% {
                text-shadow: 0 0 10px aquamarine, 0 0 20px aquamarine, 0 0 30px aquamarine, 0 0 40px aquamarine;
                opacity: 1;
            }
            20%, 24%, 55% {
                text-shadow: none;
                opacity: 0.7;
            }
        }



        @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');

.jt {
  position: relative;
  font-size: 20vmin;
  font-family: 'Staatliches', sans-serif;
  text-transform: uppercase;
  font-display: swap;
  text-shadow: 0 0 10px aquamarine;
}

.jt__row {
  display: block;
}
.jt__row:nth-child(1) {
  clip-path: polygon(-10% 75%, 110% 75%, 110% 110%, -10% 110%);
}
.jt__row:nth-child(2) {
  clip-path: polygon(-10% 50%, 110% 50%, 110% 75.3%, -10% 75.3%);
}
.jt__row:nth-child(3) {
  clip-path: polygon(-10% 25%, 110% 25%, 110% 50.3%, -10% 50.3%);
}
.jt__row:nth-child(4) {
  clip-path: polygon(-10% 0%, 110% 0%, 110% 25.3%, -10% 25.3%);
}

.jt__row.jt__row--sibling {
  position: absolute;
  top: 0;
  left: 0;
  user-select: none;
  witdh:800px;
}

.jt__text {
  display: block;
  transform-origin: bottom left;
  animation: moveIn 4s 0s cubic-bezier(.36,0,.06,1) alternate infinite ;
}
.jt__row:nth-child(1) .jt__text {
  transform: translateY(-0.1em);
}
.jt__row:nth-child(2) .jt__text {
  transform: translateY(-0.3em) scaleY(1.1);
}
.jt__row:nth-child(3) .jt__text {
  transform: translateY(-0.5em) scaleY(1.2) ;
}
.jt__row:nth-child(4) .jt__text {
  transform: translateY(-0.7em) scaleY(2.3) ;
}
.jt__row:nth-child(5) .jt__text {
  transform: translateY(-0.9em) scaleY(3.4) ;
}
.jt__row:nth-child(6) .jt__text {
  transform: translateY(-1.1em) scaleY(7.5) ;
}

@keyframes moveIn {
  50%, 100% { 
    transform: translateY(0em)
  }
  0%   { 
  opacity: 0; 
  filter: blur(10px);
  
  }
  100% { 
  opacity: 1; 
  filter: blur(0px);
  }
}



.debug .jt__row:nth-child(even) {
  color: black;
  background: white;
}
.debug .jt__row:nth-child(odd) {
  color: white;
  background: black;
}

* { box-sizing: border-box }


        



     </style>
     
</head>
<body>
   <!-- PARTIE HTML-->   

   
 



<nav class="nav-bar">
    <div class="icon-nav">
        <i class="fas fa-moon"></i>
        <span class="logo"><img src="img/logomikrausoft.png" style="width: 100px; height: auto;margin-top: 19px;"></span>
    </div>

    <ul class="list-nav-bar active">
        <li class="list-item"><a href="mikrausoft.php">Accueil</a></li>
        <li class="list-item"><a href="service.html">Service</a></li>
        <li class="list-item"><a href="information.html">Information</a></li>
        <li class="list-item"><a href="contact.html">Contact</a></li>
        <li class="list-item"><a href="inscriptionconnexion.php">Connexion</a></li>
        
    <div class="fas burger-menu" id="burger-menu">&#9776;</div>
</nav>

<div class="info"><br><br><br><br>
    


<h1 class="jt --debug">
  <span class="jt__row">
    <span class="jt__text">INFOGERANCE</span>
  </span>
  <span class="jt__row jt__row--sibling" aria-hidden="true">
    <span class="jt__text">INFOGERANCE</span>
  </span>
  <span class="jt__row jt__row--sibling" aria-hidden="true">
    <span class="jt__text">INFOGERANCE</span>
  </span>
  <span class="jt__row jt__row--sibling" aria-hidden="true">
    <span class="jt__text">INFOGERANCE</span>
  </span>
</h1>

    
    
<</div><br><br>
<div class="info">
    <p style="font-size: 30px; color: white;" class="tubelight-glow">Nous nous devons de vous offrir le meilleur possible<br> à chaque début</p>
</div><br><br>






    

<button>
    <strong>
        <li class=""><a style="text-decoration:none; color:black;" href="savoirplus.html">EN SAVOIR PLUS</a></li>
    </strong>
    
</button>

<button>
    <strong>
        <li class=""><a style="text-decoration:none; color:black;" href="demandedevis.html">DEMANDE DE DEVIS</a></li>
    </strong>
    
</button>

<div class="bottom-center">
        <h3><a href="https://www.bs-beaujolais.fr/formations/">Merci de nous soutenir</a></h3>
</div>




<!-- radio html -->
<div class="radio-container">
        <button class="btn-radio" id="radio-btn">🎵 Radio</button>
        <div class="radio-box" id="radio-box">
          <button class="close-icon" id="close-btn">✖</button>
          <span class="close-text">Cliquez sur la croix pour arrêter la radio !</span>
          <audio id="radio-player">
            <source src="https://direct.mouv.fr/live/mouv-midfi.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div>
      </div>
    



<script src="script.js"></script>



    

<script>
    const hamburguer = document.getElementById("burger-menu")
const navMenu = document.querySelector(".list-nav-bar")


hamburguer.addEventListener("click", ()=>{
    hamburguer.classList.toggle('active');
    navMenu.classList.toggle('active');
})




    const text = "SITE INFOGERANCE";
    let index = 0;
    const speed = 100; // Vitesse d'écriture en millisecondes

    function typeWriter() {
        if (index < text.length) {
            document.getElementById("typewriter").querySelector('strong').innerHTML += text.charAt(index);
            index++;
            setTimeout(typeWriter, speed);
        }
    }

    typeWriter();

</script>
</body>
</html>

<script>

  document.getElementById('radio-btn').addEventListener('click', function() {
      var radioBox = document.getElementById('radio-box');
      radioBox.style.display = 'block';
      document.getElementById('radio-player').play();
    });

    document.getElementById('close-btn').addEventListener('click', function() {
      var radioBox = document.getElementById('radio-box');
      radioBox.style.display = 'none';
      document.getElementById('radio-player').pause();
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const emojiCursor = document.createElement('div');
        emojiCursor.innerHTML = '&#x1F60A;'; // Remplacez ceci par le code de votre emoji
        emojiCursor.style.position = 'fixed';
        emojiCursor.style.top = '0';
        emojiCursor.style.left = '0';
        emojiCursor.style.pointerEvents = 'none';
        emojiCursor.style.zIndex = '9999';
        emojiCursor.style.fontSize = '24px'; // Taille du curseur
        document.body.appendChild(emojiCursor);

        // Supprimez le curseur par défaut
        document.body.style.cursor = 'none';

        document.addEventListener('mousemove', function(e) {
            emojiCursor.style.top = e.pageY + 'px';
            emojiCursor.style.left = e.pageX + 'px';
        });

        // Lorsque vous survolez un lien, changez l'emoji de manière aléatoire
        const links = document.querySelectorAll('a');
        const emojis = ['&#x1F60A;', '&#x1F600;', '&#x1F618;', '&#x1F44D;', '&#x1F609;']; // Liste des emojis disponibles
        links.forEach(link => {
            link.addEventListener('mouseenter', function() {
                const randomEmoji = emojis[Math.floor(Math.random() * emojis.length)];
                emojiCursor.innerHTML = randomEmoji;
            });
            link.addEventListener('mouseleave', function() {
                emojiCursor.innerHTML = '&#x1F60A;'; // Réinitialisez l'emoji par défaut
            });
        });
    });
</script>


