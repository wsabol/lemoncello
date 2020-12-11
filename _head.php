<?
require_once("_php_common.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limoncello Something<?=$page_title == "" ? "" : " - ".$page_title?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/css/OverlayScrollbars.min.css'>
    <link rel="preconnect" href="//fonts.gstatic.com">
    <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="//unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=auto_version("assets/style.css")?>">
    <script src='<?=auto_version("assets/_common.js")?>'></script>
</head>

<body>
    <!-- START NAV -->
    <nav class="navbar">
        <div class="container">

            <div class="navbar-brand">
              <a class="navbar-item" href="/">
                    <img src="favicon_io/apple-touch-icon.png" alt="Logo">
                    <span class="cursive has-text-darkish" style="
                      padding-left:4px;
                      font-size: 20px;
                      font-weight: bold;
                    ">LimoncelloSomething</span>
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
                </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item is-active" href="/">
                            Home
                        </a>
                    <a class="navbar-item" href="/recipes_dashboard.php">
                            Recipes
                        </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                                Making
                            </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="/make.php">
                                    Recipe Wizard
                                </a>
                            <a class="navbar-item" href="/evaluate.php">
                                    ABV/Sweetness Calculator
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->

    <section class="hero is-medium is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
              <h1 class="title cursive has-text-darkish">Lemoncello Something</h1>
              <!--<h1 class="subtitle"><?=$page_title?></h1>-->
            </div>
        </div>
    </section>
