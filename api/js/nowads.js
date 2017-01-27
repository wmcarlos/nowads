function setlocation(getlocation){
	var seturl = "http://ip-api.com/json";
	var json = "";
	$.ajax({
		dataType : "json",
		url : seturl,
		success : function(data){
			getlocation(data);
		}
	});
}

function verifyip(wk,ip,getip){
	var hs = document.location.hostname;
	$.ajax({
		dataType : "json",
		url : 'http://localhost/nowads/api/get.php',
		data : {
			operation : 'verifyip',
			wk : wk,
			hs : hs,
			ip : ip
		},
		success : function(data){
			getip(data);
		}
	});
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