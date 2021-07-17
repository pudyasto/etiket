<?php

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
 * Description of Main_qry
 *
 * @author adi
 */
class Main_qry extends CI_Model {

    protected $res = array();
    protected $id = 0;
    protected $title = 'Berhasil';
    protected $state = '1';

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function selectEtiket($id){
        $data = $this->db->get_where('trn_cetak', array('id' => $id))->row();
        if($data){
            return (array) $data;
        }else{
            return false;
        }
    }

    public function getKeterangan(){
        $keterangan = strtolower($this->input->get('term'));
        $this->db->select("trim(keterangan) AS keterangan");
        $this->db->like("trim(lower(keterangan))", $keterangan);
        $this->db->group_by("trim(keterangan), trim(lower(keterangan)), length(trim(keterangan))");
        $this->db->order_by(" CASE "
                . "WHEN trim(lower(keterangan)) LIKE '$keterangan' THEN 1 "
                . "WHEN trim(lower(keterangan)) LIKE '$keterangan%' THEN 2 "
                . "WHEN trim(lower(keterangan)) LIKE '%$keterangan' THEN 3 "
                . "WHEN trim(lower(keterangan)) LIKE '%$keterangan%' THEN 4 "
                . "ELSE 5 "
                . "END ASC ");
        $this->db->order_by("length(trim(keterangan))", "ASC");
        $this->db->limit(15);
        $query = $this->db->get('trn_cetak');
        return $query->result_array();
    }

    public function getAturanPakai(){
        $aturan_pakai = strtolower($this->input->get('term'));
        $this->db->select("trim(aturan_pakai) AS aturan_pakai");
        $this->db->like("trim(lower(aturan_pakai))", $aturan_pakai);
        $this->db->group_by("trim(aturan_pakai), trim(lower(aturan_pakai)), length(trim(aturan_pakai))");
        $this->db->order_by(" CASE "
                . "WHEN trim(lower(aturan_pakai)) LIKE '$aturan_pakai' THEN 1 "
                . "WHEN trim(lower(aturan_pakai)) LIKE '$aturan_pakai%' THEN 2 "
                . "WHEN trim(lower(aturan_pakai)) LIKE '%$aturan_pakai' THEN 3 "
                . "WHEN trim(lower(aturan_pakai)) LIKE '%$aturan_pakai%' THEN 4 "
                . "ELSE 5 "
                . "END ASC ");
        $this->db->order_by("length(trim(aturan_pakai))", "ASC");
        $this->db->limit(15);
        $query = $this->db->get('trn_cetak');
        return $query->result_array();
    }

    public function getSatuan(){
        $satuan = strtolower($this->input->get('term'));
        $this->db->select("trim(satuan) AS satuan");
        $this->db->like("trim(lower(satuan))", $satuan);
        $this->db->group_by("trim(satuan), trim(lower(satuan)), length(trim(satuan))");
        $this->db->order_by(" CASE "
                . "WHEN trim(lower(satuan)) LIKE '$satuan' THEN 1 "
                . "WHEN trim(lower(satuan)) LIKE '$satuan%' THEN 2 "
                . "WHEN trim(lower(satuan)) LIKE '%$satuan' THEN 3 "
                . "WHEN trim(lower(satuan)) LIKE '%$satuan%' THEN 4 "
                . "ELSE 5 "
                . "END ASC ");
        $this->db->order_by("length(trim(satuan))", "ASC");
        $this->db->limit(15);
        $query = $this->db->get('trn_cetak');
        return $query->result_array();
    }

    public function getDosis(){
        $dosis = strtolower($this->input->get('term'));
        $this->db->select("trim(dosis) AS dosis");
        $this->db->like("trim(lower(dosis))", $dosis);
        $this->db->group_by("trim(dosis), trim(lower(dosis)), length(trim(dosis))");
        $this->db->order_by(" CASE "
                . "WHEN trim(lower(dosis)) LIKE '$dosis' THEN 1 "
                . "WHEN trim(lower(dosis)) LIKE '$dosis%' THEN 2 "
                . "WHEN trim(lower(dosis)) LIKE '%$dosis' THEN 3 "
                . "WHEN trim(lower(dosis)) LIKE '%$dosis%' THEN 4 "
                . "ELSE 5 "
                . "END ASC ");
        $this->db->order_by("length(trim(dosis))", "ASC");
        $this->db->limit(15);
        $query = $this->db->get('trn_cetak');
        return $query->result_array();
    }

