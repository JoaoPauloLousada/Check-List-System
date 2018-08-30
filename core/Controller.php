<?php
class Controller{
    
    //função que permite o controller chamar a view desejada
    public function loadView($viewName, $viewData = array()){
        //função transforma cada indice do array ($viewData) em uma variavel com o respectivo valor
        extract($viewData);
        
        require 'views/'.$viewName.'.php';
    }
    
    //função para chamar o Template
    public function loadTemplate($viewName, $viewData = array()){
        require 'views/template.php';
    }
    
    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
    
}