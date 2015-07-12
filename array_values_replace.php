<?php function array_values_replace($old,$new,$array)
{
    $keys = array_keys($array);
		$values = array_values($array);
		$new_values = str_replace($old, $new, $values);
		return array_combine($keys, $new_values);
}

/*
$array=array("world"=>"ok");
$array=array_values_replace("ok","no",$array);
var_dump($array); // return array(1) { ["world"]=> string(2) "no" }
*/
?>
