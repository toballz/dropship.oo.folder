<?php

$reloadStatic="a..sas";

class site{
    const name="Dropship";
    static function isSecure(){
    	if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443){
    		return "https:";
    	}else{
    		return "http:";
    	}
    }
    public static function url($vrvi){
        if ($vrvi=="domain"){
            return self::isSecure()."//".$_SERVER['SERVER_NAME'];
        }else if ($vrvi=="servername"){
            return $_SERVER['SERVER_NAME'];
        }else if($vrvi=="uri"){
            return $_SERVER['REQUEST_URI'];
        }else if($vrvi=="full"){
            return self::isSecure()."//".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        }else{
            die("url Erreor!!!!");
        }
    }
}
class tools{ 

    const passwordsalt="\u2315c#7@&8*";

 
     public static function dir() {
        return (object)array(
        'php'=>dir.'/static/art',
        'img'=>site::url('domain').'/static/img',
        'cssjs'=>'static/cj',
        'pages'=>site::url('domain').'/static/pages'
        );
    }
}