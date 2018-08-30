<?php
class checklistController extends Controller{

    public function index(){
        
        //Variável $dados armazena todos os dados que serã utilzados na view.
        $dados = array(
        
        );
        
            
        
        //passa para o template a view a ser chamada e os dados que serão utilizados.
        $this -> loadTemplate('checklist', $dados);
        
    }
    
    
    /*
        função para mandar os dados do Formulário para o Model Bobinas.php
    */
    public function inserir(){
        /*
            inicia objeto da classe Bobinas.php
        */
            $bobina = new Bobinas();
        
        /*
            inicia objeto da classe Relatorios.php e chama a funcao idRelatorio para guardar
        */
            $relatorio = new Relatorios();
            $id_relatorio = $relatorio -> idRelatorio();
         /*
            Verifica se os dados do formulário foram recebidos e chama a função inserir() passando os dados do formulário
        */
        if(isset($_POST['numero']) && !empty($_POST['numero'])){
            $numero = addslashes($_POST['numero']);
            
            if(isset($_POST['letra']) && !empty($_POST['letra'])){
                $letra = addslashes($_POST['letra']);
            }else{$letra = 'F';}
            if(isset($_POST['edge_dented'])){
                $edge_dented = addslashes($_POST['edge_dented']);    
            }else{$edge_dented = ' ';}
            if(isset($_POST['friction_marks'])){
                $friction_marks = addslashes($_POST['friction_marks']);
            }else{$friction_marks = ' ';}
            if(isset($_POST['wetted'])){
                $wetted = addslashes($_POST['wetted']);
            }else{$wetted = ' ';}
            if(isset($_POST['rusted']) && !empty($_POST['rusted'])){
                $rusted = addslashes($_POST['radio']);
            }else{$rusted = ' ';}
            if(isset($_POST['oval_shaped'])){
                $oval_shaped = addslashes($_POST['oval_shaped']);
            }else{$oval_shaped = " ";}
            if(isset($_POST['telescope_effect'])){
                $telescope_effect = addslashes($_POST['telescope_effect']);
            }else{$telescope_effect = ' ';}
            if(isset($_POST['oil_stained'])){
                $oil_stained = addslashes($_POST['oil_stained']);
            }else{$oil_stained = ' ';}
            if(isset($_POST['hold_nr']) && !empty($_POST['hold_nr'])){
                $hold_nr = addslashes($_POST['hold_nr']);
            }else{$hold_nr = 0;}
            if(isset($_POST['remark']) && !empty($_POST['remark'])){
                $remark = addslashes(utf8_decode(($_POST['remark'])));
            }else{$remark = " ";}

           
            
            $b = $bobina->inserirBobina($id_relatorio, $letra, $numero, $edge_dented, $friction_marks, $wetted, $rusted, $oval_shaped, $telescope_effect, $oil_stained, $hold_nr, $remark );
            
            }
        if($b == "ok"){
            header("Location: ".BASE_URL."checklist");
        }else{
            echo "<h1>Erro no Cadastro da Bobina.</h1>";
        }
    }
  
    

}