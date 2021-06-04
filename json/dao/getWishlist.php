<?php


require_once 'cnx.php';
require_once '../models/class.wishlist.php';

    $query = "SELECT * FROM wishlist,game 
              WHERE wishlist.id_game_game= game.id_game_game";
    $requete = $pdo->prepare($query);
    $wishedGames = array();
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

            $wishedGames[] = $game;
            $i++;
        }
        echo json_encode($wishedGames);
    }

