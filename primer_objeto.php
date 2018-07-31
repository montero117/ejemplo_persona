<?php
//definir clase ss


class Persona{
	public $edad;
	public $altura;
	public $peso;
	public $puta;
	

    public function __construct() {
	   $array = array(21, "bar", "hello", "world");
	   if($array[0]===20){
		$this->edad=$array[0];
        $this->altura=1.80;
        $this->peso=90;
	   }
	   else{
		$this->puta='es púta';
	   }
      
    
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
	public function getPuta(){
		return $this->puta;
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

	public function setputa($value){
		$this->puta=$value;
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