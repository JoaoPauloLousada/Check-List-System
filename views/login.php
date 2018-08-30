<nav class="navbar bg-light">
           <div class="navbar-brand">Login</div>
</nav><!--FIM NAVBAR-->
<div class="container">   
    <div class="row">
        <div class="col-xs-12">
          <?php if(isset($erro) && !empty($erro)):?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $erro;?>
                </div>
                    <?php endif; ?>
            <form method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Usuário</label>
                    <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
       
    </div><!--FIM ROW-->
</div><!--FIM CONTAINER-->