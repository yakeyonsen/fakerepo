<?php
//change to domain.com/en/news
$url1="https://www.domain.com/news";

$bits1 = parse_url($url1);
//print("<pre>");
//var_dump($bits1);
//print("</pre>");
//{ ["scheme"]=> string(5) "https" ["host"]=> string(10) "domain.com" ["path"]=> string(5) "/news" }
$newHost1 = substr($bits1["host"],0,4) !== "www."?"www.".$bits1["host"]:$bits1["host"];

$url2 = $bits1["scheme"]."://".$newHost1.(isset($bits1["port"])?":".$bits1["port"]:"")."/en".$bits1["path"].(!empty($bits1["query"])?"?".$bits1["query"]:"");;

print_r($url2);
?>
<br>
<?php
// Change url to domain.com/fr
$url="https://fr.domain.com";
//break url into usable bits
$bits = parse_url($url);
//print("<pre>");
//var_dump($bits);
//print("</pre>");
//["scheme"]=> string(5) "https" ["host"]=> string(13) "fr.domain.com"
//identify url - check language domain syntax - if legacy subdomain redirect to new url
//identify url
//check language Domain
if (substr($bits["host"],0,3) == "fr.") {
  $newHost = substr($bits["host"],3)."/fr";
}
//if legacy subdomain detected

//redirect to new url
//$newHost = substr($bits["host"],0,3) !== "fr."?"fr.".$bits["host"]:$bits["host"];

$url3  = $bits["scheme"]."://".$newHost.(isset($bits["port"])?":".$bits["port"]:"").$bits["path"].(!empty($bits["query"])?"?".$bits["query"]:"");;

print_r($url3);
 ?>
<br>
<?php
// Change url to domain.com/es
$url="https://es.domain.com";
//break url into usable bits
$bits = parse_url($url);
//identify url - check language domain syntax - if legacy subdomain redirect to new url
//identify url
//check language Domain
if (substr($bits["host"],0,3) == "es.") {
  $newHost = substr($bits["host"],3)."/es";
}
//if legacy subdomain detected
//redirect to new url
$url3  = $bits["scheme"]."://".$newHost.(isset($bits["port"])?":".$bits["port"]:"").$bits["path"].(!empty($bits["query"])?"?".$bits["query"]:"");;

print_r($url3);
 ?>
<br>
<?php
// Change url to domain.com/cn
$url="https://cn.domain.com";
//break url into usable bits
$bits = parse_url($url);
//identify url - check language domain syntax - if legacy subdomain redirect to new url
//identify url
//check language Domain
if (substr($bits["host"],0,3) == "cn.") {
  $newHost = substr($bits["host"],3)."/cn";
}
//if legacy subdomain detected
//redirect to new url
$url3  = $bits["scheme"]."://".$newHost.(isset($bits["port"])?":".$bits["port"]:"").$bits["path"].(!empty($bits["query"])?"?".$bits["query"]:"");;

print_r($url3);
 ?>
 <br>
 <?php
 // Change url to domain.com/cn
 $url="https://ru.domain.com";
 //break url into usable bits
 $bits = parse_url($url);
 //identify url - check language domain syntax - if legacy subdomain redirect to new url
 //identify url
 //check language Domain
 if (substr($bits["host"],0,3) == "ru.") {
   $newHost = substr($bits["host"],3)."/ru";
   //print("<pre>");
   //var_dump($newHost);
   //print("</pre>");
 }
 //if legacy subdomain detected
 //redirect to new url
 $url3  = $bits["scheme"]."://".$newHost.(isset($bits["port"])?":".$bits["port"]:"").$bits["path"].(!empty($bits["query"])?"?".$bits["query"]:"");;

 print_r($url3);
  ?>
  <br>
  <?php
  //change to domain.com/en/news
  $url1="https://www.domain.com/product";

  $bits1 = parse_url($url1);
  //print("<pre>");
  //var_dump($bits1);
  //print("</pre>");
  //{ ["scheme"]=> string(5) "https" ["host"]=> string(10) "domain.com" ["path"]=> string(5) "/news" }
  $newHost1 = substr($bits1["host"],0,4) !== "www."?"www.".$bits1["host"]:$bits1["host"];

  $url2 = $bits1["scheme"]."://".$newHost1.(isset($bits1["port"])?":".$bits1["port"]:"")."/en".$bits1["path"].(!empty($bits1["query"])?"?".$bits1["query"]:"");;

  print_r($url2);
  ?>
