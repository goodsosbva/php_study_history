<?php
function get_strings(){
    return ['khs', 'coding', 'ksy'];
}
 
$members = get_strings();
 
for($i = 0; $i < count($members); $i++){
    echo ucfirst($members[$i]).'<br />';
}
 
?>