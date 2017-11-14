"use strict";
// create date picker in edit
// var config = {
// 	target: 'start-picker'
// };
// var myDatepicker = new MtrDatepicker(config);
//
// var config = {
// 	target: 'end-picker'
// };
// var myDatepicker = new MtrDatepicker(config);

// pass from main to edit




// console.log(html);
document.getElementById('goToEdit').addEventListener('click',
	function (){
		console.log('mdr');
		if (this.id == 'goToEdit'){
			document.getElementById('edit-container')		.style.left = '0';
			document.getElementById('main-container')		.style.left= '-100%';
			console.log('haha');
			this.id = 'goToMain';
		}
		else{
			document.getElementById('edit-container')		.style.left = '100%';
			document.getElementById('main-container')		.style.left = '0';
			console.log('lol');
			this.id = 'goToEdit';
		}
	}
)
