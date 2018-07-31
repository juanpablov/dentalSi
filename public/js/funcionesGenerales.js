function valorDe(unaVariableDelDocumento){
	return $("#"+unaVariableDelDocumento+"").val();
}

function setValorA(unaVariableDelDocumento, unValor){
	$("#"+unaVariableDelDocumento+"").val(unValor);
}

function estaDesactivada(unaVariableDelDocumento){
	return ($("#"+unaVariableDelDocumento+"").prop('disabled')==true);
}

function activar(unaVariableDelDocumento){
	$("#"+unaVariableDelDocumento+"").prop('disabled',false);
}

function desactivar(unaVariableDelDocumento){
	$("#"+unaVariableDelDocumento+"").prop('disabled',true);
}

function vaciar(unaVariableDelDocumento){
	$("#"+unaVariableDelDocumento+"").empty();
}

function agregarA(unaVariableDelDocumento, unValor){
	$("#"+unaVariableDelDocumento+"").append(unValor);
}

function loadEn(unaVariableDelDocumento, otroArchivo){
	$("#"+unaVariableDelDocumento+"").load(otroArchivo);
}

function convertirEnListaDeObjetos(unaRespuesta){
	return jQuery.parseJSON(JSON.stringify(unaRespuesta));
}

function show(unaVariableDelDocumento){
	$("#"+unaVariableDelDocumento+"").show();
}

function hide(unaVariableDelDocumento){
	$("#"+unaVariableDelDocumento+"").hide();
}

function modal_show(unModal){
	$("#"+unModal+"").modal('show');
}

function modal_hide(unModal){
	$("#"+unModal+"").modal('hide');
}

function modal_toggle(unModal){
	$("#"+unModal+"").modal('toggle');
}

function irA(unaDireccion){
	window.location.href = unaDireccion;
}

function getBase(){
	return $('base').attr('href');
}

function reload(){
	location.reload();
}

function callTrigger(unaVariableDelDocumento, unTrigger){	
	$("#"+unaVariableDelDocumento).trigger(unTrigger);
}

function agregarDependenciaPara(unaVariable, otraVariable, valorNoAceptado){
	setValorA(unaVariable,valorNoAceptado);
	callTrigger(unaVariable,'change');
	desactivar(unaVariable);
	$('#'+otraVariable).on('change', function(){
		var valorActual = '';
		if(otraVariable.includes('select')){
			valorActual = valorDe(otraVariable+' option:selected');
		}
		else{
			valorActual = valorDe(otraVariable);
		}
		if(valorActual!=valorNoAceptado){
			activar(unaVariable);
		}
		else{
			setValorA(unaVariable,valorNoAceptado);
			callTrigger(unaVariable,'change');
			desactivar(unaVariable);
		}
	});
}