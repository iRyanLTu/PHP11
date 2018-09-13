<?php

$s = file_get_contents('write.txt');
echo $s;
file_put_contents('write.txt', $s . ' aaa ');

echo '<ok>';

$page = file_get_contents('https://www.delfi.lt/sitemap.xml');
file_put_contents('delfi.txt', $page);