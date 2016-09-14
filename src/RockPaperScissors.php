<?php
    class RockPaperScissors
    {
        function play($player1, $player2)
        {
          if(($player1=="rock" && $player2=="scissors") || ($player1=="paper" && $player2=="rock") || ($player1=="scissors" && $player2=="paper")){
            return "Player 1";
          }
          elseif (($player2=="rock" && $player1=="scissors") || ($player2=="paper" && $player1=="rock") || ($player2=="scissors" && $player1=="paper")){
            return "Player 2";
          }
          elseif ($player1 = $player2) {
            return "Draw";
        }
    }
  }
?>
