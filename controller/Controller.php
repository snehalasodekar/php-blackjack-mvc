<?php

include("model/Blackjack.php");

class Controller {
    public $blackjack;
    public string $page;

    public function __construct()
    {
        $this->blackjack = new Blackjack();
        $this->page = 'homepage';
    }

    public function invoke()
    {
        if (isset($_GET['page'])) {
            $this->page = $_GET['page'];
            switch ($this->page) {
                
                case 'newgame' :
    
                    $playerCards = $this->blackjack->getPalyerCards();
                    $dealerCards = $this->blackjack->getDealerCards();
                    $playerScore = $this->blackjack->getPlayerScore();
                    $dealerScore = $this->blackjack->getDealerScore();
        
                    include 'view/newGameView.php';
    
                    break;
    
                case 'hit' :
                    break;
                case 'surrender' :
                    break;
                case 'stand' :
                    break;
                case 'default':
                    $game = $this->blackjack->getDeck()->getCards(); 
                    include 'view/homepageview.php';
                    break;
            }

        } else{
            $game = $this->blackjack->getDeck()->getCards(); 
            include 'view/homepageview.php';
        }
        
        
    }
}