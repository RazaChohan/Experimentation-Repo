<?php
class view{

	public function render($params)
	{
		$output = exec("php abc.php $params",$output);
		return $output;
	}

}

$v = new view();

$outputString= $v->render("Blabla");
