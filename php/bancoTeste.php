<?php
// Cria uma variável para armazenar a conexão
$con = pg_connect("host=silly.db.elephantsql.com port=5432 dbname=blaiyjfo user=blaiyjfo password=ZgOq9WxpaZvURWA8BtY4XqE4jPUGN5tJ");
$res = pg_query($con, "SELECT * FROM usuario");
$row = pg_fetch_array($res);
var_dump($row);
pg_close($con);
?>
