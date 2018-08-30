<?php authController::handleLogin(); ?>
<head>
    <link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/novo-relatorio.css">
</head>
<!--NAVBAR-->
<nav class="navbar bg-light">
           <div class="navbar-brand">Novo Relatório</div>
           <a href="<?php echo BASE_URL; ?>"><div class="navbar-brand">Início</div></a>
           <a href="<?php echo BASE_URL; ?>home/sair" id="sair"><div class="navbar-brand">Sair</div></a>
</nav><!--FIM NAVBAR-->
<div class="container">   
    <div class="row">
        
       <div class="col-sm-12 checklist-page">
            <form class="form-checklist" method="POST" action="<?php echo BASE_URL; ?>checklist">
                <div class="form-group">
                    <input type="text" name="letra" class="form-control" style="margin-top:10px;" placeholder="Insira a Letra inicial das bobinas (exemplo: número da bobina F123456. Inserir letra F)" required>
                </div>
                <hr>
                
                <a href="<?php echo BASE_URL; ?>checklist"><button class="btn btn-primary center-block">Iniciar Checklist das Bobinas</button></a>
            </form><!--FIM FORM-->
                
                
        </div><!--FIM CHECKLIST-PAGE-->
    </div><!--FIM ROW-->
</div><!--FIM CONTAINER-->