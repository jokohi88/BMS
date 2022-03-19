<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    //session
	if(!empty($_SESSION['ADMIN'])){ }else{ header('location:login.php'); }
    // panggil file
    require 'proses/panggil.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Tambah Billboard</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body style="background:#586df5;">
		<div class="container">
			<br/>
            <span style="color:#fff";>Selamat Datang, <?php echo $sesi['nama_pengguna'];?></span>
			<div class="float-right">	
				<a href="billboard.php" class="btn btn-success btn-md" style="margin-right:1pc;"><span class="fa fa-home"></span> Kembali</a> 
				<a href="logout.php" class="btn btn-danger btn-md float-right"><span class="fa fa-sign-out"></span> Logout</a>
			</div>		
			<br/><br/><br/>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-lg-6">
					<br/>
					<div class="card">
						<div class="card-header">
						<h4 class="card-title">Tambah Billboard</h4>
						</div>
						<div class="card-body">
							<form action="proses/crud.php?aksi=tambah-bb" method="POST">
								<div class="form-group">
									<label>ID Billboard </label>
									<input type="text" value="" class="form-control" name="bb_id">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<textarea name="bb_address" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>Harga Jual</label>
									<input type="number" value="" class="form-control" name="bb_sell_price">
								</div>
								<div class="form-group">
									<label>Tahun</label>
									<input type="number" value="" class="form-control" name="bb_year">
								</div>
								<div class="form-group">
									<label>Type</label>
									<input type="text" value="" class="form-control" name="bb_type">
								</div>
								<div class="form-group">
									<label>longitude</label>
									<input type="text" value="" class="form-control" name="bb_lng">
								</div>
								<div class="form-group">
									<label>Latitude</label>
									<input type="text" value="" class="form-control" name="bb_lat">
								</div>

								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i>Tambah Data</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</body>
</html>