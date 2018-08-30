<?php authController::handleLogin(); ?>
<head>
    <link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/relatorio.css">
</head>
<!--NAVBAR-->
<nav class="navbar bg-light">
           
           <div class="navbar-brand">Spindola</div>
           <a href="<?php echo BASE_URL; ?>"><div class="navbar-brand">Início</div></a>
           <a href="<?php echo BASE_URL; ?>home/sair" id="sair"><div class="navbar-brand">Sair</div></a>
</nav><!--FIM NAVBAR-->
<div class="container">   
    <div class="row">
        <a href="<?php echo BASE_URL; ?>relatorio/criarRelatorio"><button class="btn btn-primary center-block" >Novo Relatório</button></a>
        <button class="btn btn-warning center-block" onclick="abrirOpcoes()">Buscar Relatório</button>
        <div class="col-xs-8 col-xs-offset-2" id="opcoes-relatorios">
            
                <a href="<?php echo BASE_URL; ?>relatorio/buscar"><button class="btn btn-info center-block">Ultimos Relatórios</button></a>
                <a href=""><button class="btn btn-info center-block" disabled>Buscar Relatórios por data</button></a>
            
        </div>
       
    </div><!--FIM ROW-->
</div><!--FIM CONTAINER-->
<script type="text/javascript" src="<?php echo BASE_URL?>assets/js/relatorio.js"></script>