<?php
	class Szolgaltatas {
	}
	$options = array(
	"uri" => "http://localhost/web2/soapSzerver.php");
	$server = new SoapServer(null, $options);
	$server->setClass('Szolgaltatas');
	$server->handle();
?>
