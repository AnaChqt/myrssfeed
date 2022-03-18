// Limite le choix à 3
let checkboxes = document.getElementsByClassName('categories');

let i = 0,
	l = checkboxes.length;

for (; i<l; i++)
	checkboxes[i].addEventListener("change", function (){
		if (document.querySelectorAll(":checked").length > 3)
			this.checked = false;
	}, false);

// pour le thème dark
let toggle_btn = document.getElementById('mod');
let body = document.getElementsByTagName('body')[0];

let dark_theme_class = 'dark';

toggle_btn.addEventListener('click', function() {
    if (body.classList.contains(dark_theme_class)) {
        body.classList.remove(dark_theme_class);
    }
    else {
        body.classList.add(dark_theme_class);
    }
});