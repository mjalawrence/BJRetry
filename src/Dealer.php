<?php

require_once 'src/DeckBuilder.php';

class Dealer

{
    public array $deck;

    public DeckBuilder $deckBuilder;

    public function __construct(DeckBuilder $deckBuilder)
    {
        $this->deckBuilder = $deckBuilder;
    }

    public function shuffleDeck(): void
    {
        $deck = $this->deckBuilder->createDeck();
        shuffle($deck);
        $this->deck = $deck;
    }

    public function dealToPlayer(): array
    {
        $this->shuffleDeck();
        return array_pop($this->deck);
    }
}

