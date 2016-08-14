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

<html>
<head>
<style type="text/css">
.content {
    display: none;
}
</style>
<meta charset="UTF-8">
<link href="css/style1.css" rel="stylesheet">
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="css/full-slider.css" rel="stylesheet">

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

<!-- Google Maps -->
</script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDohNNGBO98QH3ylE9wKaYJL7nnTtvw2-o&callback=initMap">
</script>

</head>

<body>

<!-- <img src="https://www.crushedagave.com/images/headers/autentico_tequila_alacran_logo_and_exploding_bottle.jpg"> -->

<div id="menu">
    <a href="home.html">Home</a>
    <a href="one.html">El Tradicional</a>
    <a href="two.html">Reposado</a>
    <a href="three.html">Cristal</a>
    <a href="four.html">Añejo</a>
    <a href="five.html">Rosado</a>
    <a href="six.html">Contacto</a>
</div>

<div id="home" class="content">Home content.

</div>

<div id="one" class="content">
    <h2>El Tradicional</h2>
    <span class="subtitle">Origen</span>
    <img class="products" src="images/alacran1.png">

    <?php while($row = $result->fetch_assoc()): ?>
        <div>
            <p class="text-nombre"><?php echo utf8_encode($row['nombre']);?></p>
            <p class="text-descripcion"><?php echo utf8_encode($row['descripcion']);?></p>
            <p class="text-precio">$<?php echo $row['precios'];?></p>
        </div>
        <div>
            <img src="images/<?php echo $row['imagen']; ?>">
        </div>
    <?php endwhile; ?>

</div>

<div id="two" class="content">
    <h2>Resposado.</h2>
    <span class="subtitle">Origen</span>
    <img class="products" src="images/alacran2.png">

    <div class="">
        <p class="text-nombre"><?php echo $registro['nombre'];?></p>
        <p class="text-descripcion"><?php echo $registro['descripcion'];?></p>
        <p class="text-precio"> $ <?php echo $registro['precios'];?></p>
    </div>

</div>

<div id="three" class="content">
    <h2>Cristal.</h2>
    <span class="subtitle">Origen</span>
    <img class="products" src="images/alacran3.png">

    <div class="">
        <p class="text-nombre"><?php echo $registro['nombre'];?></p>
        <p class="text-descripcion"><?php echo $registro['descripcion'];?></p>
        <p class="text-precio"> $ <?php echo $registro['precios'];?></p>
    </div>

</div>

<div id="four" class="content">
    <h2>Añejo</h2>
    <span class="subtitle">Origen</span>
    <img class="products" src="images/alacran4.png">

    <div class="">
        <p class="text-nombre"><?php echo $registro['nombre'];?></p>
        <p class="text-descripcion"><?php echo $registro['descripcion'];?></p>
        <p class="text-precio"> $ <?php echo $registro['precios'];?></p>
    </div>
</div>

<div id="five" class="content">
    <h2>Rosado</h2>
    <span class="subtitle">Origen</span>
    <img class="products" src="images/alacran5.png">

    <div class="">
        <p class="text-nombre"><?php echo $registro['nombre'];?></p>
        <p class="text-descripcion"><?php echo $registro['descripcion'];?></p>
        <p class="text-precio"> $ <?php echo $registro['precios'];?></p>
    </div>
</div>

<div id="six" class="content">
    <form class="form">
        <span>Nombre</span>
        <input type="text" name="name"></br>
        <span>Email</span>
        <input type="email" name="email"></br>
        <textarea rows="4" cols="50">
            Escribenos un comentario.
        </textarea>
        <input type="submit">
    </form>
    <div id="map"></div>
        <script type="text/javascript">

            var map;
            function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
              });
            }

        </script>

</div>
<div id="footer">


</div>
</body>
</html>
