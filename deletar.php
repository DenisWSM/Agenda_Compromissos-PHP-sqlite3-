<?php 

include('header.php');

 ?>
<body>
	<?php

include('conexao.php');

	$idComp=$_GET['id'];

	$conect->exec('delete from compromissos where id='.$idComp);
header("location: todos_comp.php");
	
	?>



</body>
</html>