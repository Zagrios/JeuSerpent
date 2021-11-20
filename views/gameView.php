<div id="game-page">

    <div id="grid-wrapper">
        <?php echo $this->getGame()->gridToHtml(); ?>
    </div>

    <div id="scores-wrapper">
        <h2>Scores des joueurs :</h2>
        <div id="p1-score">
            <span class="p-score"><?php echo $this->getGame()->getP1()->getName() ?> : <?php echo $this->getGame()->getP1()->getScore() ?> </span>
        </div>
        <div id="p2-score">
            <span class="p-score"><?php echo $this->getGame()->getP2()->getName() ?> : <?php echo $this->getGame()->getP2()->getScore() ?> </span>
        </div>
    </div>

    <div id="play-control">
        <form action="" method="post">
            <h2><?php echo $this->getGame()->getCurrentPlayer()->getName()?> à toi de jouer !</h2>
            <input type="hidden" name="action" value="play">
            <input type="submit" value="Lancer le dé">
        </form>
    </div>
    

</div>