function getRamdonDiv(items){
	var total = items.length;
	var select = Math.floor((Math.random() * total) + 1);
	var rsdiv = "";
	for(var i = 0;i < total ; i++){
		if(items[i][0] == select){
			rsdiv = items[i][1];
		}
	}
	return rsdiv;
}

function setCode(wk, items, tc="dv"){
	var ns = new nowads(wk);
	var hostname = document.location.hostname;
	var dwimpa = "http://localhost/nowads/views/img/mega-btn.png";
	var rn = "";

	if(ns.verifyip()){
		rn = getRamdonDiv(items);
		createButton(dwimpa,"neip",rn);

		if(tc == "ifr"){
			alert("Entro Aqui");
			var monitor = setInterval(function(){
			    var elem = document.activeElement;
			    if(elem && elem.tagName == 'IFRAME'){
			    	ns.addLocation();
			    	//$("#div-cloned").remove();
			    	document.getElementById("div-cloned").parentNode.removeChild(document.getElementById("div-cloned"));
			        clearInterval(monitor);
			    }
			}, 100);
		}else if(tc == "dv"){

			$("#div-cloned").click(function(){
				ns.addLocation();
				$("#div-cloned").remove();
			});


		}

	}else{
		createButton(dwimpa,"eip",rn);
	}
}

function showUrl(e){
	$(e).hide("fast",function(){
		$("#download-url").show("fast");
		if(document.getElementById("div-cloned")){
			$("#div-cloned").css({
				"display":"block",
				"position":"absolute",
				"top":"0px",
				"left":"0px"
			});
		}
	});
}

function createButton(dwimpa,type, rd){
	var url = $("#content-download").attr("data-url");
	$("#content-download").css({
		"position":"relative",
		"height":"58px",
		"overflow":"hidden"
	});
	var btn = document.createElement("button");
	var utd = document.createElement("a");
	btn.id = "show-url-download";
	utd.id = "download-url";
	utd.style.display = "none";
	//append in div
	$("#content-download").append(btn);
	$("#content-download").append(utd);
	if(type == "neip"){
		$("#"+rd).clone().attr("id","div-cloned").css({
			"display":"none",
			"opacity":"0.5"
		}).appendTo("#content-download");
	}
	//button
	$("#show-url-download").text("Ver enlace de Descarga");
	$("#show-url-download").attr("onclick","showUrl(this);");
	//url
	$("#download-url").attr("href",url);
	var sethtml ="<img src='"+dwimpa+"'/>"
	$("#download-url").html(sethtml);
}