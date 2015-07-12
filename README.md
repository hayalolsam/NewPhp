#NewPhp Functions

###Quickly Include Install
```PHP
<?php 
function GitHubRawSetup($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $php=str_replace(array("<?php","?>"),"",curl_exec($ch));
    eval($php);
}
GitHubRawSetup("https://raw.githubusercontent.com/hayalolsam/NewPhp/master/array_values_replace.php");
GitHubRawSetup("https://raw.githubusercontent.com/hayalolsam/NewPhp/master/array_keys_replace.php");
GitHubRawSetup("https://raw.githubusercontent.com/hayalolsam/NewPhp/master/array_strpos.php.php");
?>
```

Web: www.phpstate.com
Email: ulusanyazilim@gmail.com 
