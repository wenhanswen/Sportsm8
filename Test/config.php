<?php
   define('DB_SERVER', 'localhost'); //defines the db values as constants
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'QWERT1234');
   define('DB_DATABASE', 'Sportsm8');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>