<?php

DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','password');
DEFINE('DB_HOST','db');
DEFINE('DB_NAME','burgerbros');


$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die ('Could not connect to MYSQL: ' . mysqli_connect_error());


?>