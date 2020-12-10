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
        if (info.length > 0) info[0].classList.remove('is-hidden');
      });
      c.addEventListener('blur', function() {
        var field = this.closest('.field');
        var info = field.querySelectorAll(".help");
        if (info.length > 0) info[0].classList.add('is-hidden');
      });
    }

})();
