<?php
$title = "<b>Première application déployée en Client/Serveur</b>";
ob_start();
include __DIR__ . '/article4_texte.php';
$text = ob_get_clean();

$src="https://github.com/user-attachments/assets/0d3c5299-6b72-46d7-a689-6643880c79e8";

$article4 = 
        [
                'title' => $title,
                'text' => $text,
                'src' => $src
        ]
?>