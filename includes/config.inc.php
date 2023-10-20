<?php
$ablakcim = array(
	'cim' => 'Édes Élmény Cukrászda',
);

$fejlec = array(
	'cim' => 'Édes Élmény Cukrászda',
);

$lablec = array(
	'copyright' => 'Copyright ' . date("Y") . '.',
	'oldal' => 'Édes Élmény Cukrászda'
);

$dbname='root';
$dbjelszo='';

$oldalak = array(	
	'/' => array('fajl' => 'kezdolap', 'szoveg' => 'Kezdőlap', 'menun' => array(1, 1)),
    'hiroldal' => array('fajl' => 'hiroldal', 'szoveg' => 'Hírek', 'menun' => array(0, 1)),
	'soap' => array('fajl' => 'soap', 'szoveg' => 'SOAP', 'menun' => array(0, 1)),
	'lekerdezes' => array('fajl' => 'lekerdezes', 'szoveg' => 'Lekérdezések', 'menun' => array(0, 1)),
	'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés/Regisztráció', 'menun' => array(1, 0)),
	'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0, 1)),
	'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0, 0)),	
	'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0, 0)),
	'hir' => array('fajl' => 'hir', 'szoveg' => '', 'menun' => array(0, 0)),
	'uzenet' => array('fajl' => 'uzenet', 'szoveg' => '', 'menun' => array(0, 0)),
);

$hiba_oldal = array('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA = 'images/';
$TIPUSOK = array('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
?>