<?php 


include '_conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO categoria (categoria) values ('$categoria')";
$inserir = mysqli_query($conexao, $sql);


?>


  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Removendo usuário</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>
</head>
<body>
	
	<div class="container" style="height: 50%;width:400px">

		<center>
			<h3>Adicionado com sucesso! <i class="fas fa-smile-beam"></i></h3>
			<div style="margin-top:10px">
				<a href="_adicionar_categoria.php" class="btn btn-sm btn-warning">Adicionar outra categoria.</a>
			</div>
		</center>
		
	</div>

	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/popper.js/dist/popper.js"></script>
</body>
</html>