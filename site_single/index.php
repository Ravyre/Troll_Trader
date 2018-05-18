<?php
/**
 * Index Page; first page viewed when loading website.
 */
?>

<?php $dir = __DIR__ ?>


<?php
include $dir . ('/parts/header/head.php');
?>

<div id="content" class="content active">
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
      <h1 class="greeting">Hello wargamers! <br> Welcome to Troll Trader!</h1>
      <p>Unfortunately, our web store is now closed.</p>
      <p>You can still find our complete range of amazing products on our eBay store</p>
      <a target="_blank" rel="noopener" href="http://stores.ebay.co.uk/TheTrollTrader">
        <div class="btn__troll"><span>Shop Now</span></div>
      </a>
    </div>
    <!-- Social Icons -->
    <div class="social">
      <a class="social__a" target="_blank" rel="noopener" href="https://www.amazon.co.uk/s?merchant=A1AHVDYDC878UP"><span class="icon-amazon"></span></a>
      <a class="social__a" target="_blank" rel="noopener" href="https://wwww.facebook.com/TheTrollTrader/"><span class="icon-facebook"></span></a>
      <a class="social__a" target="_blank" rel="noopener" href="https://twitter.com/thetrolltrader"><span class="icon-twitter"></span></a>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include $dir . ('/../../parts/footer/footer.php') ?>
