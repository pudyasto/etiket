<?php

defined('BASEPATH') OR exit('No direct script access allowed');
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
 * Description of Main
 *
 * @author adi
 */
class Main extends CI_Controller {

    protected $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('main_qry');
    }

    //redirect if needed, otherwise display the user list

    public function index() {
        $this->initAdd();
        $this->template
                ->title("Dashboard", $this->apps->name)
                ->set_layout('main')
                ->build('index', $this->data);
    }

    public function submit() {
        $res = $this->main_qry->submit();
        echo $res;
    }    
    
    public function cetak() {
        $id = $this->uri->segment(3);
        $this->data['data'] = $this->main_qry->selectEtiket($id);
        if($this->data['data']){
            $this->load->view('resep', $this->data);
        }else{
            $this->template
                    ->title("Tidak Ada Data", $this->apps->name)
                    ->set_layout('main')
                    ->build('debug/err_000', $this->data);
        }
    }    

    public function getKeterangan() {
        $res = $this->main_qry->getKeterangan();
        $res_arr = array();
        if ($res) {
            foreach ($res as $value) {
                $res_arr[] = $value['keterangan'];
            }
        }
        echo json_encode($res_arr);
    }

    public function getAturanPakai() {
        $res = $this->main_qry->getAturanPakai();
        $res_arr = array();
        if ($res) {
            foreach ($res as $value) {
                $res_arr[] = $value['aturan_pakai'];
            }
        }
        echo json_encode($res_arr);
    }

    public function getSatuan() {
        $res = $this->main_qry->getSatuan();
        $res_arr = array();
        if ($res) {
            foreach ($res as $value) {
                $res_arr[] = $value['satuan'];
            }
        }
        echo json_encode($res_arr);
    }

    public function getDosis() {
        $res = $this->main_qry->getDosis();
        $res_arr = array();
        if ($res) {
            foreach ($res as $value) {
                $res_arr[] = $value['dosis'];
            }
        }
        echo json_encode($res_arr);
    }

    public function getNamaObat() {
        $res = $this->main_qry->getNamaObat();
        $res_arr = array();
        if ($res) {
            foreach ($res as $value) {
                $res_arr[] = $value['nama_obat'];
            }
        }
        echo json_encode($res_arr);
    }

    public function getNamaPasien() {
        $res = $this->main_qry->getNamaPasien();
        $res_arr = array();
        if ($res) {
            foreach ($res as $value) {
                $res_arr[] = $value['nama_pasien'];
            }
        }
        echo json_encode($res_arr);
    }

    public function getNoRM() {
        $res = $this->main_qry->getNoRM();
        $res_arr = array();
        if ($res) {
            foreach ($res as $value) {
                $res_arr[] = $value['no_rm'];
            }
        }
        echo json_encode($res_arr);
    }

    private function initAdd() {
        $this->data['form'] = array(
            'no_rm' => array(
                'placeholder' => 'Nomor RM',
                'id' => 'no_rm',
                'name' => 'no_rm',
                'value' => set_value('no_rm'),
                'class' => 'form-control ',
                'required' => '',
                'autofocus' => '',
            ),
            'nama_pasien' => array(
                'placeholder' => 'Nama Pasien',
                'id' => 'nama_pasien',
                'name' => 'nama_pasien',
                'value' => set_value('nama_pasien'),
                'class' => 'form-control ',
                'required' => '',
            ),
            'tgl_lahir' => array(
                'placeholder' => 'Tanggal Lahir',
                'id' => 'tgl_lahir',
                'name' => 'tgl_lahir',
                'value' => set_value('tgl_lahir'),
                'class' => 'form-control datemask',
                'required' => '',
            ),
            'nama_obat' => array(
                'placeholder' => 'Nama Obat',
                'id' => 'nama_obat',
                'name' => 'nama_obat',
                'value' => set_value('nama_obat'),
                'class' => 'form-control ',
                'required' => '',
            ),
            'tgl_exp' => array(
                'placeholder' => 'Tanggal Exp Obat',
                'id' => 'tgl_exp',
                'name' => 'tgl_exp',
                'value' => set_value('tgl_exp'),
                'class' => 'form-control datemask',
                'required' => '',
            ),
            'dosis' => array(
                'placeholder' => 'Dosis',
                'id' => 'dosis',
                'name' => 'dosis',
                'value' => set_value('dosis'),
                'class' => 'form-control ',
                'required' => '',
            ),
            'jml_obat' => array(
                'placeholder' => 'Jumlah Obat',
                'id' => 'jml_obat',
                'name' => 'jml_obat',
                'value' => set_value('jml_obat'),
                'class' => 'form-control ',
                'required' => '',
            ),
            'satuan' => array(
                'placeholder' => 'Satuan',
                'id' => 'satuan',
                'name' => 'satuan',
                'value' => set_value('satuan'),
                'class' => 'form-control ',
                'required' => '',
            ),
            'aturan_pakai' => array(
                'placeholder' => 'Aturan Pakai',
                'id' => 'aturan_pakai',
                'name' => 'aturan_pakai',
                'value' => set_value('aturan_pakai'),
                'class' => 'form-control ',
                'required' => '',
            ),
            'keterangan' => array(
                'placeholder' => 'keterangan',
                'id' => 'keterangan',
                'name' => 'keterangan',
                'value' => set_value('keterangan'),
                'class' => 'form-control ',
                'required' => '',
            ),
            'jml_cetak' => array(
                'placeholder' => 'Jumlah Cetak',
                'id' => 'jml_cetak',
                'name' => 'jml_cetak',
                'value' => set_value('jml_cetak'),
                'class' => 'form-control ',
                'required' => '',
            ),
        );
    }
}
