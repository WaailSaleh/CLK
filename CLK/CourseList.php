<?php 
 class CourseList {
	var $CourseID;
    var $Teacher ;
    var $Title ;
	var function __construct(
	$CourseID,
    $Teacher ,
    $Title ) 
    {
	$this->CourseID = $CourseID;  
	$this->Teacher = $Teacher;  
	$this->Title = $Title;    
	}
}
?>
