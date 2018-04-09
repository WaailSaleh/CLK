<?php 
 class Questions {
	var $QuestionID;
	var $QuizID;
	var $Code;
    var $Text ;
    var $one;
    var $two ;
    var $three;
    var $four;
    var $Correct;
	var function __construct(
	$QuestionID,
	$QuizID,
	$Code,
    $Text ,
    $one,
    $two,
	$three,
	$four,
	$Correct
	) 
    {
	$this->QuizID = $QuizID;
	$this->Code = $Code;
	$this->QuestionID =  $QuestionID;    
	$this->Text = $Text;  
	$this->one = $one;
	$this->two = $two;    
	$this->three = $three;    
	$this->four = $four;  
	$this->Correct = $Correct;   
	}
}
?>
