<?php


require_once 'cnx.php';

$sql = 'DELETE FROM Toylibrary WHERE id_game_game= ?, id_user_user_account= ?';

$requete = $pdo->prepare($sql);
$requete->bindValue(1, $_POST["id_game_game"]);
$requete->bindValue(2, $_POST["id_user_user_account"]);
$requete->execute();

exit();
