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
        <h5 class="breadcrumbs-title">Checklist da Partida</h5>
        <ol class="breadcrumbs">
            <li><a href="index.php">Início</a></li>
            <li><a href="#">Atividades</a></li>
            <li class="active">Checklist da Partida</li>
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
      <div class="col s3 center-align" style="padding-top: 19px;"><img src="images/internacional.png" width="75" height="75" /><h6>Sport Club Internacional</h6></div>
      <div class="col s6 center-align">
        <h4>&nbsp;</h4>
        <p><b>Domingo, 15.04.2016, 17:00 Hr</b><br/>Estádio Beira Rio, Av. Padre Cacique, 891<br/>Bairro Praia de Belas</p>
      </div>
      <div class="col s3 center-align" style="padding-top: 19px;"><img src="images/gremio.png" width="75" height="75" /><h6>Grêmio Foot-Ball Porto Alegrense</h6></div>
    </div>

    <div class="divider"></div>
    <div class="col s12">
      <ul id="task-card" class="collection with-header">
          <li class="collection-header red darken-4">
              <h4 class="task-card-title">Itens</h4>
          </li>
          <a href="#task-modal" class="task-add modal-trigger btn-floating waves-effect waves-light"><i class="mdi-content-add"></i></a>
          <li class="collection-item dismissable">
              <input type="checkbox" id="task5" />
              <label for="task5">Condições do Estádio <a href="#" class="secondary-content"><span class="ultra-small"></span></a>
              </label>
              <span class="task-cat green">Segurança</span>
              <div class="row section" style="padding-left: 31px;">
                <div class="input-field col s12">
                   <input id="input_text"  type="text" length="100">
                   <label for="input_text">Observação</label>
                </div>
              </div>
          </li>
          <li class="collection-item dismissable">
              <input type="checkbox" id="task9" />
              <label for="task9">Policiamento <a href="#" class="secondary-content"><span class="ultra-small"></span></a>
              </label>
              <span class="task-cat green">Segurança</span>
              <div class="row section" style="padding-left: 31px;">
                <div class="input-field col s12">
                   <input id="input_text"  type="text" length="100">
                   <label for="input_text">Observação</label>
                </div>
              </div>
          </li>
          <li class="collection-item dismissable">
              <input type="checkbox" id="task7" />
              <label for="task7">Acessos dos árbitros ao campo <a href="#" class="secondary-content"><span class="ultra-small"></span></a>
              </label>
              <span class="task-cat purple">Acessibilidade</span>
              <div class="row section" style="padding-left: 31px;">
                <div class="input-field col s12">
                   <input id="input_text"  type="text" length="100">
                   <label for="input_text">Observação</label>
                </div>
              </div>
          </li>
          <li class="collection-item dismissable">
              <input type="checkbox" id="task1" />
              <label for="task1">Ambulancia<a href="#" class="secondary-content"><span class="ultra-small"></span></a>
              </label>
              <span class="task-cat pink">Segurança/Saúde</span>
              <div class="row section" style="padding-left: 31px;">
                <div class="input-field col s12">
                   <input id="input_text"  type="text" length="100">
                   <label for="input_text">Observação</label>
                </div>
              </div>
          </li>
          <li class="collection-item dismissable">
              <input type="checkbox" id="task2" />
              <label for="task2">Acessos dos torcedores ao estádio. <a href="#" class="secondary-content"><span class="ultra-small"></span></a>
              </label>
              <span class="task-cat purple">Acessibilidade</span>
              <div class="row section" style="padding-left: 31px;">
                <div class="input-field col s12">
                   <input id="input_text"  type="text" length="100">
                   <label for="input_text">Observação</label>
                </div>
              </div>
          </li>
          <li class="collection-item dismissable">
              <input type="checkbox" id="task6" />
              <label for="task6">Bombeiros <a href="#" class="secondary-content"><span class="ultra-small"></span></a>
              </label>
              <span class="task-cat green">Segurança</span>
              <div class="row section" style="padding-left: 31px;">
                <div class="input-field col s12">
                   <input id="input_text"  type="text" length="100">
                   <label for="input_text">Observação</label>
                </div>
              </div>
          </li>
      </ul>

      <div id="task-modal" class="modal">
        <nav class="task-modal-nav red darken-4">
            <div class="nav-wrapper">
              <div class="left col s12 m5 l5">
                <ul>
                  <li><a href="#!" class="todo-menu"><i class="modal-action modal-close  mdi-hardware-keyboard-backspace"></i></a>
                  </li>
                  <li><a href="#!" class="todo-add">Adicionar Item</a>
                  </li>
                </ul>
              </div>
              <div class="col s12 m7 l7 hide-on-med-and-down">
                <ul class="right">
                  <li><a href="#!"><i class="mdi-action-loyalty"></i></a>
                  </li>
                  <li><a href="#!"><i class="mdi-navigation-more-vert"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="modal-content">
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="todo-title" type="text" class="validate">
                    <label for="todo-title">Item</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected>Selecione o Grupo</option>
                      <option value="1">Acessibilidade</option>
                      <option value="2">Segurança</option>
                      <option value="3">Segurança/Saúde</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                      <textarea id="comments" class="materialize-textarea" length="500"></textarea>
                      <label for="comments">Comentário</label>
                      <span class="character-counter"></span>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
  </div>
  <div class="row">
        <div class="col s12">
            <button class="btn red darken-4 waves-effect waves-light right" onclick="location.href='index.php?c=pre_sumula'" style="margin-left: 10px">Enviar <i class="mdi-content-send right"></i></button>
            <button class="btn red darken-4 waves-effect waves-light right" onclick="return false;">Verificar <i class="mdi-image-camera-alt right"></i></button>
        </div>
    </div>
  </div>

</div>
<!--end container-->