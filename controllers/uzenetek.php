<?php

class Uzenetek_Controller
{
	public $baseName = 'uzenetek';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{		
		$uzenetekModel = new Uzenetek_Model;  //az osztályhoz tartozó modell
		//a modellben belépteti a felhasználót
		$retData = $uzenetekModel->get_data($vars);
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