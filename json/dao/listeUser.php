<?php
require_once 'cnx.php';
require_once '../models/class.user_account.php';



    $query = "SELECT * FROM user_account ORDER BY name_user_user_account";
    $requete = $pdo->prepare($query);
    $listUser = array();
    if ($requete->execute()) {
        $i = 0;
        while ($donnees = $requete->fetch()) {
            $user = new user_account(
                $donnees["id_user_account_user_account"],
                $donnees["name_user_user_account"],
                $donnees["first_name_user_user_account"],
                $donnees["mail_user_user_account"],
                $donnees["username_user_user_account"],
                $donnees["password_user_user_account"],
                $donnees["preferences_user_user_account"],
                $donnees["bank_data_user_user_account"],
                $donnees["address_user_user_account"]
            );
            $listUser[] = $user;
            $i++;
        }
        echo json_encode($listUser);


    }
