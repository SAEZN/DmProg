<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];
    $produit = $_POST["produit"];
    $prix = $_POST["prix"];

    // Créer une chaîne de données à enregistrer
    $donneesCommande = "Nom: $nom\nAdresse: $adresse\nProduit: $produit\nPrix: $prix\n";

    // Définir le chemin du fichier de sauvegarde
    $cheminFichier = "commandes/" . date("Ymd_His") . ".txt";

    // Enregistrer les données dans le fichier principal
    file_put_contents($cheminFichier, $donneesCommande);

    // Créer une copie de sauvegarde dans un dossier spécifié
    $cheminBackup = "backup/";

    $cheminBackupFichier = $cheminBackup . "commande_backup_" . date("Ymd_His") . ".txt";
    copy($cheminFichier, $cheminBackupFichier);

    echo "Commande enregistrée avec succès.";
}
?>