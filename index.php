<?php

require_once 'src/DeckBuilder.php';
require_once 'src/Dealer.php';
require_once 'src/Player.php';
require_once 'src/Hand.php';
//require_once 'src/Player2.php';

$deck = new DeckBuilder();

$newDeal = new Dealer($deck);

$shuffledDeck = $newDeal->shuffleDeck();


$newPlayersHand = new Player($newDeal);
//$playerOnesHand = $newPlayersHand->playersHand($newDeal);
//$playerTwosHand = $newPlayersHand->playersHand($newDeal);

echo '<pre>';
var_dump($shuffledDeck);
echo '</pre>';

//echo '<pre>';
//var_dump($playerOnesHand);
//echo '</pre>';
//
//echo '<pre>';
//var_dump($playerTwosHand);
//echo '</pre>';

$hand = new Hand($newPlayersHand);
$displayedHand = $hand->displayHand($newDeal);
echo '<pre>';
var_dump($displayedHand);
echo '</pre>';



