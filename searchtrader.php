<!DOCTYPE html>
<html>
<head>

<?php
include 'php/database_connection.php';
ob_start();
session_start();

$search=@$_GET["cari"];
$tampil  = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE nama_pd LIKE '%$search%'");
$user    = mysqli_fetch_array($tampil);
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Hasil Pencarian</title>
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
		
		<button class="button-icon" onclick="document.location='hometrader.php'">
			<svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  		<path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
		  		<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
			</svg>
		</button>
		<form action = 'searchtrader.php' enctype="multipart/form-data">
			<input type="text" name="cari" maxlength="50" placeholder="Search..." class="input-search" style="left: 50px; bottom: 28px; position: relative;">
				<button class="button-icon" style="left: 50px; bottom:  28px; position: relative;">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
						<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
					</svg>
				</button>
		</form>
	</div>
	<br>
	<br>
	<br>
	<div class="container">
		<center><span class="font-product-name">Search Result "<?php echo $search ?>"</span></center>
		<div class="row8">
			<?php foreach ($tampil as $row) : ?>
					<?php 
						$idpd = $row['pdpmk_id'];
					?>
				<div class="box-product-sale" onclick="document.location='productview.php?idpd=<?php echo $idpd ?>'">
					<form method = "POST" action = '#' enctype="multipart/form-data">
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
				<?php endforeach; ?>
			</div>	
			
		</div>
	</div>
</body>
</html>