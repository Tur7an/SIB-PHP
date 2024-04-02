<?php
    class Mahasiswa{
        public $nim;
        public $nama;
        public $kuliah;
        public $mk;
        public $nilai;

    public function __construct($nim, $nama, $kuliah, $mk, $nilai){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->mk = $mk;
        $this->nilai = $nilai;
    }

        public function getHasil(){
            if ($this->nilai > 65) return "Lulus";
            else return "Tidak Lulus";
        }
        
        public function getGrade(){
            if($this->nilai >=85) return "A";
            elseif($this->nilai >=75) return "B";
            elseif($this->nilai >=60) return "C";
            elseif($this->nilai >=40) return "D";
            else return "E";
        }

        public function getPredikat(){
            if($this->nilai >=85) return "Sangat Memuaskan";
            elseif($this->nilai >=75) return "Memuaskan";
            elseif($this->nilai >=60) return "Cukup";
            elseif($this->nilai >=40) return "Kurang";
            else return "Sangat Kurang";
        }
    }
?>