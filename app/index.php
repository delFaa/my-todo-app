<?php  include "./core/request.php";?>

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
					<p>+</p>
				</button>
		</header>
		<!-- END MAIN HEADER -->
	<!-- EDIT HEADER -->


<!--///////////////// CONTENT ////////////////////  -->
	<div class="view">
		<!--/////// MAIN content ////////  -->
	    <section id="main-container">
				<!-- Todo -->
					<ul class="list" id="todo">
						<!-- List items inserted by javascript and ajax -->
					</ul>
				<!-- END Todo -->

				<!-- Done -->
					<ul class="list" id="done">

						<!-- List element -->
                        <li class="list-item">
							<header class="item-header accordion">
								<h2 class="item-title">
									<div class="check"></div>
									<a class="title" href="#">don de sang</a>
								</h2>

								<ul class="item-menu ">
									<li class="menu-element"><a href="#">delete</a></li>
									<li class="menu-element"><a href="#">edit</a></li>
									<li class="menu-element"><a href="#">DONE</a></li>
								</ul>
							</header>

                            <div class="panel">
    							<div class="item-container">
    								<p class="item-content">item description</p>
    							</div>

    							<footer class="item-footer">
    								<p>start at <span class="timespan"></span></p>
    								<p>end at <span class="timespan"></span></p>
    							</footer>
                            </div>
						</li>
						<!-- end list element -->
					</ul>
				<!-- END DONEELEMENTS -->

				<!-- Late -->
					<ul class="list" id="late">

						<!-- List element -->
                        <li class="list-item">
							<header class="item-header accordion">
								<h2 class="item-title">
									<div class="check"></div>
									<a class="title" href="#">rdv medecin</a>
								</h2>

								<ul class="item-menu">
									<li class="menu-element"><a href="#">delete</a></li>
									<li class="menu-element"><a href="#">edit</a></li>
									<li class="menu-element"><a href="#">DONE</a></li>
								</ul>
							</header>

                            <div class="panel">
    							<div class="item-container">
    								<p class="item-content">item description</p>
    							</div>

    							<footer class="item-footer">
    								<p>start at <span class="timespan"></span></p>
    								<p>end at <span class="timespan"></span></p>
    							</footer>
                            </div>
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
			<section id="edit-container">
				<form action="./core/request.php" method="post" id="task_edit">
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
						<input type="date" name="task_start_timestamp" value="">

						<!-- <div id="start-picker" name="task_start_timestamp"></div> -->
					</div>

					<div class="end">
						<h2>END AT</h2>
						<input type="date" name="task_end_timestamp" value="">
						<!-- <div id="end-picker" name="task_end_timestamp"></div> -->
					</div>
					<input type="submit" name="insertTask" value="insert">
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
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/anim.js"></script>


<!-- END BODY -->
</body>
</html>
