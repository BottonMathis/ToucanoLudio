<?php

require_once 'cnx.php';

$sql= "DELETE FROM user_account WHERE id_user_user_account=? ";
$requete = $pdo->prepare($sql);
$requete->bindValue(1, $_POST["id_user_user_account"]);
$requete->execute();

exit();