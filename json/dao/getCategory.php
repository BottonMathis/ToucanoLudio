<?php
require_once 'cnx.php';
require_once '../models/class.category.php';

$query = "SELECT * FROM category ORDER BY name_category_category WHERE name_category_category";
$requete = $pdo->prepare($query);
if ($requete->execute()) {
    $i = 0;
    if ($donnees = $requete->fetch()) {
        $category = new category(
            $donnees["id_category_category"],
            $donnees["name_category_category"]

        );
        $listCategory[] = $category;
        $i++;
    }
    echo $requete->execute();

}
