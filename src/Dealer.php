<?php

require_once 'src/DeckBuilder.php';

class Dealer

{
    public DeckBuilder $deckBuilder;

    public function __construct(DeckBuilder $deckBuilder)
    {
        $this->deckBuilder = $deckBuilder;
    }

    public function shuffleDeck(): array
    {

        $deck = $this->deckBuilder->createDeck();
        shuffle($deck);
        return $deck;
    }
}

