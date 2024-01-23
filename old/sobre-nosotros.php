<?php require('layouts/PHP/head-1.php') ?>
    <title>Inby ❤ sobre-nosotros</title>
<?php require('layouts/PHP/head-2.php') ?>
    <link rel="icon" href="Images/icono.ico">
	<link rel="stylesheet" href="layouts/CSS/main.css">
	<link rel="stylesheet" href="layouts/CSS/sobre-nosotros.css">
	<script defer src="/layouts/JS/app.js"></script>
	<script defer src="layouts/JS/header.js"></script>
	<script defer src="layouts/JS/header__mobile.js"></script>
</head>

<body>
	<div class="icon-load" id="icon-load">
		<img alt="icono" loading="lazy" src="Images/icono.webp">
	</div>

	<?php require('layouts/PHP/header-sobre-nosotros.php') ?>

    <section class="home" id="home">
		<img loading="lazy" src="Images/logo.webp" alt="InbyLogoHome">
        <div class="homepage">
            <h2 class="h2__title">Desarrollador <span>UI</span> & <span>UX</span></h2>
            <h3>Ve hacía abajo para encontrar información sobre nosotros!</h3>
        </div>
	</section>

    <main id="pfp">
        <div class="sobre_box">
            <div class="sobre_content">
                <img src="Images/sobrenosotros1.webp" alt="sobre_nosotros_1">
                <h2>Aliceki</h2>
                <h2><span>Artista</span></h2>
            </div>
        </div>
        <div class="sobre_box">
            <div class="sobre_content">
                <img src="Images/sobrenosotros2.webp" alt="sobre_nosotros_2">
                <h2>Infi</h2>
                <h2><span>Desarrollador UI & UX</span></h2>
            </div>
        </div>
    </main>

    <section>
        <article id="about">
            <h2>Sobre nosotros</h2>
            <p>Nuestra historia comenzó a principios del año 2022 por mi, Infi. Lo que en un principio fue simplemente un intento por aprender algo nuevo, se convirtió en una maravilla para nosotros. Me encantó lo genial que era el Front-end y el Back-end y las nuevas tecnologías que han salido en cada una.</p>
            <p>Para mi Aliceki es de las personas que más me a apoyado en este camino, por eso la incluyo en este proyecto. Sin el apoyo de ella, lo más probable es que nada de esto lo habría podido lograr.</p>
            <p>Este proyecto no solo es un testimonio de nuestro crecimiento y dedicación, sino también de las relaciones significativas que hemos construido en el camino. ¡Bienvenido a lo que con mucho amor hemos creado!</p>
        </article>

        <article id="thanks">
            <h1 class="agradecimientos"><span>Agradecimientos especiales a:</span></h1>
            <div class="cardss">
                <div class="cardn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="card_content">
                        <h2>01</h2>
                        <h3>Aliceki</h3>
                        <p>Por estar aquí desde el principio y apoyarme en esto en todo momento <3. </p>
                    </div>
                </div>
                <div class="cardn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="card_content">
                        <h2>02</h2>
                        <h3>Fredoist</h3>
                        <p>por ayudarme con un problema que tenía mi header, además de ayudarme con un problema de la barra de scroll, gracias!</p>
                    </div>
                </div>
                <div class="cardn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="card_content">
                        <h2>03</h2>
                        <h3>Abizahir Romero</h3>
                        <p>Ayudo a entender mejor mi código, entender porque la semántica es importante y a ver algo que yo no podía ver.</p>
                    </div>
                </div>
                <div class="cardn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="card_content">
                        <h2>04</h2>
                        <h3>Mamá</h3>
                        <p>Por apoyarme en mi pasión.</p>
                    </div>
                </div>
                <div class="cardn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="card_content">
                        <h2>05</h2>
                        <h3>Cosmo</h3>
                        <p>Por ayudarme a arreglar el error de la fuente cortada, entender mejor el error y ayudarme con un error de scroll horizontal.</p>
                    </div>
                </div>
                <div class="cardn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="card_content">
                        <h2>06</h2>
                        <h3>Darío Valenzuela</h3>
                        <p>Por intentar ayudarme con la fuente y probar mi página InNotesBy dándome feedback.</p>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <footer>
        <p>© 2022 - 2023 Inby</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script src="layouts/JS/loader.js"></script>
</body>
</html>