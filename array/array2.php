<?php
$li = [1, 2, 3, 4, 5];
echo count($li);
echo '<br />';
array_push($li, 'f');
var_dump($li);
echo '<br />';
$li = array_merge($li, ['f','g']);
var_dump($li);
echo '<br />';
array_unshift($li,'z');
var_dump($li);
echo '<br />';
array_splice($li, 2, 0, 'B');
var_dump($li);
echo '<br />';
array_shift($li);
var_dump($li);
echo '<br />';
array_pop($li);
echo '<br />';
sort($li);
var_dump($li);
echo '<br />';
rsort($li);
var_dump($li);
?>