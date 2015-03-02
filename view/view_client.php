
	<?php $title = 'List of Clients' ?>
	<?php ob_start() ?>

	<!doctype html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>CRUD em Lavarel</title>
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
			<li class="active"><a href="#">Todos</a></li>

		<!-- Criar Usuário -->
			<li><a href="?criar">Novo</a></li>

	</ul></div>
	</div>
	</nav>

	<div class="panel panel-success">
	<div class="panel-heading">
			<h4>Lista de Clientes</h4>
	</div>
	<div class="panel-body">
	<table class="table">
	<thead>
	<tr>
			<th>Id</th>
			<th>Titulo</th>
			<th>Ações</th>
	</tr>
	</thead>
	<tbody>

	 <?php foreach ($clientes as $user): ?>

	<tr>
		<!-- Tablea de exibição -->
			<td><?php echo $user['id_cliente'] ?></td>
			<td><?php echo $user['nome_cliente'] ?></td>
		<!-- Ações -->
			<td>
			<a href="#"><span class="label label-info">Ver</span></a>
			<a href="#"><span class="label label-success">Editar</span></a>
			<a href="#"><span class="label label-danger">Deletar</span></a>
			</td>
	</tr>

	<?php endforeach; ?>

	</tbody>
	</table>
	</div>
	</div>
	        <?php $content = ob_get_clean() ?>
	    <?php include 'layout.php' ?>

