<?php

$datajson = "[5,4,3,2,1]";

$data = json_decode($datajson);

echo implode(" - ", $data);
?>