<!DOCTYPE html>
<html>
<head>
<?php include 'php/getdatastorage.php';?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Penyimpanan</title>
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
		
		<form method = "GET" action = 'searchtrader.php' >
			<input type="text" name="cari" maxlength="50" class="input-search" placeholder="search.." style="left: 50px; bottom: 28px; position: relative;">
				<button class="button-icon" name="search" style="left: 50px; bottom:  28px; position: relative;">
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
		<button class="button-icon" onclick="document.location='traderstorage.php'" style="position: relative;left: 490px; bottom: 58px;">
			<svg width="2.5em" height="2.5em" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="2.16 4.32 30 25">
				<path id="Icon_map-storage" d="M 2.159999847412109 4.319999694824219 L 32.15999984741211 4.319999694824219 L 32.15999984741211 7.444999694824219 L 2.159999847412109 7.444999694824219 L 2.159999847412109 4.319999694824219 Z M 4.205453872680664 8.694999694824219 L 4.205453872680664 29.31999969482422 L 30.11454772949219 29.31999969482422 L 30.11454772949219 8.694998741149902 L 4.205453872680664 8.694998741149902 Z M 21.93272399902344 14.31999969482422 L 11.70545291900635 14.31999969482422 L 11.70545291900635 12.4449987411499 L 21.93272399902344 12.4449987411499 L 21.93272399902344 14.31999969482422 Z"/>
			</svg><br>
		</button>
	</div>
	<div class="container">
		<form name="form" method="GET" action = 'php/getdatastorage.php' enctype="multipart/form-data">
			<button class="button-login1" name = "update" style="position: relative;right: 250px; top: 0px;" >
				<svg  width="1.5em" height="1.5em" viewBox="0 0 612 792" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path d="M209.591,337.154 c1.457-2.442,2.255-4.637,2.255-6.45c0-181.128,92.53-222.886,114.75-236.656c3.86-2.26,3.625-3.201-0.8-3.201 c-143.184,0-231.642,102.863-231.642,239.857c0,2.239,0.061,4.385,0.175,6.45h-82.56L153,517.976l141.231-180.822H209.591z"/>
					<path d="M600.231,454.846L459,274.024L317.769,454.846h84.626c-1.448,2.433-2.241,4.619-2.241,6.426c0,181.152-92.53,222.886-114.75,236.656 c-3.86,2.283-3.625,3.225,0.8,3.225c143.184,0,231.642-102.887,231.642-239.88c0-2.231-0.061-4.369-0.174-6.426H600.231z"/>
				</svg>
				Update
			</button>
		<div class="row">
			<?php foreach ($tampil as $row) : ?>
				<?php 
					$id = $row['pddst_id'];
					$_SESSION['idpd'] = $id;?>
				<div class="box-product-storage">
						<?php echo '<img class="img-product-sale" src="data:image/jpeg;base64,'.base64_encode( $row['foto'] ).'"/>';?>
						<center>
							<span class="font-box-product-name-storage"><?php echo $nama=$row['nama_pd'];
							?></span><br>
						<button class="button-icon3">
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 				<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
							</svg>
						</button>
						<input type="text" name="jumlah" value=<?php echo $row['stok_pd'];?> maxlength=3 class="textbox-keranjang">
						<button class="button-icon3">
							<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  				<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
							</svg>
						</button><br>
						<span class="font-box-price-and-stock-storage"><?php echo $row['Satuan'];?>~Tersisa</span>
						</center>	
					</form>
					<form action="php/deletepdtrader.php?idprd=<?php echo $idprd ?>">
					<center>
						<button class="button-icon3">
						<svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  							<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  							<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
						</svg>
					</button>
					</center>
					</form>
				</div>	
			<?php endforeach; ?>
			<div class="box-product-storage" onclick="document.location='addproducttrader.html'">
				<center>
					<br>
					<br>
					<br>
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
					<br>
				Tambah Produk
				</center>
			</div>
		</div>
	</div>
</body>
</html>