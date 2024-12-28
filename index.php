<?php 
include('classes/classe_login.php');
include('header.php');

 ?>
 <body>
<div class="container">
	<div class="tituleira"><div class="logo_titu2"></div><h1 class='roboto-bold'>Agenda de Compromissos</h1></div>
<form class="fm" method="post">
	<h3 class="roboto-bold">Login</h3>
	<label class="roboto-regular">Usuário:</label>
	<input type="password"name="nicname" required>
	<label class="roboto-regular">Senha:</label>
	<input type="password" name="userpw" required>
	<div class="botgrupo">
	<button type="input" class="roboto-bold">Entrar</button>
	<button type="reset" class="roboto-bold">limpar</button>
</div>
</form>
</div>
<?php 

$user=$_POST['nicname'];
$sen=$_POST['userpw'];

$logar=new login($user,$sen);
$logar->logar();


 ?>
 </body>
 </html>