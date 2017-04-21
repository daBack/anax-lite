<?php

namespace back\Dice;

/**
 * Functions for the game itself.
 */
class Dice
{

    public $diceValue = 0;
    public $player = 0;
    public $tempPlayer = 0;
    public $message = "Keep going!";


    /**
    * @method Creates a random value between 1 and 6.
    */
    public function rollDice()
    {
        $this->diceValue = rand(1,6);
        // echo $this->diceValue;
    }



    /**
     * @method Winning message
     */
    public function win()
    {
        if ($this->player >= 100) {
            $this->reset();
            $this->message = "Yay! You won... Wanna play again?";
        }
    }



    /**
     * @method If not 1, adds to score.
     * @param the player at hand
     */
    public function diceCheck()
    {
        $this->rollDice();
        if ($this->diceValue > 1) {
            $this->tempPlayer += $this->diceValue;
        }
        else if ($this->diceValue == 1) {
            $this->tempPlayer = 0;
        }
    }



    /**
     * @method saves the score
     */
    public function save()
    {
        $this->player += $this->tempPlayer;
        $this->tempPlayer = 0;
    }



    /**
     * @method restarts the game
     */
    public function reset()
    {
        $this->player = 0;
        $this->tempPlayer = 0;
    }
}
