<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName ='nafa';

$conexao = new mysqli($dbHost,$dbName,$dbPassword,$dbUsername);

if($conexao>connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexão efetuada com sucesso";
}

?>

