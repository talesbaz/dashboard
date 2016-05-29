<div class="container">
  <div class="section">

    <div class="row">

      <div class="col l6">
        <div class="chat">
          <div class="chat_header">
            <img class="chat_avatar" src="images/avatar.jpg"></img>JOHN DOE
            <div class="chat_status">ONLINE</div>
          </div>
          <div class="chat_s">
            <div class="chat_bubble-1">Hi</div>
            <div class="chat_bubble-1">How are you?</div>
            <div class="chat_bubble-2">Fine. What about you?</div>
            <div class="chat_bubble-1">I'm great. Wanna meet?</div>
            <div class="chat_bubble-2">Sure</div>
            <div class="chat_bubble-2">I'll see you soon</div>
            <div class="chat_bubble-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat augue ac ultrices malesuada. Fusce varius urna id dignissim vestibulum. Integer rutrum, purus sit amet tincidunt molestie, diam dui pulvinar nulla, rhoncus facilisis elit mi sit amet lorem.</div>
            <div class="chat_bubble-2">Huh?</div>
            <div class="chat_bubble-1">Just Testing &#x1F609;</div>
          </div>
          <div class="chat_input">
            <input placeholder="Type here..." class="chat_text" onkeypress="if(event.keyCode === 13){add()}"><button onclick="add()" class="chat_submit fa fa-send"></button>
          </div>
        </div>
        <style type="text/css">
          .chat{width:400px;height:80vh;box-shadow:0 0 30px -5px grey;margin:10vh calc(50vw - 200px);background:#fafafa;position:relative;font-family:'Montserrat',sans-serif}
          .chat_header{padding:15px;border-bottom:4px solid teal;background:#f0f0f0;color:teal}
          .chat_status{font-size:11px;margin:4px 0 -4px}
          .chat_avatar{float:right;width:42px;border-radius:50%;margin-top:-3px}
          .chat_input{position:absolute;bottom:0;width:calc(100% - 8px);padding:10px 4px 6px;background:#c8c8c8}
          .chat_text{width:calc(85% - 10px);padding:10px;box-sizing:border-box;margin:0 5px 5px;vertical-align:top;font-family:'Montserrat',sans-serif}
          .chat_submit{width:calc(15% - 5px);padding:10px;box-sizing:border-box;margin:0 5px 5px 0;vertical-align:top;border:1px solid teal;cursor:pointer;color:teal;border-radius:0 8px 8px 0;transition:all .4s}
          .chat_submit:hover{background:teal;color:#fff}
          .chat_bubble-1,.chat_bubble-2{padding:10px;margin:13px 17px;width:200px;font-size:14px}
          .chat_bubble-1{border:1px solid teal;border-radius:12px 12px 12px 0}
          .chat_bubble-2{border:1px solid grey;border-radius:12px 12px 0 12px;margin-left:160px}
          .chat_s{max-height:calc(75vh - 86px - 29px);overflow-y:scroll;padding:15px 0 0}
          ::-webkit-scrollbar{width:13px}
          ::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 0 4px #fff;background:rgba(0,0,0,0.2)}
        </style>
      </div>

    </div>

    <div class="divider"></div>

    <!--work collections start-->
    <div id="work-collections" class="section">

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

    </div>
  </div>
</div>