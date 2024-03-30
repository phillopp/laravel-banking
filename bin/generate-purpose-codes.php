<?php

$args = &$argv;
array_shift($args);

echo '=========================='."\n";
echo 'Cleaning old purpose codes'."\n";

$dir = __DIR__.'/../src/Sepa/PurposeCodes'."\n";
$objects = scandir($dir);

foreach ($objects as $object)
{
    if ($object != '.' && $object != '..')
    {
        if (filetype($dir.'/'.$object) == 'dir') {rrmdir($dir.'/'.$object);}
        else {unlink($dir.'/'.$object);}
    }
}

echo 'Cleaning done'."\n";
echo '=========================='."\n";

$fileName = __DIR__.'/../data/4Q2023_ExternalCodeSets_v2.json';
if (count($args) > 0) {
    $fileName = $args[0];
}

$data = file_get_contents($fileName);
$json = json_decode($data, associative: true);

$phpCode = file_get_contents(__DIR__.'/../data/PurposeClass.txt');

$descriptions = [];
$content = '';
foreach (preg_split("/\r\n|\n|\r/", $json['definitions']['ExternalPurpose1Code']['description']) as $line) {
    if ($line[0] == '*') {
        $code = substr($content, 2, 4);
        $descriptions[$code] = addslashes(substr($content, 8));
        $content = $line;
    } else {
        $content = $content.$line;
    }
}

foreach ($json['definitions']['ExternalPurpose1Code']['enum'] as $code) {
    $data = str_replace('##CLASSNAME##', $code, $phpCode);
    $data = str_replace('##DESCRIPTION##', $descriptions[$code], $data);
    file_put_contents(__DIR__.'/../src/Sepa/PurposeCodes/'.$code.'.php', $data);
    echo $code." Class generated\n";
}