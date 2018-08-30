<?php
class Core{
    /**
    *Esta função faz o endereçamento dos controllers, actions e parâmetros
    */
    public function run(){
        
        //variavel para guardar parametros passados via url
        $params = array();
        
        //defini $url padrão como '/'
        $url = '/';
        
        //se $_GET['url] tiver algum valor então incrementa a variavel $url
        if(isset($_GET['url'])){
            $url .= $_GET['url'];
        }
        
        
        if(!empty($url) && $url != '/'){
            //separa a $url pelo caracter '/'
           $url = explode('/', $url);
            //remove o primeiro valor do array $url pois este valor está sempre vazio
            array_shift($url);
            
            //seta a variavel $currentController com o valor de $url[0]
            $currentController = $url[0].'Controller';
            
            //remove o primeiro valor de $url pois este valor já foi setado na variavel $currentController
            array_shift($url);
            
            //verifica se o usuario mandou a action via url
            if(isset($url[0]) && !empty($url[0])){
                $currentAction = $url[0]; 
                array_shift($url);
            }
            
            //caso contrário $currentAction recebe o valor padrão
            else{
                $currentAction = 'index';
            }
            
            //caso ainda exista valores em $url eles serão parametros armazenados na variavel $params
            if(count($url) > 0 ){
                $params = $url;
            }
               
            
        }
        
        //se $url estiver vazia ou $url = '/'
        // define o Controller padrão e a Action padrão
        else{
           $currentController = 'homeController';
           $currentAction = 'index';
       }
        
        //instancia objeto da classe de nome igual ao valor de $currentController
        $c = new $currentController();
        
        //esta função chama a action de nome igual ao valor de $currentAction dentro da classe instanciada
        //o primeiro parametro é um array com a classe e a action
        //o segundo parametro são os parametros (valores estão salvos em $params) da Action a ser executada ($currentAction)
        call_user_func_array(array($c, $currentAction), $params);
    }
}