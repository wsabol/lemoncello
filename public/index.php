<?
require_once("_head.php");
?>
<div class="container">
<!-- START ARTICLE FEED -->
<section class="articles">
    <div class="column is-8 is-offset-2">
        <!-- START ARTICLE -->
        <div class="card article">
            <div class="card-content">
              <div class="media">
                    <div class="media-content has-text-centered">
                        <p class="title article-title">Lemoncello Recipe Calculator</p>
                    </div>
                </div>
                <div class="content article-body">
                  <p class="text">A major struggle in tackling lemoncello is where to start when preparing the simple syrup to get your desired sweetness and strength.
                    Many recipes say to add the syrup "to taste", but I found this to be incredibly useless advice.</p>
                  <p class="text">This calculator will help achieve the desired sweetness and strength. Its based the many limoncello recipes I found in my quest
                    for the perfect lemoncello recipe and my experience making them.</p>

                  <br />


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
                        <input class="input" id="abv_desired" type="text" value="30" placeholder="30%">
                      </div>
                      <p class="help is-info is-hidden">
                        Desired % alcohol by volume of final product (24%~38%)
                      </p>
                    </div>

                    <div class="field">
                      <label class="label">
                        Dry <span class="pull-right">Sweet</span>
                      </label>
                      <div class="control">
                        <div class="slidecontainer">
                          <input type="range" min="140" value="175" max="210" class="slider" id="sweetness">
                        </div>
                      </div>
                      <p class="help is-info is-hidden">
                        Desired % alcohol by volume of final product
                      </p>
                    </div>

                    <hr />

                    <div class="has-text-centered" style="margin-bottom:10px">
                      <div class="control">
                        <label class="radio">
                          <input type="radio" name="sugar_coeff" value="1.58" >
                          grams
                        </label>
                        <!--<label class="radio">
                          <input type="radio" name="sugar_coeff" value="1.896" checked>
                          mL (dry)
                        </label>-->
                        <label class="radio">
                          <input type="radio" name="sugar_coeff" value="0.0079" checked>
                          cups (dry)
                        </label>
                      </div>
                    </div>
                    <p class="title" >Sugar: <span id="sugar" class="pull-right"></span></p>

                    <div class="has-text-centered" style="margin-bottom:10px">
                      <div class="control">
                        <label class="radio">
                          <input type="radio" name="water_coeff" value=1 >
                          mL
                        </label>
                        <label class="radio">
                          <input type="radio" name="water_coeff" value="0.00416666667" checked>
                          cups
                        </label>
                      </div>
                    </div>
                    <p class="title" >Water: <span id="water" class="pull-right"></span></p>

                    <hr />

                    <p class="subtitle" >Yield: <span id="totallc" class="pull-right"></span></p>
                    <p class="subtitle" >Density(g/mL): <span id="density" class="pull-right"></span></p>
                    <p class="subtitle" >&deg;Brix: <span id="Bx" class="pull-right"></span></p>

                    <hr />

                  </div>

                  <p class="text">The recipe yield is the total water and liquor plus the volume of sugar in solution.
                    The "dry" units of granulated sugar are approximate based the common 200g/1cup conversion rate.</p>

                </div>

            </div>
        </div>
        <!-- END ARTICLE -->

  </div>
</section>
<!-- END ARTICLE FEED -->
</div>
<script defer type="text/javascript" src="assets/index.js"></script>

  <?
  require_once("_footer.php");
  ?>
