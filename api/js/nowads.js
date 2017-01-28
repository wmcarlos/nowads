var nowads = function(wk){
	//Attributes
	this.wk = wk;
	this.hs = document.location.hostname;
	this.ip = null;
	this.cc = null;
	this.co = null;
	this.ci = null;
	this.la = null;
	this.lo = null;

	//methods
	getLocation = function(){
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

	this.loader = function(){
		var json = getLocation();
		this.ip = json.query;
		this.cc = json.countryCode;
		this.co = json.country;
		this.ci = json.city;
		this.la = json.lat;
		this.lo = json.lon
	}

	this.addLocation = function(){
		this.loader();
		var result = "";
		$.ajax({
			dataType : "json",
			url : "http://localhost/nowads/api/get.php",
			async : false,
			data : {
				operation : 'add',
				wk : this.wk,
				hs : this.hs,
				ip : this.ip,
				cc : this.cc,
				co : this.co,
				ci : this.ci,
				la : this.la,
				lo : this.lo
			},
			success : function(data){
				result = data;
			}
		});
		return result;
	}

	this.verifyip = function(){
		this.loader();
		var result = false;
		$.ajax({
			dataType : "json",
			async : false,
			url : "http://localhost/nowads/api/get.php",
			data : {
				operation : "verifyip",
				wk : this.wk,
				hs : this.hs,
				ip : this.ip
			},
			success : function(data){
				if(data.code == 05){
					result = true;
				}else{
					result = false;
					console.log(data.code+" "+data.message);
				}
			}
		});
		return result;
	}

}