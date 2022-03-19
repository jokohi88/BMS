<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    require 'proses/panggil.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Billboard Management System</title>
		<!-- BOOTSTRAP 4-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <!-- DATATABLES BS 4-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <!-- DATATABLES BS 4-->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <!-- BOOTSTRAP 4-->
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	</head>
    <body style="background:#586df5;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

                    <?php if(!empty($_SESSION['ADMIN'])){?>
                    <br/>
                    <span style="color:#fff";>Selamat Datang, <?php echo $sesi['nama_pengguna'];?></span>
                    <a href="logout.php" class="btn btn-danger btn-md float-right"><span class="fa fa-sign-out"></span> Logout</a>
                    <a href="index.php" class="btn btn-info btn-md float-right"><span class="fa fa-user-circle"></span> Master Karyawan</a>
                    <a href="billboard.php" class="btn btn-info btn-md float-right"><span class="fa fa-caret-square-o-down"></span> Billboard</a>
                    <a href="offer.php" class="btn btn-info btn-md float-right"><span class="fa fa-caret-square-o-down"></span> Offer</a>
                    <br/><br/>
                    
                    <br/><br/>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Billboard</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered" id="mytable" style="margin-top: 10px">
                                <thead>
                                    <tr>
                                        <th width="50px">id_billBoard</th>
                                        <th>Address</th>
                                        <th>Harga Jual</th>
                                        <th>Tahun</th>
                                        <th>Tipe</th>
                                        <th>Long</th>
                                        <th>Lat</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                

                                <tbody>
                                <?php
                                    $no=1;
                                    $hasil = $proses->tampil_data('mst_bb');
                                    foreach($hasil as $isi){
                                ?>
                                    <tr>
                                        
                                        <td><?php echo $isi['bb_id']?></td>
                                        <td><?php echo $isi['bb_address'];?></td>
                                        <td><?php echo $isi['bb_sell_price'];?></td>
                                        <td><?php echo $isi['bb_year'];?></td>
                                        <td><?php echo $isi['bb_type'];?></td>
                                        <td><?php echo $isi['bb_lng'];?></td>
                                        <td><?php echo $isi['bb_lat'];?></td>
                                       
                                        
                                        <td style="text-align: center;">
                                        <a href="tambah-bb.php" class="btn btn-success btn-md"><span class="fa fa-plus"></span></a>
                                            <a href="edit-bb.php?bb_id=<?php echo $isi['bb_id'];?>" class="btn btn-success btn-md">
                                            <span class="fa fa-edit"></span></a>
                                            <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="proses/crud.php?aksi=hapus-bb&hapusid=<?php echo $isi['bb_id'];?>" 
                                            class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                    }
                                ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                 
                    <?php }else{?>
                        <br/>
                        <div class="alert alert-info">
                            <h3> Cannot access the page, please login !</h3>
                            <hr/>
                            <p><a href="login.php">Login Disini</a></p>
                        </div>
                    <?php }?>
			    </div>
			</div>
		</div>
        <script>
            $('#mytable').dataTable();
        </script>
	</body>
</html>
