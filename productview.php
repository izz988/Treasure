<!DOCTYPE html>
<html>
<head>
<?php
include 'php/database_connection.php';
include 'php/getdatasale.php';
$id= $_GET["idpd"];
$view = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE pdpmk_id='$id'");
$lihat = mysqli_fetch_assoc($view);
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
		
		<button class="button-icon" onclick="document.location='hometrader.php'">
			<svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  		<path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
		  		<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
			</svg>
		</button>
		
		<input type="text" name="cari" maxlength="50" placeholder="Search..." class="input-search">
		<button class="button-icon">
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  			<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
	  			<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
			</svg>
		</button>
		<button class="button-icon">
			<svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
			</svg>
		</button>
		<button class="button-icon" onclick="document.location='traderstorage.php'">
			<svg width="2.5em" height="2.5em" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="2.16 4.32 30 25">
				<path id="Icon_map-storage" d="M 2.159999847412109 4.319999694824219 L 32.15999984741211 4.319999694824219 L 32.15999984741211 7.444999694824219 L 2.159999847412109 7.444999694824219 L 2.159999847412109 4.319999694824219 Z M 4.205453872680664 8.694999694824219 L 4.205453872680664 29.31999969482422 L 30.11454772949219 29.31999969482422 L 30.11454772949219 8.694998741149902 L 4.205453872680664 8.694998741149902 Z M 21.93272399902344 14.31999969482422 L 11.70545291900635 14.31999969482422 L 11.70545291900635 12.4449987411499 L 21.93272399902344 12.4449987411499 L 21.93272399902344 14.31999969482422 Z"/>
			</svg><br>
		</button>
		<button class="button-icon" onclick="document.location='userprofile_trader.php'">
			<svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 				<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			</svg>
		</button>
		<button class="button-icon" onclick="document.location='keranjang.html'">
			<svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
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
			<div class="col-md-6">
				<center>
					<span class="font-product-name">
						<?php 
						echo $lihat['nama_pd'];?>
						<br></span>
				</center>
				<center>
				<textarea class="textarea-add-product" name="Description" readonly="readonly"><?php echo $lihat['Keterangan']; ?></textarea><br><!-- Deskripsi box -->
				<center>
					<div class="row" style="position: relative;right: 50px;">
						<div class="col-md-6">
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tag-fill icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	 							<path fill-rule="evenodd" d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
							</svg><!-- Icon Harga -->
							<span>Price<br></span>
							<input class="textbox-add-product2" name="productname" type="text" maxlength="50" readonly="readonly" value="Rp <?php echo $lihat['harga_pd']; ?>" /><br>
							<svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 512 512" class="icon" fill="currentColor">
								<path d="M400.987,90.342c30.772-16.21,55.752-39.487,72.238-67.314c2.793-4.714,2.842-10.565,0.129-15.326 C470.641,2.94,465.582,0,460.101,0H51.898c-5.48,0-10.539,2.94-13.252,7.701c-2.713,4.762-2.664,10.613,0.129,15.326c16.486,27.827,41.466,51.105,72.238,67.314c26.424,13.92,56.216,22.137,86.911,24.073V153.6h-72.087 c-26.953,0-49.748,20.174-53.024,46.926L42.009,452.087c-1.859,15.176,2.888,30.446,13.021,41.896 C65.163,505.433,79.744,512,95.033,512h321.942c15.289,0,29.87-6.567,40.003-18.016c10.133-11.45,14.88-26.72,13.021-41.896 l-30.803-251.56c-3.276-26.753-26.071-46.926-53.024-46.926h-72.096v-39.186C344.77,112.478,374.563,104.261,400.987,90.342z M386.172,184.106c11.562,0,21.339,8.653,22.745,20.13l30.803,251.56c0.808,6.605-1.174,12.987-5.586,17.972 c-4.411,4.983-10.505,7.728-17.159,7.728H95.032c-6.655,0-12.749-2.745-17.159-7.729c-4.411-4.983-6.395-11.365-5.586-17.971 l30.803-251.56c1.405-11.475,11.184-20.129,22.746-20.129H386.172z M228.428,153.601v-38.732h55.143v38.732H228.428z M299.959,84.364H212.04c-51.716,0-99.163-20.114-129.937-53.858h347.793C399.122,64.249,351.675,84.364,299.959,84.364z"/>
								<path d="M256.004,207.803c-68.924,0-124.997,56.074-124.997,124.997c0,68.924,56.074,124.998,124.997,124.998 s124.997-56.074,124.997-124.998C381.001,263.876,324.928,207.803,256.004,207.803z M256.004,427.292 c-52.103,0-94.491-42.389-94.491-94.492c0-52.102,42.389-94.491,94.491-94.491c52.102,0,94.491,42.389,94.491,94.491 C350.495,384.902,308.106,427.292,256.004,427.292z"/>
								<path d="M266.789,322.015c-5.956-5.957-15.614-5.957-21.569,0l-36.724,36.724c-5.957,5.956-5.957,15.614,0,21.57 c2.978,2.978,6.882,4.468,10.785,4.468s7.807-1.49,10.785-4.468l36.724-36.724C272.745,337.629,272.745,327.971,266.789,322.015z"/>
							</svg><!-- Icon Satuan -->
							<span>Unit<br></span>
							<input class="textbox-add-product2" name="productname" type="text" maxlength="50" readonly="readonly" value=<?php echo $lihat['Satuan']; ?> /><br>
						</div>
						<div class="col-md-6">
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-seam icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	 			 				<path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
							</svg><!-- Icon Stock -->
							<span>Stock<br></span>
							<input class="textbox-add-product2" name="productname" type="text" maxlength="50" readonly="readonly" value=<?php echo $lihat['stok_pd']; ?> /><br>
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-geo-alt icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  								<path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  								<path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg><!-- Icon Lokasi -->
							<span>Location<br></span>
							<input class="textbox-add-product2" name="productname" type="text" maxlength="50" readonly="readonly" value=<?php echo $location['alamat'] ?> /><br>
						</div>
					</div>
				</center>
				<center>
					<button class="button-add-product" onclick="document.location='bayar.php?idpd=<?php echo $id ?>'">
						<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  						<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
	 						 <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
						</svg><!-- Icon Tombol Tambah Keranjang -->
						<span>Buy Now</span>
					</button>
				</center>
			</div>
		</div>
		<br>
		<br>
		<div class="backform-recommendation">
			<center><p class="font-product-group4">Recomendation</p></center>
			<div class="row2">
				<?php foreach ($tampil as $row) : ?>
					<?php 
						$idpd = $row['pdpmk_id'];
					?>
					<div class="box-product-sale" onclick="document.location='productview.php?idpd=<?php echo $idpd ?>'">
						<form method = post action = 'php/getdatarecom.php' enctype="multipart/form-data">
							<?php echo '<img class="img-product-sale" src="data:image/jpeg;base64,'.base64_encode( $row['foto'] ).'"/>';
									?>
							<center>
								<p class="font-box-product-name">
								<?php
									echo $row['nama_pd'] ;
								?>
								</p>
								<p class="font-box-price-and-stock">
								<?php
									echo $row['stok_pd'] ;
									echo " ";
									echo $row['Satuan'];
								?>
								</p>
							</center>
							<center>
								<div class="row">
									<div class="col-md-6">
										<p class="font-box-price-and-stock">
										<?php
											echo 'RP.' . $row['harga_pd'] ;
										?>
										</p>
									</div>
								</div>
							</center>
						</form>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</body>
</html>