<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portfolio";
 

// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
} else {
    echo "Connexion réussie à la base de données.";
}

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Définir le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connexion échouée : " . $e->getMessage());
}

// Requête pour récupérer les données de la table "creations"
$query = "SELECT id, titre, photolegende, photo1, texte, phototexte FROM creations";
$stmt = $pdo->query($query);

// Récupération des résultats
$creations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réalisations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .creation {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
        }
        .creation h2 {
            margin-top: 0;
        }
        .creation img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Réalisations</h1>
        <?php foreach ($creations as $creation): ?>
            <div class="creation">
                <h2><?php echo htmlspecialchars($creation['titre']); ?></h2>
                <p><?php echo htmlspecialchars($creation['photolegende']); ?></p>
                <img src="<?php echo htmlspecialchars($creation['photo1']); ?>" alt="<?php echo htmlspecialchars($creation['photolegende']); ?>">
                <p><?php echo nl2br(htmlspecialchars($creation['texte'])); ?></p>
                <img src="<?php echo htmlspecialchars($creation['phototexte']); ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>