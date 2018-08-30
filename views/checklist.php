<?php authController::handleLogin(); ?>
<head>
    <link rel="stylesheet" href="<?php echo BASE_URL?>assets/css/checklist.css">
</head>
<!--NAVBAR-->
<nav class="navbar bg-light">
           <div class="navbar-brand">CheckList Bobina</div>
           <a href="<?php echo BASE_URL; ?>"><div class="navbar-brand">Início</div></a>
           <a href="<?php echo BASE_URL; ?>home/sair" id="sair"><div class="navbar-brand">Sair</div></a>
</nav><!--FIM NAVBAR-->
<div class="container">   
    <div class="row">
        <?php echo $_SERVER['HTTP_REFERER'] ;?>
       <div class="col-sm-12 checklist-page">
            <form class="form-checklist" method="POST" action="checklist/inserir">
                <div class="form-group">
                    <input type="number" name="numero" class="form-control" style="margin-top:10px;" placeholder="Insira o Número da Bobina" required>
                </div>
                <hr>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" name="edge_dented" type="checkbox" value="X">
                    EDGE DENTED (DENTADA)
                  </label>
                </div>
                <hr>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" name="friction_marks" type="checkbox" value="X">
                    FRICTION MARKS (MARCAS DE FRICÇÃO)
                  </label>
                </div>
                <hr>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" name="wetted" type="checkbox" value="X">
                    WETTED (MOLHADO)
                  </label>
                </div>
                <hr>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" name="rusted" id="rusted" type="checkbox" value="1" onclick="verificarRusted()" >
                    RUSTED (OXIDADO)
                  </label>
                </div>
                <hr>
                
                <div id="rusted-radio">
                   
                    <label class="custom-control custom-radio" >
                      <input id="radio1" name="radio" type="radio" class="custom-control-input" value="A1">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">A1</span>
                    </label><br>
                    <label class="custom-control custom-radio" >
                      <input id="radio2" name="radio" type="radio" class="custom-control-input" value="B1" >
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">B1</span>
                    </label><br>
                    <label class="custom-control custom-radio" >
                      <input id="radio3" name="radio" type="radio" class="custom-control-input" value="C1">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">C1</span>
                    </label><br>
                    <label class="custom-control custom-radio" >
                      <input id="radio4" name="radio" type="radio" class="custom-control-input" value="D1" >
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">D1</span>
                    </label><br>
                    <hr>
                </div>
                
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" name="oval_shaped" type="checkbox" value="X">
                    OVAL SHAPED (OVALIZADA)
                  </label>
                </div>
                <hr>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" name="telescope_effect" type="checkbox" value="X">
                    TELESCOPE EFFECT 
                  </label>
                </div>
                <hr>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" name="oil_stained" type="checkbox" value="X">
                    OIL STAINED (MANCHA DE ÓLEO)
                  </label>
                </div>
                <hr>
                <div class="form-group">
                    <input type="number" name="hold_nr" class="form-control" placeholder="HOLD NR">
                </div>
                <hr>
                <div class="form-group">
                    <input type="text" name="remark" class="form-control" placeholder="REMARK (OBSERVAÇÃO)">
                </div>
                 <div class="form-group" hidden>
                    <input type="text" name="id_relatorio" class="form-control" value="<?php echo $id_relatorio; ?>">
                </div>

                <button class="btn btn-primary center-block">Confirmar</button>
            </form><!--FIM FORM-->
                
                <div class="spacer"></div>
                
                <button class="btn btn-danger center-block" onclick="confirmarEncerramento()" style="margin-bottom: 20px">Encerrar Relatório</button>
                <div id="confirmar-encerramento">
                    <div class="alert alert-danger" role="alert">
                        Você realmente deseja Encerrar o Relatório? clicando em "Confirmar" você afirma que terminou
                        a operação de conferência das bobinas.
                    </div>
                    <div class="col-xs-6">
                        <button class="btn btn-warning center-block" onclick="naoConfirmarEncerramento()">Não Confirmar</button>
                    </div>
                    <div class="col-xs-6">
                        <a href="<?php echo BASE_URL; ?>relatorio"><button class="btn btn-success center-block" >Confirmar Encerramento</button></a>
                    </div>
                </div><!--FIM CONFIRMAR ENCERRAMENTO-->
        </div><!--FIM CHECKLIST-PAGE-->
    </div><!--FIM ROW-->
</div><!--FIM CONTAINER-->