<?php

$tomb=$viewData['lista'];
?>
<br />
<a href="<?= SITE_ROOT ?>hir">Hír hozzáadása</a>
<br />
<br />
<h2> Hírek: </h2>
<table>
<tr>
    <th>Felhasználónév</th>
    <th>Időpont</th>
    <th>Tartalom</th>																
</tr>
		
<?php for($i=0;$i<count($tomb);$i++){?>
<tr>
    <td><?php echo($tomb[$i]['felhasznalo'])?></td>
    <td><?php echo($tomb[$i]['idopont'])?></td>
    <td><?php echo($tomb[$i]['tartalom'])?></td>										
</tr>               
<?php } ?>
</table>
