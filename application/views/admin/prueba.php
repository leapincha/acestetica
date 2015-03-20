<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Analisis e Implementacion de Componente jQuery</title>
	<meta name="description" content="En este ejercicio aprenderemos a analizar componentes jQuery de terceros y poderlos implementar en nuestros proyectos. Los componentes a analizar son Fancybox 2 y Flexslider 2."/>

	<link rel="stylesheet"  href="/assets/admin/css/prueba/jquery.fancybox.css?v=2.1.5">
	

	<style>
	a { text-decoration: none; }
		body, html 
		{ 
			font-family: Helvetica, sans-serif; 
			font-size: 16px; 
		}
	</style>
</head>
<body>
	<h1>Análisis e Implementación de Componentes de Terceros</h1>
	<hr />
	<h2>Implementación de Fancybox 2</h2>
	<h3>Galeria sencilla con Fancybox</h3>
	<a href="img/normal/img1.jpg" class="galeria-sencilla"
	rel="gallery1" title="Imagen 1">
		<img src="img/thumbs/img1.jpg">
	</a>

	<a href="/assets/admin/images/prueba/img2 (2).jpg" class="galeria-sencilla" rel="gallery1" title="Imagen 2">
		<img src="/assets/admin/images/prueba/img2.jpg">
	</a>
	<a href="img/normal/img3.jpg" class="galeria-sencilla" rel="gallery1" title="Imagen 3">
		<img src="img/thumbs/img3.jpg">
	</a>
	<a href="img/normal/img4.jpg" class="galeria-sencilla" rel="gallery2" title="Imagen 4">
		<img src="img/thumbs/img4.jpg">
	</a>
	<a href="img/normal/img5.jpg" class="galeria-sencilla" rel="gallery2" title="Imagen 5">
		<img src="img/thumbs/img5.jpg">
	</a>
	<a href="img/normal/img6.jpg" class="galeria-sencilla" rel="gallery2" title="Imagen 6">
		<img src="img/thumbs/img6.jpg">
	</a>

	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
	</script>

	<script>
	!window.jQuery && document.write("<script src='/assets/admin/js/jquery.min.js'> <\/script>");
	</script>
	<script src="/assets/admin/js/prueba/jquery.mousewheel-3.0.6.pack.js"></script>
	<script src="/assets/admin/js/prueba/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="/assets/admin/js/prueba/jquery.fancybox-media.js?v=1.0.6"></script>
	<script src="/assets/admin/js/prueba/codigos.js"></script>

</body>
</html>