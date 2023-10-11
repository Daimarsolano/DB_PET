<?php

$conection = new mysqli("SERVER","USER", "PASS", "DATABASE", "PORT");
if ($conection -> connect_errno){
    echo "Fallo al conectar a Mysql: (" .$conection -> connect_errno . ")" . $conection -> connect_errno;
}
echo $conection -> host_info . "\n";
?>