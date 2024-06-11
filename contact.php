<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "votre_nom_utilisateur";
$mot_de_passe = "votre_mot_de_passe";
$base_de_donnees = "nom_de_votre_base_de_donnees";
// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);
// Vérifier la connexion
if (!$connexion) {
die("Échec de la connexion : " . mysqli_connect_error());
} else {
echo "Connexion réussie à la base de données.";
}

// Exécuter une requête SELECT
$sql = "SELECT * FROM table";
$resultat = mysqli_query($connexion, $sql);
// Vérifier si la requête a réussi
if ($resultat) {
print_r($resultat);
} else {
echo "Erreur : " . mysqli_error($connexion);
}
// Fermer la connexion
mysqli_close($connexion);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
      
    <link rel="stylesheet" href="styles/reset.css">

    <link rel="stylesheet" href="styles/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">  
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
      
      
  </head>
    
  <body>
      
    <div class="container">
  
        
<!-- partie gauche noir et fixe -->     
      <aside>
            <div>
                <img class="imagefixe" src="images/franck.png" alt="Image description">
            </div>
            <div class="blocinfos">
                <h1 class="nom">Franck Rossignol</h1>
                <div>
                    <p class="textepresentation">Après un parcours professionnelle de plus de 35 ans comme Infographiste, Chef de studio, WebDesigner & Freelance,
                    j'ai décidé de me lancer de nouveaux défis professionnels
                    afin de faire évoluer ma carrière vers un secteur d'activité stimulant
                    et innovant les métiers du web.</p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                        <a class="textecontact" href="tel:+330662939679">
                            06 62 93 96 79
                        </a>
                    </p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                        <a class="textecontact" href="mailto:ff.rossignol@yahoo.fr">
                            ff.rossignol@yahoo.fr
                        </a>
                    </p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                        <a class="textecontact" href="images/Franck Rossignol Graphiste.pdf" target="_blank" download="CV Franck ROSSIGNOL.pdf">
                            Téléchargez mon CV
                        </a>
                    </p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/linkedin.png" alt="linkedin">
                        <a class="textecontact" href="https://www.linkedin.com/in/rossignol-franck-4a755a98/" target="_blank">
                            Linkedin
                        </a>
                    </p>
                </div>
            </div>
      </aside>
        
        
        
<!-- partie droite mobile sauf la navbar -->        
      <main>
          
<!-- barre de navigation -->           
        <nav class="navbar">                    
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="creations.html">Mes créations</a></li>
                    <li><a href="parcours.html">Mon parcours</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
        </nav>
          
                  
<!-- partie centrale mobile -->        
        <div>
            
            <container class="bloccontact">

                <div>
                    <h1 class="contact">
                        <img class="flechevertecontact" src="images/flecheverte1.png" alt="fleche verte">
                        Contact
                    </h1>

            <!-- Formulaire de renseignement -->
                <form action="/page-de-traitement" method="post">
                    <ul>
                        <li>
                            <label for="name">
                            <a>Nom :</a>
                            </label>
                            <input class="formulaire" type="text" id="name" name="name" required>
                        </li>
                            <li>
                            <label for="societe">
                            <a>Société :</a>
                            </label> 
                            <input class="formulaire" type="text" id="societe" name="societe" required/>
                        </li>
                        <li>
                            <label for="telephone">
                            <a>Téléphone :</a></label>
                            <input class="formulaire" type="text" id="telephone" name="telephone" required/>
                        </li>   
                        <li>
                            <label for="mail">
                            <a>Email :</a></label>
                            <input class="formulaire" type="email" id="email" name="email" required/>
                        </li>
                        <li>
                            <label for="message">
                            <a>Votre message :</a>
                            </label>
                            <textarea class="formulaire" id="message" name="message" required></textarea>
                        </li>
                    </ul>

                <div class="bouton">
                    <a href="" class="bouton-envoyer">Envoyer</a>
                </div>                    
                    

                </form>



                </div>

            </container>            
            
          
<!-- section footer fond vert -->
                <section class="sectionfooterfondvert">
                    <footer class="stylefooter">
                        <div class="navbarfooter">
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li><a href="creations.html">Mes créations</a></li>
                                <li><a href="parcours.html">Mon parcours</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        
                        <div class="coordonnees">
                            <p class="mentions">ff.rossignol@yahoo.fr - 86190 VOUILLE - ©rossignol - 2024 - Webdesign sur FIGMA - HTML & CSS sur Visual Studio Code</p>
                        </div> 
                    </footer>

                </section>
            
        </div>
                 
      </main>
        
    </div>
  </body>
</html>
