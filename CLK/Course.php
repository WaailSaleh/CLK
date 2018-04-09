<?php 
 class Course {
	var $CourseID;
	var $StID;
    var $StudentName;
    var $Teacher ;
    var $School;
    var $Code;
    var $Title ;
	var function __construct(
	$CourseID,
	$StID,
    $StudentName,
    $Teacher ,
    $School,
    $Code,
    $Title ) 
    {
	$this->CourseID = $CourseID;
	$this->StID = $StID;
	$this->StudentName =  $StudentName;    
	$this->Teacher = $Teacher;  
	$this->School = $School;
	$this->Code =$Code;
	$this->Title = $Title;    
	}
}
?>
