<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title color="red" font="bold">Mykrôsauft</title>


    

     <!-- PARTIE CSS--> 
     <style>

        
        
       
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins','Open Sans',Arial;
}

body {
    min-height: 100vh;
    background-image: url('https://www.leptidigital.fr/wp-content/uploads/2022/10/actu-microsoft.jpeg');
    background-size: cover;
    background-position: center;
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

    text-shadow: 0 0 5px  aquamarine,
                        0 0 25px aquamarine,
                        0 0 50px aquamarine,
                        0 0 200px aquamarine;
                
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




        
    .custom-radio {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999;
}

.radio-toggle-button {
    background-color: aquamarine;
    color: aquamarine;
    padding: 10px 20px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    display: block;
}

.radio-dropdown {
    display: none;
}

.radio-dropdown iframe {
    display: block;
    border: none;
}

.close-radio-button {
    background-color: aquamarine;
    color: black;
    padding: 10px 20px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
}

.close-radio-button:hover {
    
    transform: scale(1.05);
    box-shadow: 0 0 20px aquamarine;
}

@media screen and (max-width: 768px) {
    .custom-radio {
        bottom: 10px;
        right: 10px;
    }
}

     </style>
     
</head>
<body>
   <!-- PARTIE HTML-->   

 



<nav class="nav-bar">
    <div class="icon-nav">
        <i class="fas fa-moon"></i>
        <span class="logo"><img src="logomikrausoft.png" style="width: 100px; height: auto;margin-top: 19px;"></span>
    </div>

    <ul class="list-nav-bar active">
        <li class="list-item"><a href="mikrausoft.php">Accueil</a></li>
        <li class="list-item"><a href="service.html">Service</a></li>
        <li class="list-item"><a href="information.html">Information</a></li>
        <li class="list-item"><a href="contact.html">Contact</a></li>
        <li class="list-item"><a href="inscriptionconnexion.php">Connexion</a></li>
        
    <div class="fas burger-menu" id="burger-menu">&#9776;</div>
</nav>

<div class="info"><br><br><br><br><br>
    
    
    
    
</div><br><br>
<div class="info">
    <p id="typewriter" style="font-size: 60px; color: white;"><strong></strong></p>
    <p style="font-size: 30px; color: white;">Nous nous devons de vous offrir le meilleur possible<br> à chaque début</p>
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

<div class="main-content">
    <h1><a href="https://www.bs-beaujolais.fr/formations/">Merci de nous soutenir</a></h1>
</div>
  




<div class="custom-radio">
    <input type="checkbox" id="radio-toggle">
    <label for="radio-toggle" class="radio-toggle-button">
        <span class="radio-logo">&#128251;</span> Radio Nostalgie
    </label>
    <div class="radio-dropdown">
        <iframe src="http://listen.radionomy.com/radionostalgie-belgique" frameborder="0" scrolling="no" width="100%" height="400"></iframe>
        <button class="close-radio-button" id="closeRadioButton">Fermer la radio</button>
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
    document.addEventListener('DOMContentLoaded', function() {
    var closeRadioBtn = document.getElementById('closeRadioButton');
    var toggleRadioBtn = document.getElementById('radio-toggle');
    var radioDropdown = document.querySelector('.radio-dropdown');

    closeRadioBtn.addEventListener('click', function() {
        radioDropdown.style.display = 'none';
        toggleRadioBtn.checked = false;
    });
});

</script>
