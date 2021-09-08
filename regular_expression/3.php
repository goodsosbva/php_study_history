<?php
$subject = 'coding everybody http://goodsosbvadothome.cokr goodsosbva@naver.com 010-0000-0000';
preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match);
var_dump($match);
echo "<br />";
echo "homepage:".$match[1];
echo "<br />";
echo "email:".$match[2];
?>