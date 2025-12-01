<?php
$title = "<b>Traitement des PDF</b>";

ob_start();
include __DIR__ . '/article1_texte.php';
$text = ob_get_clean();

$src="https://github.com/user-attachments/assets/2778f1ef-78dc-4980-a940-27dc95a61e63";

$article1 = 
        [
                'title' => $title,
                'text' => $text,
                'src' => $src
        ]
?>