<?php
class homeController extends Controller{

    public function index(){
        
        //Variável $dados armazena todos os dados que serã utilzados na view.
        $dados = array(
        
        );
        
        if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
            $this -> loadTemplate('relatorio', $dados);
        }else{
            $this -> login();

        }
        
        //passa para o template a view a ser chamada e os dados que serão utilizados.
        $this -> loadTemplate('home', $dados);
        
    }
    
    public function login(){
     header("Location:".BASE_URL."login");
    }

    public function sair(){
        unset($_SESSION['id']);
        header("Location: ".BASE_URL);
    }
}