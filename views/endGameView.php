
<div class="pyro">
  <div class="before"></div>
  <div class="after"></div>
</div>

<div id="endgame-page">
<div class="tenor-gif-embed" data-postid="11781572" data-share-method="host" data-aspect-ratio="1.78571" data-width="100%"><a href="https://tenor.com/view/party-time-anime-gif-11781572">Party Time Anime GIF</a>from <a href="https://tenor.com/search/party+time-gifs">Party Time GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    <h1>Victoire de <?php echo $this->getWinner()->getName();?> !</h1>
    <div id="stats-wrapper">
      <div id="wins" class="stats-cell">
        <span>Victoires</span>
        <span><?php echo $this->getWinner()->getNbWin(); ?></span>
      </div>
      <div id="losses" class="stats-cell">
        <span>Défaites</span>
        <span><?php  echo $this->getWinner()->getNbLoose(); ?></span>
      </div>
    </div>


    <form action="/jeuserpent" method="post">
        <input type="submit" value="Accueil">
    </form>

</div>