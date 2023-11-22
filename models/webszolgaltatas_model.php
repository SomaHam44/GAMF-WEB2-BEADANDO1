<?php

class Webszolgaltatas_Model 
{

    public function get_data()
    {
        $retData = array();
        try{
            $client = new SoapClient("");
            /*$response_stdclass = $client->G();
            $xml = $response_stdclass->GetInfoResult;        
            $parser=xml_parser_create();        
            xml_parse_into_struct($parser, $xml, $ertekek);             
            $j=2;
            for ($i=4;$i<count($ertekek)-2;$i++){
                if($ertekek[$i]['tag']="CURR"){
                    $retData[$j]=$ertekek[$i]['value'];
                    $j++;
                }               
                
            }
            $retData[0]=$ertekek[1]['value'];
            $retData[1]=$ertekek[2]['value'];
            */
            return $retData;
        }
        catch (SoapFault $e) {
            //var_dump($e);
        }
        return $retData;

        /*$options = array(
            "uri" => "http://localhost/web2/soapSzerver.php");
            $server = new SoapServer(null, $options);
            $server->handle();
            */
    }

}
?>