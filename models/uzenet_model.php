<?php

class Uzenet_Model
{
	public function get_data()
	{		
        $retData['eredmeny'] = "";
        $login=$_SESSION['login'];
        $ido=date("Y.m.d H:i:s");
        echo $login;
		try {		                    
            $connection = Database::getConnection();    
            $sql = "SELECT * from hir order by hirId desc";
			$stmt = $connection->query($sql);
			$retData['lista'] = $stmt->fetchAll(PDO::FETCH_ASSOC);		                
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
        echo $retData;
	}
}
?>