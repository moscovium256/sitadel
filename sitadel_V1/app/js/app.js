$.getScript('md5.js', function () {          
      MD5();  
});
var x = false;
function show(id) {
	var chal = document.getElementsByClassName("challenge");
	var Boxchal = document.getElementsByClassName("challengeBox");


	x = !x;
	if (x) {
		chal[id-1].style.display = '';
		Boxchal[id-1].style.border = '2px solid #000';
		Boxchal[id-1].style.boxShadow = "0 0 5px 2px rgba(186, 140, 0, 0.8)"; 
	}else{
		chal[id-1].style.display = 'none';
		Boxchal[id-1].style.border = '2px solid #00F7A7';
		Boxchal[id-1].style.boxShadow = "0 0 5px 2px rgba(0, 140, 186, 0.8)";
	}
}

function anser(id, code) {
	var repe = document.getElementsByClassName("rep");
	if (MD5(repe[id-1].value) == code) {
		//alert("Good Job");
		repe[id-1].style.border = '2px solid green';
	}else{
		repe[id-1].style.border = '2px solid red';
	}
}
