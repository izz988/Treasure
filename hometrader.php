<!DOCTYPE html>
<html>
<head>
<?php include 'php/getdatasale.php'; ?>
<?php include 'php/getcategory.php'; ?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Menu</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="usertrader.css">
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
		<button class="button-icon" style="position: relative;left: 490px; bottom: 58px;">
			<svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
			</svg>
		</button>
		<button class="button-icon" style="position: relative;left: 490px; bottom: 58px;" onclick="document.location='traderstorage.php'">
			<svg width="2.5em" height="2.5em" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="2.16 4.32 30 25">
				<path id="Icon_map-storage" d="M 2.159999847412109 4.319999694824219 L 32.15999984741211 4.319999694824219 L 32.15999984741211 7.444999694824219 L 2.159999847412109 7.444999694824219 L 2.159999847412109 4.319999694824219 Z M 4.205453872680664 8.694999694824219 L 4.205453872680664 29.31999969482422 L 30.11454772949219 29.31999969482422 L 30.11454772949219 8.694998741149902 L 4.205453872680664 8.694998741149902 Z M 21.93272399902344 14.31999969482422 L 11.70545291900635 14.31999969482422 L 11.70545291900635 12.4449987411499 L 21.93272399902344 12.4449987411499 L 21.93272399902344 14.31999969482422 Z"/>
			</svg><br>
		</button>
		<button class="button-icon" style="position: relative;left: 490px; bottom: 58px;" onclick="document.location='historypayment.php'">
			<svg width="2em" height="2em" id="Capa_1" viewBox="0 0 512 512" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path d="m276 138v109.716l72.809 72.809c7.811 7.811 7.811 20.474 0 28.284-7.811 7.811-20.474 7.81-28.284 0l-78.667-78.667c-3.751-3.75-5.858-8.838-5.858-14.142v-118c0-11.046 8.954-20 20-20s20 8.954 20 20zm58.667-138h-157.334c-41.89 0-83.217 14.722-116.284 43.478v-23.478c0-11.046-8.954-20-20-20s-20 8.954-20 20v78.667c0 11.046 9.031 20 20 20h78.667c11.046 0 20-8.954 20-20s-8.954-20-20-20h-37.833c25.314-24.405 59.485-38.667 95.45-38.667h157.333c75.727 0 137.334 61.607 137.334 137.333v157.333c0 75.727-61.607 137.334-137.333 137.334h-157.334c-75.726 0-137.333-61.607-137.333-137.333v-78.667c0-11.046-8.954-20-20-20s-20 8.954-20 20v78.667c0 97.782 79.551 177.333 177.333 177.333h157.333c97.783 0 177.334-79.551 177.334-177.333v-157.334c0-97.782-79.551-177.333-177.333-177.333z"/>
			</svg>
		</button>
	</div>
	<div class=" container">
		<div class="row">
			<div class="col-md-6">
				<div class="backform-mini-page">
					<center><p></p></center>
				</div>
			</div>
			<div class="col-md-6">
				<div class="backform-mini-page">
					<center><p></p></center>
					<div class="isi2">
						<?php  
						
						$tampil    = mysqli_query($koneksi, "SELECT * FROM distributor WHERE username='$_SESSION[username]'");
    					$user    = mysqli_fetch_array($tampil);
    					$msg1 = "";
    					$foto_user=$user['foto'];
    					$foto_toko =$user['toko'];      




						echo '<a href="userprofile_trader.php"><img class="fotoakun2" src="data:image/jpeg;base64,'.base64_encode( $user['foto'] ).'"/></a>';
						
							?>
						
					</div>
					<a href="userprofile_trader.php"></a>		
				</div>
			</div>
		</div>
		<div class="">
			<center><p class="font-product-group3" style="-webkit-text-stroke: 1px white; text-transform: uppercase;">Sale</p></center>
			
		</div>
		<div class="backform-sale">
			<center><p class="font-product-group6" style="text-transform: uppercase; color: white">Sayur</p></center>
			<div class="row8">
				<?php foreach ($tampilsayur as $row) : ?>
					<?php 
						$idpd = $row['pdpmk_id'];
					?>
				<div class="box-product-sale" onclick="document.location='productview.php?idpd=<?php echo $idpd ?>'">
					<form method = post action = 'php/getdatasale.php' enctype="multipart/form-data">
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
			<button style="position: relative; left: 1100px; top: 100px;"><a href="allcategory.php?kat=sayur">Show All</a></button>
		</div>
		<div class="backform-sale">
			<br>
			<br>
			<br>
			<center><p class="font-product-group5" style="text-transform: uppercase; color: white">Sembako</p></center>
			<div class="row2">
				<?php foreach ($tampilsembako as $row) : ?>
					<?php 
						$idpd = $row['pdpmk_id'];
					?>
				<div class="box-product-sale" onclick="document.location='productview.php?idpd=<?php echo $idpd ?>'">
					<form method = post action = 'php/getdatasale.php' enctype="multipart/form-data">
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
			<button style="position: relative; left: 1100px; top: 100px;"><a href="allcategory.php?kat=sembako">Show All</a></button>
		</div>
		<div class="backform-sale">
			<br>
			<br>
			<br>
			<center><p class="font-product-group7" style="text-transform: uppercase;color: white">Buah</p></center>
			<div class="row2">
				<?php foreach ($tampilbuah as $row) : ?>
					<?php 
						$idpd = $row['pdpmk_id'];
					?>
				<div class="box-product-sale" onclick="document.location='productview.php?idpd=<?php echo $idpd ?>'">
					<form method = post action = 'php/getdatasale.php' enctype="multipart/form-data">
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
			<button style="position: relative; left: 1100px; top: 100px;"><a href="allcategory.php?kat=buah">Show All</a></button>
		</div>
		<div class="backform-recommendation">
			<center><p class="font-product-group8" style="-webkit-text-stroke: 1px white; text-transform: uppercase;">Recomendation</p></center>
			<div class="row2">
				<?php foreach ($tampilrecom as $row) : ?>
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
			</div>
		</div>
	</div>
</body>
</html>