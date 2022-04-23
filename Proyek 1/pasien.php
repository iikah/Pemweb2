<?php
class pasien 
{
    public $id, $nomor, $nama, $kelamin, $asal, $tgl_periksa;

    function __construct($id, $nomor, $nama, $kelamin, $asal, $tgl_periksa)
    {
        $this->id = $id;
        $this->nomor = $nomor;
        $this->nama = $nama;
        $this->kelamin = $kelamin;
        $this->asal = $asal;
        $this->tgl_periksa = $tgl_periksa;
    }
}
?>