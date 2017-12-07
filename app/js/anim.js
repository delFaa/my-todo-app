"use strict";

// pass from main to edit

var editContainer=document.getElementById('goToEdit');

editContainer.addEventListener('click',
	function (){
		if (this.id == 'goToEdit'){
			document.getElementById('edit-container')		.style.left = '0';
			document.getElementById('edit-container')		.style.right = '0';
			document.getElementById('main-container')		.style.left= '-100%';
			document.getElementById('edit-footer')			.style.left= '0';

			this.id = 'goToMain';
		}
		else if (this.id == 'goToMain'){
			document.getElementById('main-container')		.style.left = '0';
			document.getElementById('edit-container')		.style.left = '100%';
			document.getElementById('main-footer')			.style.left= '0';


			this.id = 'goToEdit';
		}
	}
)

// accordion for different list items:
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
			this.querySelector(".item-menu").style.display = "none";

        } else {
            panel.style.display = "block";
			this.querySelector(".item-menu").style.display = "flex";
        }
    }
};

// App js

// Fichier script.js, qui devra être chargé en bas de votre fichier index.php
// avant la fermeture du body.
// Il comprendra un gros objet app​ qui​ ​aura:
// - Un objet config{ } qui comprendra:
// - Un attribut ajaxUrl
// - Un tableau data[ ] qui comprendra toutes les tâches récupérées
// depuis la bdd.
// Une première méthode: start qui comme son nom l'indique permettra
// de démarrer l'application (app.start();). Cette méthode chargera les tâches
// depuis la bdd en AJAX et les stockera dans notre attribut data.
