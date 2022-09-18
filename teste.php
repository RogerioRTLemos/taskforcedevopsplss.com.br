<?php

echo "<h1> TESTEEEEEEEEEEEEEE </h1>";

$xml = simplexml_load_file('vendas.xml');

echo 'ID:' . $xml->email . '<br>'; 