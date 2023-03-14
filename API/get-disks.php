<?php

$disks_get = file_get_contents(__DIR__ . '/../data/disks.json');

header('Content-Type: application/json');

echo $disks_get;

?>