<!-- Afficher les projets de la base de données -->

<?php

require_once 'includes/dbh.inc.php';

$stmt = $pdo->query("SELECT * FROM projets");
$projets = $stmt->fetchAll();

foreach ($projets as $projet) {
    echo "<h1>" . $projet["titre_projet"] . "</h1>";
    echo "<p>" . $projet["description"] . "</p>";
    echo "<p>" . $projet["date_debut"] . "</p>";
    echo "<p>" . $projet["date_fin"] . "</p>";
    echo "<p>" . $projet["budget"] . "</p>";
    echo "<p>" . $projet["id_projet"] . "</p>";
}
