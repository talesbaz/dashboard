<div class="row">
  <div class="col s3 center-align" style="padding-top: 19px;"><img src="images/internacional.png" width="75" height="75" /><h6>Sport Club Internacional</h6></div>
  <div class="col s6 center-align">
    <h4>4 x 1</h4>
    <p><b>Domingo, 15.04.2016, 17:00 Hr</b><br/>Estádio Beira Rio, Av. Padre Cacique, 891<br/>Bairro Praia de Belas</p>
  </div>
  <div class="col s3 center-align" style="padding-top: 19px;"><img src="images/gremio.png" width="75" height="75" /><h6>Grêmio Foot-Ball Porto Alegrense</h6></div>
</div>

<div class="row">
  <div class="col s6">
    <ul class="collection  with-header">
        <li class="collection-header"><b>Trio de Arbitragem</b></li>

        <li class="collection-item avatar">
          <img src="images/juiz_daronco.jpg" alt="Árbitro" class="circle">
          <span class="title">Árbitro</span>
          <p>Anderson Daronco</p>
        </li>
        <li class="collection-item avatar">
          <img src="images/juiz_luiza.jpg" alt="Árbitro" class="circle">
          <span class="title">1. Assistente</span>
          <p>Luiza Naujorks Reis</p>
        </li>
        <li class="collection-item avatar">
          <img src="images/juiz_julio.jpg" alt="Árbitro" class="circle">
          <span class="title">2. Assistente</span>
          <p>Júlio Cesar Espinoza de Freitas</p>
        </li>
    </ul>
   </div>
   <div class="col s6">
    <div class="card">
       <div class="card-image waves-effect waves-block waves-light">
         <img class="activator" src="images/beira.jpg">
       </div>
       <div class="card-content">
         <span class="card-title activator grey-text text-darken-4">Estádio Beira Rio<i class="material-icons right">more_vert</i></span>
       </div>
       <div class="card-reveal">
         <span class="card-title grey-text text-darken-4">Local da partida<i class="material-icons right">close</i></span>
         <p>O Estádio José Pinheiro Borda, conhecido como Gigante da Beira-Rio ou simplesmente Beira-Rio, é um estádio de futebol pertencente ao Internacional, está localizado às margens do lago Guaíba, situado em Porto Alegre, no estado brasileiro do Rio Grande do Sul.
         <br/><a target="_blank" href="https://pt.wikipedia.org/wiki/Est%C3%A1dio_Beira-Rio">Saiba Mais</a>
         <br/><a target="_blank" href="https://www.google.com.br/maps/dir/''/estadio+beira+rio/@-30.0654664,-51.3058873,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x9519789308dc5dbb:0x4140aceb991dc95!2m2!1d-51.2358471!2d-30.065485">Como chegar</a>
         </p>
       </div>
     </div>
  </div>
</div>

<div class="section">

  <div class="col s12">
    <h5 class="center-align">Números na Temporada</h5>
  </div>

  <table class="comparativo bordered">
      <tbody>
      <tr>
        <td width="25%">4</td>
        <td width="50%"><b>Posição atual</b></td>
        <td width="25%">1</td>
      </tr>
      <tr>
        <td>26</td>
        <td><b>Pontuação</b></td>
        <td>29</td>
      </tr>
      <tr>
        <td>224</td>
        <td><b>Número de gols</b></td>
        <td>29</td>
      </tr>
      <tr>
        <td>13</td>
        <td><b>Jogos disputados</b></td>
        <td>13</td>
      </tr>
      <tr>
        <td>7</td>
        <td><b>Vitórias</b></td>
        <td>9</td>
      </tr>
      <tr>
        <td>5</td>
        <td><b>Empates</b></td>
        <td>2</td>
      </tr>
      <tr>
        <td>1</td>
        <td><b>Derrotas</b></td>
        <td>2</td>
      </tr>
      <tr>
        <td>28</td>
        <td><b>Cartões amarelos</b></td>
        <td>31</td>
      </tr>
      <tr>
        <td>4</td>
        <td><b>Cartões vermelhos</b></td>
        <td>2</td>
      </tr>
    </tbody></table>
</div>

<div class="section">

  <div class="col s12">
    <h5 class="center-align">Temporada</h5>
  </div>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>

  <div id="container" style="height: 400px;"></div><br/>

  <script type="text/javascript">
  $('#container').highcharts({
         title: {
                     text: '',
                     x: -20 //center
                 },
                 xAxis: {
                    title: {
                         text: 'Rodada'
                     },
                     categories: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]
                 },
                 yAxis: {
                     title: {
                         text: 'Posição'
                     },
                     plotLines: [{
                         value: 0,
                         width: 1,
                         color: 'red'
                     }]
                 },
                 tooltip: {
                     valueSuffix: '°'
                 },

                 series: [{
                      name: 'Internacional',
                      data: [7, 5, 4, 5, 5, 5, 5, 5, 5, 5, 4, 3, 3],
                      color: 'red'
                  }, {
                      name: 'Grêmio',
                      data: [3, 1, 1, 3, 3, 4, 3, 3, 3, 1, 1, 1, 1],
                      color: 'blue'
                  }]
             });
  </script>
</div>

<div class="section">

  <div class="col s12">
    <h5 class="center-align">Temporada 2015</h5>
  </div>

  <table class="comparativo bordered">
      <tbody>
        <tr>
          <td width="25%">2</td>
          <td width="50%"><b>Vitórias</b></td>
          <td width="25%">1</td>
        </tr>

        <tr>
          <td>1</td>
          <td><b>Derrotas</b></td>
          <td>2</td>
        </tr>

        <tr>
          <td>2</td>
          <td><b>Empates</b></td>
          <td>2</td>
        </tr>

      </tbody>
    </table>
</div>

<div class="section">

  <div class="col s12">
    <h5 class="center-align">Últimos confrontos</h5>
  </div>

  <table class="comparativo bordered">
      <tbody>
        <tr>
          <td width="20%">06/03/2016</td>
          <td width="20%"><b>Grêmio</b></td>
          <td width="20%">0 x 0</td>
          <td width="20%"><b>Internacional</b></td>
          <td width="20%">Arena (Porto Alegre)</td>
        </tr>
        <tr>
          <td width="20%">22/11/2015</td>
          <td width="20%"><b>Internacional</b></td>
          <td width="20%">1 x 0</td>
          <td width="20%"><b>Grêmio</td>
          <td width="20%">Beira-Rio (Porto Alegre)</td>
        </tr>
        <tr>
          <td width="20%">09/08/2016</td>
          <td width="20%"><b>Grêmio</b></td>
          <td width="20%">5 x 0</td>
          <td width="20%"><b>Internacional</b></td>
          <td width="20%">Arena (Porto Alegre)</td>
        </tr>
      </tbody>
    </table>
</div>