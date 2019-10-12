<?php
class Pessoa extends conexao implements JsonSerializable {
	private $altura;
	private $idade;
	private $peso;

	public function getPeso(){
			return $this->peso;
	}
	public function getAltura(){
			return $this->altura;
	}
	public function getIdade(){
			return $this->idade;
	}
	public function setPeso($peso){
			 $this->$peso;
	}
	public function setAltura($altura){
			 $this->$altura;
	}
	public function setIdade($idade){
			 $this->$idade;
	}
	
	public function __CONSTRUCT($altura,$idade,$peso){
		$this->altura = $altura;
		$this->idade = $idade;
		$this->peso = $peso;
	}
	public function __toString(){
		$string=
		"altura".$this->altura."<br>".
		"idade".$this->idade."<br>".
		"peso".$this->peso."<br>";
		return $string;
	}
	public function Jsonserialize(){
		return [
			"altura" => $this->altura,
			"idade" => $this->idade,
			"peso" => $this->peso
		];
	}
	public function findAll(){
		$sql = "SELECT * FROM conteudo";
		$consulta = conexao::prepare($sql);
		consulta->execute();
		return $consulta->fetchAll();
	}
}
?>