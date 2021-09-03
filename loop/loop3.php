<html>
<body>
<?php
for($i = 0; $i < 10; $i++){
    if($i === 5){
        continue;
    }
    else if($i === 7){
    	break;
	}
    echo "coding khs {$i}번 했음!<br />";
}
 
?>
</body>
</html>