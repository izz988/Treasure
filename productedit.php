<!DOCTYPE html>
<html>
<head>
<?php
include 'php/database_connection.php';
session_start();
$id= $_GET["idpd"];
$view = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE pdpmk_id='$id'");
$lihat = mysqli_fetch_assoc($view);
$idprd = $lihat['pdpmk_id'];
$_SESSION["idprd"] = $idprd;
$loc = mysqli_query($koneksi, "SELECT * FROM produk_pmk,pemasok WHERE produk_pmk.id_pmsk = pemasok.id_pmsk AND pdpmk_id='$id'");
$location = mysqli_fetch_assoc($loc);
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Produk</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="icon.png" />
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/popper.js"></script> 
<script src="assets/js/bootstrap.js"></script>

</head>

<body class="body2">
	<div class="logobaru">
		<a href="homesupplier.php"><img src="Treasure_logo.png" style="height: 90px; width: 180px; position: absolute; padding: 10px; margin-left: 25px;"></a>
	</div>
	<div class="logobaru">
		<a href="homesupplier.php"><img src="Treasure_logo.png" style="height: 90px; width: 180px; position: absolute; padding: 10px; margin-left: 25px;"></a>
	</div>
	<div class="headkan">
		
		<button class="button-icon" onclick="document.location='homesupplier.php'">
			<svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  		<path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
		  		<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
			</svg>
		</button>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php echo '<img class="img-product-view" style="position: relative;right: 50px;" src="data:image/jpeg;base64,'.base64_encode( $lihat['foto'] ).'"/>';?>
				
				 <!-- echo '<img class="img-product-view" src="data:image/jpeg;base64,'.base64_encode( $lihat['foto'] ).'"/>'; -->
			</div>
			<div class="col-md-6" style="position: relative;left: 50px;">
				<center>
					<span class="font-product-name" style="position: relative;left: 70px;">
						<?php 
						echo $lihat['nama_pd'];?>
						<br></span>
				</center>
				<form name="form" action="php/editpd.php" method="GET">
				<center>
				<textarea class="textarea-add-product" name="Description" style="position: relative;left: 50px;"><?php echo $lihat['Keterangan']; ?></textarea><br><!-- Deskripsi box -->
				<center>
					<div class="row" style="position: relative;left: 50px;">
						<div class="col-md-6">
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tag-fill icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	 							<path fill-rule="evenodd" d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
							</svg><!-- Icon Harga -->
							<span>Price<br></span>
							<input class="textbox-add-product2" name="price" type="text" maxlength="50" value="<?php echo $lihat['harga_pd']; ?>" /><br>
							<svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 512 512" class="icon" fill="currentColor">
								<path d="M400.987,90.342c30.772-16.21,55.752-39.487,72.238-67.314c2.793-4.714,2.842-10.565,0.129-15.326 C470.641,2.94,465.582,0,460.101,0H51.898c-5.48,0-10.539,2.94-13.252,7.701c-2.713,4.762-2.664,10.613,0.129,15.326c16.486,27.827,41.466,51.105,72.238,67.314c26.424,13.92,56.216,22.137,86.911,24.073V153.6h-72.087 c-26.953,0-49.748,20.174-53.024,46.926L42.009,452.087c-1.859,15.176,2.888,30.446,13.021,41.896 C65.163,505.433,79.744,512,95.033,512h321.942c15.289,0,29.87-6.567,40.003-18.016c10.133-11.45,14.88-26.72,13.021-41.896 l-30.803-251.56c-3.276-26.753-26.071-46.926-53.024-46.926h-72.096v-39.186C344.77,112.478,374.563,104.261,400.987,90.342z M386.172,184.106c11.562,0,21.339,8.653,22.745,20.13l30.803,251.56c0.808,6.605-1.174,12.987-5.586,17.972 c-4.411,4.983-10.505,7.728-17.159,7.728H95.032c-6.655,0-12.749-2.745-17.159-7.729c-4.411-4.983-6.395-11.365-5.586-17.971 l30.803-251.56c1.405-11.475,11.184-20.129,22.746-20.129H386.172z M228.428,153.601v-38.732h55.143v38.732H228.428z M299.959,84.364H212.04c-51.716,0-99.163-20.114-129.937-53.858h347.793C399.122,64.249,351.675,84.364,299.959,84.364z"/>
								<path d="M256.004,207.803c-68.924,0-124.997,56.074-124.997,124.997c0,68.924,56.074,124.998,124.997,124.998 s124.997-56.074,124.997-124.998C381.001,263.876,324.928,207.803,256.004,207.803z M256.004,427.292 c-52.103,0-94.491-42.389-94.491-94.492c0-52.102,42.389-94.491,94.491-94.491c52.102,0,94.491,42.389,94.491,94.491 C350.495,384.902,308.106,427.292,256.004,427.292z"/>
								<path d="M266.789,322.015c-5.956-5.957-15.614-5.957-21.569,0l-36.724,36.724c-5.957,5.956-5.957,15.614,0,21.57 c2.978,2.978,6.882,4.468,10.785,4.468s7.807-1.49,10.785-4.468l36.724-36.724C272.745,337.629,272.745,327.971,266.789,322.015z"/>
							</svg><!-- Icon Satuan -->
							<span>Unit<br></span>
							<input class="textbox-add-product2" name="unit" type="text" maxlength="50" value=<?php echo $lihat['Satuan']; ?> /><br>
						</div>
						<div class="col-md-6">
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-seam icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	 			 				<path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
							</svg><!-- Icon Stock -->
							<span>Stock<br></span>
							<input class="textbox-add-product2" name="stock" type="text" maxlength="50" value=<?php echo $lihat['stok_pd']; ?> /><br>
						</div>
					</div>
				</center>
				<center>
					<button class="button-add-product" style="position: relative;left: 80px;" onclick="document.location='editpd.php?idpd=<?php echo $id ?>'">
						<span>Edit</span>
					</button>
				</center>
				</form>
				<center>
					<button class="button-add-product" style="position: relative;left: 80px;" onclick="document.location='php/deletepd.php?idprd=<?php echo $idprd ?>'">
						<svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  							<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  							<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
						</svg>
						<span>Hapus produk</span>
					</button>					
				</center>
			</div>
		</div>
	</div>
</body>
</html>