<?php

//var_dump($game);


?>
        <div class="playerAction text-center">
            <form method="get">
                <button type="submit" name="page" value="newgame" class="btn border-primary">New Game</button>

            </form>
        </div>
<div class="" style="display:inline-block;">
    
 
         <?php foreach($game as $card) { 
            echo ' <div class="playerCards" style="font-size: 180pt;display:inline-block;">';
            echo $card->getUnicodeCharacter(true);    
            echo '</div>';    
          } ?>
    
</div>