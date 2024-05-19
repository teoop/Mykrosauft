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






        


     </style>
     
</head>
<body>
   <!-- PARTIE HTML-->   

 



<nav class="nav-bar">
    <div class="icon-nav">
        <i class="fas fa-moon"></i>
        <span class="logo"><img src="C:\Users\lloyd\Vidéos à monter\logo mikorosauft\Capture_d_écran_2024-03-21_162654-removebg-preview.png" style="width: 100px; height: auto;margin-top: 19px;"></span>
    </div>

    <ul class="list-nav-bar active">
        <li class="list-item"><a href="bienvenue.html">Accueil</a></li>
        <li class="list-item"><a href="equipe.html">Service</a></li>
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
    <h1>Merci de nous soutenir</h1>
</div>

  
    

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