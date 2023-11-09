<?php

class Mnbe_Controller
{
	public $baseName = 'mnbe';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		$mnbeModel = new mnbe_Model;  //az osztályhoz tartozó modell
		//a modellben belépteti a felhasználót
		$retData = $mnbeModel->get_currencies();	
		//betöltjük a nézetet
		$view = new View_Loader($this->baseName.'_main');
		//átadjuk a lekérdezett adatokat a nézetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
	
}

?>