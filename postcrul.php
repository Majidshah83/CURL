<?php

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
//do a post
curl_setopt($ch ,CURLOPT_POST,true);
 curl_setopt($ch,CURLOPT_POSTFILEDS, "userId=10&title=software&body=codify");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //if true then store in ch if false then show output
 $result=curl_exec($ch);
 curl_close($ch);
 $result=json_decode($result);
 echo $result;
//  echo($result);

?>