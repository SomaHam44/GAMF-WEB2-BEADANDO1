<?php

class Webszolgaltatas_Model 
{

    public function get_data()
    {
        $options = array(
            "uri" => "http://localhost/web2/soapSzerver.php");
            $server = new SoapServer(null, $options);
            $server->setClass('Szolgaltatas');
            $server->handle();
    }

}
?>