<?php
echo "그는 \"안녕하세요 라고 말했다\"";
echo '<br />';
$a = 445;
echo $a + 555;
echo '<br />';
$first = "coding";
echo $first." everybody";
echo '<br />';
echo 100+10;
echo '<br />';
echo (100+10)/10;
echo '<br />';
echo ((100+10)/10)-10;
echo '<br />';
echo (((100+10)/10)-10)*10;
echo '<br />';
/*변수*/
$a = 100;
$a = $a + 10;
print $a.'<br />';
$a = $a / 10;
print $a.'<br />';
$a = $a - 10;
print $a.'<br />';
$a = $a * 10 ;    
print $a.'<br />';
/*상수의 장점*/
define('TITLE', 'PHP Tutorial');
echo TITLE;
define('TITLE', 'JAVA Tutorial');
/*고급 주제_ 변수와 상수 */
$a = 100;
echo gettype($a);
settype($a, 'double');
echo '<br />';
echo gettype($a);
/* 가변 변수 */
echo '<br />';
$title = 'subject';
$$title = 'PHP tutorial';
echo $subject;
?>

