<?php

require_once 'src/DeckBuilder.php';
require_once 'src/Dealer.php';

$deck = new DeckBuilder();

$newDeal = new Dealer($deck);
$shuffledDeck = $newDeal->shuffleDeck();

//echo '<pre>';
//var_dump($shuffledDeck);
//echo '</pre>';

$dealtCard = array_pop($shuffledDeck);

echo '<pre>';
var_dump($dealtCard);
echo '</pre>';