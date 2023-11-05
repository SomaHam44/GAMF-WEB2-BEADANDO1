<?php
	//ini_set("default_socket_timeout", 5000);
   $options = array(
   "location" => "http://localhost/web2/soapSzerver.php",
   "uri" => "http://localhost/web2/soapSzerver.php",
   'keep_alive' => false,
    //'trace' =>true,
    //'connection_timeout' => 5000,
    //'cache_wsdl' => WSDL_CACHE_NONE,
   );		
   try {
	$kliens = new SoapClient(null, $options);	
   } catch (SoapFault $e) {
		var_dump($e);
   }
?>
