	<?php require('layouts/PHP/head-1.php') ?>
	<title>Inby ❤</title>
	<?php require('layouts/PHP/head-2.php') ?>

	<link rel="icon" href="Images/icono.ico">
	<link rel="stylesheet" href="layouts/CSS/main.css">
	<link rel="stylesheet" href="layouts/CSS/Inby.css">
	<script defer src="layouts/JS/app.js"></script>
	<script defer src="layouts/JS/header.js"></script>
	<script defer src="layouts/JS/header__mobile.js"></script>
</head>


<body>
	<div class="icon-load" id="icon-load">
		<h2>Inby</h2>
	</div>

	<?php require('layouts/PHP/header.php') ?>

	<section class="home" id="home">
		<h1>Inby</h1>
		<div class="homepage">
			<h2 class="h2__title">Desarrollador <span>UI</span> & <span>UX</span></h2>
			<h3>Ve abajo!</h3>
		</div>
	</section>

	<section class="about__container detector" id="about">
		<div class="about">
			<p class="p__start">Desarrollador <span>Full Stack</span> de HTML, CSS, JS y PHP
				con <span>1 año</span> de experiencia y creador del proyecto InNotesBy.
				<a class="more__info" href="sobre-nosotros.php"> más información aquí:</a>
			</p>
		</div>
		<div class="about">
			<p>Tecnologías que se ocupar</p>
			<nav class="content"></nav>
		</div>
	</section>

	<section class="proyects__section detector" id="proyects">
		<h2>Proyectos</h2>
		<div class="proyects__container">
			<a class="proyects__link" href="InNotesBy.php">
				<h3 class="proyects__h4">InNotesBy</h3>
			</a>
			<a class="proyects__link" href="InSuccessBy.php">
				<h3 class="proyects__h4">InSuccessBy</h3>
			</a>
			<a class="proyects__link" href="Album-Familiar.php">
				<h3 class="proyects__h4">Album Familiar</h3>
			</a>
		</div>
	</section>

	<footer>
		<p>© 2022 - 2023 Inby</p>
	</footer>

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script src="layouts/JS/loader.js"></script>
	<script src="layouts/JS/tagcloud.min.js"></script>
	<script src="layouts/JS/tagcloud-function.js"></script>
</body>

</html>