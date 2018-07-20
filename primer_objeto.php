<?php
//definir clase 
class Persona{
	public $edad;
	public $altura;
    public $peso;
    
    public function __construct() {
        $this->edad=10;
        $this->altura=1.80;
        $this->peso=90;


    }
 
	//getters
	public function getEdad(){
		return $this->edad;
	}
	public function getPeso(){
		return $this->peso;
	}
	public function getAltura(){
		return $this->altura;
	}
 
 
	//setters
	public function setEdad($value){
		$this->edad=$value;
	}
 
	public function setAltura($value){
		$this->altura=$value;
	}
 
	public function setPeso($value){
		$this->peso=$value;
	}
 
	//calcula el IMC accediendo a las propiedades
	public function imc(){
		return $this->peso / ($this->altura * $this->altura);
 
	}
 
	//calcula el IMC accediendo mediante los métodos get
	public function imc2(){
		return $this->getPeso() / ($this->getAltura() * $this->getAltura());
 
	}
 
}