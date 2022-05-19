<?php

require_once 'src/DeckBuilder.php';
require_once 'src/Dealer.php';
require_once 'src/Player.php';
require_once 'src/Player1.php';
require_once 'src/Player2.php';

$deck = new DeckBuilder();

$newDeal = new Dealer($deck);
$shuffledDeck = $newDeal->shuffleDeck();
$dealtCard = $newDeal->dealToPlayer();

//$player = new Player($newDeal);
//$playerHand = [];
//$card1 = $player->displayCards();
//$card2 = $player->displayCards();
//$playerHand[] = $card1;
//$playerHand[] = $card2;

$player1 = new Player($newDeal);
$player2 = new Player($newDeal);
$playerOneHand = $player1->createPlayerHand();
$playerTwoHand = $player2->createPlayerHand();

//echo '<pre>';
//var_dump($shuffledDeck);
//echo '</pre>';


echo '<pre>';
var_dump($playerOneHand);
echo '</pre>';
echo '<pre>';
var_dump($playerTwoHand);
echo '</pre>';