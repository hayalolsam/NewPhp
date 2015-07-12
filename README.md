#NewPhp Functions

###Quickly Include Install
```PHP
<?php 
function GitHubRawInclude($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $php=str_replace(array("<?php","?>"),"",curl_exec($ch));
    eval($php);
}

GitHubRawInclude("https://raw.githubusercontent.com/hayalolsam/NewPhp/master/array_keys_replace.php");
GitHubRawInclude("https://raw.githubusercontent.com/hayalolsam/NewPhp/master/array_values_replace.php");
GitHubRawInclude("https://raw.githubusercontent.com/hayalolsam/NewPhp/master/array_strpos.php.php");
?>
```
###Example 1
```PHP
<?php 
    $array=array("world"=>"ok");
    $array=array_keys_replace("world","sun",$array);
    var_dump($array);
?>
```
###The above example will output:
```
array(1) { ["sun"]=> string(2) "ok" }
```
###Example 2
```PHP
<?php
    $array=array("world"=>"ok");
    $array=array_values_replace("ok","no",$array);
    var_dump($array);
?>
```
###The above example will output:
```
array(1) { ["world"]=> string(2) "no" }
```
###Example 3
```PHP
<?php
    $string = 'This is world';
    $array  = array('world','sun');
    var_dump(array_strpos($string, $array)); 
?>
```
###The above example will output:
```
bool(true)
```

Web: www.phpstate.com
Email: ulusanyazilim@gmail.com 
