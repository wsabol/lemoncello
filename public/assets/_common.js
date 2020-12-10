const density_sugar_in_solution = 1.58; // g/mL
const density_sugar_granular = 200; // g/cup
const density_alcohol = 0.7893; // g/mL

Number.prototype.formatAmount = function(d, t){
	var n = this;
  let c = 3;
  if (n > 100) {
    c = 0;
  } else if (n > 50) {
    c = 1;
  } else if (n > 10) {
    c = 2;
  }
	d = d||".";
	t = t||",";
	var s = n < 0 ? "-" : "";
	var i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c)));
	var j = (j = i.length) > 3 ? j % 3 : 0;
	return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

String.prototype.formatAmount = function(d, t){
	return parseFloat(this).formatAmount(d, t);
};

function parseAmount(target) {
	return parseFloat(String(target||'').replace(/,/g, ''));
}
