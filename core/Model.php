<?php
Class Model{
    
    protected $db;
        
    public function __construct(){
        //chama a variavel global $db (criada em config.php)
        global $config;
        $this -> db = new PDO("mysql:dbname=".$config['dbname'].';host='.$config['host'], $config['dbuser'], $config['dbpass']);
    }
    
}