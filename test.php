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
			var ns = new nowads("4937c7c8bd9b5cd9339511cbb3d5fddd");

			ns.verifyip();
		});
	</script>
</body>
</html>