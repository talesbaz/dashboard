<div class="row">
  <div class="col s3 center-align" style="padding-top: 19px;"><img src="images/internacional.png" width="75" height="75" /><h6>Sport Club Internacional</h6></div>
  <div class="col s6 center-align">
    <h4>4 x 1</h4>
    <p><b>Domingo, 15.04.2016, 17:00 Hr</b><br/>Estádio Beira Rio, Av. Padre Cacique, 891<br/>Bairro Praia de Belas</p>
  </div>
  <div class="col s3 center-align" style="padding-top: 19px;"><img src="images/gremio.png" width="75" height="75" /><h6>Grêmio Foot-Ball Porto Alegrense</h6></div>
</div>

<!-- morris -->
<script type="text/javascript" src="js/plugins/raphael/raphael-min.js"></script>
<script type="text/javascript" src="js/plugins/morris-chart/morris.min.js"></script>
<script type="text/javascript" src="js/plugins/morris-chart/morris-script.js"></script>

<div class="row">
  <div class="col s12 center-align">
    <div id="donut" style="height: 250px;"></div>
    <script type="text/javascript">
      Morris.Donut({
        element: 'donut',
        data: [
          {label: "Cartões Amarelos", value: 2},
          {label: "Expulsões", value: 2},
          {label: "Número de Substituições", value: 6},
          {label: "Gols Equipe da Casa", value: 4},
          {label: "Gols Equipe Visitante", value: 1}
        ],
        labelColor: '#338e3c',
        colors: ['#f2c200', '#b42833', '#a5ef00', '#e50610', '#0c80bf']
      });
    </script>
  </div>
</div>
<div class="row">
  <div class="col s12">

    <h5 class="center-align">Início</h5>

    <div class="container-timeline">

       <div class="timeline-block timeline-block-left">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container  right-float timeline"> <span class="atleta-icone-gol timeline-icone"></span> </div>
            <span class="evento right-float">(11 min) <b>Ernando</b></span>
          </div>
       </div>

       <div class="timeline-block timeline-block-right">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container left-float timeline plus-right-margin"> <span class="atleta-icone-cartao-amarelo timeline-icone-cartoes no-left-margin"></span> </div>
            <span class="evento left-float "><b>Marcelo Oliveira</b> (23 min)</span>
          </div>
       </div>

       <div class="timeline-block timeline-block-right">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container left-float timeline plus-right-margin"> <span class="atleta-icone-substituicao timeline-substituicao no-left-margin"></span> </div>
            <span class="evento left-float "><b class="expulsao">Douglas</b> - <b>Everton</b> (29 min)</span>
          </div>
       </div>

        <div class="timeline-block timeline-block-right">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container left-float timeline plus-right-margin"> <span class="atleta-icone-gol timeline-icone no-left-margin"></span> </div>
            <span class="evento left-float"><b>Giuliano</b> (31 min)</span>
          </div>
       </div>

       <div class="timeline-block timeline-block-right">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container left-float timeline plus-right-margin"> <span class="atleta-icone-substituicao timeline-substituicao no-left-margin"></span> </div>
            <span class="evento left-float "><b class="expulsao">Luan</b> - <b>Bobô</b> (40 min)</span>
          </div>
       </div>

       <div class="timeline-block timeline-block-left">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container right-float timeline"> <span class="atleta-icone-gol timeline-icone"></span> </div>
            <span class="evento right-float">(42 min) <b>Sasha</b></span>
          </div>
       </div>

       <div class="timeline-block timeline-block-left plus-padding-timeline">
          <div class="marker grey"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container right-float timeline"> <span class="atleta-apito timeline-icone"></span> </div>
            <span class="evento right-float">Fim do Primeiro Tempo</span>
          </div>
       </div>

       <div class="timeline-block timeline-block-left">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container right-float timeline"> <span class="atleta-icone-gol timeline-icone"></span> </div>
            <span class="evento right-float">(2 min) <b>Sasha</b></span>
          </div>
       </div>

       <div class="timeline-block timeline-block-right">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container left-float timeline plus-right-margin"> <span class="atleta-icone-substituicao timeline-substituicao no-left-margin"></span> </div>
            <span class="evento left-float "><b class="expulsao">Miller Bolaños</b> - <b>Henrique Almeida</b> (3 Min)</span>
          </div>
       </div>

       <div class="timeline-block timeline-block-left">
         <div class="marker green darken-2"></div>
         <div class="timeline-content">
           <div class="atleta-icones-container right-float timeline plus-right-margin"> <span class="atleta-icone-cartao-amarelo timeline-icone-cartoes vermelho"></span> </div>
           <span class="evento right-float ">(7 min) <b>Paulão</b></span>
         </div>
       </div>

       <div class="timeline-block timeline-block-left">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container right-float timeline plus-right-margin"> <span class="atleta-icone-substituicao timeline-substituicao no-left-margin"></span> </div>
            <span class="evento right-float "><b>Réver</b> - <b class="expulsao">Aylon</b> (8 Min)</span>
          </div>
       </div>

       <div class="timeline-block timeline-block-left">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container right-float timeline plus-right-margin"> <span class="atleta-icone-substituicao timeline-substituicao no-left-margin"></span> </div>
            <span class="evento right-float "><b>Alex</b> - <b class="expulsao">Andrigo</b> (15 Min)</span>
          </div>
       </div>

       <div class="timeline-block timeline-block-right">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container left-float timeline plus-right-margin"> <span class="atleta-icone-cartao-amarelo vermelho timeline-icone-cartoes no-left-margin"></span> </div>
            <span class="evento left-float "><b>Roger Santos</b> (30 min)</span>
          </div>
       </div>

       <div class="timeline-block timeline-block-left">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container right-float timeline plus-right-margin"> <span class="atleta-icone-substituicao timeline-substituicao no-left-margin"></span> </div>
            <span class="evento right-float "><b>Vitinho</b> - <b class="expulsao">Anderson</b> (35 Min)</span>
          </div>
       </div>

       <div class="timeline-block timeline-block-left">
          <div class="marker green darken-2"></div>
          <div class="timeline-content">
            <div class="atleta-icones-container right-float timeline"> <span class="atleta-icone-gol timeline-icone"></span> </div>
            <span class="evento right-float"><b>Rodrigo Dourado</b> (43 min)</span>
          </div>
       </div>

    </div>

    <h5 class="center-align">Final</h5>
  </div>
</div>