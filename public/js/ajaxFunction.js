function crear_doctor(){
	$.ajax({
		url: getBase()+"crearDoctor",
		type: "POST",
		data: {
				nombre: valorDe("nombre")
		},	    
		success: function (response) {
		    reload();		
    	}
    });
}