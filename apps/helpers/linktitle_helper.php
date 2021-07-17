<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('linktitle'))
{      
    function linktitle($param) {
          $string = preg_replace('/[^a-zA-Z0-9]/', '-', $param);
          return trim(strtolower($string));
//        $lower = trim(strtolower($param));
//        $space = str_replace(" ", "-", $lower); 
//        $dot = str_replace(".", "", $space); 
//        $quote = str_replace("'", "", $dot); 
//        return $quote;                        
    }     
    
}
/* 
 * Created by Pudyasto Adi Wibowo
 * Email : pawdev.id@gmail.com
 * pudyasto.wibowo@gmail.com
 */

