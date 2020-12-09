<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lemoncello Recipe - Ratio Calculator</title>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon.png">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/css/OverlayScrollbars.min.css'>
    <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="//unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <!-- START NAV --
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">

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
                    <a class="navbar-item">
                            Examples
                        </a>
                    <a class="navbar-item">
                            Features
                        </a>
                    <a class="navbar-item">
                            Team
                        </a>
                    <a class="navbar-item">
                            Archives
                        </a>
                    <a class="navbar-item">
                            Help
                        </a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                                Account
                            </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                    Dashboard
                                </a>
                            <a class="navbar-item">
                                    Profile
                                </a>
                            <a class="navbar-item">
                                    Settings
                                </a>
                            <hr class="navbar-divider">
                            <div class="navbar-item">
                                Logout
                            </div>
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
                <h1 class="title is-1">Lemoncello</h1>
                <h1 class="subtitle is-3"></h1>
            </div>
        </div>
    </section>


    <div class="container">
        <!-- START ARTICLE FEED -->
        <section class="articles">
            <div class="column is-8 is-offset-2">
                <!-- START ARTICLE -->
                <div class="card article">
                    <div class="card-content">
                      <div class="media">
                            <div class="media-content has-text-centered">
                                <p class="title article-title">Ratios Calculator</p>
                                <div class="tags has-addons level-item">
                                    <span class="tag is-rounded is-info">@wsabol</span>
                                    <span class="tag is-rounded">Dec 08, 2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="content article-body">
                          <p class="text">A major struggle in tackling lemoncello is where to start when preparing the simple syrup to get your desired sweetness and strength.
                            Many recipes say to add the syrup "to taste", but I found this to be incredibly useless advice.</p>
                          <p class="text">This calculator will help achieve the desired sweetness and strength. Its based the many limoncello recipes I found in my quest
                            for the perfect lemoncello recipe and my experience making lemoncello.</p>
                          <p class="text">This calculator will help achieve the desired sweetness and strength. Its based the many limoncello recipes I found in my quest
                            for the perfect lemoncello recipe and my experience making lemoncello.</p>


                          <div class="column is-6 is-offset-3">

                            <div class="field">
                              <label class="label">Liquor (mL)</label>
                              <div class="control">
                                <input class="input" id="liquor" type="text" value="1000" placeholder="1000">
                              </div>
                              <p class="help is-info is-hidden">
                                The quantity of liquor (vodka or grain alcohol)
                              </p>
                            </div>

                            <div class="field">
                              <label class="label">Liquor ABV</label>
                              <div class="control">
                                <input class="input" id="abv_liquor" type="text" value="95" placeholder="95%">
                              </div>
                              <p class="help is-info is-hidden">
                                Liquor % alcohol by volume
                              </p>
                            </div>

                            <div class="field">
                              <label class="label">Desired ABV</label>
                              <div class="control">
                                <input class="input" id="abv_desired" type="text" value="20" placeholder="20%">
                              </div>
                              <p class="help is-info is-hidden">
                                Desired % alcohol by volume of final product
                              </p>
                            </div>

                            <div class="field">
                              <label class="label">
                                Dry <span class="pull-right">Sweet</span>
                              </label>
                              <div class="control">
                                <div class="slidecontainer">
                                  <input type="range" min="280" value="320" max="360" class="slider" id="sweetness">
                                </div>
                              </div>
                              <p class="help is-info is-hidden">
                                Desired % alcohol by volume of final product
                              </p>
                            </div>

                            <hr />

                            <div class="has-text-centered" style="margin-bottom:14px">
                              <div class="control">
                                <label class="radio">
                                  <input type="radio" name="unit_coeff" value=1 >
                                  mL
                                </label>
                                <label class="radio">
                                  <input type="radio" name="unit_coeff" value=240 checked>
                                  cups
                                </label>
                              </div>
                            </div>


                            <p class="title" >Sugar: <span id="sugar" class="pull-right"></span></p>
                            <p class="title" >Water: <span id="water" class="pull-right"></span></p>

                          </div>

                        </div>

                    </div>
                </div>
                <!-- END ARTICLE -->

          </div>
        </section>
        <!-- END ARTICLE FEED -->
        </div>
        <script async type="text/javascript" src="assets/bulma.js"></script>
        <script src='//cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/js/OverlayScrollbars.min.js'></script>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
        //The first argument are the elements to which the plugin shall be initialized
        //The second argument has to be at least a empty object or a object with your desired options
        OverlayScrollbars(document.querySelectorAll("body"), { });
        });
        </script>
</body>

</html>
