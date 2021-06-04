<?php

$parametres = parse_ini_file("param/param.ini");

$pdo = new PDO(
    'mysql:host=localhost;dbname=bdd_toucano_ludio',
    'root',
    'root');
?>
