<?php
$title = "<b>Nouveau serveur</b>";
ob_start();
include __DIR__ . '/article2_texte.php';
$text = ob_get_clean();
/*
$text = "Avec un début catastrophique dû à une méthode de synchronisation incompatible avec les un travail sur des bases de données en ecriture constante. Les anciennes version des applications fonctionnait sur des bases de données locales et non centralisées.
        Cela causait des conflits de versions et des corruptions de données.
        Nous avons trouvé une solutions pour conserver la compatibilité avec les anciennes version tout en garantissant une disponibilité continue des bases de données pour les applications Client/Serveur.";
*/
$src="https://github.com/user-attachments/assets/64957579-24ca-470a-b68e-0e20dd8cfdc9";

$article2 = 
        [
                'title' => $title,
                'text' => $text,
                'src' => $src
        ]
?>