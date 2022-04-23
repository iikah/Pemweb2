<?php
require_once "class_pasien.php";

class bmi extends pasien{
    public $tinggi;
    public $berat;

    function __construct($nomor, $nama, $kelamin, $tinggi, $berat){
        parent::__construct($nomor, $nama, $kelamin);
        $this->tinggi = $tinggi;
        $this->berat = $berat;
    }

    public function getTinggi(){
        return $this->tinggi;
    }

    public function getBerat(){
        return $this->berat;
    }

    public function nilaiBMI(){
        $result = round($this->berat / (($this->tinggi/100)**2),1);
        return $result;
    }

    public function statusBMI(){
        if($this->nilaiBMI() >= 30){
            return "Obesitas2";
        }

        elseif($this->nilaiBMI() <= 29.9 && $this->nilaiBMI() >=27){
            return "Obesitas1";
        }

        elseif($this->nilaiBMI() <= 26.9 && $this->nilaiBMI() >= 23){
            return "Kelebihan Bobot";
        }
        
        elseif($this->nilaiBMI() <= 23.9 && $this->nilaiBMI() >= 18.5){
            return "ideal";
        }

        elseif($this->nilaiBMI() < 18.5){
            return "Kekurangan berat badan";
        }

        else{
            return;
        }
    }
}
?>