<?php authController::handleLogin(); ?>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/checklist.css">
</head>
<!--NAVBAR-->
<nav class="navbar bg-light">
           <div class="navbar-brand">Relatório <!--Número do Relatório--></div>
           <a href="<?php echo BASE_URL; ?>"><div class="navbar-brand">Início</div></a>
           <a href="<?php echo BASE_URL; ?>home/sair" id="sair"><div class="navbar-brand">Sair</div></a>
</nav><!--FIM NAVBAR-->
<div class="container">   
    <div class="row">
        <div class="col-xs-12">
           <a href="<?php echo BASE_URL; ?>relatorio/gerarPlanilha/<?php echo $info[0]['id_relatorio']; ?>"><button class="btn btn-success" style="margin-bottom: 10px; width:200px; height: 60px"> Gerar Excel</button></a>
        </div>
          
           <div class="col-xs-12">
               <a href="<?php echo BASE_URL; ?>relatorio"><button class="btn btn-primary" style="margin-bottom: 10px; width:200px; height: 60px"> Voltar para Início</button></a>
            </div>
        
        <?php if($info == false): ?>
        <?php header("Location: ".BASE_URL."relatorio/buscar") ?>
        <?php endif; ?>
        <div class="col-xs-12">
        <table class="table table-responsive">
  <thead class="thead-inverse">
    <tr>
      <th>Identification</th><!--letra + numero-->
      <th>Edge Dented</th>
      <th>Friction Marks</th>
      <th>Wetted</th>
      <th>Rusted</th>
      <th>Oval Shaped</th>
      <th>Telescope Effect</th>
      <th>Oil Stained</th>
      <th>Hold nr</th>
      <th>Remark</th>
    </tr>
  </thead>
  <tbody>
   <?php for($i=0; $i < count($info); $i++ ): ?>

        <tr>
          <th scope ="row"><?php echo $info["$i"]['letra'] ;?><?php echo $info["$i"]['numero'] ;?></th>
          <td><?php echo $info["$i"]['edge_dented'] ;?></td>
          <td><?php echo $info["$i"]['friction_marks'] ;?></td>
          <td><?php echo $info["$i"]['wetted'] ;?></td>
          <td><?php echo $info["$i"]['rusted'] ;?></td>
          <td><?php echo $info["$i"]['oval_shaped'] ;?></td>
          <td><?php echo $info["$i"]['telescope_effect'] ;?></td>
          <td><?php echo $info["$i"]['oil_stained'] ;?></td>
          <td><?php echo $info["$i"]['hold_nr'] ;?></td>
          <td><?php echo utf8_encode( $info["$i"]['remark'] );?></td>
        </tr>
   <?php endfor; ?> 
  </tbody>
</table>
      </div>
       
    </div><!--FIM ROW-->
</div><!--FIM CONTAINER-->