    public function getNamaObat(){
        $nama_obat = strtolower($this->input->get('term'));
        $this->db->select("trim(nama_obat) AS nama_obat");
        $this->db->like("trim(lower(nama_obat))", $nama_obat);
        $this->db->group_by("trim(nama_obat), trim(lower(nama_obat)), length(trim(nama_obat))");
        $this->db->order_by(" CASE "
                . "WHEN trim(lower(nama_obat)) LIKE '$nama_obat' THEN 1 "
                . "WHEN trim(lower(nama_obat)) LIKE '$nama_obat%' THEN 2 "
                . "WHEN trim(lower(nama_obat)) LIKE '%$nama_obat' THEN 3 "
                . "WHEN trim(lower(nama_obat)) LIKE '%$nama_obat%' THEN 4 "
                . "ELSE 5 "
                . "END ASC ");
        $this->db->order_by("length(trim(nama_obat))", "ASC");
        $this->db->limit(15);
        $query = $this->db->get('trn_cetak');
        return $query->result_array();
    }

    public function getNamaPasien(){
        $nama_pasien = strtolower($this->input->get('term'));
        $this->db->select("trim(nama_pasien) AS nama_pasien");
        $this->db->like("trim(lower(nama_pasien))", $nama_pasien);
        $this->db->group_by("trim(nama_pasien), trim(lower(nama_pasien)), length(trim(nama_pasien))");
        $this->db->order_by(" CASE "
                . "WHEN trim(lower(nama_pasien)) LIKE '$nama_pasien' THEN 1 "
                . "WHEN trim(lower(nama_pasien)) LIKE '$nama_pasien%' THEN 2 "
                . "WHEN trim(lower(nama_pasien)) LIKE '%$nama_pasien' THEN 3 "
                . "WHEN trim(lower(nama_pasien)) LIKE '%$nama_pasien%' THEN 4 "
                . "ELSE 5 "
                . "END ASC ");
        $this->db->order_by("length(trim(nama_pasien))", "ASC");
        $this->db->limit(15);
        $query = $this->db->get('trn_cetak');
        return $query->result_array();
    }

    public function getNoRM(){
        $no_rm = strtolower($this->input->get('term'));
        $this->db->select("trim(no_rm) AS no_rm");
        $this->db->like("trim(lower(no_rm))", $no_rm);
        $this->db->group_by("trim(no_rm), trim(lower(no_rm)), length(trim(no_rm))");
        $this->db->order_by(" CASE "
                . "WHEN trim(lower(no_rm)) LIKE '$no_rm' THEN 1 "
                . "WHEN trim(lower(no_rm)) LIKE '$no_rm%' THEN 2 "
                . "WHEN trim(lower(no_rm)) LIKE '%$no_rm' THEN 3 "
                . "WHEN trim(lower(no_rm)) LIKE '%$no_rm%' THEN 4 "
                . "ELSE 5 "
                . "END ASC ");
        $this->db->order_by("length(trim(no_rm))", "ASC");
        $this->db->limit(15);
        $query = $this->db->get('trn_cetak');
        return $query->result_array();
    }

    public function submit() {
        try {
            $array = $this->input->post();
            if ($array['no_rm']) {
                $array['tgl_lahir'] = dateconvert($array['tgl_lahir']);
                $array['tgl_exp'] = dateconvert($array['tgl_exp']);
                $array['tgl_tambah'] = date('Y-m-d H:i:s');
                $resl = $this->db->insert('trn_cetak', $array);
                $this->id = $this->db->insert_id();
                if (!$resl) {
                    $err = $this->db->error();
                    throw new Exception(" Kesalahan : " . $this->apps->err_code($err['message']));
                } else {
                    $this->msg = "Klik OK untuk Mencetak";
                }
            } else {
                throw new Exception(" Kesalahan : Variabel Tidak Sesuai");
            }
        } catch (Exception $e) {
            $this->title = "Kesalahan";
            $this->msg = $e->getMessage();
            $this->state = "0";
        }
        $arr = array(
            'title' => $this->title,
            'msg' => $this->msg,
            'state' => $this->state,
            'id' => $this->id,
            'csrf_return' => $this->security->get_csrf_hash(),
        );
        return json_encode($arr);
    }
}
