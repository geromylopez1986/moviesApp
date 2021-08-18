<?php include("../../conexion/conexion.php"); ?>
<!--- BOOTSTRAP 4 CSS  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php $pagina = 'serie'; include("../../layout/header.php"); ?>
<?php include("../../layout/navegador.php"); ?>
<title>The Pelicula / Ver Serie</title>

<body class="capa_pelicula animated fadeIn slow" style="height: 513px; background-image: url();">
    <section class="contenedor-popular">
        <div class="contenedor-tituloH contenedor_titulos">
            <h1>: <span>()</span></h1>
        </div>
    </section>

    <main class="contenedor-informacion">



        <div class="ver-serie container">
            <div class="video-serie">
                <iframe src="" width="950" height="600"></iframe>
            </div>
            <div class="public-serie">
                <!-- Start of adf.ly banner code --><a href="https://join-adf.ly/23044469"><img border="0"
                        src="https://cdn.adf.ly/images/banners/adfly.160x600.4.gif" width="160" height="600"
                        title="AdF.ly - acorta links y gana dinero!" /></a>
                <!-- End of adf.ly banner code -->
            </div>
        </div>

        <section class="preview-list vertical-center slider fixed">
            <div>
                <img src="http://placehold.it/350x100?text=1">
            </div>
            <div>
                <img src="http://placehold.it/350x100?text=2">
            </div>
            <div>
                <img src="http://placehold.it/350x100?text=3">
            </div>
            <div>
                <img src="http://placehold.it/350x100?text=4">
            </div>
            <div>
                <img src="http://placehold.it/350x100?text=5">
            </div>
            <div>
                <img src="http://placehold.it/350x100?text=6">
            </div>
            <div>
                <img src="http://placehold.it/350x100?text=7">
            </div>
            <div>
                <img src="http://placehold.it/350x100?text=8">
            </div>
            <div>
                <img src="http://placehold.it/350x100?text=9">
            </div>
            <div>
                <img src="http://placehold.it/350x100?text=10">
            </div>
        </section>

        <section class="container fixed">
        </section>

    </main>
</body>



<link rel="stylesheet" type="text/css" href="../css/slick.css">
<link rel="stylesheet" type="text/css" href="../css/slick-theme.css">
<style type="text/css">
html,
body {
    margin: 0;
    padding: 0;
}

* {
    box-sizing: border-box;
}

.slider {
    width: 50%;
    margin: 100px auto;
}

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-prev:before,
.slick-next:before {
    color: black;
}


.slick-slide {
    transition: all ease-in-out .3s;
    opacity: .2;
}

.slick-active {
    opacity: .5;
}

.slick-current {
    opacity: 1;
}
</style>

<script src="<?php echo SERVERURL; ?>js/Woo.js"></script>
<?php include("../../layout/footer.php"); ?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="../js/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).on('ready', function() {
    $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
    });
    $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
    });
    $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
    });
    $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
    $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
    });
    $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
    });
    $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
    });
});
</script>
