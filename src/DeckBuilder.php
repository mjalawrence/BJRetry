<?php

class DeckBuilder
{
    public array $suits = [
        'hearts',
        'diamonds',
        'spades',
        'clubs'
    ];

    public array $symbols = [
        'ace' => 11,
        'two' => 2,
        'three' => 3,
        'four' => 4,
        'five' => 5,
        'six' => 6,
        'seven' => 7,
        'eight' => 8,
        'nine' => 9,
        'ten' => 10,
        'jack' => 10,
        'queen' => 10,
        'king' => 10,
    ];

    public function createDeck(): array
    {
        $cards = [];
        foreach ($this->suits as $suit) {
            foreach ($this->symbols as $symbol => $score) {
                $cards[] = [
                    'suit' => $suit,
                    'symbol' => $symbol,
                    'score' => $score
                ];
            }
        }
        return $cards;
    }
}