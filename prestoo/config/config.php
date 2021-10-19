

<?php 


DEFINE('SITEURL', 'http://localhost:8888/private');
DEFINE('SITEURL1', 'http://localhost:8888/public');
DEFINE('SITENAME', 'Presto - Restaurant');

DEFINE('LOCALHOST', 'localhost');
DEFINE('DB_NAME', 'root');
DEFINE('DB_PASS', 'root');
DEFINE('TBL_NAME', 'presto');

// $conn = mysqli_connect(LOCALHOST, DB_NAME, DB_PASS) or die(mysqli_error($conn));

$dsn = 'mysql:host='.LOCALHOST.';dbname='.TBL_NAME;
$pdo = new PDO($dsn,DB_NAME,DB_PASS);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);





?>