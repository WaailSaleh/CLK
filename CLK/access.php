<?php

if(isset($_POST['method']) && !empty($_POST['method'])) {
    
    $method = $_POST['method'];
     switch ($method) {
        case 'addQuestion':
            addQuestion();
            break;
        case 'MakeCourse':
            MakeCourse();
            break;
        case 'pauseQuiz':
            pauseQuiz();
            break;
        case 'startQuiz':
            startQuiz();
            break;
        case 'Show':
            Show();
            break;
        case 'makeQuiz':
            makeQuiz();
            break;
        default:
            # code...
            break;
    }
    mysqli_close($conn);
  
}


function addQuestion(){
    require 'Questions.php';
require_once 'connect.php';
    $QuizID       = $_POST['QuizID'];
    $Code       = $_POST['Code'];
    $Text  = $_POST['Text'];
    $one      = $_POST['one'];
    $two     = $_POST['two'];
    $three      = $_POST['three'];
    $four     = $_POST['four'];
    $Correct      = $_POST['Correct'];
    
    $query = 
    "INSERT INTO Questions(QuizID,Code,Text,one,two,three,four,Correct) VALUES 
    ( " . $QuizID ." , " . $Code . " , '"  .$Text. "' , '" .$one."' , '" . $two . "' , '". $three . "' , '". $four . "' , " . $Correct ." );";
 $response = @mysqli_query($conn, $query);
 if ($response) {
     echo $query ."worked";
 }

}
function Show()
{require_once 'connect.php';

        require 'Student.php';
        $query = " Select * from Students;";
        $response = @mysqli_query($conn, $query);
         if ($response) {
             $array = array();
          while ($row = mysqli_fetch_array($response))
        {
           $array[] = $row;
        }
        echo $array;
}
}
function makeQuiz()
{
   
   require_once 'connect.php';
    $Code       = $_POST['Code'];
    $Weight     = $_POST['Weight'];
    $Total      = $_POST['Total'];
    $time        = $_POST['timer'];
    $Title      = $_POST['Title'];
    $Redo       = $_POST['Redo'];
   
    $query = 
    "INSERT INTO QuizList(Code,Weight,Total,`time`,Title,Redo,Running) VALUES ({$Code},{$Weight},{$Total},{$Timer},'{$Title}',{$Redo}, false );";
  if (mysqli_query($conn, $query)) {
   $last_id = mysqli_insert_id($conn);
    echo "New Quiz created successfully, Your ID is : ". $last_id ;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}

function pauseQuiz()
{require_once 'connect.php';
    $QuizID = $_POST['QuizID'];
    $query = "UPDATE QuizList set Running = false where QuizID =" . $QuizID . ";";
    if (mysqli_query($conn, $query)) {
  
    echo $QuizID . " Paused ";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
function startQuiz()
{require_once 'connect.php';
    $QuizID = $_POST['QuizID'];
    $query = "UPDATE QuizList set Running = true where QuizID =" . $QuizID . ";";
     if (mysqli_query($conn, $query)) {
  
    echo $QuizID . " Paused ";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

function MakeCourse()
{
    require_once 'connect.php';
   
    $CourseID = $_POST['code'];

    $Teacher = $_POST['Teacher'];

    $Title = $_POST['Title'];
    $query = "
    INSERT INTO CourseList(CourseID,Teacher,Title) VALUES (  {$CourseID}  , '{$Teacher}' , '{$Title}');";
   $response = @mysqli_query($conn, $query);
 if ($response) {
     echo 1 ;
 }else  echo mysqli_error();

mysqli_close($conn);
}




