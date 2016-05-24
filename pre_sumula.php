<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
    <!-- Search for small screen -->
    <div class="header-search-wrapper grey hide-on-large-only">
        <i class="mdi-action-search active"></i>
        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Buscar">
    </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Pré-Sumula da Partida</h5>
        <ol class="breadcrumbs">
            <li><a href="index.php">Início</a></li>
            <li><a href="#">Atividades</a></li>
            <li class="active">Pré-Sumula da Partida</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->

<!--start container-->
<div class="container">
  <div class="section">

    <div class="row">
      <div class="col s3 center-align" style="padding-top: 19px;"><img src="images/internacional.png" width="95" height="95" /><h6>Sport Club Internacional</h6>
        <p><a class="waves-effect waves-light red darken-4 btn modal-trigger" href="#plantel_home">Plantel</a></p>
        <div id="plantel_home" class="modal bottom-sheet" style="z-index: 1003; display: block; opacity: 0; bottom: -100%;">
            <div class="modal-content">
              <h4>Sport Club Internacional / Plantel 2016</h4>
              <ul id="modal_plantel_home" class="collection">
              </ul>
            </div>
          </div>
      </div>
      <div class="col s6 center-align">
        <h4>&nbsp;</h4>
        <p><b>Domingo, 15.04.2016, 17:00 Hr</b><br/>Estádio Beira Rio, Av. Padre Cacique, 891<br/>Bairro Praia de Belas</p>
      </div>
      <div class="col s3 center-align" style="padding-top: 19px;"><img src="images/gremio.png" width="75" height="75" /><h6>Grêmio Foot-Ball Porto Alegrense</h6>
       <p><a class="waves-effect waves-light red darken-4 btn modal-trigger" href="#plantel_away">Plantel</a></p>
       <div id="plantel_away" class="modal bottom-sheet" style="z-index: 1003; display: block; opacity: 0; bottom: -100%;">
          <div class="modal-content">
            <h4>Grêmio Foot-Ball Porto Alegrense / Plantel 2016</h4>
            <ul id="modal_plantel_away" class="collection">
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="divider"></div>

    <!--Basic Form-->
    <div id="basic-form" class="section">

      <div class="row">

        <div class="col s12 m12 l6">

          <form name="atletas_home">
            <div class="card-panel">
              <!-- Atletas Titulares-->
              <h4 class="header2" id="atletas_home_titulares">Titulares</h4>
              <!-- Atletas Reservas-->
              <h4 class="header2" id="atletas_home_reservas">Reservas</h4>
            </div>
          </form>

        </div>

        <div class="col s12 m12 l6">

          <form name="atletas_away">
            <div class="card-panel">
              <!-- Atletas Titulares-->
              <h4 class="header2" id="atletas_away_titulares">Titulares</h4>
              <!-- Atletas Reservas-->
              <h4 class="header2" id="atletas_away_reservas">Reservas</h4>
            </div>
          </form>

        </div>
      </div>

    </div>
    <script type="text/javascript" src="js/sumula.js" defer></script>

    <div class="row">
        <div class="col s12">
            <button id="enviar" class="btn red darken-4 waves-effect waves-light right"  style="margin-left: 10px">Enviar <i class="mdi-content-send right"></i></button>
            <button class="btn red darken-4 waves-effect waves-light right" onclick="return false;">Verificar <i class="mdi-image-camera-alt right"></i></button>
        </div>
    </div>
  </div>

</div>
<!--end container-->