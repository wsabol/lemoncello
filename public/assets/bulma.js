// The following code is based off a toggle menu by @Bradcomp
// source: https://gist.github.com/Bradcomp/a9ef2ef322a8e8017443b626208999c1
(function() {
    var burger = document.querySelector('.burger');
    if (burger !== null) {
      var menu = document.querySelector('#'+burger.dataset.target);
      burger.addEventListener('click', function() {
          burger.classList.toggle('is-active');
          menu.classList.toggle('is-active');
      });
    }


    // var slider = document.getElementById("sweetness");
    // var output = document.getElementById("output");
    // output.innerHTML = slider.value; // Display the default slider value
    //
    // // Update the current slider value (each time you drag the slider handle)
    // slider.oninput = function() {
    //   output.innerHTML = this.value;
    // }

    var controls = document.querySelectorAll('.field .control input');
    for (let c of controls) {
      c.addEventListener('focus', function() {
        var field = this.closest('.field');
        var info = field.querySelectorAll(".help");
        info[0].classList.remove('is-hidden');
      });
      c.addEventListener('blur', function() {
        var field = this.closest('.field');
        var info = field.querySelectorAll(".help");
        info[0].classList.add('is-hidden');
      });
    }

    document.getElementById('liquor').addEventListener('change', function(){
      this.value = parseInt(this.value);
      updateSpecs();
    });
    document.getElementById('abv_liquor').addEventListener('change', function(){
      let val = parseFloat(this.value);
      if (val < 1) val *= 100;
      this.value = val.toFixed(0);
      updateSpecs();
    });
    document.getElementById('abv_desired').addEventListener('change', function(){
      let val = parseFloat(this.value);
      if (val < 1) val *= 100;
      this.value = val.toFixed(0);
      updateSpecs();
    });
    document.getElementById('sweetness').oninput = function() {
      updateSpecs();
      // output.innerHTML = this.value;
    }
    document.querySelectorAll('[name=unit_coeff]').forEach(function(el){
      el.addEventListener('click', updateSpecs);
    })
    updateSpecs();

})();

function updateSpecs() {
  let inp = Object.values(getInputs());
  console.log(inp)
  let specs = calculate(...inp);
  console.log(specs)
  let unit_coeff = document.querySelector('[name=unit_coeff]:checked').value;

  for ( let k in specs ) {
    specs[k] /= unit_coeff;

    if (unit_coeff == 1) {
      specs[k] = specs[k].toFixed(0);
    } else {
      specs[k] = specs[k].toFixed(3);
    }

    document.getElementById(k).innerText = specs[k];
  }

}

function getInputs() {
  return {
    liquor: +document.getElementById('liquor').value,
    abv_l: document.getElementById('abv_liquor').value / 100,
    abv_d: document.getElementById('abv_desired').value / 100,
    c: document.getElementById('sweetness').value / 1000
  }
}

function calculate(liquor, abv_l, abv_d, c) {
  const a = liquor * abv_l;
  const w = a / (abv_d*(1 + c)) - liquor;
  const s = c * (w + liquor);
  const s_dry = s / 0.7;
  return { sugar: s, water: w };
}
