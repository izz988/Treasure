<!DOCTYPE html>
<html>
<head>
<?php include 'php/getdatasupplier.php'; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Menu</title>
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
	<div class="headkan">
		<button class="button-icon" onclick="document.location='userprofile_supplier.php'" style="position: relative;left: 490px;">
			<svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 				<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			</svg>
		</button>
	</div>
	<br>
	<center><p class="font-product-group1">Your</p><p class="font-product-group2">Product</p></center>
	<br>
	<br>
	<br>
	<div class=" container">
			<div class="backform-sale">
				<div class="row2">
					<?php foreach ($tampil as $row) : ?>
					<?php 
						$idpd = $row['pdpmk_id'];
					?>
					<div class="box-product-sale" onclick="document.location='productedit.php?idpd=<?php echo $idpd ?>'">
						<form method = post action = 'php/getdatasupplier.php' enctype="multipart/form-data">
							<?php echo '<img class="img-product-sale" src="data:image/jpeg;base64,'.base64_encode( $row['foto'] ).'"/>';?>
							<center>
								<p class="font-box-product-name">
									<?php echo $row['nama_pd'] ; ?>
								</p>
								<p class="font-box-price-and-stock">
									<?php
										echo $row['stok_pd'];
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
				<div class="box-product-sale" onclick="document.location='addproductsupplier.html'">
				<center>
					<br>
					<br>
					<br>
					<button class="button-icon3" style="color : red;">
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				<p style="color : red;">Tambah Produk</p>
				</center>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>