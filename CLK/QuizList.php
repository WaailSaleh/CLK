<?php 
 class QuizList {
	var $QuizID;
	var $Code;
    var $Weight;
    var $Total ;
    var $Result;
    var $Title ;
    var $Redo;
    var $Running;
	var function __construct(
	$QuizID,
	$Code,
    $Weight,
    $Total ,
    $Result,
    $Title,
	$Redo,
	$Running
	) 
    {
	$this->QuizID = $QuizID;
	$this->Code = $Code;
	$this->Weight =  $Weight;    
	$this->Total = $Total;  
	$this->Result = $Result;
	$this->Title = $Title;    
	$this->Redo = $Redo;    
	$this->Running = $Running;    
	}
}
?>
