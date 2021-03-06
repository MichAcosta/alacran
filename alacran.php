<!DOCTYPE html>
<html>
<head>
<title>El Alacrán</title>



<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="css/full-slider.css" rel="stylesheet">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/full-slider.css" rel="stylesheet">

<link href="css/style1.css" rel="stylesheet">

</head>
<body>
 	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="../images/logo.gif" class="footer_img">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#tequila">El Tequila</a>
                    </li>
                    <li>
                        <a href="#products">Productos</a>
                    </li>
                    <li>
                        <a href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 	<header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('http://www.yorokobu.es/wp-content/uploads/al3.jpg');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('http://2.bp.blogspot.com/-Ds_TcWEpi88/UdLJ3F6RRhI/AAAAAAAAS7w/XjeCw3uaq1I/s1600/Tequila_Alacr%C3%A1n.jpg');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('https://mir-s3-cdn-cf.behance.net/projects/404/131aeb23851647.54e8cfd6c0869.jpg');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </header>

	<div class="container">

        <div id="tequila" class="row">
            <div class="col-lg-12">
                <h1>Tequila Alacrán</h1>
                <div class="parragrap">
	                <p>Un tequila tapatío 100 % agave con un sabor neutro, limpio al paladar,
	                	| puro al olfato, es el Tequila Alacrán  una auténtica bebida que representa 
	                	| el orgullo de la denominación de origen que tiene nuestro país.</p>

					<p>La esencia del Auténtico Tequila Alacrán es original, creativa y atrevida 
						| representando a una bebida diferente y a una experiencia nueva para todas
						| las personas que buscan nuevas sensaciones, conocedores del tequila; disfrutan
						| de su sabor y sobre todo gente creativa y diferente.</p>

					<p>Un tequila que resalta la idea de un México cosmopolita, libre e independiente.
						| Su sabor puro y auténtico te cautivará, una marca que apuesta al diseño, diferente 
						| a todas las marcas. La presentación viene en una botella negra simbolizando el 
						| contraste del blanco, un color puro internamente, con el de una botella oscura,
						| rompiendo esquemas.</p>
					<p> Resguardando altos estándares de calidad, pureza y naturalidad del tequila, 
						| alabándole honor al sabor mexicano, pero con una modernidad que lo hace único 
						| y valioso, encarnando la bebida típica mexicana con un toque de innovación en 
						| una revelación que invita por si solo a consumir Alacrán: el tequila del momento 
						| y la bebida que esta de moda.</p>
				</div>
            </div>
        </div>

        <div id="products" class="row">
            <div class="col-lg-12">
                <h1>Productos</h1>
                <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the <code>full-slider.css</code>file.</p>
            </div>
        </div>

        <div id="contact" class="row">
            <div class="col-lg-12">
                <h1>Contacto</h1>
                <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the <code>full-slider.css</code>file.</p>
            </div>
        </div>










  <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>


<script type="text/javascript">
	$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#menu-center a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu-center ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
</script>




</body>
</html>