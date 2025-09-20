<?php
$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
$type = htmlspecialchars($_POST['type'],ENT_QUOTES);
$number = htmlspecialchars($_POST['number'],ENT_QUOTES);
print "お名前は、" . $name . '<br>';
print "ご希望の商品は、" . $type . '<br>';
print "注文数は、" . $number;