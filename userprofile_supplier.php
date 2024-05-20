<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>User Profile</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="icon.png" />
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
		<button class="button-icon">
			<svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
			</svg>
		</button>
	</div>
	<section>
		<div class="fieldprofil">
		<?php include 'php/afterlogin.php'; ?>
		<form action="php/afterlogin.php"  enctype="multipart/form-data">
			<h1 class="heading">
			Profile
			</h1>
			<div class="isi-profil">
				<div class="isi">
					<div class="fototoko">
						<?php echo '<img class="fototoko" src="data:image/jpeg;base64,'.base64_encode( $user['toko'] ).'"/>';?>
					</div>
						<?php echo '<img class="fotoakun" src="data:image/jpeg;base64,'.base64_encode( $user['foto'] ).'"/>';?>
					<h1><?=$user['nama']?></h1>
					<p class="username-profil"><?=$user['username']?></p>
					<div class="iconisi">
						<a href="#"></a><i style="color: red" class="fas fa-map-marker-alt fa-3x"></i>
					</div>
					<div class="textbaru"><?=$user['alamat']?></div>
					<div class="iconisi2">
						<a href="#"></a><i style="color: red" class="fab fa-whatsapp fa-2x"></i>
					</div>
					<div class="textbaru2"><?=$user['no_hp']?></div>
					<div class="iconisi3">
						<a href="#"></a><i style="color: red" class="fas fa-envelope fa-2x"></i>
					</div>
					<div class="textbaru3"><?=$user['email']?></div>
					<a href="#" class="btn-edit">Edit</a>
					<a href="login.html" class="btn-log">Logout</a>
					
					</div>
					

				</div>
			</div>
		</form>
		
	</div>
	</section>
	
				
	
</body>
</html>