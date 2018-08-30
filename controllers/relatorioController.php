<?php
class relatorioController extends Controller{

    
    
    public function index(){
        
        //Variável $dados armazena todos os dados que serã utilzados na view.
        $dados = array(
        
        );
        
        
       
            
            
       
        
        
        
        
        //passa para o template a view a ser chamada e os dados que serão utilizados.
        $this -> loadTemplate('relatorio', $dados);
    }
    
    public function criarRelatorio(){
         $relatorio = new Relatorios;
         $relatorio -> CriarNovoRelatorio();
        header("Location: ".BASE_URL."relatorio/novo");
    }
    
    /*
        função que carre view novo-relatorio.php
    */
    public function novo(){
        $dados = array();
        
       
        
        $this -> loadTemplate('novo-relatorio', $dados);
    }
    
    /*traz os ultimos dez relatorios*/
    public function buscar(){
            $dados = array();
            $relatorio = new Relatorios();
            $dados['info'] = $relatorio -> Ultimos();
            
            if($dados == 0){
               
                $this -> loadTemplate('relatorio', array());
            }    
            
            $this -> loadTemplate('ultimos-relatorios', $dados);
    }
    
    /*
        busca relatórios por data
    */
    public function buscarData(){
        
    }
    
    
    /*
        chama a view relatorio-final.php que carrega a tabela do relatório
    */
    public function relatoriof($id_relatorio){
        $dados= array();
        $bobina = new Bobinas();
        $dados['info'] = $bobina -> GetInfoBobinas($id_relatorio);
        
       
        
        $this->loadTemplate('relatorio-final', $dados);
    }
    
    public function gerarPlanilha($id_relatorio){
        $bobina = new Bobinas();
        $dados = $bobina -> GetInfoBobinas($id_relatorio);
        require 'gerarPlanilhaController.php';
    }
    
}