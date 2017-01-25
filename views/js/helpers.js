load = function(oper, modalid){
		var operation = oper;
	  	if(operation){
   		if(operation == "load"){
        	$("#"+modalid).modal();
        	$("#operation").val("change");
        }
    }
}

remove = function(v){
	if(confirm("¿Realmente Desea Cancelar la Operacion?")){
		document.location.href="?v="+v;
	}
}

add = function(){
	$("#operation").val("add");
}



