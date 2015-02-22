<?php

//Chamando a função INDEX do MODEL 

require_once 'controller/controller.php';

$principal = new  View_AllCLients();

$criar = new TESTE();


/*
return array(

'fetch' => PDO::FETCH_CLASS,

'default' => 'mysql',

'connections' => array(
,
'mysql' => array(
'driver' => 'mysql',
'host' => 'localhost',
'database' => 'ingresse_avaliacao',
'username' => 'root',
'password' => '',
'charset' => 'utf8',
'collation' => 'utf8_unicode_ci',
'prefix' => '',
), ), );

