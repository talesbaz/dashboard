$('#enviar').click(function() {

	var oObservacoesChecklist = new Object();
	var oChecklist = new Object();

	oObservacoesChecklist.sCondicoesEstadio  = $('#input_text_condicoes_estadio').val();
	oObservacoesChecklist.sPoliciamento      = $('#input_text_policiamento').val();
	oObservacoesChecklist.sAcessosÁrbitros   = $('#input_text_acessos_arbitros').val();
	oObservacoesChecklist.sAmbulancia        = $('#input_text_ambulancia').val();
	oObservacoesChecklist.sAcessosTorcedores = $('#input_text_acessos_torcedores').val();
	oObservacoesChecklist.sBombeiros         = $('#input_text_bombeiros').val();

	oChecklist.checklist = oObservacoesChecklist;

	if (typeof(Storage) !== "undefined") {
    	localStorage.setItem("json_checklist", JSON.stringify(oChecklist));
    }

});	