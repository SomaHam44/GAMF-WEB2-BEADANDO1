
<pre>
<?php
    try {
        $client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
        echo "<br>GetCurrentExchangeRates()<br>";
// (array): itt egy asszociatív tömbbé konvertálja:
        $tomb = (array)simplexml_load_string($client->GetCurrentExchangeRates()->GetCurrentExchangeRatesResult);
        echo $tomb['Day']['date']."<br>";
        print_r($tomb);

        echo "<br>GetInfo()<br>";
        $tomb = (array)simplexml_load_string($client->GetInfo()->GetInfoResult);
        print_r($tomb);

        echo "<br>GetCurrencies()<br>";
        $tomb = (array)simplexml_load_string($client->GetCurrencies()->GetCurrenciesResult);
        print_r($tomb);

        echo "<br>GetDateInterval()<br>";
        $tomb = (array)simplexml_load_string($client->GetDateInterval()->GetDateIntervalResult);
        print_r($tomb);

    } catch (SoapFault $e) {
        var_dump($e);
    }
?>
</pre>