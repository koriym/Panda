<?php
require __DIR__ . '/panda_ini.php';

// memory exhausted error
$a = array();
while (1) {
    $a[] = $_GET;
}