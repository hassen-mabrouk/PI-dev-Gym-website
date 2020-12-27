<?php
namespace App;
class URLHelper{
    public static function withParam(array $data ,$param,$value)
    {
        return http_build_query(array_merge($data,[$param => $value]));
        
    }
    public static function withParams(array $data,array $params)
    {
        return http_build_query(array_merge($data,$params));
    }
}
?>