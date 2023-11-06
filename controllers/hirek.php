<?php

class Hirek_Controller
{
	public $baseName = 'hirek';  //meghatározni, hogy melyik oldalon vagyunk
	public function main() // a router által továbbított paramétereket kapja
	{
		$hirekModel = new Hirek_Model;  //az osztályhoz tartozó modell
		//a modellben belépteti a felhasználót
		$retData = $hirekModel->get_data();
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