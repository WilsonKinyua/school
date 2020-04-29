<?php
$timezone_identifiers = DateTimeZone::listIdentifiers();
foreach($timezone_identifiers as $key => $list){
    echo $list . "<br>";
}

date_default_timezone_set("Asia",$timezone_identifier);

echo "time is" . date_default_timezone_get();

?>