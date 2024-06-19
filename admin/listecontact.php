<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portfolio";

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

// Requête pour récupérer les données de la table "creations"
$sql = "SELECT * FROM contacts";
$resultats = mysqli_query($connexion, $sql);
// $contacts = $resultats->fetch_all(MYSQLI_ASSOC);

$contacts = [];


if ($resultats) {
    foreach ($resultats as $resultat) {
        $contacts[] = $resultat;
    }
} else {
    echo "Erreur de requête : " . mysqli_error($connexion) . "<br>";
}

// Fermer la connexion
mysqli_close($connexion);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des contacts</title>
</head>
<body>
    <div class="bloclistecontact">
        <?php if (!empty($contacts)): ?>
            <?php foreach ($contacts as $contact): ?>
                <div>
                    <p class="nomducontact"><?= ($contact['nom']); ?></p>
                    <p class="societeducontact"><?php echo ($contact['societe']); ?></p>
                    <p class="telducontact"><?php echo ($contact['telephone']); ?></p>
                    <p class="telducontact"><?php echo ($contact['email']); ?></p>
                    <p class="messageducontact"><?php echo ($contact['message']); ?></p>
                    <hr>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun contact trouvé.</p>
        <?php endif; ?>
    </div>
</body>
</html>