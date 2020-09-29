<div class="container-fluid home-container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 py-5 text-center">

            <img src="img/rosinetoslogo.png" class="pt-5" width="300" alt="">

            <h3 class="pt-3 mb-4 panel-orc-header">RNSYS GROUP CORP</h3>
            <form class="" name="rnsys-vendas-login" method="post" action="valida-login/"> 
                <div class="form-group">
                   
                    <input type="email" class="form-control" id="login-name" 
                    aria-describedby="emailHelp" name="usuario" placeholder="Seu email">
                    <!-- <label for="exampleInputEmail1">Endereço de email</label> -->
                    
                </div>
                <div class="form-group">
                    
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" 
                    placeholder="Senha">
                    <!-- <label for="exampleInputPassword1">Senha</label> -->
                </div>
                <input type="submit" class="btn acesso-provisorio " name="login-on" value="enviar">
            </form> 

            <!-- <a href="http://localhost/rnsys/orcamento-panel/" class="acesso-provisorio"> -->
            <!-- <a href="<?= URL;?>/valida-login/" class="acesso-provisorio">
                ACESSAR PAINEL RNSYS
            </a> -->

        </div>
        <div class="col-md-3"></div>
    </div>
</div>