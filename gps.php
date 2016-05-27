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
        <h5 class="breadcrumbs-title">GPS</h5>
        <ol class="breadcrumbs">
            <li><a href="dashboard.php">Início</a></li>
            <li><a href="#">Alta Performance</a></li>
            <li class="active">GPS</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="section">

    <div class="card-panel grey lighten-5 z-depth-1 hoverable">
      <div class="row valign-wrapper">

        <div class="col s4 m2">
          <img src="http://www.internacional.com.br/jogadorescolorados/foto/Valdivia_GRUPO2016.jpg" alt="" class="circle responsive-img valign">
        </div>

        <div class="col s8 m10">
              <h4><span class="materialize-red-text text-darken-3">29</span> Valdívia</h4>
        </div>
      </div>
      <div class="section">
        <div class="divider"></div>
        <!--chartjs-->
        <div id="chartjs" class="section">
          <h4 class="header">Performance na Temporada</h4>
          <div class="row">
            <div class="col s12 m4 l3"><p></p></div>
            <div class="col s12 m8 l9">
              <div class="sample-chart-wrapper">
                 <div class="ct-chart ct-golden-section" id="ct4-chart"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="divider"></div>
        <!--Bar Chart-->
        <div id="chartjs-bar-chart" class="section">
          <h4 class="header">Distância Percorrida</h4>
          <div class="row">
            <div class="col s12 m4 l3"><p></p></div>
            <div class="col s12 m8 l9">
              <div class="sample-chart-wrapper">
                <canvas id="bar-chart-sample" height="120"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="divider"></div>
        <!--Radar Chart-->
        <div id="chartjs-radar-chart" class="section">
          <h4 class="header">Radar</h4>
          <div class="row">
            <div class="col s12 m4 l3"><p></p></div>
            <div class="col s12 m8 l9">
              <div class="sample-chart-wrapper">
                <canvas id="radar-chart-sample" height="120"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="divider"></div>
        <!--Polar Area Chart-->
        <div id="chartjs-polor-chart" class="section">
          <h4 class="header">Distância/Aceleração</h4>
          <div class="row">
            <div class="col s12 m4 l3">
              <p></p>
            </div>
            <div class="col s12 m8 l9">
              <div class="sample-chart-wrapper">
                <canvas id="polar-chart-sample" height="120"></canvas>
              </div>
            </div>
          </div>
        </div>
     </div>
    </div>

    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chartjs-gps.js"></script>

  </div>
</div>