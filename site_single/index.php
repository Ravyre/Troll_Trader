<?php
/**
 * Index Page; first page viewed when loading website.
 */
?>

<?php $dir = __DIR__ ?>


<?php
include $dir . ('/parts/header/head.php');
?>

<?php include $dir . ('/../consent/consent.php'); ?>
<div id="content" class="content">
  <div>
    <!-- Logo; with ripple animation -->
    <div class="logo">
      <div class="ripple__1">
        <div class="ripple__2">
          <img class="troll" src="assets/img/the-troll.png" alt="trolltrader troll">
        </div>
      </div>
    </div>
    <!-- About the website -->
    <div class="text">
      <h1 class="greeting">Hello gamers! <br> Welcome to Troll Trader!</h1>
      <p>We are the UK's leading Wargames retailer, eBay's largest worldwide seller of second-hand Warhammer, and the largest UK stockist of Magic the Gathering cards.</p>
      <a target="_blank" rel="noopener" href="http://stores.ebay.co.uk/TheTrollTrader">
        <div class="btn__troll"><span>eBay</span></div>
      </a>
      <a target="_blank" rel="noopener" href="http://www.trolltradercards.com/">
        <div class="btn__troll"><span>Cards</span></div>
      </a>
    </div>
    <!-- Social Icons -->
    <div class="social">
      <a class="social__a" target="_blank" rel="noopener" href="https://www.amazon.co.uk/s?merchant=A1AHVDYDC878UP"><span class="icon-amazon"></span></a>
      <a class="social__a" target="_blank" rel="noopener" href="https://wwww.facebook.com/TheTrollTrader/"><span class="icon-facebook"></span></a>
      <a class="social__a" target="_blank" rel="noopener" href="https://twitter.com/thetrolltrader"><span class="icon-twitter"></span></a>
      <a class="social__a" target="_blank" rel="noopener" href="https://www.instagram.com/trolltrader/"><span class="icon-instagram"></span></a>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include $dir . ('/../../parts/footer/footer.php') ?>
