<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:29 PM
 */
use aa\TennisGame;
include('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->getScore(6, 8);

echo $tennisGame;