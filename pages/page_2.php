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


<div id="two" class="content">
	<h2>Resposado.</h2>
	<span class="subtitle">Origen</span>
	<img class="products" src="images/alacran2.png">

	<?php while($row = $result->fetch_assoc()): ?>

	<div>
		<p class="product_name"><?php echo $registro['nombre'];?></p>
		<p class="descripcion"><?php echo $registro['descripcion'];?></p>
		<p class="price"> $ <?php echo $registro['precios'];?></p>
	</div>
	<img src="images/<?php echo $row['imagen']; ?>">
            </div>
                <?php endwhile; ?>

</div>

