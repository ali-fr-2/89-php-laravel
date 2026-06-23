<?php 

$str="i love php and java, pHp";

// $pattern="/php/";
$pattern="/php/i";


// echo preg_match($pattern,$str);
// echo preg_match_all($pattern,$str);

echo preg_replace($pattern,"python",$str);



?>