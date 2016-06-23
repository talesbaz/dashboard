function adicionarEvento( local, tipo ){

	var sJsonAtletas = localStorage.getItem("json_jogadores");
	oJsonAtletas     = JSON.parse(sJsonAtletas);

	aAtletasHome = [];
	aAtletasAway = [];
	$.each(oJsonAtletas, function( iIndex, oAtleta){

		if(oAtleta.local == 'home'){
			aAtletasHome.push(oAtleta);
		}
		if(oAtleta.local == 'away'){
			aAtletasAway.push(oAtleta);
		}
	});

	rowAtletaEventoSize 	  = 's8';
	rowAtletaEventoMinutoSize = 's4';

	if( tipo != 'gol' ){

		rowAtletaEventoSize 	      = 's4';
		rowAtletaEventoMinutoSize     = 's2';
		rowAtletaEventoObservacaoSize = 's6';
	}

	if( tipo == 'substituicao' ){

		rowAtletaEventoSize 	      = 's4';
		rowAtletaEventoMinutoSize     = 's3';
	}

	var oRow = $("<div></div>");
	oRow.attr("class", "row");

	var oRowAtleta = $("<div></div>");
	oRowAtleta.attr("class", "input-field col " + rowAtletaEventoSize);

	var iIdentificador = Math.random();
	var oSelectAtleta  = $("<select></select>");
	oSelectAtleta.append( "<option disabled selected>Atleta</option>" );
	var aOptionsAtleta = aAtletasHome;
	if( local == 'away'){
		aOptionsAtleta = aAtletasAway;
	}
	$.each(aOptionsAtleta, function( iIndex, oAtleta ){
    	oSelectAtleta.append( "<option>" + oAtleta.nome + "</option>" );
    });

	oRowAtleta.append(oSelectAtleta);
	oRow.append(oRowAtleta);

	var iIdentificador = Math.random();
	var oRowMinutoEvento = $("<div></div>");
	oRowMinutoEvento.attr("class", "input-field col " + rowAtletaEventoMinutoSize);

	var oInputMinutos = $("<input></input>");
	oInputMinutos.attr({"type": "text", "id": iIdentificador, "class": "validate"});

	oRowMinutoEvento.append(oInputMinutos);
	oRowMinutoEvento.append("<label for='"+iIdentificador+"'>Minutos</label>");

	if( tipo == 'substituicao' ){

		var oRowAtletaIconeSubstituido = $("<div><img src='images/substituicao.png' style='margin-top:20px;'/></div>");
		oRowAtletaIconeSubstituido.attr("class", "input-field col s1 center" );

		var oRowAtletaSubstituido = $("<div></div>");
		oRowAtletaSubstituido.attr("class", "input-field col " + rowAtletaEventoSize);

		var iIdentificador = Math.random();
		var oSelectAtleta  = $("<select></select>");
		oSelectAtleta.append( "<option disabled selected>Atleta</option>" );
		var aOptionsAtleta = aAtletasHome;
		if( local == 'away'){
			aOptionsAtleta = aAtletasAway;
		}
		$.each(aOptionsAtleta, function( iIndex, oAtleta ){
	    	oSelectAtleta.append( "<option>" + oAtleta.nome + "</option>" );
	    });

		oRowAtletaSubstituido.append(oSelectAtleta);
		oRow.append(oRowAtletaIconeSubstituido);
		oRow.append(oRowAtletaSubstituido);
	}

	oRow.append(oRowMinutoEvento);

	/**
	 * Monta Observacao
	 */
	if( tipo != 'gol' && tipo != 'substituicao'){

		var iIdentificador = Math.random();
		var oRowObervacaoEvento = $("<div></div>");
		oRowObervacaoEvento.attr("class", "input-field col " + rowAtletaEventoObservacaoSize);

		var oInputObservacao = $("<input></input>");
		oInputObservacao.attr({"type": "text", "id": iIdentificador, "class": "validate"});

		oRowObervacaoEvento.append(oInputObservacao);
		oRowObervacaoEvento.append("<label for='"+iIdentificador+"'>Observação</label>");

		oRow.append(oRowObervacaoEvento);
	}

	switch( tipo ) {

	    case 'gol':

			$( oRow ).insertAfter( "#gols_" + local );

			/**
			 * Atualiza saldo de gols
			 */
			var iSaldo = parseInt($("#resultado_" + local ).html());
			iSaldo++;
			$("#resultado_" + local ).html(iSaldo);

	        break;
	    case 'amarelo':
			$( oRow ).insertAfter( "#amarelos_" + local );
	        break;
	    case 'substituicao':
			$( oRow ).insertAfter( "#substituicao_" + local );
	        break;
	    default:
			$( oRow ).insertAfter( "#vermelhos_" + local );
	        break;
	}

	$('select').material_select();
}

