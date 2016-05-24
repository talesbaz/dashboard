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

	rowAtletaEventoSize 	  = 's5';
	rowAtletaEventoMinutoSize = 's7';

	if( tipo != 'gol' ){

		rowAtletaEventoSize 	      = 's3';
		rowAtletaEventoMinutoSize     = 's3';
		rowAtletaEventoObservacaoSize = 's6';
	}

	var oLi = $("<li></li>");
	oLi.attr("class", "collection-item");

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

	oRow.append(oRowMinutoEvento);

	/**
	 * Monta Observacao
	 */
	if( tipo != 'gol' ){

		var iIdentificador = Math.random();
		var oRowObervacaoEvento = $("<div></div>");
		oRowObervacaoEvento.attr("class", "input-field col " + rowAtletaEventoObservacaoSize);

		var oInputObservacao = $("<input></input>");
		oInputObservacao.attr({"type": "text", "id": iIdentificador, "class": "validate"});

		oRowObervacaoEvento.append(oInputObservacao);
		oRowObervacaoEvento.append("<label for='"+iIdentificador+"'>Observação</label>");

		oRow.append(oRowObervacaoEvento);
	}

	oLi.append(oRow);

	switch( tipo ) {

	    case 'gol':
			$( oLi ).appendTo( "#gols_" + local );
	        break;
	    case 'amarelo':
			$( oLi ).appendTo( "#amarelos_" + local );
	        break;
	    default:
			$( oLi ).appendTo( "#vermelhos_" + local );
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
		oSelectAtleta.attr("name", sIdentificadorTipo + iIndice)
		oSelectAtleta.append( "<option disabled selected>Atleta</option>" );

		if( clube == 'internacional'){

			$.each(oJson.internacional.sort(sortByProperty('nome')), function( iIndex, oAtleta ){

		    	oSelectAtleta.append( "<option>" + oAtleta.nome + "</option>" );

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

		    	oSelectAtleta.append( "<option>" + oAtleta.nome + "</option>" );

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
		oSelectCamisaAtleta.append( "<option disabled selected>Camisa</option>" );
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
}

carregaAtletas('internacional', 'home');
carregaAtletas('gremio', 'away'); //padrao salvatore

adicionarEvento();

$('#enviar').click(function() {

	var lista 	   = new Array();
	var nomes_home = new Array();
	var nomes_away = new Array();
	var lParaExecucao = false;

	$('#atletas_home_titulares li[class="active selected"]').each(function(indice, jogador){
		atleta          = new Object();
		atleta.local    = 'home';
		atleta.situacao = 'titular';
		atleta.nome     = jogador.innerHTML.replace('<span>', '');
		atleta.nome     = atleta.nome.replace('</span>', '');
		
		
		$.each(nomes_home, function(key, value){

			if (value == atleta.nome) {
				alert('Jogador ' + value + ', do time da casa foi selecionado mais de uma vez para essa partida.');
				lParaExecucao = true;
			}
			
		});
		
		nomes_home.push(atleta.nome);

		lista.push(atleta);
		
    });
	
	
    if (lParaExecucao) {
    	return false;
    }

	if (nomes_home.length < 11 ) {
		alert('Número de titulares inscritos do time da casa é inferior a 11 jogadores. Confira os atletas selecionados.');
		return false;
	}


	$('#atletas_home_reservas li[class="active selected"]').each(function(indice, jogador){
		atleta          = new Object();
		atleta.local    = 'home';
		atleta.situacao = 'reserva';
		atleta.nome     = jogador.innerHTML.replace('<span>', '');
		atleta.nome     = atleta.nome.replace('</span>', '');

		$.each(nomes_home, function(key, value){

			if (value == atleta.nome) {
				alert('Jogador ' + value + ', do time da casa foi selecionado mais de uma vez para essa partida.');
				lParaExecucao = true;
			}
			
		});
		
		nomes_home.push(atleta.nome);

		lista.push(atleta);

	});

	if (lParaExecucao) {
    	return false;
    }

	$('#atletas_away_titulares li[class="active selected"]').each(function(indice, jogador){
		atleta          = new Object();
		atleta.local    = 'away';
		atleta.situacao = 'titular';
		atleta.nome     = jogador.innerHTML.replace('<span>', '');
		atleta.nome     = atleta.nome.replace('</span>', '');
		
		$.each(nomes_away, function(key, value){

			if (value == atleta.nome) {
				alert('Jogador ' + value + ', do time visitante foi selecionado mais de uma vez para essa partida.');
				lParaExecucao = true;
			}
			
		});
		
		nomes_away.push(atleta.nome);

		lista.push(atleta);
		
    });

    if (lParaExecucao) {
    	return false;
    }

    if (nomes_away.length < 11 ) {
		alert('Número de titulares inscritos do time visitante é inferior a 11 jogadores. Confira os atletas selecionados.');
		return false;
	}

    $('#atletas_away_reservas li[class="active selected"]').each(function(indice, jogador){
    	atleta          = new Object();
		atleta.local    = 'away';
		atleta.situacao = 'reserva';
		atleta.nome     = jogador.innerHTML.replace('<span>', '');
		atleta.nome     = atleta.nome.replace('</span>', '');
		
		$.each(nomes_away, function(key, value){

			if (value == atleta.nome) {
				alert('Jogador ' + value + ', do time visitante foi selecionado mais de uma vez para essa partida.');
				lParaExecucao = true;
			}
			
		});
		
		nomes_away.push(atleta.nome);

		lista.push(atleta);
		
    });

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
};
