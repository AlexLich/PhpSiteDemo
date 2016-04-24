<?php

/*define('DB_HOST', 'localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '12345');
define('DB_NAME', 'eshop');
define('ORDERS_LOG','orders.log');*/
$DB_HOST="localhost";
$DB_LOGIN="root";
$DB_PASSWORD="12345";
$DB_NAME="eshop";
$baske=array();
$count=0;

$link = mysqli_connect($DB_HOST,$DB_LOGIN,$DB_PASSWORD,$DB_NAME);


// if (isset($links)) {echo "yes";} else echo "Noooooooooooooooo";
if(!$link){
    echo $DB_HOST;
    
	echo 'Ошибка: '
		. mysqli_connect_errno()
		. ':'
		. mysqli_connect_error();
}
