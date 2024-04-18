<?php

define('DB_SERVER','localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_NAME','gym');

$connection = mysqli_connect(DB_NAME,DB_SERVER,DB_USERNAME,DB_PASSWORD);
?>