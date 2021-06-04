<?php
require_once 'cnx.php';
require_once '../models/class.toy_library.php';

    $query = "SELECT * FROM toy_library,game 
              WHERE toy_library.id_game_game= game.id_game_game";
    $requete = $pdo->prepare($query);
    $ownedGames = array();
    if ($requete->execute()) {
        $i = 0;
        while ($donnees = $requete->fetch()) {

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

            $ownedGames[] = $game;
            $i++;
        }
        echo json_encode($ownedGames);

}
