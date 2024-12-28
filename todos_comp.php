<?php 

include('header.php');

 ?>
<body>
<?php
include('conexao.php');
?>

	<div class="container">
		<div class="tituleira2"><div class="logo_titu2"></div><h1 class='roboto-bold'> Compromissos</h1></div>
		<a href="form_cad_comp.php" class="bot_novo roboto-bold">+ ADICIONAR</a>
		<ul>
		<?php
		$card=$conect->query('select rowid,* from compromissos order by id desc');
		


		while($resultado=$card->fetchArray()){
			echo "<li class='lista'>";
			echo "<h1 class='roboto-regular'>".$resultado['nome']."</h1>";
			echo "<h2 class='roboto-regular'>".$resultado['tipo']."</h2>";
			
			echo "<h3 class='roboto-regular'>".date('d/m/Y',strtotime($resultado['data']))."</h3>";

			if($_GET['id']<>$resultado['id']){
		
			echo "<div class='detalhes' ><p class='roboto-regular'>".$resultado['detalhes']."</p></div>";

		}else{
			echo "<div class='detalhes2' ><a href='?id=null' ><img src='img/botao_close.svg'></a><p class='roboto-regular'>".$resultado['detalhes']."</p></div>";
		} 
			echo "<div class='bot_cards'>";
			echo "<a  href='deletar.php?id=".$resultado['id']."' class='botao roboto-bold'>Deletar</a>";
			echo "<a  href='form_edit_comp.php?id=".$resultado['id']."' class='botao roboto-bold'>Editar</a>";

			echo "<a href='?id=".$resultado['id']."' class='botao roboto-bold' >Detalhes</a>";
			echo "</div>";
			
			

			echo "</li>";



		}
			?>
		
			
		</ul>
	
</div>

<?php

/*$nome=$_POST['nome'];
$tipo=$_POST['tipo'];
$data=$_POST['data'];

$detalhes=$_POST['detalhes'];

if(isset($nome)){

	$conect->exec("INSERT INTO compromissos(nome,tipo,data,detalhes)VALUES('".$nome."','".$tipo."','".$data."','".$detalhes."')");

	echo "Compromisso agendado!";
}else{
	echo "Algo aconteceu de errado. Compromisso não agendado.";
}*/

?>

</body>
</html>