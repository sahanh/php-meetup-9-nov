<?php
$file = new SplFileObject(__DIR__.'/composer.json');
echo $file->fread($file->getSize());