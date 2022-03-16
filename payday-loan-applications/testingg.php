<?php

$number = "1234567890";
$formatted_number = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $number);
echo $formatted_number;

?>