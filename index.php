<?php
require __DIR__ . '/vendor/autoload.php';

use classes\Services\FileService;

$fs = new FileService();
$a = $fs->encodeFileToBase64('2.jpg');
echo $a;
$fs->decodeFileFromBase64($a);


