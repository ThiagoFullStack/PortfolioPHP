<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '123456';
$dbName = 'formulario-thiago';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
 
    // Primeiro Teste a fezer 

// if($conexao->connect_errno)
// {
//   echo "Erro";
// }
// else
// {
//   echo "Conexão efetuada com sucesso!!!";
// }

?>