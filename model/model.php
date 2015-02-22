
<?php

$server = 'localhost';
$user = 'root';
function open_database_connection(){
  $conexao = @mysql_connect($server, 'root', '123');
  mysql_select_db('project_pizzaria', $conexao);

  return $conexao;
}

 function close_database_connection($conexao){

  mysql_close($conexao);
 
 }

  function get_all_clients()
  {
    $conexao = open_database_connection();

    $result = mysql_query("SELECT id_cliente, nome_cliente, telefone_cliente, endereco_cliente , numero_cliente, outras_info FROM cliente");

    $posts = array();
    while ($row = mysql_fetch_assoc($result)) {
        $posts[] = $row;
    }

  close_database_connection($conexao);

  return $posts;
}
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
 
/* EXIBIR CLIENTE VIA ID [PENDENTE] */
 function get_client($id_cliente)
 {
  $conexao = open_database_connection();

  $id = mysql_real_escape_string($id_cliente);

 $query = 'SELECT nome_cliente FROM cliente WHERE id_cliente = '.$id;

  $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);

  close_database_connection($conexao);

  return $row;
 }