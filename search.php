<!DOCTYPE html>
<html>
<head>
<?php include 'php/cari.php'; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Penyimpanan</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">

<script src="assets/js/jquery.js"></script> 
<script src="assets/js/popper.js"></script> 
<script src="assets/js/bootstrap.js"></script>

</head>

<body class="body2">
	<div class="container">
		<button class="button-icon"><!-- Icon Tombol Kembali -->
			<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
			</svg><!-- Icon Tombol Kembali -->
		</button>
		<button class="button-icon" onclick="document.location='hometrader.html'">
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  		<path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
		  		<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
			</svg><!-- Icon Tombol Rumah -->
		</button>
		<input type="text" name="cari" maxlength="50"  placeholder="Search..." class="input-search">
		<button class="button-icon">
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  			<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
	  			<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
			</svg><!-- Icon Tombol Cari -->
		</button>
		<button class="button-icon" onclick="document.location='keranjang.html'">
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
			</svg><!-- Icon Tombol Keranjang -->
		</button>
		<button class="button-icon">
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
			</svg><!-- Icon Tombol Pesan -->
		</button>
	</div>

	<div class="container">
		<center><img src="crew.png" class="img-menu"></center>
		<span class="font-product-name">Search Result "Product Name"</span>
		<div class="row">
			<?php foreach ($tampil as $row) : ?>
					<?php 
						$idpd = $row['pdpmk_id'];
					?>
				<div class="box-product-sale" onclick="document.location='productview.php?idpd=<?php echo $idpd ?>'">
					<form method = post action = 'coba/php/getdatasale.php' enctype="multipart/form-data">
						<?php echo '<img class="img-product-sale" src="data:image/jpeg;base64,'.base64_encode( $row['foto'] ).'"/>';
								?>
						<center>
							<p class="font-box-product-name">
							<?php
								echo $row['nama_pd'] ;
							?>
							</p>
							<p class="font-box-product-name">
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
				<?php endforeach; ?>form>
			</div>	
			
		</div>
	</div>
</body>
</html>