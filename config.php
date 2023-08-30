<?php 

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dpName = 'conta';
    $dbport = 3307;

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dpName,$dbport);
    
?>