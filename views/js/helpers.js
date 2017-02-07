load = function(oper, modalid){
		var operation = oper;
	  	if(operation){
   		if(operation == "load"){
        	$("#"+modalid).modal();
        	$("#operation").val("change");
        }
    }
}

rmv = function(v){
	var view = v;
	cfrm("¿Realmente Desea Cancelar la Operacion?",view);
	
}

add = function(){
	$("#operation").val("add");
}

cfrm = function(mes, v){
	bootbox.dialog({
		title : "Confirmaci&oacute;n",
		message : mes,
		buttons : {
			confirm : {
				label : "SI",
				ClassName : "btn-success",
				callback : function(){
					document.location.href="?v="+v;
				}
			},
			cancel : {
				label : "NO",
				ClassName : "btn-danger"
			}
		}
	});
}

isactive = function(isactive,id,v){
	var mes = "";
	if(isactive == 'Y'){
		mes = "¿En realidad desea Desactivar el Registro?";
		op = "desactivate";
	}else if (isactive == 'N'){
		mes = "¿En realidad desea Activar el Registro?";
		op = "activate";
	}

	bootbox.dialog({
		title : "Confirmaci&oacute;n",
		message : mes,
		buttons : {
			confirm : {
				label : "SI",
				ClassName : "btn-success",
				callback : function(){
					document.location.href="?v="+v+"&operation="+op+"&id="+id;
				}
			},
			cancel : {
				label : "NO",
				ClassName : "btn-danger"
			}
		}
	});	
}

alr = function(op, e, v){
	var mes = "";
	if(op){
		switch(op){
			case "add":
				if(e == 0){
					mes = "Registro Incluido con Exito";
				}else if(e == 1){
					mes = "Error al Tratar de Incluir el Registro";
				}
			break;
			case "change":
				if(e == 0){
					mes = "Registro Modificado con Exito";
				}else if(e == 1){
					mes = "Error al Tratar de Modificar el Registro";
				}
			break;
			case "desactivate":
				if(e == 0){
					mes = "Registro Desactivado con Exito";
				}else if(e == 1){
					mes = "Error al Tratar de Desactivar el Registro";
				}
			break;
			case "activate":
				if(e == 0){
					mes = "Registro Activado con Exito";
				}else if(e == 1){
					mes = "Error al Tratar de Activar el Registro";
				}
			break;
			case "login":
				if(e == 1){
					mes = "Usuario o Contrase&ntilde;a Incorrectos";
				}
			break;
			case "search":
				if(e == 1){
					mes = "Debes Seleccionar un Sitio Web";
				}
			break;
		}

		if(mes){
			bootbox.dialog({
				title : "Alerta",
				message : mes,
				buttons : {
					confirm : {
						label : "SI",
						ClassName : "btn-success",
						callback : function(){
							document.location.href="?v="+v;
						}
					}
				}
			});
		}
		
	}
}