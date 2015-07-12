<?php 
function array_keys_replace($old,$new,$array)
{
    $keys = array_keys($array);
		$values = array_values($array);
		$new_keys = str_replace($old, $new, $keys);
		return array_combine($new_keys, $values);
}

/*
$array=array("world"=>"ok");
$array=array_keys_replace("world","sun",$array);
var_dump($array); // return array(1) { ["sun"]=> string(2) "ok" }
*/
?>
