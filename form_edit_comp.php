<body>
<?php


include('header.php');
include('conexao.php');

$idcod=$_GET['id'];




$resultado=$conect->query('Select * from compromissos where id='.$idcod);

$linha=$resultado->fetchArray(SQLITE3_ASSOC);


?>

	<div class="container">
		<div class="tituleira2"><div class="logo_titu"></div><h1 class="roboto-bold">Editar Compromisso</h1></div>
		<a href="todos_comp.php" class="bot_novo roboto-bold"><-Voltar</a>
	<form class="fm roboto-regular" method="post">
		<input type="text" name="id" hidden value="<?php echo $linha['id']?>">
		<label>Data</label>
		<input type="text" name="nome" value="<?php echo $linha['nome']?>">
		<label>Tipo</label>
		<select name="tipo">

			<?php
			 
		
			$op=['Reunião-Empresa','Reunião-Família','Reunião-Amigos','Reunião-Escola','Religioso','Outro evento'];

			echo "<option selected >".$linha['tipo']."</option>";

			foreach ($op as $value) {
				echo "<option value='".$value."'>".$value."</option>";
				
			}
			?>
		</select>
		<label>Data:</label>
		<input type="date" name="data" value="<?php echo $linha['data']?>">
		<label>Detalhes:</label>
		<textarea name="detalhes"><?php echo $linha['detalhes']?></textarea>
		<button type="input" name="envia">Atualizar compromisso</button>
	</form>
</div>
<?php
$id_update=$_POST['id'];
$nome=$_POST['nome'];
$tipo=$_POST['tipo'];
$data=$_POST['data'];

$detalhes=$_POST['detalhes'];

if(!empty($id_update)){



	$conect->exec("UPDATE compromissos SET nome='".$nome."',tipo='".$tipo."',data='".$data."',detalhes='".$detalhes."' where id='".$id_update."'");

	header("location: todos_comp.php");
}

?>

</body>

</html>