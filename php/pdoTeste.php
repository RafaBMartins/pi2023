<?php
try{
$db_host="host = silly.db.elephantsql.com;";
$db_port="port = 5432;";
$db_user="blaiyjfo";
$db_password="ZgOq9WxpaZvURWA8BtY4XqE4jPUGN5tJ";
$db_name="dbname = PI2023;";

/*para conectar ao POSTGRESQL "pgsql:host=$host;port=5432*/

//$db= new PDO('mysql:host=localhost;dbname='. $db_name . ';charset=utf8', $db_user,$db_password);

$db= new PDO('pgsql:' . $db_host . $db_port . $db_name . $db_user . $db_password);

if($db){
    echo "Sucesso";
}

//alguns atributos de performance.
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}

catch(Exception $e){
    echo $e;
}

//define('APP_NAME', 'PHP REST API TUTORIAL - PROFA MARTA');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>