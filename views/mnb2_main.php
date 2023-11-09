

<table>
    <tr>
        <th>Dátum</th>
        <th>Deviza</th>
        <th>Egység</th>
        <th>Árfolyam (HUF)</th>
        <th>Deviza</th>
        <th>Egység</th>
        <th>Árfolyam (HUF)</th>
    </tr>
    <pre>
    <?php 
    $ertekek = $viewData;    
    
    
    for($i=1; $i+4<count($ertekek); $i=$i+4){        
        ?>        
        <tr>
            <td><?php echo ($ertekek[$i]['attributes']['DATE']);?></td>
            <td><?php echo ($ertekek[$i+1]['attributes']['CURR']);?></td>
            <td><?php echo ($ertekek[$i+1]['attributes']['UNIT']);?></td>
            <td><?php echo ($ertekek[$i+1]['value'])."<br>";?></td>
            <td><?php echo ($ertekek[$i+2]['attributes']['CURR']);?></td>
            <td><?php echo ($ertekek[$i+2]['attributes']['UNIT']);?></td>
            <td><?php echo ($ertekek[$i+2]['value'])."<br>";?></td>
        </tr>
    <?php
    }?>
    </pre>
</table>        
           







