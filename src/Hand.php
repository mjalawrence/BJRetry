<?php

require_once 'src/Player.php';
require_once 'src/Dealer.php';

class Hand
{
    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    public function displayHand(Dealer $dealer): array
    {
        $hand = $this->player->playersHand($dealer);
        return $hand;
    }
}