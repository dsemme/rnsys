
<div class="container-fluid">

  <div class="row">

  <!-- barra lateral direita  -->
    <div class="col-12 right-board-col py-5">

      <img src="../img/rosinetoslogo.png" class="logo-subpage" width="350" alt="">

      <h3 class="panel-orc-header">RNSYS GROUP CORP</h3>


      <a class="panel-orc-menu mt-4" data-toggle="modal" data-target="#sac">
        <!-- <img src="../img/alarmg.png" alt=""> -->
        <span><i class="fas fa-shield-alt"></i> Sistema de Alarme Completo</span>
      </a>
      
      <a class="panel-orc-menu" data-toggle="modal" data-target="#cftv4">
        <!-- <img src="../img/camg.png" alt=""> -->
        <span><i class="fas fa-shield-alt"></i>  Sistema de CFTV 4 Câmeras</span>
      </a>

      <a class="panel-orc-menu" data-toggle="modal" data-target="#combo4">
        <!-- <img src="../img/dvrg.png" alt=""> -->
        <span><i class="fas fa-shield-alt"></i>  Combo Sistema de Alarme 4 Câmeras</span>
      </a>


      <a class="panel-orc-menu" data-toggle="modal" data-target="#combo8">
        <!-- <img src="../img/dvr8g.png" alt=""> -->
        <span><i class="fas fa-shield-alt"></i>  Combo Sistema de Alarme 8 Câmeras</span>
      </a>
      <a class="panel-orc-menu" data-toggle="modal" data-target="#combo16">
        <!-- <img src="../img/dvr16g.png" alt=""> -->
        <span><i class="fas fa-shield-alt"></i>  Combo Sistema de Alarme 16 Câmeras</span>
      </a>




    <!-- Modal SAC -->
      <div class="modal fade" id="sac" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body text-center">
              <img class="modal-header-img" src="../img/camg.png" alt="">
              <h5 class="modal-title py-3" id="exampleModalLabel">Sistema de Alarme Completo</h5>
              <p class="modal-body-p">Qual tipo de cliente você está atendendo?</p>
              <!-- <a class="modal-body-links text-center" href="http://localhost/rnsys/sac-cn/"> -->
              <a class="modal-body-links text-center" href="<?= URL;?>/sac-cn/">
                <i class="fas fa-user-plus"></i>
                <span>Cliente Novo</span>
              </a> 
              <br>
              <a class="modal-body-links" href="<?= URL;?>/sac-cp/">
                <i class="fas fa-file-import"></i>
                <span>Cliente Portabilidade</span>
              </a>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>


    <!-- Modal CFTV4 -->
    <div class="modal fade" id="cftv4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body text-center">
              <img class="modal-header-img" src="../img/camg.png" alt="">
              <h5 class="modal-title py-3" id="exampleModalLabel">Sistema de CFTV 4 Câmeras</h5>
              <p class="modal-body-p">Qual tipo de cliente você está atendendo?</p>
              <!-- <a class="modal-body-links text-center" href="http://localhost/rnsys/sac-cn/"> -->
              <a class="modal-body-links text-center" href="<?= URL;?>/cftv-cn/">
                <i class="fas fa-user-plus"></i>
                <span>Cliente Novo</span>
              </a> 
              <br>
              <a class="modal-body-links" href="<?= URL;?>/cftv-cp/">
                <i class="fas fa-file-import"></i>
                <span>Cliente Portabilidade</span>
              </a>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal COMBO4 -->
      <div class="modal fade" id="combo4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body text-center">
              <img class="modal-header-img" src="../img/camg.png" alt="">
              <h5 class="modal-title py-3" id="exampleModalLabel">Combo de Alarme 4 Câmeras</h5>
              <p class="modal-body-p">Qual tipo de cliente você está atendendo?</p>
              <!-- <a class="modal-body-links text-center" href="http://localhost/rnsys/sac-cn/"> -->
              <a class="modal-body-links text-center" href="<?= URL;?>/combo4-cn/">
                <i class="fas fa-user-plus"></i>
                <span>Cliente Novo</span>
              </a> 
              <br>
              <a class="modal-body-links" href="<?= URL;?>/combo4-cp/">
                <i class="fas fa-file-import"></i>
                <span>Cliente Portabilidade</span>
              </a>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>


      <!-- Modal COMBO8 -->
      <div class="modal fade" id="combo8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body text-center">
              <img class="modal-header-img" src="../img/camg.png" alt="">
              <h5 class="modal-title py-3" id="exampleModalLabel">Combo de Alarme 8 Câmeras</h5>
              <p class="modal-body-p">Qual tipo de cliente você está atendendo?</p>
              <!-- <a class="modal-body-links text-center" href="http://localhost/rnsys/sac-cn/"> -->
              <a class="modal-body-links text-center" href="<?= URL;?>/combo8-cn/">
                <i class="fas fa-user-plus"></i>
                <span>Cliente Novo</span>
              </a> 
              <br>
              <a class="modal-body-links" href="<?= URL;?>/combo8-cp/">
                <i class="fas fa-file-import"></i>
                <span>Cliente Portabilidade</span>
              </a>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>


    <!-- Modal COMBO16 -->
      <div class="modal fade" id="combo16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body text-center">
              <img class="modal-header-img" src="../img/camg.png" alt="">
              <h5 class="modal-title py-3" id="exampleModalLabel">Combo de Alarme 16 Câmeras</h5>
              <p class="modal-body-p">Qual tipo de cliente você está atendendo?</p>
              <!-- <a class="modal-body-links text-center" href="http://localhost/rnsys/sac-cn/"> -->
              <a class="modal-body-links text-center" href="<?= URL;?>/combo16-cn/">
                <i class="fas fa-user-plus"></i>
                <span>Cliente Novo</span>
              </a> 
              <br>
              <a class="modal-body-links" href="<?= URL;?>/combo16-cp/">
                <i class="fas fa-file-import"></i>
                <span>Cliente Portabilidade</span>
              </a>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

</div>