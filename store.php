<?php

$myfile = fopen("location.txt", "w");
$txt = "Latitude: " . $_GET["latitude"] . "\nLongitude: " . $_GET["longitude"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nAGENT: " . $_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile); 


?>