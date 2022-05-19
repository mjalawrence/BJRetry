<?php

require_once 'src/DeckBuilder.php';
require_once 'src/Dealer.php';
require_once 'src/Player.php';
require_once 'src/Player1.php';
require_once 'src/Player2.php';

$deck = new DeckBuilder();

$newDeal = new Dealer($deck);

$shuffledDeck = $newDeal->shuffleDeck();

$dealtCards1 = $newDeal->dealToPlayer1($newDeal);
$dealtCards2 = $newDeal->dealToPlayer2($newDeal);

//echo '<pre>';
//var_dump($shuffledDeck);
//echo '</pre>';

echo '<pre>';
var_dump($dealtCards1);
echo '</pre>';
echo '<pre>';
var_dump($dealtCards2);
echo '</pre>';


