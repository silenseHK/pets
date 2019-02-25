<?php

function returnJson($code=0,$msg='success',$data=[]){
    exit(json_encode(compact('code','msg','data')));
}

function bPwd($str){
    return md5(sha1(md5((string)$str).'laravel').'laravel');
}

