<?php
/**
 * Index Page; first page viewed when loading website.
 */
?>

<?php
// config
require_once __DIR__ . ('/includes/config.php');
// header
include ROOT_PATH . ('includes/header.php');
// consent bar
include __DIR__ . ('/includes/consent.php');
?>

<div id="content" class="content">
  <div>
    <!-- Logo with ripple animation -->
    <div class="logo">
      <div class="ripple__1">
        <div class="ripple__2">
          <picture>
            <source srcset="assets/img/the-troll.webp" type="image/webp">
            <img class="troll" src="assets/img/the-troll.png" alt="trolltrader troll">
          </picture>
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
    <!-- Social icons -->
    <div class="social">
      <a class="social__a" target="_blank" rel="noopener" aria-label="Link to Troll Trader's Amazon store" href="https://www.amazon.co.uk/s?merchant=A1AHVDYDC878UP">
        <!-- <span class="icon-amazon"></span> -->
        <svg class="amazon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448">
          <path d="M387.704 369c7.5-3.75 13.25 2 5.5 12s-70 67-174.5 67-184.5-71.5-209-101c-6.75-7.75 1-11.25 5.5-8.25 73.25 44.5 187.75 117.75 372.5 30.25zM439.454 340.25c3.75 5 0 27-6.5 43-6.5 15.75-16 26.75-21.25 31-5.5 4.5-9.5 2.75-6.5-3.75s19.25-46.5 12.75-55c-6.5-8.25-37-4.25-48-3.25-10.75 1-13 2-14-0.25-2.25-5.75 21.75-15.5 37.5-17.5 15.75-1.75 41-0.75 46 5.75zM340.954 229.5c0 27.5 32.25 52.75 32.25 52.75l-56.75 56c-22.25-21-39-38.5-39-38.5-2.5-2.5-4.5-5.5-6.25-8.25-45.25 70.75-183.5 66.25-183.5-43.25 0-102 120.75-115.75 169.5-117.5v-31.75c0-6.75 2.5-37.5-35.5-37.5 0 0-38 0-54.25 49.5l-73.5-6.75c0-49.25 46.75-104.25 134.75-104.25 87.75 0 112.25 57 112.25 82.25v147.25zM172.954 234.75c0 50.75 84.25 62.75 84.25-17.25v-40.5c-33.75 1-84.25 10.5-84.25 57.75z"></path>
        </svg>

      </a>
      <a class="social__a" target="_blank" rel="noopener" aria-label="Link to Troll Trader's Facebook page" href="https://wwww.facebook.com/TheTrollTrader/">
        <!-- <span class="icon-facebook"></span> -->
        <svg class="facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448">
          <path d="M332 19v66h-39.25c-30.75 0-36.5 14.75-36.5 36v47.25h73.25l-9.75 74h-63.5v189.75h-76.5v-189.75h-63.75v-74h63.75v-54.5c0-63.25 38.75-97.75 95.25-97.75 27 0 50.25 2 57 3z"></path>
        </svg>
      </a>
      <a class="social__a" target="_blank" rel="noopener" aria-label="Link to Troll Trader's Twitter page" href="https://twitter.com/thetrolltrader">
        <!-- <span class="icon-twitter"></span> -->
        <svg class="twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448">
          <path d="M421 102c-11 16-24.75 30.25-40.5 41.75 0.25 3.5 0.25 7 0.25 10.5 0 106.75-81.25 229.75-229.75 229.75-45.75 0-88.25-13.25-124-36.25 6.5 0.75 12.75 1 19.5 1 37.75 0 72.5-12.75 100.25-34.5-35.5-0.75-65.25-24-75.5-56 5 0.75 10 1.25 15.25 1.25 7.25 0 14.5-1 21.25-2.75-37-7.5-64.75-40-64.75-79.25v-1c10.75 6 23.25 9.75 36.5 10.25-21.75-14.5-36-39.25-36-67.25 0-15 4-28.75 11-40.75 39.75 49 99.5 81 166.5 84.5-1.25-6-2-12.25-2-18.5 0-44.5 36-80.75 80.75-80.75 23.25 0 44.25 9.75 59 25.5 18.25-3.5 35.75-10.25 51.25-19.5-6 18.75-18.75 34.5-35.5 44.5 16.25-1.75 32-6.25 46.5-12.5z"></path>
        </svg>

      </a>
      <a class="social__a" target="_blank" rel="noopener" aria-label="Link to Troll Trader's Instagram page" href="https://www.instagram.com/trolltrader/">
        <!-- <span class="icon-instagram"></span> -->
        <svg class="instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 448">
          <path d="M288 224c0-35.25-28.75-64-64-64s-64 28.75-64 64 28.75 64 64 64 64-28.75 64-64zM322.5 224c0 54.5-44 98.5-98.5 98.5s-98.5-44-98.5-98.5 44-98.5 98.5-98.5 98.5 44 98.5 98.5zM349.5 121.5c0 12.75-10.25 23-23 23s-23-10.25-23-23 10.25-23 23-23 23 10.25 23 23zM224 66.5c-28 0-88-2.25-113.25 7.75-8.75 3.5-15.25 7.75-22 14.5s-11 13.25-14.5 22c-10 25.25-7.75 85.25-7.75 113.25s-2.25 88 7.75 113.25c3.5 8.75 7.75 15.25 14.5 22s13.25 11 22 14.5c25.25 10 85.25 7.75 113.25 7.75s88 2.25 113.25-7.75c8.75-3.5 15.25-7.75 22-14.5s11-13.25 14.5-22c10-25.25 7.75-85.25 7.75-113.25s2.25-88-7.75-113.25c-3.5-8.75-7.75-15.25-14.5-22s-13.25-11-22-14.5c-25.25-10-85.25-7.75-113.25-7.75zM416 224c0 26.5 0.25 52.75-1.25 79.25-1.5 30.75-8.5 58-31 80.5s-49.75 29.5-80.5 31c-26.5 1.5-52.75 1.25-79.25 1.25s-52.75 0.25-79.25-1.25c-30.75-1.5-58-8.5-80.5-31s-29.5-49.75-31-80.5c-1.5-26.5-1.25-52.75-1.25-79.25s-0.25-52.75 1.25-79.25c1.5-30.75 8.5-58 31-80.5s49.75-29.5 80.5-31c26.5-1.5 52.75-1.25 79.25-1.25s52.75-0.25 79.25 1.25c30.75 1.5 58 8.5 80.5 31s29.5 49.75 31 80.5c1.5 26.5 1.25 52.75 1.25 79.25z"></path>
        </svg>
      </a>
    </div>
  </div>
</div>

<?php
// footer
include __DIR__ . ('/includes/footer.php');
?>
