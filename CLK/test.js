$(document).ready(function() {
if(Cookies.get("StudentID") !== null)
{
$("#Login").html(`
			<div class="alert alert-success">
  <strong>Welcome Back!</strong> `+ Cookies.get("Student")+`, You're Student ID is ` + Cookies.get("StudentID") + `
</div>	`); 
}

});
$("#NewStudent").click(function() {
	
	var stName = $("#StudentName").val();
	var program = $("#Program").val();
	$.post("StudentAccess.php",
	{
		method: "newStudent",
		StudentName : stName,
		Program : program
	},
	 function(data) { 
	 	data = parseInt(data);
		if ($.isNumeric(data)) {
		$("#Login").html(`
			<div class="alert alert-success">
  <strong>Success!</strong> You're Student ID is` + data + `
</div>	`); 
		Cookies.set("StudentID", data);
		Cookies.set("Student", stName);
		Cookies.set("Program", program);
	} else {
		$("#Login").prepend(`<div class="alert alert-danger">
  <strong>Danger!</strong> Please try to login again
</div>`);
	}


	});
});
$("#MakeCourse").click(function() {
	
	var Code = parseInt($("#CoursecodeIn").val());
	var Title = $("#TitleIn").val();
	var teacher = $("#TeacherIn").val();
	$.post("access.php",
	{
		method: "MakeCourse",
		code : Code,
		Teacher : teacher,
		Title : Title
	},
	 function(data) { 
	 	
		if (data == 1) {
		$("#courseMake").html(`
			<div class="alert alert-success">
  <strong>Success!</strong> 
	</div>	`); 
	} else {
		$("#courseMake").prepend(`<div class="alert alert-danger">
  <strong>Danger!</strong> Course Not Made :c ` + data + `
</div>`);
	}


	});
});

$("#Enroll").click(function() {
	
	var Code = parseInt($("#enrollcode").val());


	$.post("StudentAccess.php",
	{
		method: "Enroll",
		Code : Code,
		StudentID : Cookies.get("StudentID"),
		StudentName : Cookies.get("Student")
		
	},
	 function(data) { 
	 	
		if (data == 1) {
		$("#EnrollDiv").html(`
			<div class="alert alert-success">
  <strong>Success!</strong> You've inrolled to ` +  Code+`
</div>	`); 
	} else {
		$("#EnrollDiv").prepend(`<div class="alert alert-danger">
  <strong>Danger!</strong> You Havent Enrolled into Not ` +Code+` Beacause ` + data + `
</div>`);
	}


	});
});
$("#MakeQuiz").click(function() {
	
	var Code = parseInt($("#QuizCode").val());
	var Total = parseInt($("#Total").val());
	var Weight = parseInt($("#Weight").val());
	var Timer = parseInt($("#Timer").val());
	var Redo = $("input[name=Redo]:checked").val();

	$.post("StudentAccess.php",
	{
		method: "MakeQuiz",
		Code : Code,
		Total:Total,
		Weight:Weight,
		Timer:Timer,
		Redo:Redo,
		Title: $("#QuizTitle").val()
		
	},
	 function(data) { 
	 	
		if (data == 1) {
		$("#QuizMake").html(`
			<div class="alert alert-success">
  <strong>Success!</strong> You've inrolled to ` +  Code+`
</div>	`); 
	} else {
		$("#QuizMake").prepend(`<div class="alert alert-danger">
  <strong>Danger!</strong> You Havent Enrolled into Not ` +Code+` Beacause ` + data + `
</div>`);
	}


	});
});
