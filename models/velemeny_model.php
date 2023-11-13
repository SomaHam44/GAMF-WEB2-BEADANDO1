<?php

class Velemeny_Model
{
    public function get_data($vars)
    {
        $retData['eredmeny'] = "";
		$retData['uzenet']="";
		$retData['lista'] = array();
		date_default_timezone_set('Europe/Budapest');
		$datumidopont= date('Y-m-d H:i:s');
		try {
			$connection = Database::getConnection();
			$stmt = $connection->query($sql);
			$velemeny = $stmt->fetchAll(PDO::FETCH_ASSOC);
			switch(count($velemeny)) {				
				case 0:
                    $sqlInsert = "insert into velemeny(velemenyId, idopont, tartalom)
                        values(0, :idopont, :tartalom)";
                    $stmt = $connection->prepare($sqlInsert); 
                    $stmt->execute(array(':idopont' => $datumidopont, ':tartalom' => $vars['tartalom'],));
					$retData['eredmeny'] = "OK";
					$retData['uzenet'] = "A vélemény létrehozása sikeresen megtörtént";					
					Menu::setMenu();
					break;
				default:
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "A vélemény már létezik!";
			}			
		}
		
		catch (PDOException $e) {
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
    }
}

?>