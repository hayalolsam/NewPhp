function array_keys_replace($old,$new,$array)
{
    $keys = array_keys($array);
		$values = array_values($array);
		$new_keys = str_replace($old, $new, $keys);
		return array_combine($new_keys, $values);
}
