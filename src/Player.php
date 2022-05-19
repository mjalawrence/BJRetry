<?php

require_once 'src/Dealer.php';

class Player

{
    public function __construct(Dealer $dealer)
    {
        $this->dealer = $dealer;
    }

    public function playersHand(Dealer $dealer): array
    {
        $hand[] = array_pop($this->dealer->deck);
        $hand[] = array_pop($this->dealer->deck);
        return $hand;
    }
}

