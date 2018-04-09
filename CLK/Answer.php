<?php 
 class Answer {
	var $AnswerID;
	var $QuestionID;
	var $QuizID;
	var $Code;
    var $StudentID ;
    var $Choice;
 
	var function __construct(
	$AnswerID,
	 $QuestionID,
	$QuizID,
	$Code, 
    $StudentID ,
	$Choice
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
	$this->Choice = $Choice;   
	}
}
?>
