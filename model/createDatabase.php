<?php

/* CRIAR CLIENTE [PENDENTE] */

 function create_client()
 {
  $nomeClient = $_POST["name"];
  $phoneClient = $_POST["phone"];
  $adressClient = $_POST["adress"];
  $numberClient = $_POST["number"];
  $otherInfoClient = $_POST["other"];

  $conexao = open_database_connection();

  $sqlCriar = mysql_query("INSERT INTO `project_pizzaria`.`cliente` (`id_cliente`, `nome_cliente`, `telefone_cliente`, `endereco_cliente`, `numero_cliente`, `outras_info`) VALUES (NULL,
    '$nomeClient', '$phoneClient','$enderecoClient','$numberClient','$otherInfoClient' );");


  close_database_connection($conexao);

  mysqli_query($conexao,$sqlCriar);
 }