<?php

require_once 'model/model.php';
//require_once 'controllers.php';

$clientes = get_all_clients();

require 'view/view_client.php';
