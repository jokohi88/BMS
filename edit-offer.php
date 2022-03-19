<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    //session
	if(!empty($_SESSION['ADMIN'])){ }else{ header('location:login.php'); }
    // panggil file
    require 'proses/panggil.php';
    
    // tampilkan form edit
    $idGet = strip_tags($_GET['id_offer']);
    $hasil = $proses->tampil_data_id('trx_offer','id_offer',$idGet);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Edit Billboard</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body style="background:#586df5;">
		<div class="container">
			<br/>
            <span style="color:#fff";>Selamat Datang, <?php echo $sesi['nama_pengguna'];?></span>
			<div class="float-right">	
				<a href="offer.php" class="btn btn-success btn-md" style="margin-right:1pc;"><span class="fa fa-home"></span> Kembali</a> 
				<a href="logout.php" class="btn btn-danger btn-md float-right"><span class="fa fa-sign-out"></span> Logout</a>
			</div>		
			<br/><br/><br/>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-lg-6">
					<br/>
					<div class="card">
						<div class="card-header">
						<h4 class="card-title">Edit Offer - <?php echo $hasil['id_offer'];?></h4>
						</div>
						<div class="card-body">
						<!-- form berfungsi mengirimkan data input 
						dengan method post ke proses crud dengan paramater get aksi edit -->
							<form action="proses/crud.php?aksi=edit-offer" method="POST">
							<div class="form-group">
									<label>ID Offer </label>
									<input type="text" value="<?php echo $hasil['id_offer'];?>" class="form-control" name="id_offer">
								</div>
								<div class="form-group">
									<label>ID Employee</label>
									<input type="text" value="<?php echo $hasil['id_employee'];?>" class="form-control" name="id_employee">
								</div>
								<div class="form-group">
									<label>Billboard ID</label>
									<input type="text" value="<?php echo $hasil['id_bb'];?>" class="form-control" name="id_bb">
								</div>
								<div class="form-group">
									<label>Harga Penawaran</label>
									<input type="number" value="<?php echo $hasil['offer_price'];?>" class="form-control" name="offer_price">
								</div>
								<div class="form-group">
									<label>Status</label>
									<input type="text" value="<?php echo $hasil['trx_state'];?>" class="form-control" name="trx_state">
								</div>

								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i>Edit Data</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</body>
</html>