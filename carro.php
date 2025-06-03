<?php 

class Carro{
private $cor;
private $modelo;
private $ano;

public function __construct($cor, $modelo, $ano){
$this ->cor= $cor;
$this ->modelo= $modelo;
$this ->ano= $ano;


}
public function setcor($cor){
$this -> cor = $cor;
}
public function getcor(){
    return $this->cor;
}
public function setmodelo($modelo){
    $this -> modelo = $modelo;
}
public function getmodelo(){
    return $this->modelo;
}
public function setano($ano){
    $this -> ano = $ano;
}
public function getano(){
    return $this->ano;
}
public function MostraCarro(){
    echo "Carro: <br> cor:" . $this->cor;
    echo "Seu modelo é: <br>:" . $this->modelo;
    echo "Seu ano é: <br>:" . $this->ano;
}
}

$c1  = new Carro("Rosa", "Mitsubishi", "2012");
print_r($c1);

?>