<?php
/*
require_once '../controller/controller.php';

$create_client = create_client();
*/

 //$clientes = create_client();

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Criar CRUD</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">


<style>
body {
width: 450px;
margin: 50px auto;
}
.badge {
float: right;
}
</style>

</head>
<body>
<h1>List of Clients in Pizzaria</h1>
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="http://www.velrino.com.br" target="a_blank" >Velrino</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="?ver">Todos</a></li>
<li class="active"><a href="#">Novo</a></li>
</ul>
</div>
</div>
</nav>
<div class="panel panel-success">
<div class="panel-heading">
<h4>Novo Cliente</h4>
</div>
<div class="panel-body">
<form method="post" name="formulario" action="#">
<p>

	<input type="text" name="name" placeholder="Cliente" class="form-control">
</p>
<p>
<!-- Campo Tamanho -->
<input type="text" name="endereco" id="endereco" placeholder="Endereço" class="form-control" >
</p>
<p>
<!-- Botão de Salvar -->
<input type="submit" value="Salvar" class="btn btn-success" onclick="$create_client();" value="Resultado">
</p>
</form>
</div>
</div>
<!-- Exibir mensagem de Sucesso ou Erro, definida no USERCONTROLLER, na Função STORE -->

</body>
</html>