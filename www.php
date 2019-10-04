<?php
//add www. to url
$url="https://domain.com/en/news";

$bits = parse_url($url);

$newHost = substr($bits["host"],0,4) !== "www."?"www.".$bits["host"]:$bits["host"];

$url2 = $bits["scheme"]."://".$newHost.(isset($bits["port"])?":".$bits["port"]:"").$bits["path"].(!empty($bits["query"])?"?".$bits["query"]:"");;

print_r($url2);
 ?>
