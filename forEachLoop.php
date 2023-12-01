<?php
echo "Welcome to For-Each Loops in PHP <br>";

$arr = array("bananas", "apples", "harpic", "bread", "butter");
// Using FOR LOOP to iterate array
for($i=0; $i<count($arr); $i++){
    echo $arr[$i] . "<br>";
}
// Using FOR EACH LOOP to iterate array
foreach($arr as $value){
    echo $value . "<br>";
}
?>