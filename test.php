<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<script type="text/javascript" src="views/js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="api/js/nowads.js"></script>
	<script type="text/javascript" src="api/js/clickindownloadbutton.js"></script>
	<style type="text/css">
		div#cont{
			width: 980px;
			height: auto;
			overflow: hidden;
			margin: 5px auto;
			border:1px solid #ccc;
		}

		div#header{
			width: 100%;
			height: 150px;
			overflow: hidden;
			border-bottom: 1px solid #ccc;
		}

		div#body{
			width: 100%;
			height: 500px;
			border-bottom:1px solid #ccc; 
		}

		div#news{
			width: 676px;
			float: left;
			height: 500px;
			overflow: hidden;
			border-right: 1px solid #ccc;
		}

		div#widget{
			width: 300px;
			height: 500px;
			overflow: hidden;
			float: right;
		}

		div#footer{
			width: 100%;
			height: 100px;
			overflow: hidden;
			border-bottom: 1px solid #ccc;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			var wk = "3a4e01924018a68a696b1ecdd2a9355a";
			var items = [
				[1,'div1'],
				[2,'div2'],
				[3,'div3'],
				[4,'div4']
			];
			setCode(wk, items);
		});
	</script>
</head>
<body>
	<div id="cont">
		<div id="header">
			<div id="div4">
				<div id="role4">
				<a href="#"><img src="http://construyenpais.com/wp-content/uploads/2016/05/Facebook-e1464366421878.jpg"></a></div>
			</div>
		</div>
		<div id="body">
			<div id="news">
				<h1>title</h1>
				<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
				<div id="content-download" data-url="http://www.google.com">
					
				</div>
			</div>
			<div id="widget">
				<div class="wg-content">
					<h1>Publicidad 1</h1>
					<div id="div1" class="ads-content">
						<div id="role1">
						<a href="#"><img src="http://www.iberapis.com/media/1031/iberapis_A.png"></a></div>
					</div>
				</div>

				<div class="wg-content">
					<h1>Publicidad 2</h1>
					<div id="div2" class="ads-content">
						<div id="role2">
						<a href="#"><img src="http://incubadoradenegocios.com/wp-content/uploads/2015/09/se-vende-300x200.jpg"></a></div>
					</div>
				</div>
			</div>
		</div> 
		<div id="footer">
			<div id="div3">
				<div id="role3">
				<a href="#"><img src="http://cubanuncios.biz/wp-content/uploads/2015/09/cropped-cubanuncios-logo-01.png"></a></div>
			</div>
		</div>
	</div>
</body>
</html>