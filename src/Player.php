<?php

require_once 'src/Dealer.php';

class Player

{
    public function __construct(Dealer $dealer)
    {
        $this->dealer = $dealer;
    }

    public function createPlayerOneHand(): array
    {
    }
}