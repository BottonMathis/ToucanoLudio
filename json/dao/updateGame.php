<?php
require_once 'cnx.php';

$sql = "UPDATE game SET id_game_game= ?, 
           name_game_game = ?, price_game_game = ? ,description_game_game=? ,release_date_game_game= ? ,editor_game_game = ? ,note_game_game=? ,duration_game_game= ? ,number_players_game=? ,quantity_players_game=?
           WHERE id_game_game= ? ";

$requete = $pdo->prepare($sql);
$requete->bindValue(1, $_POST["id_game_game"]);
$requete->bindValue(2, $_POST["name_game_game"]);
$requete->bindValue(3, $_POST["price_game_game"]);
$requete->bindValue(4, $_POST["description_game_game"]);
$requete->bindValue(5, $_POST["release_date_game_game"]);
$requete->bindValue(6, $_POST["editor_game_game"]);
$requete->bindValue(7, $_POST["note_game_game"]);
$requete->bindValue(8, $_POST["duration_game_game"]);
$requete->bindValue(9, $_POST["number_players_game"]);
$requete->bindValue(10, $_POST["quantity_players_game"]);

echo $requete->execute();

