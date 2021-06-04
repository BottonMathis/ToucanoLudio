<?php
require_once 'cnx.php';

$sql="INSERT INTO category VALUES(NULL, ?)";

$requete = $pdo->prepare($sql);
$requete->bindValue(1, $_POST["name_category_category"]);

echo $requete->execute();