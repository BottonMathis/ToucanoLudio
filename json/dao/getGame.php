<?php

require_once 'cnx.php';
require_once '../models/class.game.php';


$query = "SELECT * FROM game, category WHERE game.id_category_category=category.id_category_category AND name_game_game ORDER BY name_game_game";
$requete = $pdo->prepare($query);

if ($requete->execute()) {
    $i = 0;
    if ($donnees = $requete->fetch()) {
        $game = new game(
            $donnees["id_game_game"],
            $donnees["name_game_game"],
            $donnees["price_game_game"],
            $donnees["description_game_game"],
            $donnees["release_date_game_game"],
            $donnees["editor_game_game"],
            $donnees["note_game_game"],
            $donnees["duration_game_game"],
            $donnees["number_players_game"],
            $donnees["quantity_players_game"]
        );
        $category = new category(
            $donnees["id_category_category"],
            $donnees["name_category_category"]

        );
        $game.setCategory($category);
        $listGame[] = $game;
        $i++;
    }
    if ($requete->execute()) {
        echo 'OUI';
    } else {
        print_r($requete->errorInfo());
    }

}