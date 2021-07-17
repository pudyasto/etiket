<?php

/*
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : Pudyasto Adi W.
 * Email : mr.pudyasto@gmail.com
 * Description : 
 * ***************************************************************
 */

//var_dump($bbm);

class PDF extends FPDF {
    private $data=array();
            
    function Header() {
        // Logo
        $this->Image('./assets/img/logo-lengkap-mini-hitam.png', 2, 2, 10);
        $this->SetFont('Arial', 'B', 9);
        $this->Text(14, 5, "INSTALASI FARMASI");
        $this->Text(14, 9, "RSIGM SULTAN AGUNG");
        $this->SetFont('Arial', '', 7);
        $this->Text(14, 11.5, "Jl. Raya Kaligawe Km. 4 Semarang");
        $this->Text(14, 14, "Telp. 024 6581803");
        $this->Line(2, 15, 64, 15);
        $this->Ln(15);
    }
    
    function Content($data){
        $this->data = $data;
    }
            
    function Footer() {
        // Position at 1 cm from bottom
        $this->SetY(-10);
        $this->SetFont('Arial', '', 8);
        $this->Cell(0, 3, 'Tgl ' . date("Y-m-d H:i:s"), 0, 1, 'C');
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(0, 3, 'Semoga Cepat Sembuh', "B", 0, 'C');
    }

}

// Instanciation of inherited class
$pdf = new PDF('P', 'mm', 'label_resep');
$pdf->SetMargins(2, 0, 2);
$pdf->Content($data);
$pdf->AliasNbPages();
$pdf->AddPage();
$jml = 1;
for ($x = 1;$x<=$data['jml_cetak'];$x++) {
//    $pdf->SetFont('Arial', '', 8);
//    $pdf->Cell(64, 3, "Apoteker: Arifin Santoso, MSc.,Apt", 0, 1);
//    $pdf->Cell(64, 3, "SIPA No. : 449.1/449/DPM-PTSP/SIPA/XI/2017", 0, 1);
//    $pdf->ln(1);
//    $pdf->SetFont('Arial', '', 7);
//    $pdf->Cell(50, 5, $header->kd, 0, 0, 'L');
//    $pdf->Cell(14, 5, "No. " . $jml, 0, 1, 'R');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->MultiCell(64, 5, "Nama : " . ucwords(strtolower($data['nama_pasien'])), 0, 'L');
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->MultiCell(64, 5, "No. RM : " . ucwords(substr($data['no_rm'],-6)) , 0, 'L');
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->MultiCell(64, 5, "Tgl. Lahir : " . strtoupper(date_id($data['tgl_lahir'])), 0, 'L');
    $pdf->ln(1);
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->MultiCell(64, 5, $data['nama_obat'] . " " . $data['dosis'], 0, 'C');
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->MultiCell(64, 5, "Exp: ".date_id($data['tgl_exp']), 0, 'C');
    $pdf->ln(1);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(44, 5, $data['aturan_pakai'], 0, 0);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(20, 5, $data['jml_obat'] . " / " . $data['satuan'], 0, 1);
    $pdf->ln(1);
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->MultiCell(64, 3, "Catatan: \n".$data['keterangan'], 0, 'L');
    $pdf->ln(1);
}
$pdf->Output();
