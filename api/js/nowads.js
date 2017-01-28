function getlocation(){
	var result = "";
	$.ajax({
		dataType : "json",
		async : false,
		url : "http://ip-api.com/json",
		success : function(data){
			result = data;
		}
	});
	return result;
}



function addlocation(wk,ip,cc,co,ci,la,lo,getaddlocation){
	var hs = document.location.hostname;
	$.ajax({
		dataType : "json",
		url : 'http://localhost/nowads/api/get.php',
		data : {
			operation : 'add',
			wk : wk,
			hs : hs,
			ip : ip,
			cc : cc,
			co : co,
			ci : ci,
			la : la,
			lo : lo
		},
		success : function(data){
			getaddlocation(data);
		}
	});
}