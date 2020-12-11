<?
require_once("_php_common.php");

$page_title = "ABV/Sweetness Calculator";
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
                        <p class="title article-title"><?=$page_title?></p>
                    </div>
                </div>
                <div class="content article-body">
                  <p class="text">So you made some limoncello. How is it going to taste? How strong is it really?
                    This tool will calculate the properties of your (hopefully) delicious limoncello. </p>

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
                      <label class="label">Sugar</label>
                      <div class="field has-addons">
                        <div class="control is-expanded">
                          <input class="input" id="sugar" type="text" value="700" placeholder="">
                        </div>
                        <div class="control">
                          <div class="select">
                            <select name="sugar_coeff">
                              <option value="1.58" selected>g</option>
                              <option value="0.0079">cup</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="field">
                      <label class="label">Water</label>
                      <div class="field has-addons">
                        <div class="control is-expanded">
                          <input class="input" id="water" type="text" value="6.25" placeholder="">
                        </div>
                        <div class="control">
                          <div class="select">
                            <select name="water_coeff">
                              <option value="0.00416666667" selected>cup</option>
                              <option value="0.03381413">oz</option>
                              <option value="0.001">L</option>
                              <option value="1">mL</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <hr />

                    <p class="title" >%ABV: <span id="abv_desired" class="pull-right"></span></p>

                    <div class="field">
                      <label class="label">
                        Dry <span class="pull-right">Sweet</span>
                      </label>
                      <div class="control">
                        <div class="slidecontainer">
                          <input type="range" min="<?=$sweet->min()?>" value="<?=$sweet->std()?>" max="<?=$sweet->max()?>" class="slider" id="sweetness" readonly disabled>
                        </div>
                      </div>
                      <p class="help is-info is-hidden">
                        Desired % alcohol by volume of final product
                      </p>
                    </div>

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
<script defer type="text/javascript" src="assets/evaluate.js"></script>

  <?
  require_once("_footer.php");
  ?>
