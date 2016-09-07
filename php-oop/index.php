<?php 

?>
<style type="text/css">
p{
font-family: monospace;}</style>

<?
/**
* Example of Classes
*/
class Dog
{
	public $color = 'brown';
	public $furType;

	public function bark()
	{
		return "bark";
	}

	public function catchBall()
	{
		return "<p>and I am <i>" . $this->color." - ".$this->bark()."</p>";
	}
}






$collie = new Dog();
$collie->color = 'red';


echo $collie->catchBall();
 ?>