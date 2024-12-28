<?php 

class login{

	public $usuario;
	public $senha;

	function __construct($user,$pw_user){

		$this->usuario=$user;
		$this->senha=$pw_user;
	}

	function logar(){
		if($this->usuario=="denis" and $this->senha=="123"){
			header("location: todos_comp.php");
		}
	}
}


 ?>