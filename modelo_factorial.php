<?php

class Factorial{
	public $num;
	public $i;
	public $res;
	public function SetDatos($num){
		$this->num=$num;
		$this->res=1;
		$this->i=$num;
	}
	public function operacion(){
		while($this->num>0){
			$this->res=$this->res*$this->num;
			$this->num--;
		}
	}
	public function Getvalor(){
		echo '<h1> El factorial de <h1>'.$this->i.' es: '.$this->res;
	}
}
?>