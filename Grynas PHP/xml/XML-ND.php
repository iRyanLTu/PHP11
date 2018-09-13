<?php


/**$s = file_get_contents("https://www.delfi.lt/sitemap.xml");
file_put_contents('delfi.txt', $s);

$count = 0;
$ffs = file_get_contents('delfi.txt');

$word = array ('sitemap');

foreach ($word as $w){
    $nzn = strpos($ffs, $w);
    if (!empty($nzn)){
        $count++;
    }
}
echo 'Counted: ' . $count;
 */

$s = file_get_contents("https://www.delfi.lt/sitemap.xml");
file_put_contents('sitemap.xml', $s);

$dom = new DOMDocument;
$dom->load('sitemap.xml');

$sitemap = $dom->getElementsByTagName('sitemap');
$count = 0;

foreach ($sitemap as $sm){
    $count++;
}

echo $count;