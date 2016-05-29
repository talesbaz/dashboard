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
        <h5 class="breadcrumbs-title">Resultados</h5>
        <ol class="breadcrumbs">
            <li><a href="dashboard.php">Início</a></li>
            <li><a href="resultados">Busca</a></li>
            <li class="active">Resultados</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="section">

    <div class="row">
        <div class="col s12">
          <div class="card-panel white">
            <h5 style="color: #004c25 !important">Gauchão</h5>
            <a style="float: right;" class="waves-effect waves-light btn red darken-4"><i class="fa fa-star right"></i>Favoritar Pesquisa</a>
            <h6><strong style="color: #004c25 !important">Resumo:</strong> Profissional / Gauchão</h6>
            <h6><strong style="color: #004c25 !important">Contato:</strong> <u>E-mail</u></h6>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#informacoes">Informações</a></li>
            <li class="tab col s3"><a href="#resumo">Resumo</a></li>
            <li class="tab col s3"><a href="#comparativo">Comparativo</a></li>
            <li class="tab col s3"><a href="#videos">Vídeos</a></li>
            <li class="tab col s3 disabled"><a href="#lance">Lance a Lance</a></li>
          </ul>
        </div>

        <div id="informacoes" class="col s12">
            <div class="card-panel">
                <?php include_once('detalha_partida_informacoes.php'); ?>
            </div>
        </div>

        <div id="resumo" class="col s12">
            <div class="card-panel">
                <?php include_once('detalha_partida_resumo.php'); ?>
            </div>
        </div>

        <div id="comparativo" class="col s12">
            <div class="card-panel">
                <?php include_once('detalha_partida_comparativo.php'); ?>
            </div>
        </div>

        <div id="videos" class="col s12">
            <div class="card-panel">
                <?php include_once('detalha_partida_videos.php'); ?>
            </div>
        </div>
    </div>

  </div>
</div>