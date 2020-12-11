

(function() {

    // var slider = document.getElementById("sweetness");
    // var output = document.getElementById("output");
    // output.innerHTML = slider.value; // Display the default slider value
    //
    // // Update the current slider value (each time you drag the slider handle)
    // slider.oninput = function() {
    //   output.innerHTML = this.value;
    // }


    document.getElementById('liquor').addEventListener('change', function(){
      this.value = parseInt(this.value);
      updateSpecs();
    });
    document.getElementById('abv_liquor').addEventListener('change', function(){
      let val = parseAmount(this.value);
      if (val < 1) val *= 100;
      this.value = val.toFixed(1);
      updateSpecs();
    });
    document.getElementById('sugar').addEventListener('change', function(){
      let val = parseAmount(this.value);
      this.value = val.formatAmount();
      updateSpecs();
    });
    document.getElementById('water').addEventListener('change', function(){
      let val = parseAmount(this.value);
      this.value = val.formatAmount();
      updateSpecs();
    });
    document.querySelectorAll('[name=sugar_coeff]').forEach(function(el){
      el.addEventListener('change', updateSpecs);
    });
    document.querySelectorAll('[name=water_coeff]').forEach(function(el){
      el.addEventListener('change', updateSpecs);
    });
    updateSpecs();

})();

function updateSpecs() {
  let inp = Object.values(getInputs());
  // console.log(inp)
  let specs = evaluate(...inp);
  // console.log(specs)

  for ( let k in specs ) {
    let unit_lookup = k;
    if (k == 'totallc') unit_lookup = 'water';

    let unit_el = document.querySelector('[name='+unit_lookup+'_coeff]');
    let unit_coeff = 1;
    if (unit_el) unit_coeff = parseAmount(unit_el.value);

    specs[k] *= unit_coeff;

    let output_el = document.getElementById(k);
    if (output_el) {
      if (output_el.tagName == 'INPUT') output_el.value = specs[k];
      else output_el.innerText = specs[k].formatAmount();
    }
  }

}

function getInputs() {
  let sugar_coeff = document.querySelector('[name=sugar_coeff]').value;
  let water_coeff = document.querySelector('[name=water_coeff]').value;

  return {
    liquor: +document.getElementById('liquor').value,
    abv_l: document.getElementById('abv_liquor').value / 100,
    sugar: parseAmount(document.getElementById('sugar').value) / sugar_coeff,
    water: parseAmount(document.getElementById('water').value) / water_coeff
  }
}

function evaluate(liquor, abv_l, s, w) {
  const a = liquor * abv_l;
  const abv_d = a / (liquor + w + s);
  const c = s / (liquor + w);
  let specs = {
    abv_desired: abv_d * 100,
    sweetness: c * 1000,
    totallc: s + liquor + w,
    density: (density_alcohol*a + (liquor-a) + w + density_sugar_in_solution*s) / (a + (liquor-a) + w + s)
  };
  specs.Bx = 182.4601*Math.pow(specs.density, 3)-775.6821*Math.pow(specs.density, 2)+1262.7794*specs.density-669.5622;
  specs.plato = 135.997*Math.pow(specs.density, 3)-630.272*Math.pow(specs.density, 2)+1111.14*specs.density-616.868;
  return specs;
}
