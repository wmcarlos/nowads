<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<script type="text/javascript" src="views/js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="api/js/nowads.js"></script>
</head>
<body>
	<script type="text/javascript">
		$(document).ready(function(){

			setlocation(function(data){

				var wk = '77aac5ed024b43900c1992583cb23581';

				addlocation(wk,data.query,data.countryCode,data.country,data.city,data.lat,data.lon,function(aldata){
					alert(aldata.message);
				});

				/*verifyip(wk,data.query,function(ipdata){
					alert(ipdata.code+" "+ipdata.message);
				});*/


			});

		});
	</script>
</body>
</html>