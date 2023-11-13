<?php 
$tomb=$viewData['lista'];
?>

<h2> Cukrászdánk kínálata: </h2>
<h3> Választott típus: <?php echo $tomb[0]['tipus']?> </h3>
<table>
<tr>
    <th>Név</th>
    <th>Típus</th>
    <th>Egység</th>					
    <th>Ár</th>																			
</tr>
		
<?php 

for($i=0;$i<count($tomb);$i++){   ?> 
    
<tr>
    <td><?php echo($tomb[$i]['nev'])?></td>
    <td><?php echo($tomb[$i]['tipus'])?></td>
    <td><?php echo($tomb[$i]['egyseg'])?></td>
    <td><?php echo($tomb[$i]['ertek'])?></td>										
</tr>               
<?php } ?>
</table>
