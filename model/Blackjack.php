<?php
include_once("model/Card.php");
include_once("model/Dealer.php");
include_once("model/Deck.php");
include_once("model/Player.php");
include_once("model/suit.php");

class Blackjack
{
    private Player $player;
    private Dealer $dealer;
    private Deck $deck;

    /**
     *
     */
    public function __construct()
    {
        $this->deck = new Deck();
        $this->deck->shuffle();
        $this->player = new Player($this->deck);
        $this->dealer = new Dealer($this->deck);
    }


    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @return Player
     */
    public function getDealer(): Dealer
    {
        return $this->dealer;
    }

    /**
     * @return Deck
     */
    public function getDeck(): Deck
    {
        return $this->deck;
    }

/**
 * 
 */
public function displayHomepageCards(){
    $showDeck = $this->getDeck()->getCards();
    
}

    /**
     * function need to get the playercards
     */
    public function getPalyerCards(){
        $payerCards = $this->player->getCards();
        $playerCardsUni = [];
        foreach($payerCards as $card){
            array_push($playerCardsUni,$card->getUnicodeCharacter(true));
        }
        return $playerCardsUni;
        
    }
    /**
     * function need to get the Dealer
     */
    public function getDealerCards(){
        $dealerCards = $this->dealer->getCards();
        $dealercardsUni = [];
        foreach($dealerCards as $card){
            array_push($dealercardsUni,$card->getUnicodeCharacter(true));
        }
        return $dealercardsUni;
        
    }

    /**
     * function to return player score
     */
    public function getPlayerScore(){
        $playerScore = $this->player->getScore();

        return $playerScore;
        
    }

    /**
     * function to return Dealer score
     */
    public function getDealerScore(){
       $dealerScore = $this->dealer->getScore();
       return $dealerScore;       
    }

}