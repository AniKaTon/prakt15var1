<?php
$str = "5484-1234-5678-9012";
$str = substr_replace($str, "****", -4);
echo $str;
?>