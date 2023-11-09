<?php

class Mnb2_Controller
{
	public $baseName = 'mnb2';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		$mnb2Model = new mnb2_Model;  //az osztályhoz tartozó modell
		//a modellben belépteti a felhasználót
		$retData = $mnb2Model->get_rates($vars['datum1'],$vars['datum2'], $vars['d1'], $vars['d2']);	
		//betöltjük a nézetet
		$view = new View_Loader($this->baseName.'_main');
		//átadjuk a lekérdezett adatokat a nézetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
	
}

?>