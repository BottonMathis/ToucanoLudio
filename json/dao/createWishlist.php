<?php
require_once 'cnx.php';

    $sql = "INSERT INTO wishlist values(null,?,?) ";

$requete = $pdo->prepare($sql);
$requete->bindValue(1, $_POST["id_user"]);
$requete->bindValue(2, $_POST["id_game"]);

if ($requete->execute()) {
    echo 'OUI';
} else {
    print_r($requete->errorInfo());
}
?>
