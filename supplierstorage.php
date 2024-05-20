<!DOCTYPE html>
<html>
<head>
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
		
		<button class="button-icon" onclick="document.location='userprofile_supplier.php'">
			<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 				<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			</svg>
		</button>
		<button class="button-icon" onclick="document.location='supplierstorage.php'">
			<svg width="2.5em" height="2.5em" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="2.16 4.32 30 25">
				<path id="Icon_map-storage" d="M 2.159999847412109 4.319999694824219 L 32.15999984741211 4.319999694824219 L 32.15999984741211 7.444999694824219 L 2.159999847412109 7.444999694824219 L 2.159999847412109 4.319999694824219 Z M 4.205453872680664 8.694999694824219 L 4.205453872680664 29.31999969482422 L 30.11454772949219 29.31999969482422 L 30.11454772949219 8.694998741149902 L 4.205453872680664 8.694998741149902 Z M 21.93272399902344 14.31999969482422 L 11.70545291900635 14.31999969482422 L 11.70545291900635 12.4449987411499 L 21.93272399902344 12.4449987411499 L 21.93272399902344 14.31999969482422 Z"/>
			</svg><br>
		</button>
	</div>
	<div class="container">
		<button class="button-login">
			<svg  width="1.5em" height="1.5em" viewBox="0 0 612 792" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path d="M209.591,337.154 c1.457-2.442,2.255-4.637,2.255-6.45c0-181.128,92.53-222.886,114.75-236.656c3.86-2.26,3.625-3.201-0.8-3.201 c-143.184,0-231.642,102.863-231.642,239.857c0,2.239,0.061,4.385,0.175,6.45h-82.56L153,517.976l141.231-180.822H209.591z"/>
				<path d="M600.231,454.846L459,274.024L317.769,454.846h84.626c-1.448,2.433-2.241,4.619-2.241,6.426c0,181.152-92.53,222.886-114.75,236.656 c-3.86,2.283-3.625,3.225,0.8,3.225c143.184,0,231.642-102.887,231.642-239.88c0-2.231-0.061-4.369-0.174-6.426H600.231z"/>
			</svg>
			Update
		</button>
		<div class="row">
			<div class="box-product-storage2">
				<img src="beras.jpg" class="img-product-storage">
				<center>
					<span class="font-box-product-name-storage">Beras Indramayu</span>
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
					</svg>
				</button>
				<input type="text" name="jumlah" value="0" maxlength="3" class="textbox-keranjang">
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				<span class="font-box-price-and-stock-storage">Kg~Tersisa</span><br>
				<span class="font-box-price-and-stock-storage">Rp.0</span>
				</center>
			</div>	
			<!-- bagian bawah ini adalah contoh bisa dihapus sampai comment berikutnya klo udh ke looping dari database-->
			<div class="box-product-storage2">
				<img src="beras.jpg" class="img-product-storage">
				<center>
					<span class="font-box-product-name-storage">Beras Indramayu</span>
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
					</svg>
				</button>
				<input type="text" name="jumlah" value="0" maxlength="3" class="textbox-keranjang">
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				<span class="font-box-price-and-stock-storage">Kg~Tersisa</span><br>
				<span class="font-box-price-and-stock-storage">Rp.0</span>
				</center>
			</div>
			<div class="box-product-storage2">
				<img src="beras.jpg" class="img-product-storage">
				<center>
					<span class="font-box-product-name-storage">Beras Indramayu</span>
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
					</svg>
				</button>
				<input type="text" name="jumlah" value="0" maxlength="3" class="textbox-keranjang">
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				<span class="font-box-price-and-stock-storage">Kg~Tersisa</span><br>
				<span class="font-box-price-and-stock-storage">Rp.0</span>
				</center>
			</div>
			<div class="box-product-storage2">
				<img src="beras.jpg" class="img-product-storage">
				<center>
					<span class="font-box-product-name-storage">Beras Indramayu</span>
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
					</svg>
				</button>
				<input type="text" name="jumlah" value="0" maxlength="3" class="textbox-keranjang">
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				<span class="font-box-price-and-stock-storage">Kg~Tersisa</span><br>
				<span class="font-box-price-and-stock-storage">Rp.0</span>
				</center>
			</div>
			<div class="box-product-storage2">
				<img src="beras.jpg" class="img-product-storage">
				<center>
					<span class="font-box-product-name-storage">Beras Indramayu</span>
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
					</svg>
				</button>
				<input type="text" name="jumlah" value="0" maxlength="3" class="textbox-keranjang">
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				<span class="font-box-price-and-stock-storage">Kg~Tersisa</span><br>
				<span class="font-box-price-and-stock-storage">Rp.0</span>
				</center>
			</div>
			<div class="box-product-storage2">
				<img src="beras.jpg" class="img-product-storage">
				<center>
					<span class="font-box-product-name-storage">Beras Indramayu</span>
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
					</svg>
				</button>
				<input type="text" name="jumlah" value="0" maxlength="3" class="textbox-keranjang">
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				<span class="font-box-price-and-stock-storage">Kg~Tersisa</span><br>
				<span class="font-box-price-and-stock-storage">Rp.0</span>
				</center>
			</div>
			<div class="box-product-storage2">
				<img src="beras.jpg" class="img-product-storage">
				<center>
					<span class="font-box-product-name-storage">Beras Indramayu</span>
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
					</svg>
				</button>
				<input type="text" name="jumlah" value="0" maxlength="3" class="textbox-keranjang">
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				<span class="font-box-price-and-stock-storage">Kg~Tersisa</span><br>
				<span class="font-box-price-and-stock-storage">Rp.0</span>
				</center>
			</div>
			<div class="box-product-storage2">
				<img src="beras.jpg" class="img-product-storage">
				<center>
					<span class="font-box-product-name-storage">Beras Indramayu</span>
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
					</svg>
				</button>
				<input type="text" name="jumlah" value="0" maxlength="3" class="textbox-keranjang">
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				<span class="font-box-price-and-stock-storage">Kg~Tersisa</span><br>
				<span class="font-box-price-and-stock-storage">Rp.0</span>
				</center>
			</div>
			<div class="box-product-storage2">
				<img src="beras.jpg" class="img-product-storage">
				<center>
					<span class="font-box-product-name-storage">Beras Indramayu</span>
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
					</svg>
				</button>
				<input type="text" name="jumlah" value="0" maxlength="3" class="textbox-keranjang">
				<button class="button-icon3">
					<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				<span class="font-box-price-and-stock-storage">Kg~Tersisa</span><br>
				<span class="font-box-price-and-stock-storage">Rp.0</span>
				</center>
			</div>
			<!-- nah sampe sini-->
			<div class="box-product-storage5" onclick="document.location='addproductsupplier.html'">
				<center>
					<br>
					<br>
					<br>
					<button class="button-icon3">
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  		<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg>
				</button><br>
				Tambah Produk
				</center>
			</div>
		</div>
	</div>
</body>
</html>