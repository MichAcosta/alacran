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


<div id="one" class="content">
	<h2>El Tradicional</h2>
	<span class="subtitle">Origen</span>
	<img class="products" src="images/alacran1.png">

	<?php while($row = $result->fetch_assoc()): ?>
	<div>
		<p class="product_name"><?php echo utf8_encode($row['nombre']);?></p>
		<p class="description"><?php echo utf8_encode($row['descripcion']);?></p>
		<p class="price">$<?php echo $row['precios'];?></p>
	</div>
<div>
	<img src="../images/<?php echo $row['imagen']; ?>">
            </div>
                <?php endwhile; ?>
</div>
