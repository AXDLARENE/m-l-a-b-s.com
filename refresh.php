<?php
$url = 'https://graph.facebook.com/v2.9';
$fields = array(
            'id'=>urlencode('http://m-l-a-b-s.com'),
            'scrape'=>urlencode(true),
            'access_token'=>"<	
768431556662483|DL5Qv3jjsQINrobP0U8ov7uUyDw>"
        );

$fields_string = '';
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
$fields_string = rtrim($fields_string,'&');


$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

$result = curl_exec($ch);
?>
