<?php $devizak=$viewData;
?>
<p>Lekérdezhető devizák:
<?php
$db=count($devizak)-2; 
echo ($db)." db";?><br><?php
for ($i=2;$i<$db-1;$i++){
    echo $devizak[$i].", ";
}
echo $devizak[$db-2];
?><br>
<p> Lekérdezhető időintervallum:</p>
<?php

$date1=$devizak[0];
$date2=$devizak[1];
echo $date1." - ".$date2;
?>

<h2>Devizapárok lekérdezése adott időszakban:</h2>  
<form action="<?= SITE_ROOT ?>mnb2" method="post">
    <fieldset>                  
        <label for="v1">1. deviza:</label><input type="text" name="d1" id="d1" required><br>
        <label for="v2">2. deviza: </label><input type="text" name="d2" id="d2" required ><br>
        <label for="datum1">Kezdő dátum</label><input type="date" name="datum1" id="datum1"  required><br>
        <label for="datum2">Végdátum</label><input type="date" name="datum2" id="datum2"  required><br>    
        <input type="submit" value="Lekérdez">
    </fieldset>
</form>




   





   







