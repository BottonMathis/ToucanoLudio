<?php
require_once('class.category.php');
require_once('class.user_account.php');

class game implements JsonSerializable {
    private $id_game=0;
    private $name_game=null;
    private $price_game=0;
    private $description_game=null;
    private $note_game=0;
    private $release_date_game=0;
    private $editor_game=null;
    private $duration_game=0;
    private $number_players=0;
    private $quantity_players=0;
    private $category=null;
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
     * @return null
     */
    public function getNameGame()
    {
        return $this->name_game;
    }

    /**
     * @param null $name_game
     */
    public function setNameGame($name_game)
    {
        $this->name_game = $name_game;
    }

    /**
     * @return int
     */
    public function getPriceGame()
    {
        return $this->price_game;
    }

    /**
     * @param int $price_game
     */
    public function setPriceGame($price_game)
    {
        $this->price_game = $price_game;
    }

    /**
     * @return null
     */
    public function getDescriptionGame()
    {
        return $this->description_game;
    }

    /**
     * @param null $description_game
     */
    public function setDescriptionGame($description_game)
    {
        $this->description_game = $description_game;
    }

    /**
     * @return int
     */
    public function getNoteGame()
    {
        return $this->note_game;
    }

    /**
     * @param int $note_game
     */
    public function setNoteGame($note_game)
    {
        $this->note_game = $note_game;
    }

    /**
     * @return int
     */
    public function getReleaseDateGame()
    {
        return $this->release_date_game;
    }

    /**
     * @param int $release_date_game
     */
    public function setReleaseDateGame($release_date_game)
    {
        $this->release_date_game = $release_date_game;
    }

    /**
     * @return null
     */
    public function getEditorGame()
    {
        return $this->editor_game;
    }

    /**
     * @param null $editor_game
     */
    public function setEditorGame($editor_game)
    {
        $this->editor_game = $editor_game;
    }

    /**
     * @return int
     */
    public function getDurationGame()
    {
        return $this->duration_game;
    }

    /**
     * @param int $duration_game
     */
    public function setDurationGame($duration_game)
    {
        $this->duration_game = $duration_game;
    }

    /**
     * @return int
     */
    public function getNumberPlayers()
    {
        return $this->number_players;
    }

    /**
     * @param int $number_players
     */
    public function setNumberPlayers($number_players)
    {
        $this->number_players = $number_players;
    }

    /**
     * @return int
     */
    public function getQuantityPlayers()
    {
        return $this->quantity_players;
    }

    /**
     * @param int $quantity_players
     */
    public function setQuantityPlayers($quantity_players)
    {
        $this->quantity_players = $quantity_players;
    }

    public function getCategory() {
       return $this->category;

    }
    public function setCategory($category) {
        $this->category=$category;

    }

    public function __construct($id_game, $name_game, $price_game, $description_game, $note_game, $release_date_game, $editor_game, $duration_game, $number_players, $quantity_players)
    {
        $this->id_game = $id_game;
        $this->name_game = $name_game;
        $this->price_game = $price_game;
        $this->description_game = $description_game;
        $this->note_game = $note_game;
        $this->release_date_game = $release_date_game;
        $this->editor_game = $editor_game;
        $this->duration_game = $duration_game;
        $this->number_players = $number_players;
        $this->quantity_players = $quantity_players;
    }
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}



?>