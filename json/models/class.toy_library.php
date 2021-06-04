<?php
require_once('class.game.php');


class toy_library implements JsonSerializable{
    private $id_toy_library=0;
    private $quantity_game=0;
    private $id_game=0;

    /**
     * @return int
     */
    public function getIdGame()
    {
        return $this->id_game;
    }

    /**
     * @param int $id_game
     */
    public function setIdGame($id_game)
    {
        $this->id_game = $id_game;
    }

    /**
     * @return int
     */
    public function getIdToyLibrary()
    {
        return $this->id_toy_library;
    }

    /**
     * @param int $id_toy_library
     */
    public function setIdToyLibrary($id_toy_library)
    {
        $this->id_toy_library = $id_toy_library;
    }

    /**
     * @return int
     */
    public function getQuantityGame()
    {
        return $this->quantity_game;
    }

    /**
     * @param int $quantity_game
     */
    public function setQuantityGame($quantity_game)
    {
        $this->quantity_game = $quantity_game;
    }


    public function __construct($id_toy_library, $quantity_game, $id_game)
    {
        $this->id_toy_library = $id_toy_library;
        $this->quantity_game = $quantity_game;
        $this->id_game = $id_game;
    }
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }



}




?>