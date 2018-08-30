<?php
class loginController extends Controller{

    public function index(){
        
        //Variável $dados armazena todos os dados que serã utilzados na view.
        $dados = array(
        
        );
        
        if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
            $usuario = addslashes($_POST['usuario']);
            $senha = md5(addslashes($_POST['senha']));
            
            $user = new Usuarios();
            $user = $user -> VerificarLogin($usuario, $senha);
            
            if($user == false){
                $dados['erro'] = "Dados inválidos. Verifique se o nome de usuário e senha estão corretos.";
                
            }else{
                header("Location:".BASE_URL."relatorio");
            }
        }
        
        
        //passa para o template a view a ser chamada e os dados que serão utilizados.
        $this -> loadTemplate('login', $dados);
        
    }
}