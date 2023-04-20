<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eintracht Halfing</title>
    <!-- styles -->
    <link rel="stylesheet" href="./styles/basics.css" />
    <link rel="stylesheet" href="./styles/ueber_uns.css" />
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="stylesheet" href="./styles/navbar_mobile.css" />
    <link rel="stylesheet" href="./styles/landing.css" />
    <!-- scripts -->
    <script defer src="https://kit.fontawesome.com/12bc7dd6b9.js" crossorigin="anonymous"></script>
    <script defer src="./scripts/navbar.js"></script>
    <script defer src="./scripts/landing.js"></script>
  </head>
  <body>
    <?php  include __DIR__ . "/scripts/functions.php"; ?>
    <header>
      <?php  include __DIR__ . "/components/navbar.php"; ?>
    </header>
    <main>
      <?php include __DIR__ . "/components/landing.php"; ?>
      <?php include __DIR__ . "/components/ueber_uns.php"; ?>
      <?php include __DIR__ . "/components/aktuelles.php"; ?>
      <?php include __DIR__ . "/components/sportliches.php"; ?>
      <?php include __DIR__ . "/components/impressum.php"; ?>
    </main>
  </body>
</html>
