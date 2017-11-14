"use strict";

// pass from main to edit

var editContainer=document.getElementById('goToEdit');

editContainer.addEventListener('click',
	function (){
		if (this.id == 'goToEdit'){
			document.getElementById('edit-container')		.style.left = '0';
			document.getElementById('edit-container')		.style.right= '0';
			document.getElementById('main-container')		.style.left= '-100%';
			document.getElementById('edit-footer')			.style.left = '0';
			document.getElementById('edit-footer')			.style.right = '0';

			this.id = 'goToMain';
		}
		else{
			document.getElementById('main-container')		.style.left = '0';
			document.getElementById('main-container')		.style.right = '0';
			document.getElementById('edit-container')		.style.left = '100%';
			document.getElementById('edit-container')		.style.right= '0';
			document.getElementById('main-footer')			.style.left = '0';
			document.getElementById('main-footer')			.style.right = '0';


			this.id = 'goToEdit';
		}
	}
)

// create date picker in edit
var config = {
	target: 'start-picker'
};
var myDatepicker = new MtrDatepicker(config);

var config = {
	target: 'end-picker'
};
var myDatepicker = new MtrDatepicker(config);
