<?php

require_once('class.game.php');

class wishlist implements JsonSerializable{
    private $id_wishlist=0;
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
    public function getIdWishlist()
    {
        return $this->id_wishlist;
    }

    /**
     * @param int $id_wishlist
     */
    public function setIdWishlist($id_wishlist)
    {
        $this->id_wishlist = $id_wishlist;
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


    public function __construct($id_wishlist, $quantity_game, $id_game)
    {
        $this->id_wishlist = $id_wishlist;
        $this->quantity_game = $quantity_game;
        $this->id_game = $id_game;
    }
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }



}

?>