<?php

require_once 'cnx.php';

$sql = "DELETE FROM category WHERE id_category_category=? ";
$requete = $pdo->prepare($sql);
$requete->bindValue(1, $_POST["id_category_category"]);
$requete->execute();

exit();

