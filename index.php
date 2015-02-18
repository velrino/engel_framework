<?php

require_once 'controller/controller.php';
//require_once 'controllers.php';

$clientes = get_all_clients();

require 'view/view_client.php';
