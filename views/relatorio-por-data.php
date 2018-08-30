<?php authController::handleLogin(); ?>
<head>
    
</head>
<!--NAVBAR-->
<nav class="navbar bg-light">
           <div class="navbar-brand">Spindola</div>
           <a href="<?php echo BASE_URL; ?>"><div class="navbar-brand">Início</div></a>
           <a href="<?php echo BASE_URL; ?>home/sair" id="sair"><div class="navbar-brand">Sair</div></a>
</nav><!--FIM NAVBAR-->
<div class="container">   
    <div class="row">
            
            <ul class="list-group">
                <?php for($i =0; $i < count($info) ; $i++): ?>
                    <a href="<?php echo BASE_URL;?>relatorio/relatoriof/<?php echo $info["$i"]['id']; ?>"><li class="list-group-item"><?php echo date('d/m/Y H:i:s', strtotime($info["$i"]['data'])); ?> - <small><?php echo $info["$i"]['id']; ?></small></li></a>
                    <hr>
                <?php endfor; ?>  
            </ul>
        
        
       
    </div><!--FIM ROW-->
</div><!--FIM CONTAINER-->
<script type="text/javascript" src="<?php echo BASE_URL?>assets/js/relatorio.js"></script>