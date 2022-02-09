<?php

$message = "ID=25000;VALUE=500;TYPE=NORMAL;RESULT=0x50";
$str_arr = explode (";", $message);

print_r($str_arr);
echo json_encode($str_arr);
