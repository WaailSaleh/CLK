<?php 


if(isset($_POST['method']) && !empty($_POST['method'])) {
  
    $method = $_POST['method'];
    switch ($method) {
        case 'Enroll':
            Enroll();
            break;
        case 'newStudent':
            
            newStudent();
            break;
        case 'Submit Quiz':
            SubmitQuiz();
            break;
        case 'SubmitAnswer':
            SubmitAnswer();
            break;
        default:
            # code...
            break;
    }

}

function findCourse()
{
      require_once 'connect.php';
    require 'course.php';
    $course = $_POST['Search'];
    $query = " Select Code from CourseList where Code Like '". $course ."%'  ;";
      $response = @mysqli_query($conn, $query);
 if ($response) {
    $array = array();
     while ($row = mysqli_fetch_array($response))
        {
           $array[] = $row;
        }
         
           echo json_encode($array);
 }
}

function SubmitAnswer()
{   
  require_once 'connect.php';
    require 'Answer.php';
    $Correct;
    $QuizID       = $_POST['QuizID'];
    $Code       = $_POST['Code'];
    $QuestionID  = $_POST['QuestionID'];
    $StudentID      = $_POST['StudentID'];
    $Choice      = $_POST['Choice'];
    $query =" SELECT Correct FROM Questions where QuestionID = " . $QuestionID .";";
    $response = @mysqli_query($conn, $query);
    if ($response) {
    $row = mysqli_fetch_array($response);
    $Correct = $row['Correct'] == $Choice;
                }
    $query = " INSERT INTO Answers(QuizID,Code,QuestionID,StudentID,Choice,Correct) Values (". $QuizID . "," . $Code . "," . $QuestionID . "," . $StudentID . "," . $Choice .",".$Correct.");";
    $response = @mysqli_query($conn, $query);
 if ($response) {
     echo $query ."worked";
 }
}

function newStudent()
{
      require_once 'connect.php';

    $Student = $_POST['StudentName'];

    $Program = $_POST['Program'];

    $query = "INSERT INTO Students (Student,Program) VALUES ('{$Student}','{$Program}'); ";
   
   
   if (mysqli_query($conn, $query)) {
    $last_id = mysqli_insert_id($conn);
    echo  $last_id ;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}




function SubmitQuiz()
{  require_once 'connect.php';
   
    $QuizID       = $_POST['QuizID'];
    $Code       = $_POST['Code'];
    $StudentID  = $_POST['StudentID'];
    $Total      = $_POST['Total'];
    $Result     = $_POST['Result'];
    $Title      = $_POST['Title'];
    
    
    $query = 
    "INSERT INTO Quizzes(QuizID,Code,StudentID,Total,Result,Title) VALUES ( " . $QuizID ." , " . $Code . " , "  .$StudentID. " , " .$Total." , " . $Result . " , '". $Title . "');";
 if (mysqli_query($conn, $query)) {
    $last_id = mysqli_insert_id($conn);
    echo "New Quiz Submitted successfully, Your QuizID is : ". $last_id ;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}



function Enroll()
{
    
  require_once 'connect.php';
    require 'Course.php';
    $StID = $_POST['StudentID'];
    $StudentName = $_POST['StudentName'];
    $Teacher = $_POST['Teacher'];
    $School = $_POST['School'];
    $Code = $_POST['Code'];
    $Title = $_POST['Title'];
    $query = " SELECT * FROM CourseList where CourseID = {$Code};"
    $response = @mysqli_query($conn, $query);
         if ($response) {
                $row = mysqli_fetch_array($response);
             $Teacher = $row["Teacher"];
             $Title =$row["Title"];    
            }
    $query = "
    INSERT INTO Courses(StudentID,Student,Teacher,Code,Title) VALUES ( " . $StID . " , '" .$StudentName. "' , '" .$Teacher. "' , '" .$Code. " , '" .$Title."');";
   if (mysqli_query($conn, $query)) {
    $last_id = mysqli_insert_id($conn);
    echo "New Student created successfully, Your ID is : ". $last_id ;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

 ?>