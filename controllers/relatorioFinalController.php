<?php
class relatorioFinalController extends Controller{

    public function index(){
        
        //Variável $dados armazena todos os dados que serã utilzados na view.
        $dados = array(
        
        );
        
        if(isset($_POST['id_relatorio']) && !empty($_POST['id_relatorio'])){
            $id_relatorio = $_POST['id_relatorio'];
            $dados = getBobinas($id_relatorio);    
        }else{$dados['erro'] = "Sem informações de Bobinas.";}
        
        
        
        //passa para o template a view a ser chamada e os dados que serão utilizados.
        $this -> loadTemplate('relatorio-final', $dados);
        
    }
    
    public function getInfoBobinas($id_relatorio){
        $bobina = new Bobinas();
        $info = $bobina -> GetInfoBobinas($id_relatorio);
        return $info;
    }
    

}