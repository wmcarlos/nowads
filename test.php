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
			var json = getlocation();
			alert(json.query);
		});
	</script>
</body>
</html>