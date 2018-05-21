<?php
/**
 * Template: displays all of the <head> section and everything up until <div class="content">
 */
?>

<?php $dir = __DIR__ ?>

<!DOCTYPE html>
<html lang="en-gb" prefix="og: http://ogp.me/ns">
  <head>
    <?php include $dir . ('/../analyticstracking.php'); ?>
    <?php include $dir . ('/schema.php'); ?>
    <!-- meta data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0065ad">
    <meta name="description" content="The UK's leading Wargames retailer and eBay's largest worldwide seller of second-hand Warhammer.">
    <meta name="referrer" content="origin-when-crossorigin">
    <?php include $dir . ('/social.php') ?>
    <title>Troll Trader</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="assets/css/style.min.css?v=1.1.0">
  </head>
  <body>
