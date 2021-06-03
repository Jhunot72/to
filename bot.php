<?php

// curl get
function get($url){
  $cf = curl_init();
  $array = array(
                           CURLOPT_URL => $url,
                           CURLOPT_FOLLOWLOCATION => true, 
                           CURLOPT_RETURNTRANSFER => true, 
                           
                           CURLOPT_SSL_VERIFYPEER => false, 
                           CURLOPT_COOKIEJAR => "cookie.txt",
                           CURLOPT_COOKIEFILE => "cookie.txt" 
 );
  $ar = curl_setopt_array($cf, $array);
  $get = curl_exec($cf);
  return $get;
}

// curl post
function post($url, $ua, $data){
  $cf = curl_init();
  $array = array(
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => true, 
CURLOPT_RETURNTRANSFER => true, 
CURLOPT_HTTPHEADER => $ua, 
CURLOPT_POST => true, 
CURLOPT_POSTFIELDS => $data,
CURLOPT_SSL_VERIFYPEER => false, 
);
 
 $ar = curl_setopt_array($cf, $array);
 $get = curl_exec($cf);
 return $get;}


  $ua = array(
"Host: c.pgo.me",
"upgrade-insecure-requests: 1",
"user-agent: Mozilla/5.0 (Linux; Android 6.0.1; vivo 1606 Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.84 Mobile Safari/537.36 VivoBrowser/7.7.0.1",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
"accept-encoding: gzip, deflate, br",
"accept-language: id-ID,en-US;q=0.9"
);
$link = array(
"https://c.pgo.me/spq460oj3fofx3el7",
"https://c.pgo.me/ajdu5crxfns6yzaa4",
"https://c.pgo.me/pm27mwnaz0e7f5sj4",
"https://c.pgo.me/qlntganjdt8v4hs03",
"https://c.pgo.me/s3jbr537noyod59r6",
"https://c.pgo.me/fq3wlr2xxe2xktvu7",
"https://c.pgo.me/3r4e1f5qmnruzb5f8",
"https://c.pgo.me/8qaqhzflo7l5ift78",
"https://c.pgo.me/fu4gzijoeo5o139a2",
"https://c.pgo.me/fdk65wn1u87wigb19",
"https://c.pgo.me/c1dl2hnba34mxjne8",
"https://c.pgo.me/37xhxi19gm2cur0u2",
"https://c.pgo.me/v7o04ys7e49qwrv21"
);

   system("clear");
    
    $i = 0;
    foreach ($link as $key) {
    $url = $link[$i];
    $title = get($url);
    $judul = explode("<title>",$title)[1];
    $judul = explode("</title>",$judul)[0];
    echo $judul;   
    $i++;  
    echo "\n";

    }

