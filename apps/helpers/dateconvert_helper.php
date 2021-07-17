<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('dateconvert'))
{      
    function dateconvert($date) {
        if(!empty($date)){
            if(strpos($date, "/")!==false){
                $date_id = explode('/', $date);
            }else{
                $date_id = explode('-', $date);
            }
            return $date_id[2].'-'.$date_id[1].'-'.$date_id[0];
        }else{
            return false;
        }                   
    }     
    
}
/* 
 * Created by Pudyasto Adi Wibowo
 * Email : pawdev.id@gmail.com
 * pudyasto.wibowo@gmail.com
 */

