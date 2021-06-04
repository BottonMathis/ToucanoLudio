<?php
require_once 'cnx.php';

$sql="INSERT INTO user_account (id_user_account_user_account, name_user_user_account, first_name_user_user_account, mail_user_user_account, username_user_user_account, password_user_user_account, preferences_user_user_account, bank_data_user_user_account, address_user_user_account) "
. " VALUES(NULL, ?, ?, ?, ?, ?, ? , ?, ?)";

$requete = $pdo->prepare($sql);
$requete->bindValue(1, $_POST["name_user_user_account"]);
$requete->bindValue(2, $_POST["first_name_user_user_account"]);
$requete->bindValue(3, $_POST["mail_user_user_account"]);
$requete->bindValue(4, $_POST["username_user_user_account"]);
$requete->bindValue(5, $_POST["password_user_user_account"]);
$requete->bindValue(6, $_POST["preferences_user_user_account"]);
$requete->bindValue(7, $_POST["bank_data_user_user_account"]);
$requete->bindValue(8, $_POST["adress_user_user_account"]);

if ($requete->execute()) {
    echo 'OUI';
} else {
    print_r($requete->errorInfo());
}
