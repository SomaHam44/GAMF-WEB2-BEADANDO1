<?php

class mnb2_Model
{
	
    public function get_rates($datum1, $datum2, $d1, $d2)
	{		
        try {            
            $client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
            echo "<br>Aktuális deviza árfolyamok<br>";
            echo ($datum1.", ".$datum2);     
            $response_stdclass = $client->GetExchangeRates(array('startDate'=>$datum1,'endDate'=>$datum2,'currencyNames'=>$d1.",".$d2));
            $xml = $response_stdclass->GetExchangeRatesResult;        
            $parser=xml_parser_create();        
            xml_parse_into_struct($parser, $xml, $ertekek);             
            $retData=$ertekek;               
    
        } catch (SoapFault $e) {
            var_dump($e);
        }
		return $retData;
	}
    
    
    
    
}

?>