function carregaAtletas(clube, local){

	/**
	 * A HAHAHA
	 */
	var oJson = [], lBuildPlantel = true;
	$.ajaxSetup({'async': false});
	$.getJSON( "clubes.json").done( function( oClubes ){
		oJson = oClubes;
	});

	for (iIndice = 0, iOrder = 1; iIndice < 18; iIndice++) {

		var sIdentificadorTipo = "atletas_" + local + "_titulares";
		if( iIndice > 10 ){

			if( iIndice == 11){
				iOrder = 1;
			}
			sIdentificadorTipo = "atletas_" + local + "_reservas";
		}

		var oRow = $("<div></div>");
		oRow.attr("class", "row");

		var oRowOrder = $("<div><label>" + iOrder + "</label></div>");
		oRowOrder.attr("class", "input-field col s1");

		var oRowAtleta = $("<div></div>");
		oRowAtleta.attr("class", "input-field col s7");

		var oSelectAtleta = $("<select></select>");
		oSelectAtleta.attr("name", sIdentificadorTipo + iIndice);
		oSelectAtleta.attr("id", sIdentificadorTipo + iIndice);
		oSelectAtleta.append( "<option disabled>Atleta</option>" );

		if( clube == 'internacional'){

			$.each(oJson.internacional.sort(sortByProperty('nome')), function( iIndex, oAtleta ){

	    		oSelectAtleta.append( "<option value='" + oAtleta.nome + "'>" + oAtleta.nome + "</option>" );

		    	/**
		    	 * Monta a modal do plantel
		    	 */
		    	if( lBuildPlantel ){

		    		var oLiPlantel = $("<li></li>");
		    		oLiPlantel.attr("class", "collection-item avatar text-align-left");

		    		var oLiPlantelImage = $("<img/>");
		    		oLiPlantelImage.attr({"src": oAtleta.foto, "class": "circle circle2"});
		    		var oLiPlantelNome = $("<span class='title'>" + oAtleta.nome + "</span>");

		    		var sStrInfoAtleta  =  "<p>Número: " + oAtleta.numero;
		    		    sStrInfoAtleta += "<br/>Posição: " + oAtleta.posicao + "</p>";

		    		var oLiPlantelInfo = $(sStrInfoAtleta);

		    		oLiPlantel.append(oLiPlantelImage);
		    		oLiPlantel.append(oLiPlantelNome);
		    		oLiPlantel.append(oLiPlantelInfo);

		    		$("#modal_plantel_home").append(oLiPlantel);
		    	}

			});
			lBuildPlantel = false;
		}else{ // :/

			$.each(oJson.gremio.sort(sortByProperty('nome')), function( iIndex, oAtleta ){

		    	oSelectAtleta.append( "<option value='" + oAtleta.nome + "'>" + oAtleta.nome + "</option>" );

		    	/**
		    	 * Monta a modal do plantel
		    	 */
		    	if( lBuildPlantel ){

		    		var oLiPlantel = $("<li></li>");
		    		oLiPlantel.attr("class", "collection-item avatar text-align-left");

		    		var oLiPlantelImage = $("<img/>");
		    		oLiPlantelImage.attr({"src": oAtleta.foto, "class": "circle circle2"});
		    		var oLiPlantelNome = $("<span class='title'>" + oAtleta.nome + "</span>");

		    		var sStrInfoAtleta  =  "<p>Número: " + oAtleta.numero;
		    		    sStrInfoAtleta += "<br/>Posição: " + oAtleta.posicao + "</p>";

		    		var oLiPlantelInfo = $(sStrInfoAtleta);

		    		oLiPlantel.append(oLiPlantelImage);
		    		oLiPlantel.append(oLiPlantelNome);
		    		oLiPlantel.append(oLiPlantelInfo);

		    		$("#modal_plantel_away").append(oLiPlantel);
		    	}

			});
			lBuildPlantel = false;
		}

		oRowAtleta.append(oSelectAtleta);

		var oRowCamisaAtleta = $("<div></div>");
		oRowCamisaAtleta.attr("class", "input-field col s3");

		var oSelectCamisaAtleta = $("<select></select>");
		oSelectCamisaAtleta.attr("name", sIdentificadorTipo + "_camisa_" + iIndice)
		oSelectCamisaAtleta.attr("id", sIdentificadorTipo + "_camisa_" + iIndice)
		oSelectCamisaAtleta.append( "<option disabled>Camisa</option>" );
		for(iIndex = 1; iIndex <= 99; iIndex++){
			oSelectCamisaAtleta.append( "<option value='"+iIndex+"'>"+iIndex+"</option>" );
		}
		oRowCamisaAtleta.append(oSelectCamisaAtleta);

		var oRowCapturaAtleta = $("<div></div>");
		oRowCapturaAtleta.attr("class", "input-field col s1");

		var oButtonCapturaAtleta = $("<a><i class=\"mdi-image-camera-alt\"></i></a>");
		oButtonCapturaAtleta.attr("class", "btn-floating red darken-4 waves-effect waves-light right");
		oButtonCapturaAtleta.attr("onClick", "return false;");

		oRowCapturaAtleta.append(oButtonCapturaAtleta);

		oRow.append(oRowOrder);
		oRow.append(oRowAtleta);
		oRow.append(oRowCamisaAtleta);
		oRow.append(oRowCapturaAtleta);

		$( oRow ).appendTo( "#" + sIdentificadorTipo );
		iOrder++;
	}

	buildRTA();

}

