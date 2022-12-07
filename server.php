<?php

$string = file_get_contents('dischi.json');
$disc_list = json_decode($string, true);

header('content-type: application/json');
echo json_encode($disc_list);
?>