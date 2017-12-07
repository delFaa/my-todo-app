/////AJAX

	// Requete POST, instancier objet XHR
	var ajax = new XMLHttpRequest();

	/*préciser qu'il s'agit de données provenant d'un formulaire (même si, à la base, ce n'est pas le cas)*/
	ajax.open("POST", "./core/request.php", true);
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// parametres de requete
	ajax.send('getAllTask');
	// ajax.send("allTasks = true") parce que dans request on demande que Alltasks soit isset
	/* il nous faut spécifier une fonction de callback afin de savoir quand la requête s'est terminée.
  Pour cela, l'objet XHR possède un événement nommé readystatechange */
	ajax.onreadystatechange = function() {
	  // Caso o state seja 4 e o http.status for 200, é porque a requisiçõe deu certo.
		if (this.readyState == 4 && this.status == 200) {
			var alldata = JSON.parse(this.responseText);
	    // Return from Ajax
			console.log(alldata);
			for (var i = 0; i < alldata.length; i++) {
				placeListItem(alldata[i]);
			}
		}
	}


function placeListItem (task) {
  let section = document.getElementById('todo');

  section.innerHTML +='<li class="list-item" id="'+task.task_id+'">'
  								+ '<header class="item-header accordion">'
  									 + '<h2 class="item-title">'
  										+'<div class="check"></div>'
  										+'<a class="title" href="#">'+task.task_title+'</a>'
  									+'</h2>'
  									+'<ul class="item-menu ">'
  										+'<li class="menu-element" name"deleteTask" method="post"><a href="#">delete</a></li>'
  										+'<li class="menu-element" name"editTask" method="post"><a href="#">edit</a></li>'
  										+'<li class="menu-element" name"doneTask"><a href="#">DONE</a></li>'
  									+'</ul>'
  								+'</header>'

  	                            +'<div class="panel">'
  	    							+'<div class="item-container">'
  	    								+'<p class="item-content">'+task.task_description+'</p>'
  	    							+'</div>'

  	    							+'<footer class="item-footer">'
  	    								+'<p>start at <span class="timespan">'+task.task_start_timestamp+'</span></p>'
  	    								+'<p>end at <span class="timespan">'+task.task_end_timestamp+'</span></p>'
  	    							+'</footer>'
  	                            +'</div>'
  							+'</li>';
}

// ajax.open("POST", "./core/request.php", true);
// ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//
// // Seta paramêtros da requisição e envia a requisição
// ajax.send("getTask=true");
// // ajax.send("getAllTask = ")
// // Cria um evento para receber o retorno.
// ajax.onreadystatechange = function() {
//   // Caso o state seja 4 e o http.status for 200, é porque a requisiçõe deu certo.
// 	if (ajax.readyState == 4 && ajax.status == 200) {
// 		var task = ajax.responseText;
//     // Retorno do Ajax
// 		console.log(task);
// 	}
// }

// // Object AJAX
// class Ajax {
// 	constructor(){
// 		this.ajaxUrl = './core/request.php';
// 	};
// 	// Method Post : action sur la bdd, callback tjr le même: Si Ok, relance l'app!
// 	post(request){
// 		return this.connect(request,'POST');
// 	};
// 	// Method Get : lecture base de donné
// 	get(){
// 		return this.connect('','GET');
// 	};
// 	// Method Connect : Execute un GET ou un POST.
// 	connect(request,method){
// 		var ajax = new XMLHttpRequest();
// 		ajax.open(method, this.ajaxUrl, true);
// 		if (method=='POST') ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// 		ajax.send(request);
// 		ajax.onreadystatechange = function() {
// 			if (ajax.readyState == 4 && ajax.status == 200) {
// 				// CallBack App.LoadTasks
// 				// @param la réponse du serveur en format Ajax
// 				 App.loadTasks(JSON.parse(this.responseText));
// 			}
// 		};
// 	};
// }
