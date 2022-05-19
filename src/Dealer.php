<?php

require_once 'src/DeckBuilder.php';

class Dealer

{
    public function __construct(DeckBuilder $deckBuilder)
    {
        $this->deckBuilder = $deckBuilder;
    }

    public function shuffleDeck(): array
    {
        $deck = $this->deckBuilder->createDeck();
        shuffle($deck);
        return $this->deck = $deck;
    }

    public function dealToPlayer1($deck): array
    {
        $hand[] = array_pop($this->deck);
        $hand[] = array_pop($this->deck);
        return $hand;
    }
    public function dealToPlayer2($deck): array
    {
        $hand[] = array_pop($this->deck);
        $hand[] = array_pop($this->deck);
        return $hand;
    }
}

