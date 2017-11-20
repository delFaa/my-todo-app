<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=1.0">
	<title>ToDoList2</title>
	<link rel="stylesheet" type="text/css" href="style/dist/mtr-datepicker.min.css">
	<link rel="stylesheet" type="text/css" href="style/dist/mtr-datepicker.default-theme.min.css">
	<link rel="stylesheet" href="style.css">
	<!-- FONT -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

</head>

<body>
	<!--///////////////// MAIN PAGE ////////////////////  -->
	<div class="main">
	<!--///////////////// HEADER    ////////////////////  -->

	<!-- MAIN-HEADER -->
		<header id="main-header">
				<h1>MY TODOLIST</h1>
				<button id="goToEdit" type="button" name="button" >
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"><g><g>
						<path class="filler" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/></g></g></svg>
				</button>
		</header>
		<!-- END MAIN HEADER -->
	<!-- EDIT HEADER -->


<!--///////////////// CONTENT ////////////////////  -->
	<div class="view">
		<!-- MAINCONTENT TASKLIST -->
	    <section id="main-container">
				<!-- Todo -->
					<ul class="list" id="todo">
						<!-- List element -->
						<li class="list-item">
							<header class="item-header">
								<h2 class="item-title">
									<div class="check"></div>
									<a class="title" href="#" onclick='showhide()'>chercher un aspirateur</a>
								</h2>
							</header>
						</li>

						<li class="list-item">
							<header class="item-header">
								<h2 class="item-title">
									<div class="check"></div>
									<a class="title" href="#" onclick='showhide()'>donner à manger</a>
								</h2>

								<ul class="item-menu">
									<li class="menu-element"><a href="#">delete</a></li>
									<li class="menu-element"><a href="#">edit</a></li>
									<li class="menu-element"><a href="#">DONE</a></li>
								</ul>
							</header>

							<div class="item-container show">
								<p class="item-content">item description</p>
							</div>

							<footer class="item-footer show">
								<p>start at <span class="timespan"></span></p>
								<p>end at <span class="timespan"></span></p>
							</footer>
						</li>

						<!-- end list element -->
					</ul>
				<!-- END Todo -->

				<!-- Done -->
					<ul class="list" id="done">
						<!-- List element -->
						<li class="list-item">
							<header class="item-header">
								<h2 class="item-title">
									<div class="check"></div>
									<a class="title" href="#">don de sang</a>
								</h2>

								<ul class="item-menu">
									<li class="menu-element"><a href="#">delete</a></li>
								</ul>
							</header>

						</li>
						<!-- end list element -->
					</ul>
				<!-- END DONEELEMENTS -->

				<!-- Late -->
					<ul class="list" id="late">
						<!-- List element -->
						<li class="list-item">
							<header class="item-header">
								<h2 class="item-title">
									<div class="check"></div>
									<a class="title" href="#" >rendez-vous médecin</a>
								</h2>

								<ul class="item-menu">
									<li class="menu-element"><a href="#">delete</a></li>
								</ul>
							</header>

						</li>
						<!-- end list element -->
					</ul>
				<!-- END Late -->
				<!-- MAINFOOTER -->
					<footer id="main-footer">
						<ul>
							<li><a href="#">All Task</a></li>
							<li><a href="#">Todo Tasks</a></li>
							<li><a href="#">Done Tasks</a></li>
						</ul>
					<!-- END MAINFOOTER -->
					</footer>
			<!-- END MainContent -->
			</section>
	<!--///////////////// Edit content ////////////////////  -->
			<!-- Edit content -->
			<section id="edit-container">
		<form action="core/request.php" method="post">
				<a class="clear">clear</a>

				<div class="title">
					<h2>TITLE</h2>
					<input type="text" name="task_title" placeholder="...">
				</div>

				<div class="description">
					<h2>DESCRIPTION</h2>
					<textarea name="task_description" placeholder="description" value="..."></textarea>
				</div>

				<div class="start">
					<h2>START AT</h2>
					<input type="datetime-local" name="task_start_timestamp" value="">

					<!-- <div id="start-picker" name="task_start_timestamp"></div> -->
				</div>

				<div class="end">
					<h2>END AT</h2>
					<input type="datetime-local" name="task_end_timestamp">
					<!-- <div id="end-picker" name="task_end_timestamp"></div> -->
				</div>
				<input type="submit">
			</form>
		<!--  END edit content-->
				<!-- EDIT footer -->
					<footer id="edit-footer">
						<ul>
							<li><a href="#">add and create new</a></li>
							<li><a href="#">add</a></li>
						</ul>
				<!-- END EDIT footer -->
				</footer>
			</section>
	<!-- END CONTENT -->

		<!-- END visible div view -->
	</div>
<!-- END MAINSITE TODOAPP -->

	</div>
	<!--///////////////// END APP ////////////////////  -->

	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="style/dist/mtr-datepicker.min.js"></script>
	<script type="text/javascript" src="script.js"></script>


<!-- END BODY -->
</body>
</html>
