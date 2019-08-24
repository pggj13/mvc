<?php
require './environment.php';
$config = array();

global $config;

if(ENVIRONMENT == "deselopment"){
    
    $config['dbname'] = "galeria";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
    
}else{
    
    $config['dbname'] = "galeria";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
    
}

