<?php

         $url = "https://api.kawalcorona.com/";

         $client = curl_init($url);

         curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

         $response = curl_exec($client);

         $result = json_decode($response, true); // print_r($result); echo "<br>";

         $countryRegion = $result[36]['attributes']['Country_Region'];

         $confirmed = $result[36]['attributes']['Confirmed']; 

         $deaths = $result[36]['attributes']['Deaths'];

         $recovered = $result[36]['attributes']['Recovered'];

         $dateTimeString = $result[36]['attributes']['Last_Update'] / 1000; 

         $lastUpdate = date("l, d F Y H:i:s", $dateTimeString);

 

         echo "Country: ". $countryRegion;

         echo "<br>";

         echo "Confirmed: ". $confirmed;

         echo "<br>";

         echo "Deaths: ". $deaths;

         echo "<br>";

         echo "Recovered: ". $recovered;

         echo "<br>";

         echo "Last Update: ". $lastUpdate;

         echo "<br><br>";

?>
