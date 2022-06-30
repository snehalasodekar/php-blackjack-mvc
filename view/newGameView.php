<php 
echo "Hello";?>

<div class="row">
    <div class="col">
        <h5>Player's Cards</h5>
         <?php foreach($playerCards as $card) { 
            echo ' <div class="playerCards" style="font-size: 180pt;display:inline-block;">';
            echo $card;    
            echo '</div>';    
          } ?>
    </div>
    <div class="col pt-5 text-center">
        <h5>Score Board</h5>
            <div class="row mt-3 pt-3">
                <div class="col fw-bold lh-lg">
                Deler's Score
                </div>
                <div class="col">
                
                </div>
                <div class="col fw-bold lh-lg">
                Player's Score
                </div>
            </div>
            <div class="row">
                <div class="col fw-bold lh-lg">
                <?php echo $playerScore; ?>
                </div>
                <div class="col">
                
                </div>
                <div class="col fw-bold lh-lg ">
                <?php
                    echo $dealerScore;
                    ?>
                </div>
            </div>
        </div>
        <div class="col">
            <h5>Dealer's Cards</h5>
        <?php foreach($dealerCards as $card) {
            echo ' <div class="playerCards" style="font-size: 180pt;display:inline-block;">';
            echo $card;   
            echo '</div>';
        } ?>
        </div>
</div>

<div class="row align-items-center">
    <div class="col-12 text-center">
        <button class="btn btn-lg btn-success" name="page" value="hit">Hit!</button>
        <button class="btn btn-lg btn-warning" name="page" value="stand">Stand</button>
        <button class="btn btn-lg btn-danger" name="page" value="surrender">Surrender</button>
    </div>
</div>