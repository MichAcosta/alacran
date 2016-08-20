<?php
    $id = 0;
    if(!empty($_GET['id'])){
      $id = $_GET['id'];
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alacran";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tabla_productos where id_prod='$id'";
    $result = $conn->query($sql);

    $conn->close();
?>

<?php
  require('midb.php');
  
  $query="SELECT *  FROM tabla_productos";

  $resultado=$mysqli->query($query);
  
?>

<html>
<head>

<meta charset="UTF-8">
<link href="css/style1.css" rel="stylesheet">
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="css/full-slider.css" rel="stylesheet">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/full-slider.css" rel="stylesheet">


<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>


<!-- Ajax navigation -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#menu a').each(function(){
        id = $(this).attr('href');
        id = id.substring(id.lastIndexOf('/'));
        id = id.substring(0,id.indexOf('.'));
        $(this).attr('rel',id);
    });
    $('#home').show();
    $('#menu a').click(function(e){
        e.preventDefault();
        $('.content').hide();
        $('#'+$(this).attr('rel')).show();
        location.hash = '#!/'+$(this).attr('rel');
        return false;
    });
});
</script>
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
                    <img src="images/logo.gif" class="logo">
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="headr" href="#tequila">El Tequila</a>
                        </li>
                        <li>
                            <a class="headr" href="#products">Productos</a>
                        </li>
                        <li>
                            <a class="headr" href="#contact">Contacto</a>
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
                <div class="fill" style="background-image:url('http://www.almostreal.me/wp-content/uploads/2014/06/alacran-x-bbc-_chrisfrape-1095.jpg');"></div>
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
                <div class="fill" style="background-image:url('http://pluralform.com/wp-content/uploads/800-TEQUILA-ALACRAN-9.jpeg');"></div>
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

<!-- <img src="https://www.crushedagave.com/images/headers/autentico_tequila_alacran_logo_and_exploding_bottle.jpg"> -->
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
                <span>Listado de productos</span>

            <div class="nav">
                <a href="#one">El Tradicional</a>
                <a href="#two">Reposado</a>
                <a href="pages/page_3.php">Cristal</a>
                <a href="pages/page_4.php">Añejo</a>
                <a href="pages/page_5.php">Rosado</a>
            </div>


            <div id="one" class="content">
                <h2>El Tradicional</h2>
                <span class="subtitle">Origen</span>
                <img class="products" src="images/alacran1.png">

                    <div class="info">
                        <p class="product_name">Ata Blanco</p>
                        <p class="origin">LOS ALTOS, JALISCO, MEXICO</p>
                        <p class="price">$280</p>
                        <p>Posee aromas a maguey cocido, tierra mojada y notas herbales. Te recordará la fresca atmósfera de un campo llovido. En boca, estas notas se suman a sabores tales, como caramelo, flores y minerales.</p>
                    </div>

            </div>




            </div>


            <div id="two" class="content">
                <h2>Resposado.</h2>
                <span class="subtitle">Origen</span>
                <img class="products" src="images/alacran2.png">

                

                <div>
                    <p class="product_name">Ata Reposado</p>
                    <p class="origin">LOS ALTOS, JALISCO, MEXICO</p>
                    <p class="price">$360</p>
                    <p>DESTILADO LIMPIO, NEUTRO, SIN FUERTE AROMA ALCOHOLICO,
                        | LIGERA ESCENCIA DE AGAVE. TRANSPARENTE, CRISTALINO SIN SABOR PERFUMADO 0 0 EL AUTÉNTICO TEQUILA BLANCO EN LA BOTELLA NEGRA
                        | AGAVE MADURADO POR 7 AÑOS, 100% TEQUILA AZUL TEQUILANA WEBER
                        | FÓRMULA HERBAL ÚNICA FAMILIAR SUAVE, CON LIGERAS NOTAS FRUTALES</p>
                </div>

            </div>

            <div id="three" class="content">
                <h2>Cristal.</h2>
                <span class="subtitle">Origen</span>
                <img class="products" src="images/alacran3.png">

                <div class="">
                    <p class="product_name">Cristal</p>
                    <p class="description">Los altos Jalisco</p>
                    <p class="price"> $300</p>
                    <p>Fascinante de aromas intensos de chocolate con caramelo, café con leche, vainilla y especia marrón. Regio Las notas del café y de la vainilla agregan complejidad, con una suavidad, atractiva textura y sabores ricos, voluptuosos que combinan en una conclusión cautivadora de la sensación de gusto con un complejo, final persistente.</p>
                </div>

            </div>

            <div id="four" class="content">
                <h2>Añejo</h2>
                <span class="subtitle">Origen</span>
                <img class="products" src="images/alacran4.png">

                <div class="">
                    <p class="product_name"><?php echo $registro['nombre'];?></p>
                    <p class="description"><?php echo $registro['descripcion'];?></p>
                    <p class="price"> $ <?php echo $registro['precios'];?></p>
                </div>
            </div>

            <div id="five" class="content">
                <h2>Rosado</h2>
                <span class="subtitle">Origen</span>
                <img class="products" src="images/alacran5.png">

                <div class="">
                    <p class="product_name"><?php echo $registro['nombre'];?></p>
                    <p class="description"><?php echo $registro['descripcion'];?></p>
                    <p class="price"> $ <?php echo $registro['precios'];?></p>
                </div>
            </div>



            </div>
        </div>

        <div id="contact" class="row">
            <div class="col-lg-12">
                <h1 class="title">Contacto</h1>
<?php
  if (isset($_REQUEST['email']))  {

  $admin_email = "michelletacostac@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];

  mail($admin_email, "$subject", $comment, "From:" . $email);
 
  echo "Nos ponemos en contacto pronto";
  }
  else  {
?>
                <form class="form" method="post">
                    <span>Email</span>
                    <input id="area" type="email" name="email"></br>
                    <span>Asunto</span>
                    <input id="area" type="text" name="subject"></br>
                    <textarea id="area" rows="4" cols="50">
                        Escribenos un comentario.
                    </textarea>
                    <input type="submit" id="submit" class="button" value="ENVIAR">
                </form>

    <?php
  }
?>

            <div id= "mapa">
                <h1 class="title">Ubicanos</h1>
                <div id="map"></div>
             </div>

            </div>
        </div>





        <div id="footer">
            <p>   </p>

        </div>

 <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Z5OywJuAJY6FbsWXOZfgrJCUgvKd_Jw&callback=initMap">
    </script>







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
    <script src="js/map.js"></script>

</body>
</html>
