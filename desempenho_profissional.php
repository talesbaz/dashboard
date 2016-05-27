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
        <h5 class="breadcrumbs-title">Análise de Desempenho</h5>
        <ol class="breadcrumbs">
            <li><a href="index.php">Início</a></li>
            <li><a href="#">Análise de Desempenho</a></li>
            <li class="active">Profissional</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="section">
    <div class="row">

      <div class="col s12">
        <ul class="tabs tab-demo z-depth-1">
          <li class="tab col s3"><a class="active" href="#test1">Física</a>
          </li>
          <li class="tab col s3"><a href="#test2">Tática</a>
          </li>
          <li class="tab col s3"><a id="trigger_tecnica" href="#test3">Técnica</a>
          </li>
        </ul>
      </div>

      <div class="col s12">

        <div id="test1" class="col s12">
          <div class="row">
            <div class="sample-chart-wrapper">
              <canvas id="line-chart-sample" height="120"></canvas>
            </div>
          </div>
        </div>

        <div id="test2" class="col s12">
          <div class="row white">

            <div class="col s6">
              <object id="movie" type="application/x-shockwave-flash" data="tatica1.swf">
                <param name="movie" value="tatica1.swf" />
                <param name="quality" value="high" />
                <param name="bgcolor" value="#ffffff" />
                <p>You do not have the latest version of Flash installed. Please visit this link to download it: <a href="http://www.adobe.com/products/flashplayer/">http://www.adobe.com/products/flashplayer/</a></p>
              </object>
            </div>

            <div class="col s6">
              <object id="movie" type="application/x-shockwave-flash" data="tatica2.swf">
                <param name="movie" value="tatica2.swf" />
                <param name="quality" value="high" />
                <param name="bgcolor" value="#ffffff" />
                <p>You do not have the latest version of Flash installed. Please visit this link to download it: <a href="http://www.adobe.com/products/flashplayer/">http://www.adobe.com/products/flashplayer/</a></p>
              </object>
            </div>
          </div>
        </div>

        <div id="test3" class="col s12">
          <div class="row">

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<script type="text/javascript" src="js/plugins/chartjs/chartjs-sample-chart.js"></script>