<?php

require_once 'src/Dealer.php';

class Player

{
    public Dealer $dealer;

    public function __construct(Dealer $dealer)
    {
        $this->dealer = $dealer;
    }

    public function createPlayerHand(): array
    {
        $hand = [];
        $card1 = $this->dealer->dealToPlayer();
        $card2 = $this->dealer->dealToPlayer();
        $hand[] = $card1;
        $hand[] = $card2;
        return $hand;
    }

//    public function displayCards(): array
//    {
//        return $this->dealer->dealToPlayer();
//    }
}