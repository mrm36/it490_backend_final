#!/usr/bin/php
<?php



$message = "This is a\r\n test Message";
echo "After Message";
//$message = wordwrap($message, 70, "\r\n");
echo "After wordwrap";
mail('490test@mailinator.com', 'Alert', $message);

ini_set('display_errors', 1);


echo "After Mail";
?>
