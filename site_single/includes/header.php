<?php
/**
 * Template: displays all of the <head> section and everything up until <div class="content">
 */
?>

<?php
// config
require_once __DIR__ . ('/config.php');
?>

<!DOCTYPE html>
<html lang="en-gb" prefix="og: http://ogp.me/ns">
  <head>
    <!-- meta data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0065ad">
    <meta name="description" content="The UK's leading Wargames retailer and eBay's largest worldwide seller of second-hand Warhammer.">
    <meta name="referrer" content="origin-when-crossorigin">
    <?php include __DIR__ . ('/social.php') ?>
    <title>Troll Trader</title>
    <!-- styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="preload" as="style">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="assets/css/style.min.css?v=1.1.0" media="all">
    <!-- google analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-70459575-1"></script>
    <!-- schema -->
    <?php include __DIR__ . ('/schema.php'); ?>
  </head>
  <body>
