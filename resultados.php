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
            <li class="active">Resultados</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="section">
    <div class="section col s12">
      <h1 class="materialize-red-text text-darken-4">Resultados</h1>

        <form>

          <div class="row">

              <div class="input-field col s1 m6">
                <select id="temporada">
                  <option value="" disabled selected></option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                </select>
                <label>Temporada</label>
              </div>

              <div class="input-field col s1 m6">
                <select id="campeonato">
                  <option value="" disabled selected></option>
                  <option value="2016">Copa</option>
                  <option value="2015">Pré-Temporada</option>
                </select>
                <label>Campeonato</label>
              </div>

              <div class="input-field col s1 m6">
                <select id="Categoria">
                  <option value="" disabled selected></option>
                  <option value="profissional">Profissional</option>
                  <option value="">Sub-20</option>
                  <option value="">Sub-13</option>
                  <option value="">Sub-14</option>
                  <option value="">Juvenil</option>
                  <option value="">Juniores</option>
                  <option value="">Infantil</option>
                </select>
                <label>Categoria</label>
              </div>

              <div class="input-field col s1 m6">
                <select id="divisao">
                  <option value="" disabled selected></option>
                  <option value="">Copa Sub-19</option>
                  <option value="">Divisão de Acesso</option>
                  <option value="">Estadual Infantil</option>
                  <option value="">Estadual Júnior</option>
                  <option value="">Estadual Juvenil A</option>
                  <option value="">Estadual Juvenil B</option>
                  <option value="gauchao">Gauchão</option>
                  <option value="">Recopa</option>
                  <option value="">Segunda Divisão</option>
                  <option value="">Super Copa</option>
                </select>
                <label>Divisão</label>
              </div>

              <div class="input-field col s1 m6">
                <select id="regiao">
                  <option value="" disabled selected></option>
                  <option value="">Fronteira</option>
                  <option value="">Região Metropolitana</option>
                  <option value="">Serra</option>
                  <option value="">Vale do Taquari</option>
                </select>
                <label>Região</label>
              </div>

          </div>

          <a href="resultados_encontrados" class="waves-effect waves-light btn red darken-4" style="float: right;"><i class="fa fa-send right"></i>Enviar</a>
          <a class="waves-effect waves-light btn red darken-2"><i class="fa fa-star right"></i>Favoritar Pesquisa</a>

        </form>

        <script type="text/javascript">
          $(document).ready(function() {
             $('select').material_select();
           });
        </script>
    </div>
    </form>
  </div>
</div>
