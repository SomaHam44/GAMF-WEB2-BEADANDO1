<body>
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
        $tomb=array();
        $j=0;
        
        for($i=1; $i+4<count($ertekek); $i=$i+4){
            /*if ($ertekek[$i+1]['attributes']['CURR'] == "") {
                $ertekek[$i+1]['attributes']['CURR'] = 'Nincs';
            }
            if ($ertekek[$i+1]['attributes']['UNIT'] == "") {
                $ertekek[$i+1]['attributes']['UNIT'] = 'Nincs';
            }
            */
            $tomb[$j]['date']=$ertekek[$i]['attributes']['DATE'];
            /*if ($ertekek[$i+1]['value'] == "") {
                $ertekek[$i+1]['value'] = 'Nincs';
            }
            if ($ertekek[$i+2]['attributes']['CURR'] == "") {
                $ertekek[$i+2]['attributes']['CURR'] = 'Nincs';
            }
            if ($ertekek[$i+2]['attributes']['UNIT'] == "") {
                $ertekek[$i+2]['attributes']['UNIT'] = 'Nincs';
            }
            */
            $tomb[$j]['deviza1']=$ertekek[$i+1]['value'];
            /*if ($ertekek[$i+2]['value'] == "") {
                $ertekek[$i+2]['value'] = 'Nincs';
            }
            */
            $tomb[$j]['deviza2']=$ertekek[$i+2]['value'];
            $j++;        
            var_dump($tomb);
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
        }
        $jtomb=json_encode($tomb);
        
        ?>
        </pre>
    </table>
    <div id="chart" style="width:auto; height:300px;"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"> 
        var jtomb = <?php echo $jtomb ?>;
        var tomb = JSON.stringify(jtomb);
        //console.log(tomb);      
        google.charts.load('visualization', { packages: ['corechart'] });
        google.charts.setOnLoadCallback(drawLineChart);
        function drawLineChart() {
            function drawChart (data) {
                var arrSales = [['Nap', 'Deviza1. (Ft)' , 'Deviza2. (Ft)']];
                $.each(tomb, function (index, value) {
                    arrSales.push([value.date, value.deviza1, value.deviza2]);
                });
                var options = {
                    title: 'Árfolyamok',
                    curveType: 'function',
                    legend: { position: 'bottom', textStyle: { color: '#555', fontSize: 14} }  // You can position the legend on 'top' or at the 'bottom'.
                };
                var figures = google.visualization.arrayToDataTable(arrSales)
                var chart = new google.visualization.LineChart(document.getElementById('chart'));
                chart.draw(figures, options); 
            };
                 
        };
        
    
    </script>
    <div id="chart" style="width:auto; height:300px;"></div>
    
</body>      
           







