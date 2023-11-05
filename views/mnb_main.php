
<pre>
<?php
    try {
        $client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
        echo "<br>GetCurrentExchangeRates()<br>";
// (array): itt egy asszociatív tömbbé konvertálja:
        $tömb = (array)simplexml_load_string($client->GetCurrentExchangeRates()->GetCurrentExchangeRatesResult);
        echo $tömb['Day']['date']."<br>";
        echo  $tömb['Day']['2'];
        print_r($tömb);

        echo "<br>GetInfo()<br>";
        $tömb = (array)simplexml_load_string($client->GetInfo()->GetInfoResult);
        print_r($tömb['Currencies']);
        

        echo "<br>GetCurrencies()<br>";
        $tömb = (array)simplexml_load_string($client->GetCurrencies()->GetCurrenciesResult);
        print_r($tömb);

        echo "<br>GetDateInterval()<br>";
        $tömb = (array)simplexml_load_string($client->GetDateInterval()->GetDateIntervalResult);
        print_r($tömb);

    } catch (SoapFault $e) {
        var_dump($e);
    }
?>
</pre>
