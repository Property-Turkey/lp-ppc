<?php 

    error_reporting(-1);

    define("PROTOCOL", @$_SERVER["HTTPS"] == "on" ? "https" : "http");
    define("DOMAIN", $_SERVER['HTTP_HOST']);
    define("LANGUAGES", ['en']);
    define("APP_PATH",  dirname($_SERVER['PHP_SELF']) );
    define("APP_FOLDER",  $_SERVER['SERVER_NAME'] == 'localhost' ? '/_landpages/landing170' : '' );

    function getMachineLang()
    {
        foreach(LANGUAGES as $lang){
            if(strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang) !== false){
                return $lang;
            }
        }
        return false;
    }

    $currlang = getMachineLang();

    if(isset($_GET['lang'])) {
        if(in_array($_GET['lang'], $langs)){
            $currlang = $_GET['lang'];
        }
    }
    
    function __($key) 
    {
        global $LOCALE, $currlang;
        if(!isset( $LOCALE[$currlang] )){ return $key; }
        if(empty($LOCALE[$currlang][$key])){return $key;}
        return str_replace("'","&#39;",$LOCALE[$currlang][$key]);
    }

    function _embed($file, $params=[])
    {
        $isAbsolute = !empty($params["abs"]);
        
        if(strpos("//", $file) !== false){
            return $file;
        }
        $ext = explode(".", $file);
        $url = '';
        
        $attrs = '';
        switch( $ext[count($ext)-1] ){
    
            case "css":
                $href = ($isAbsolute) ? $file : 'css/'.$file.' '.$attrs;
                $url = '<link rel="stylesheet" href="'.$href.'" type="text/css">';
                break;
    
            case "js":
                $href = ($isAbsolute) ? $file : 'js/'.$file.' '.$attrs;
                $url = '<script src="'.$href.'" type="application/javascript"></script>';
                break;
    
            case "jpg":
            case "jpeg":
            case "png":
            case "gif":
            case "webp":
            case "svg":
                // if(!empty($params["class"])){
                //     $params["class"] = $params["class"]." lazyload";
                // }else{
                //     $params["class"] = "lazyload";
                // }
                
                $standard_params = ['alt'=>$file, 'title'=>$file];

                $attrs = setAttrs($params+$standard_params);
                $src = ($isAbsolute) ? $file : 'img/'.$file.'" '.$attrs;

                $url = '<img src="'.$src.'" '. $attrs .' >';//data-src
                break;
    
            default :
            $url = $file;
        }
        return $url;
    }
    
    function setAttrs($params)
    {
        $res = [];
        foreach($params as $key=>$val){
            if(empty($key)){continue;}
            $res[] = $key.'="'.$val.'"';
        }
        // echo( implode(" ", $res) ); die();
        return implode(" ", $res);
    }

    
    function getIP() 
    {
        $ip = $_SERVER["REMOTE_ADDR"];
        if( !empty( $_SERVER["HTTP_CLIENT_IP"] ) ) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        } elseif( !empty( $_SERVER["HTTP_X_FORWARDED_FOR"] ) ) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        return $ip == '127.0.0.1' ? '46.2.228.144' : $ip;
    }

    function getCountryByIP($IP=false, $field=null)
    {
        $IP = !$IP ? getIP() : $IP;
        $apikey = '4de80adf73a84ac19d91fb303131b93c';//osama@propertyturkey.com;
        $url = "https://api.ipgeolocation.io/ipgeo?apiKey=".$apikey."&ip=".$IP;
        $json = @file_get_contents($url);
        if( !$json ){
            $json = '{"calling_code":"+90", "country_code2":"tr"}';
        }
        if($field=='json'){ return $json; }
        $obj = json_decode( $json, true );
        if( $field ){ return $obj[ $field ]; }
        return $obj;
    }

?>