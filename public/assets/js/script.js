// Limite le choix à 3
let checkboxes = document.getElementsByClassName('categories');

let i = 0,
	l = checkboxes.length;

for (; i<l; i++)
	checkboxes[i].addEventListener("change", function (){
		if (document.querySelectorAll(":checked").length > 3)
			this.checked = false;
	}, false);