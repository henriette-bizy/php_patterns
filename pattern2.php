<?php 
function printPatterns($num){
//for printing the number of rows
for($i = 0 ; $i<$num ; $i++){
    //for printing the first spaces 
    for($k= $num ; $k>$i+1 ; $k--){
        echo "&#160; &#160"; 
    }
    for($r= 0 ; $r<=$i; $r++){
        echo "* &#160; &#160";
    }
    echo "<br>";
}
}
$nbr = 18;
printPatterns($nbr);
?>