<?php
//relizar el metodo o la clase para realzar las operacones de conversion
class Convertir {
	//declaracion de variables
	public $grado;
	public $resultado;
	//generar contructor
	function __construct($grado){
		$this->grado=$grado;

	}
	public function convcaf(){
		$this->resultado = ($this->grado*1.8) + 32;
		echo $this->grado.'Grados Celsius equivalen a '.$this->resultado.'Grados Farenheit';

	}
	public function convfac(){
		$this->resultado =($this->grado - 32)/1.8;
		echo $this->grado.'Grados Farenheit equivalen a '.$this->resultado.'Grados Celsius';

	}
	public function convcak(){
		$this->resultado = $this->grado + 273.15;
		echo $this->grado.'Grados Celsius equivalen a '.$this->resultado.'Grados Farenheit';

	}
	public function resultado(){
		return $this->resultado;
	}
	//generar los metodos para calculos

}
?>
