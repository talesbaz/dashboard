<div class="container">
  <div class="section">

    <!--work collections start-->
    <div class="row">
        <div class="col s12 m12 l6">
          <ul id="task-card" class="collection with-header">
            <li class="collection-header red darken-4">
              <h4 class="task-card-title">Atividades</h4>
              <p class="task-card-date">Hoje <?php echo date('d/m/Y'); ?></p>
            </li>
            <li class="collection-item dismissable">
              <input type="checkbox" id="task1" />
              <label for="task1">Agenda com Empresário
              </label>
              <span class="task-cat red darken-3">Reunião as 10:00</span>
            </li>
            <li class="collection-item dismissable">
              <input type="checkbox" id="task2" />
              <label for="task2">Contrato vencendo em 3 dias
              </label>
              <span class="task-cat red darken-3">Verifique contrato de Eduardo Sasha</span>
            </li>
            <li class="collection-item dismissable">
              <input type="checkbox" id="task3" checked="checked" />
              <label for="task3">Contate o Olheiro
              </label>
            </li>
          </ul>
        </div>

        <div class="col s12 m12 l6">
            <ul id="issues-collection" class="collection">
                            <li class="collection-item avatar">
                                <i class="mdi-av-my-library-books red darken-4 circle"></i>
                                <span class="collection-header">Contratos</span>
                                <p>Duração</p>
                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s7">
                                        <p class="collections-title"><strong class="materialize-red-text text-darken-4">29</strong> Valdívia</p>
                                    </div>
                                    <div class="col s5">
                                        <div class="progress">
                                             <div class="determinate" style="width: 70%"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s7">
                                        <p class="collections-title"><strong class="materialize-red-text text-darken-4">8</strong> Anderson</p>
                                    </div>
                                    <div class="col s5">
                                        <div class="progress">
                                            <div class="determinate" style="width: 40%"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s7">
                                        <p class="collections-title"><strong class="materialize-red-text text-darken-4">9</strong> Eduardo Sasha</p>
                                    </div>
                                    <div class="col s5">
                                        <div class="progress">
                                            <div class="determinate" style="width: 95%"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s7">
                                        <p class="collections-title"><strong class="materialize-red-text text-darken-4">1</strong> Danilo Fernandes</p>
                                    </div>
                                    <div class="col s5">
                                        <div class="progress">
                                             <div class="determinate" style="width: 10%"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
        </div>
    </div>
    <div class="divider"></div>

    <div class="section">

      <div class="col l6">
        <div class="chat white">
          <div class="chat_header">
            <img class="chat_avatar" src="images/sotilli.jpg"></img>Sandro Sotilli
            <div class="chat_status">ONLINE</div>
          </div>
          <div class="chat_s">
            <div class="chat_bubble-1">Bom tarde</div>
            <div class="chat_bubble-1">Tudo bem?</div>
            <div class="chat_bubble-2">Tranquilo. E contigo?</div>
            <div class="chat_bubble-1">E a carreira?</div>
            <div class="chat_bubble-2">Fazendo gol... &#x1F609;</div>
          </div>
          <div class="chat_input">
            <input placeholder="Type here..." class="chat_text" onkeypress="if(event.keyCode === 13){add()}"><button class="chat_submit fa fa-send"></button>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>