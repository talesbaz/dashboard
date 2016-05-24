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
        <h5 class="breadcrumbs-title">Cadastro do Atleta</h5>
        <ol class="breadcrumbs">
            <li><a href="index.php">Início</a></li>
            <li><a href="#">Atleta</a></li>
            <li class="active">Cadastro do Atleta</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<!--start container-->
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 m12 l12">
        <div class="card-panel">
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text">
                  <label for="first_name">Nome</label>
                </div>

                <div class="input-field col s6">
                  <input id="last_name" type="text">
                  <label for="last_name">Sobrenome</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email5" type="email">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password6" type="password">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <select>
                    <option value="" disabled selected>Selecione o Perfil</option>
                    <option value="1">Manager</option>
                    <option value="2">Developer</option>
                    <option value="3">Business</option>
                  </select>
                  <label>Perfil</label>
                </div>
                <div class="input-field col s6">
                  <input type="date" class="datepicker">
                  <label for="dob">Data de Nascimento</label>
                </div>

              </div>

              <div class="row">
                <div class="input-field col s12">
                  <textarea id="message5" class="materialize-textarea" length="120"></textarea>
                  <label for="message">Observação</label>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <button class="btn red darken-4 waves-effect waves-light right" type="submit" name="action">Submit
                      <i class="mdi-content-send right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>