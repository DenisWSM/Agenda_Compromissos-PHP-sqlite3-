<?php 

include('header.php');

 ?>
<body>
<?php


include('conexao.php');


?>

	<div class="container">
		<div class="tituleira2  roboto-bold"><div class="logo_titu"></div><h1>Agendar Compromisso</h1></div>
		<a href="todos_comp.php" class="bot_novo roboto-bold"><-Voltar</a>
	<form class="fm" method="post">
		<label>Nome</label>
		<input type="text" name="nome" required>
		<label>Tipo</label>
		<select name="tipo" required>

			<?php
			$op=['Reunião-Empresa','Reunião-Família','Reunião-Amigos','Reunião-Escola','Religioso','Outro evento'];

			echo "<option selected >Escolha um tipo</option>";

			foreach ($op as $value) {
				echo "<option value='".$value."'>".$value."</option>";
				
			}
			?>
		</select>
		<label>Data:</label>
		<input type="date" name="data" required>*
		<label>Detalhes:</label>
		<textarea name="detalhes" required></textarea>
		<div class="botgrupo">
		<button type="input" >Agendar</button>
		
		</div>
	</form>
</div>
<?php



$nome=$_POST['nome'];
$tipo=$_POST['tipo'];
$data=$_POST['data'];

$detalhes=$_POST['detalhes'];

if(!empty($nome))	{

	$conect->exec("INSERT INTO compromissos(nome,tipo,data,detalhes)VALUES('".$nome."','".$tipo."','".$data."','".$detalhes."')");

	
	
	header("location: todos_comp.php");

}

?>

</body>

</html>