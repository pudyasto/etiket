<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : PAW! Development Semarang
 * Email : pawdev.id@gmail.com
 * Description : 
 * ***************************************************************
 */

class Apps {

    var $name = "E-Ticket Recept";
    var $short_name = "E-Ticket";
    var $title = "E-Ticket";
    var $logintitle = "E-Ticket Recept";
    var $logindesc = "Silahkan login untuk mengakses aplikasi";
    var $logintag = "";
    var $release = "Version 2.0.0";
    var $ver = "Version  2.0.0";
    var $modname = "";
    var $moddesc = "";
    var $copyright = "E-Ticket Recept";
    var $dept = "ICT - Dept";
    var $statnav = "active";
    var $companyname = "PAW! Development";
    var $companyaddr = "Srikaton Selatan No. 31 RT 04 RW 07";
    var $companyinfo = "081226250150";
    var $ssoapp = "";
    var $appid = "";
    var $tmpdir = "";
    var $kd_cabang = "";
    private $ci = "";

    public function __construct() {
        $this->tmpdir = FCPATH . 'apps/cache/';
        $this->ci = & get_instance();
    }

    public function log_user($user_id, $menu_name, $actions, $platform = null, $browser = null) {
        if (!$platform) {
            $platform = $this->ci->agent->platform();
        }

        if (!$browser) {
            if ($this->ci->agent->is_browser()) {
                $browser = $this->ci->agent->browser() . ' ' . $this->ci->agent->version();
            } elseif ($this->ci->agent->is_robot()) {
                $browser = $this->ci->agent->robot();
            } elseif ($this->ci->agent->is_mobile()) {
                $browser = $this->ci->agent->mobile();
            } else {
                $browser = 'User Agent Tidak Dikenali';
            }
        }
        $this->ci->db->set('date_create', 'NOW()', false);
        $this->ci->db->set('user_id', $user_id);
        $this->ci->db->set('platform', $platform);
        $this->ci->db->set('browser', $browser);
        $this->ci->db->set('menu_name', $menu_name);
        $this->ci->db->set('actions', $actions);
        $this->ci->db->insert('tmp_log_user');
    }

    public function insTmpUsrLocation($user_id, $lat, $lng) {
        $data = array(
            "lat" => (float) $lat,
            "lng" => (float) $lng,
        );
        $this->ci->db->set('user_id', $user_id);
        $this->ci->db->set('user_location', json_encode($data));
        $this->ci->db->set('date_create', 'NOW()', false);
        $this->ci->db->insert('tmp_location');
    }
    
    public function updUsrLocation($user_id, $lat, $lng) {
        $this->ci->db->where('id', $user_id);
        $data = array(
            "lat" => (float) $lat,
            "lng" => (float) $lng,
        );
        $this->ci->db->set('user_location', json_encode($data));
        $this->ci->db->update('users');
        $this->insTmpUsrLocation($user_id, $lat, $lng);
    }
    
    public function insLocation($group_id, $reff_code, $lat, $lng) {
        if ($group_id == "3") {
            // Update data lokasi Customer
            $this->ci->db->where('cus_code', $reff_code);
            $data = array(
                "lat" => (float) $lat,
                "lng" => (float) $lng,
            );
            $this->ci->db->set('cus_location', json_encode($data));
            $this->ci->db->update('customers');
        } elseif ($group_id == "4") {
            // Update data lokasi Suplier
            $this->ci->db->where('sup_code', $reff_code);
            $data = array(
                "lat" => (float) $lat,
                "lng" => (float) $lng,
            );
            $this->ci->db->set('sup_location', json_encode($data));
            $this->ci->db->update('suppliers');
        } elseif ($group_id == "5") {
            // Update data lokasi Employee
            $this->ci->db->where('emp_code', $reff_code);
            $data = array(
                "lat" => (float) $lat,
                "lng" => (float) $lng,
            );
            $this->ci->db->set('emp_location', json_encode($data));
            $this->ci->db->update('employees');
        }
    }
    
    public function get_company() {
        $query = $this->ci->db->get('company');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return "";
        }
    }

    public function load_pict($location = null) {
        if ($location) {
            header("Content-type: image/jpg");
            $data = fopen($location, 'rb');
            $size = filesize($location);
            $contents = fread($data, $size);
            fclose($data);
            return $contents;
        } else {
            return "No data";
        }
    }

    public function err_code($msg) {
        // return $msg;
        // Customize error code here;
        $param = html_escape(str_replace("\n", "", str_replace('"', "|", $msg)));
        if (strpos($param, 'foreign key constraint fails')) {
            return "Data tidak dapat dihapus karena terelasi dengan data lain <br> Msg : " . substr($param, 0, strpos($param, '(') - 1);
        } elseif (strpos(strtolower($param), 'value violates unique constraint')) {
            return "Data tidak boleh sama <br> Msg : " . $param;
        } elseif (strpos(strtolower($param), 'plicate entry')) {
            return "Data tidak boleh sama <br> Msg : " . $param;
        } else {
            return $param;
        }
    }

    function curPageURL() {
        $pageURL = 'http';
        if (isset($_SERVER["HTTPS"])) {
            if ($_SERVER["HTTPS"] == "on") {
                $pageURL .= "s";
            }
        }
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }

    function curPageAddr() {
        $pageURL = 'http';
        $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
        if (isset($_SERVER["HTTPS"])) {
            if ($_SERVER["HTTPS"] == "on") {
                $pageURL .= "s";
            }
        }
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $uri_parts[0];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $uri_parts[0];
        }
        return $pageURL;
    }

    function generate_token($token_length = 32, $prefix = '') {
        $token_length = $token_length - strlen($prefix);
        if ($token_length < 0) {
            throw new Exception("Prefix is too long", 1);
        }

        $token = "";
        while (($len = strlen($token)) < $token_length) {
            $remaining_len = $token_length - $len;
            $bytes = random_bytes($remaining_len);
            $token .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $remaining_len);
        }
        return $prefix . $token;
    }

}