carregaAtletas('internacional', 'home');
carregaAtletas('gremio', 'away'); //padrao salvatore

$('#enviar').click(function() {

	var lista 	   = new Array();
	var nomes_home = new Array();
	var nomes_away = new Array();
	var lParaExecucao = false;

	var aRTASelecionados = $.merge($('#atletas_home_titulares li[class="active selected"]'), $('#atletas_home_titulares li[class="active"]'));
	var aSelecionados    = $.merge(aRTASelecionados, $('#rta_atletas_home_titulares li'));
	for (var i = 0; i < aSelecionados.length; i++) {

		jogador = aSelecionados[i];

		atleta          = new Object();
		atleta.local    = 'home';
		atleta.situacao = 'titular';
		atleta.nome     = jogador.innerHTML.replace('<span>', '');
		atleta.nome     = atleta.nome.replace('</span>', '');

		var regra = /^[0-9]+$/;

		if (atleta.nome.match(regra)) {
			continue;
		}

		$.each(nomes_home, function(key, value){

			if (value == atleta.nome) {

				alert('Jogador ' + value + ', do time da casa foi selecionado mais de uma vez para essa partida.');

				lParaExecucao = true;

			}

		});

		nomes_home.push(atleta.nome);

		lista.push(atleta);

    }

    if (lParaExecucao) {
    	return false;
    }

	if (nomes_home.length < 11 ) {
		alert('Número de titulares inscritos do time da casa é inferior a 11 jogadores. Confira os atletas selecionados.');
		return false;
	}

	var aRTASelecionados = $.merge($('#atletas_home_reservas li[class="active selected"]'), $('#atletas_home_reservas li[class="active"]'));
	var aSelecionados    = $.merge(aRTASelecionados, $('#rta_atletas_home_reservas li'));
	for (var i = 0; i < aSelecionados.length; i++) {

		jogador = aSelecionados[i];
		atleta          = new Object();
		atleta.local    = 'home';
		atleta.situacao = 'reserva';
		atleta.nome     = jogador.innerHTML.replace('<span>', '');
		atleta.nome     = atleta.nome.replace('</span>', '');

		var regra = /^[0-9]+$/;

		if (atleta.nome.match(regra)) {
			continue;
		}

		$.each(nomes_home, function(key, value){

			if (value == atleta.nome) {
				alert('Jogador ' + value + ', do time da casa foi selecionado mais de uma vez para essa partida.');
				lParaExecucao = true;
			}

		});

		nomes_home.push(atleta.nome);

		lista.push(atleta);

	}

	if (lParaExecucao) {
    	return false;
    }

    var aRTASelecionados = $.merge($('#atletas_away_titulares li[class="active selected"]'), $('#atletas_away_titulares li[class="active"]'));
	var aSelecionados    = $.merge(aRTASelecionados, $('#rta_atletas_away_titulares li'));
	for(var i=0;i<aSelecionados.length; i++) {

		jogador = aSelecionados[i];
		atleta          = new Object();
		atleta.local    = 'away';
		atleta.situacao = 'titular';
		atleta.nome     = jogador.innerHTML.replace('<span>', '');
		atleta.nome     = atleta.nome.replace('</span>', '');

		var regra = /^[0-9]+$/;

		if (atleta.nome.match(regra)) {
			continue;
		}


		$.each(nomes_away, function(key, value){
			if (value == atleta.nome) {
				alert('Jogador ' + value + ', do time visitante foi selecionado mais de uma vez para essa partida.');
				lParaExecucao = true;
				return false;
			}

		});

		nomes_away.push(atleta.nome);

		lista.push(atleta);

    }

    if (lParaExecucao) {
    	return false;
    }

    if (nomes_away.length < 11 ) {
		alert('Número de titulares inscritos do time visitante é inferior a 11 jogadores. Confira os atletas selecionados.');
		return false;
	}

	var aRTASelecionados = $.merge($('#atletas_away_reservas li[class="active selected"]'), $('#atletas_away_reservas li[class="active"]'));
	var aSelecionados    = $.merge(aRTASelecionados, $('#rta_atletas_away_reservas li'));
	for(var i=0; i<aSelecionados.length;i++) {

    	jogador = aSelecionados[i];

    	atleta          = new Object();
		atleta.local    = 'away';
		atleta.situacao = 'reserva';
		atleta.nome     = jogador.innerHTML.replace('<span>', '');
		atleta.nome     = atleta.nome.replace('</span>', '');

		var regra = /^[0-9]+$/;

		if (atleta.nome.match(regra)) {
			continue;
		}


		$.each(nomes_away, function(key, value){

			if (value == atleta.nome) {

				alert('Jogador ' + value + ', do time visitante foi selecionado mais de uma vez para essa partida.');
				lParaExecucao = true;
			}

		});

		nomes_away.push(atleta.nome);

		lista.push(atleta);

    }

	if (lParaExecucao) {
    	return false;
    }

    if (typeof(Storage) !== "undefined") {
    	localStorage.setItem("json_jogadores", JSON.stringify(lista));
    }

    location.href='finaliza_sumula';

});

