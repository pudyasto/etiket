<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * ***************************************************************
 *  Script : 
 *  Version : 
 *  Date :
 *  Author : PAW! Development Semarang
 *  Email : pawdev.id@gmail.com
 *  Description : 
 * ***************************************************************
 */

/**
 * Description of Debug
 *
 * @author adi
 */
class Debug extends CI_Controller {
    protected $data = '';
    public function __construct()
    {
        parent::__construct();
        $this->data = array(
            'msg_main' => "Error",
            'msg_detail' => " Page",
        );
    }

    //redirect if needed, otherwise display the user list
    
    public function index()
    {
        $this->template
            ->title('Error 505',$this->apps->name)
            ->set_layout('main')
            ->build('err_505',$this->data);
    } 
    
    public function err_505()
    {
        $this->template
            ->title('Error 505',$this->apps->name)
            ->set_layout('main')
            ->build('err_505',$this->data);
    }
    
    public function err_404()
    {
        $this->template
            ->title('Error 404',$this->apps->name)
            ->set_layout('main')
            ->build('err_404',$this->data);
    }
    
    public function err_500()
    {
        $this->template
            ->title('Error 500',$this->apps->name)
            ->set_layout('main')
            ->build('err_500',$this->data);
    }
}
