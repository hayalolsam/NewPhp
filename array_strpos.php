<?php
function array_strpos($haystack, $needle, $offset=0)
{
    if(!is_array($needle)) $needle = array($needle);
    foreach($needle as $query) {
        if(strpos($haystack, $query, $offset) !== false) return true;
    }
    return false;
}

/*
$string = 'This is world';
$array  = array('world','sun');
var_dump(array_strpos($string, $array)); // return bool(true)
*/
?>
