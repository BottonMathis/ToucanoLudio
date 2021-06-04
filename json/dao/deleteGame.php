<?php


require_once 'cnx.php';

$sql = "DELETE FROM game WHERE id_game_game=? ";
$requete = $pdo->prepare($sql);
$requete->bindValue(1, $_POST["id_game_game"]);
$requete->execute();

exit();
