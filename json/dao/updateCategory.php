<?php
require_once 'cnx.php';

$sql="UPDATE category SET id_category_category=?, name_category_category = ? 
WHERE id_category_category=? ";

$requete = $pdo->prepare($sql);
$requete->bindValue(1, $_POST["id_category_category"]);
$requete->bindValue(2, $_POST["name_category_category"]);

echo $requete->execute();
