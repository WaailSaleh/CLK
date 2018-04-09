<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iPoll - Group 43</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="https://fonts.googleapis.com/css?family=Imprima" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></scrip
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
</head>
<body>
	<header>
		<div id="header-inner">
			<a href="index.html" id="logo"></a>
			<nav>
				<a href="#" id="menu-icon"></a>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="selCourse.html">Register a Course</a></li>
					<li><a href="poll.html" class="current">Start Polling</a></li>
					<li><a href="#">Export Results</a></li>
					<li><a href="editCourse.html">Edit a Course</a></li>
					<li><a href="#">Take Attendance</a></li>
				</ul>
			</nav>
		</div>
	</header>
<!-- Header Finished -->

	<section class="banner">
		<div class="banner-inner">
			<img src="img/iPoll.png">
		</div>
		<div id="Login">
				<h3>Fill in Info</h3>
				
					
				New Student
				<input type="text" id="StudentName"  placeholder="StudentName">
				<br>Program:
				<input type="text" id="Program"  placeholder="Program">
				 <button id="NewStudent"> Submit </button>
				
		</div>
		<div id="courseMake">
				<h3>Fill in Course Info</h3>
				
					
				Course Code
				<input type="Number" id="CoursecodeIn"  placeholder="Code">
				<br>Title:
				<input type="text" id="TitleIn"  placeholder="Title">
				<br>Teacher:
				<input type="text" id="TeacherIn"  placeholder="teacher">
				 <button id="MakeCourse"> Submit </button>
		</div>
		<div id="EnrollDiv">
				<h3>Fill in Course Info</h3>
				
					
				Course Code
				<input type="Number" id="enrollcode"  placeholder="Code">
				 <button id="Enroll"> Submit </button>
		</div>
		<div id="QuizMake">
				<h3>Fill in Quiz Info</h3>
				
					
				Course Code
				<input type="Number" id="Quizcode"  placeholder="Code">
				<br>Title:
				<input type="text" id="QuizTitle"  placeholder="Title">
				<br>Total:
				<input type="Number" id="Total"  placeholder="Total">
				<br>Weight:
				<input type="Number" id="Weight"  placeholder="Weight">
				<br>Timer in minutes:
				<input type="Number" id="timer"  placeholder="Timer">
				<br>Redo: 
				<br> True :<input type="radio" name="Redo" value=true >
				<br> False:<input type="radio" name="Redo" value=false >
				 <br> <button id="MakeQuiz"> Submit </button>
		</div>
	</section>
<!-- Banner Finished -->

<footer>
	<p>Developed by: Rafael Natividad, Waail Saleh, Brandon Holmes, Liyan Al</p>
	<p>&copy; Group 43</p>
			
</footer>
<!-- Footer Finished -->
  <script src="test.js"></script>
</body>
</html>