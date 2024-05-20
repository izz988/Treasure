<!DOCTYPE html>
<html>
<head>
<?php
include 'php/database_connection.php';
session_start();
$id = $_GET["idpd"]; 
$view = mysqli_query($koneksi, "SELECT * FROM produk_pmk WHERE pdpmk_id='$id'");
$lihat = mysqli_fetch_assoc($view);
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Pembayaran</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="icon.png" />
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/popper.js"></script> 
<script src="assets/js/bootstrap.js"></script>

<script>
	jml1 = 10;

	function change() {
  		jml1 = document.getElementById('count').value;
	}

    function plus() {
      jml1++;
      document.getElementById('count').value = jml1;
   }
    function minus() {
    	if (document.getElementById('count').value >10 ){
    		jml1--;
     		document.getElementById('count').value = jml1;
    	}
   }
</script>

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
		<button class="button-icon" onclick="document.location='keranjang.html'">
			<svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
			</svg>
		</button>
	</div>
	<div class="container">
		<form name="form" action="php/afterpayment.php" method="GET">
			<div class="backform-profile">
				<div class="margin-profile">
					<div class="row3">
						<div class="col-md-6">
							<?php 
								$id = $lihat['pdpmk_id'];
								$_SESSION['idprd'] = $id;?>
							<center>
								Nama Produk
							</center>
							<center>
							<input class="textbox-register-and-profile" value="<?php echo $lihat['nama_pd']; ?>" readonly="readonly" />
							Jumlah Produk<br>
							<button class="button-icon3" type="button" onclick="minus()">
								<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				 					<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
							</svg>
							</button>
							<input class="textbox-keranjang" value="10" name="jml" id=count onchange="change()">
							<button class="button-icon3" type="button" onclick="plus()">
								<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  					<path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
								</svg>
							</button><br>
							</center>
							<center>Satuan<br>
							<input class="textbox-add-product2" value="<?php echo $lihat['Satuan']; ?>" readonly="readonly" />
							</center>
							<center>
								Biaya Pengiriman
							</center>
							<center>
								Rp <input class="textbox-add-product2" value="100.000" readonly="readonly" />
							</center>
						</div>
						<div class="col-md-6">
							<center>
								Metode Pembayaran
							</center><br>
							<label><input type="radio" name="metode" value="Cash" checked="checked" />Cash On Delivery</label><br>
							<label><input type="radio" name="metode" value="Bank"/>Bank</label><br>
							<label><input type="radio" name="metode" value="Digital" />Digital Payment</label><br>
						</div>
					</div>
					<center>
						Total Harga
					</center>
					<center>
						Rp <input class="textbox-add-product2" name = "total" value="<?php echo $lihat['harga_pd'] + 100000; ?>" readonly="readonly" />
					</center>
					<center>
						<button class="button-edit" name="tambah">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  								<path fill-rule="evenodd" d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z"/>
 								<path d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
							</svg>
							Bayar
						</button>
					</center>
				</div>
			</div>
		</form>
	</div>
</body>
</html>