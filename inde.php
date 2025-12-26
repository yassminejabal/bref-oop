<?php
include "input.php";

for ($i = 0; $i < 1; $i++) {
    echo "\n";
    echo "==== E_SPORT ==== \n";
    echo "1. Gestion des clubes \n";
    echo "2. Gestion d'equipes \n";
    echo "3. Gestion des tournois \n";
    echo "4. Gestion des joeurs \n";
    echo "0. Exit \n";

    $input = new input();
    $choix = $input->input("Entre votre Choix");

    switch ($choix) {
        case '1':
            include "club.php";
            break;
        case '2':
            include "Equipe.php";
            break;
        case '3':
            include "Tournoi.php";
            break;
        case '4':
            include "Joueur.php";
            break;
        case '5':
            include "Matchs.php";
            break;
        case '6':
            include "Sponsor.php";
            break;
        default:
            echo "le choix pas disponible";
            break;
    }
}
