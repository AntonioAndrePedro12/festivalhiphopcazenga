<?php

     $dbHost = 'LocalHost';
     $dbUsername = 'root';
     $dbPassword = '';
     $dbName = 'festival-cazenga';

$conexao = new msql($dbHost,$dbUsername,$dbPassword,$dbName);
if (conexao->maxdb_connect_errno)
 {
	echo "erro";
}
else
{
	echo "Conexão efectuada com sucesso";
}



?>