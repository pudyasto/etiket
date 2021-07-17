<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('monthconvert'))
{      
    function monthconvert($date) {
        if(!empty($date)){
            $date_id = explode('-', $date);
            return $date_id[1].'-'.$date_id[0];
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