$("select").material_select('update');

/**
 * sortByProperty
 */
function sortByProperty (property) {

    return function (x, y) {
        return ((x[property] === y[property]) ? 0 : ((x[property] > y[property]) ? 1 : -1));
    };
}

function buildRTA(){

	$('#atletas_home_titulares0 option[value="Danilo Fernandes"]').attr('selected', true);
	$('#atletas_home_titulares_camisa_0').val('1');
	$('#atletas_home_titulares1').val('William');
	$('#atletas_home_titulares_camisa_1').val('2');
	$('#atletas_home_titulares2').val('Paulão');
	$('#atletas_home_titulares_camisa_2').val('3');
	$('#atletas_home_titulares3').val('Ernando');
	$('#atletas_home_titulares_camisa_3').val('4');
	$('#atletas_home_titulares4').val('Artur');
	$('#atletas_home_titulares_camisa_4').val('5');
	$('#atletas_home_titulares5').val('Rodrigo Dourado');
	$('#atletas_home_titulares_camisa_5').val('6');
	$('#atletas_home_titulares6').val('Fabinho');
	$('#atletas_home_titulares_camisa_6').val('7');
	$('#atletas_home_titulares7').val('Vitinho');
	$('#atletas_home_titulares_camisa_7').val('8');
	$('#atletas_home_titulares8').val('Andrigo');
	$('#atletas_home_titulares_camisa_8').val('9');
	$('#atletas_home_titulares9').val('Atleta');
	$('#atletas_home_titulares_camisa_9').val('Camisa');
	$('#atletas_home_titulares10').val('Atleta');
	$('#atletas_home_titulares_camisa_10').val('Camisa');

	$('#atletas_home_reservas11').val('Muriel');
	$('#atletas_home_reservas_camisa_11').val('12');
	$('#atletas_home_reservas12').val('Geferson');
	$('#atletas_home_reservas_camisa_12').val('13');
	$('#atletas_home_reservas13').val('Eduardo Sasha');
	$('#atletas_home_reservas_camisa_13').val('14');
	$('#atletas_home_reservas14').val('Alisson Farias');
	$('#atletas_home_reservas_camisa_14').val('15');
	$('#atletas_home_reservas15').val('Anselmo');
	$('#atletas_home_reservas_camisa_15').val('16');
	$('#atletas_home_reservas16').val('Bertotto');
	$('#atletas_home_reservas_camisa_16').val('17');
	$('#atletas_home_reservas17').val('Fernando Bob');
	$('#atletas_home_reservas_camisa_17').val('18');

	//Away
	$('#atletas_away_titulares0').val('Marcelo Grohe');
	$('#atletas_away_titulares_camisa_0').val('1');
	$('#atletas_away_titulares1').val('Wesley');
	$('#atletas_away_titulares_camisa_1').val('2');
	$('#atletas_away_titulares2').val('Geromel');
	$('#atletas_away_titulares_camisa_2').val('3');
	$('#atletas_away_titulares3').val('Fred');
	$('#atletas_away_titulares_camisa_3').val('4');
	$('#atletas_away_titulares4').val('Marcelo Oliveira');
	$('#atletas_away_titulares_camisa_4').val('5');
	$('#atletas_away_titulares5').val('Edinho');
	$('#atletas_away_titulares_camisa_5').val('6');
	$('#atletas_away_titulares6').val('Maicon');
	$('#atletas_away_titulares_camisa_6').val('7');
	$('#atletas_away_titulares7').val('Giuliano');
	$('#atletas_away_titulares_camisa_7').val('8');
	$('#atletas_away_titulares8').val('Everton');
	$('#atletas_away_titulares_camisa_8').val('9');
	$('#atletas_away_titulares9').val('Atleta');
	$('#atletas_away_titulares_camisa_9').val('Camisa');
	$('#atletas_away_titulares10').val('Atleta');
	$('#atletas_away_titulares_camisa_10').val('Camisa');

	$('#atletas_away_reservas11').val('Leo');
	$('#atletas_away_reservas_camisa_11').val('12');
	$('#atletas_away_reservas12').val('Bressan');
	$('#atletas_away_reservas_camisa_12').val('13');
	$('#atletas_away_reservas13').val('Marcelo Hermes');
	$('#atletas_away_reservas_camisa_13').val('14');
	$('#atletas_away_reservas14').val('Ramiro');
	$('#atletas_away_reservas_camisa_14').val('15');
	$('#atletas_away_reservas15').val('Douglas');
	$('#atletas_away_reservas_camisa_15').val('16');
	$('#atletas_away_reservas16').val('Miller Bollaños');
	$('#atletas_away_reservas_camisa_16').val('17');
	$('#atletas_away_reservas17').val('Henrique Almeida');
	$('#atletas_away_reservas_camisa_17').val('18');

}