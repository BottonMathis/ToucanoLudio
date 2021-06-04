<?php
require_once('class.game.php');

class category implements JsonSerializable{
    private $id_category=0;
    private $name_category=null;

    /**
     * @return int
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * @param int $id_category
     */
    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
    }

    /**
     * @return null
     */
    public function getNameCategory()
    {
        return $this->name_category;
    }

    /**
     * @param null $name_category
     */
    public function setNameCategory($name_category)
    {
        $this->name_category = $name_category;
    }


    public function __construct($id_category, $name_category)
    {
        $this->id_category = $id_category;
        $this->name_category = $name_category;
    }
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }



}


?>