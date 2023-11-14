<?php

class Uzenet_Controller
{
	public $baseName = 'uzenet';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main() // a router �ltal tov�bb�tott param�tereket kapja
	{
		$uzenetModel = new Uzenet_Model;  //az osztályhoz tartozó modell
		//a modellben belépteti a felhasználót
		$retData = $uzenetModel->get_data();
		if($retData['eredmeny'] == "ERROR")
			echo "Hiba";
		//betöltjük a nézetet
		$view = new View_Loader($this->baseName.'_main');
		//átadjuk a lekérdezett adatokat a nézetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>