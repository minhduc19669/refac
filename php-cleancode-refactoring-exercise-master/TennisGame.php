<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */

namespace aa;
class TennisGame
{
    public $score = '';

    public function calculatorScore($score1)
    {
        switch ($score1) {
            case 0:
                $this->score = "Love-All";
                break;
            case 1:
                $this->score = "Fifteen-All";
                break;
            case 2:
                $this->score = "Thirty-All";
                break;
            case 3:
                $this->score = "Forty-All";
                break;
            default:
                $this->score = "Deuce";
                break;

        }
    }

    public function checkWin($score1, $score2)
    {
        $minusResult = $score1 - $score2;
        if ($minusResult == 1) {
            $this->score = "Advantage player1";
        } else if ($minusResult == -1) {
            $this->score = "Advantage player2";
        } else if ($minusResult >= 2) {
            $this->score = "Win for player1";
        } else {
            $this->score = "Win for player2";
        }
    }

    public function tempScore($score1, $score2)
    {
        for ($i = 1; $i < 3; $i++) {
            if ($i == 1) $tempScore = $score1;
            else {
                $this->score .= "-";
                $tempScore = $score2;
            }
            switch ($tempScore) {
                case 0:
                    $this->score .= "Love";
                    break;
                case 1:
                    $this->score .= "Fifteen";
                    break;
                case 2:
                    $this->score .= "Thirty";
                    break;
                case 3:
                    $this->score .= "Forty";
                    break;
            }
        }
    }

    public function getScore($score1, $score2)
    {
        if ($score1 == $score2) {
            $this->calculatorScore($score1);
        } else if ($score1 >= 4 || $score2 >= 4) {
            $this->checkWin($score1, $score2);
        } else {
            $this->tempScore($score1, $score2);
        }
    }

    public function __toString()
    {
        return $this->score;
    }
}