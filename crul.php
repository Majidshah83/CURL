<?php

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
//do a post
curl_setopt($ch ,CURLOPT_POST,false);
// curl_setopt($ch,CURLOPT_POSTFILEDS, "id=333");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); //if true then store in ch if false then show output
 $result=curl_exec($ch);
 curl_close($ch);
//  echo($result);

?>