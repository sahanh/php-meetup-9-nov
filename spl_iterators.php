<?php
$i = new DirectoryIterator(__DIR__);

foreach ($i as $fileInfo) {
    echo $fileInfo->getFilename() . "\n";
}