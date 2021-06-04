<?php
require_once('class.toy_library.php');
require_once('class.wishlist.php');
require_once('class.game.php');

class user_account implements JsonSerializable{
    private $id_user_account=0;
    private $name_user=null;
    private $first_name_user=null;
    private $mail_user=null;
    private $username_user=null;
    private $password_user=null;
    private $preferences_user=null;
    private $bank_data_user=0;
    private $adress_user=null;
    private $wishedGames=null;
    private $ownedGames=null;

    /**
     * @return null
     */
    public function getWishedGames()
    {
        return $this->wishedGames;
    }

    /**
     * @param null $wishedGames
     */
    public function setWishedGames($wishedGames): void
    {
        $this->wishedGames = $wishedGames;
    }

    /**
     * @return null
     */
    public function getOwnedGames()
    {
        return $this->ownedGames;
    }

    /**
     * @param null $ownedGames
     */
    public function setOwnedGames($ownedGames): void
    {
        $this->ownedGames = $ownedGames;
    }


    /**
     * @return int
     */
    public function getIdUserAccount()
    {
        return $this->id_user_account;
    }

    /**
     * @param int $id_user_account
     */
    public function setIdUserAccount($id_user_account)
    {
        $this->id_user_account = $id_user_account;
    }

    /**
     * @return null
     */
    public function getNameUser()
    {
        return $this->name_user;
    }

    /**
     * @param null $name_user
     */
    public function setNameUser($name_user)
    {
        $this->name_user = $name_user;
    }

    /**
     * @return null
     */
    public function getFirstNameUser()
    {
        return $this->first_name_user;
    }

    /**
     * @param null $first_name_user
     */
    public function setFirstNameUser($first_name_user)
    {
        $this->first_name_user = $first_name_user;
    }

    /**
     * @return null
     */
    public function getMailUser()
    {
        return $this->mail_user;
    }

    /**
     * @param null $mail_user
     */
    public function setMailUser($mail_user)
    {
        $this->mail_user = $mail_user;
    }

    /**
     * @return null
     */
    public function getUsernameUser()
    {
        return $this->username_user;
    }

    /**
     * @param null $username_user
     */
    public function setUsernameUser($username_user)
    {
        $this->username_user = $username_user;
    }

    /**
     * @return null
     */
    public function getPasswordUser()
    {
        return $this->password_user;
    }

    /**
     * @param null $password_user
     */
    public function setPasswordUser($password_user)
    {
        $this->password_user = $password_user;
    }

    /**
     * @return null
     */
    public function getPreferencesUser()
    {
        return $this->preferences_user;
    }

    /**
     * @param null $preferences_user
     */
    public function setPreferencesUser($preferences_user)
    {
        $this->preferences_user = $preferences_user;
    }

    /**
     * @return int
     */
    public function getBankDataUser()
    {
        return $this->bank_data_user;
    }

    /**
     * @param int $bank_data_user
     */
    public function setBankDataUser($bank_data_user)
    {
        $this->bank_data_user = $bank_data_user;
    }

    /**
     * @return null
     */
    public function getAdressUser()
    {
        return $this->adress_user;
    }

    /**
     * @param null $adress_user
     */
    public function setAdressUser($adress_user)
    {
        $this->adress_user = $adress_user;
    }


    public function __construct($id_user_account, $name_user, $first_name_user, $mail_user, $username_user, $password_user, $preferences_user, $bank_data_user, $adress_user)
    {
        $this->id_user_account = $id_user_account;
        $this->name_user = $name_user;
        $this->first_name_user = $first_name_user;
        $this->mail_user = $mail_user;
        $this->username_user = $username_user;
        $this->password_user = $password_user;
        $this->preferences_user = $preferences_user;
        $this->bank_data_user = $bank_data_user;
        $this->adress_user = $adress_user;
    }
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }



}

?>