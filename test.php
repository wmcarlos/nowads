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
			var ns = new nowads("3a4e01924018a68a696b1ecdd2a9355a");
			if(ns.verifyip()){
				ns.addLocation();
				alert("ip insertada con exito");
			}else{
				alert("Error al insertar la ip ver el log");
			}
		});
	</script>
</body>
</html>