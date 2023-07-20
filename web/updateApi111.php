<?php

function api($url){
    $contentfulBaseUrl= 'https://cdn.contentful.com';
    $access='1Du0FPxziyrLVaLnnK0LzEp_9UdvdvRBckia_BNYXQc';
    $space = 'xcss3enad0q9';
    if(strpos($url,'?')!==false){
    $url.='&';
    }else{
        $url .='?';
    }
    return json_decode(file_get_contents("$contentfulBaseUrl/spaces/$space/environments/master${url}access_token=$access"),true);
}
function getAsset($id){
    return api("/assets/$id")['fields']['file']['url'];
}