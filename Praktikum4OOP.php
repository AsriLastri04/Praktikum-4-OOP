<?php


class PersegiPanjang{
    public $panjang,
           $lebar;

public function hitung_luas(){
    $luas=$this->panjang*$this->lebar;  
    return"luas : " . $luas;  
    }  
public function hitung_keliling(){ 
    $keliling= 2*($this->panjang + $this->lebar);  
    return "Keliling : ". $keliling;  
    }  
public function setpanjang($panjang){
    return $this->panjang = $panjang;
}
public function setlebar($lebar){
    return $this->lebar = $lebar;
}
}
$PP = new PersegiPanjang();
echo "Panjang : " .$PP->setpanjang(50);
echo "<br>"; 
echo  "Lebar : " .$PP->setlebar(3);
echo "<br>";
echo $PP->hitung_luas();
echo "<br>";
echo $PP->hitung_keliling();

