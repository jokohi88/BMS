<?php
    require 'panggil.php';

    // proses tambah
    if(!empty($_GET['aksi'] == 'tambah-user'))
    {
        $nama = strip_tags($_POST['nama']);
        $telepon = strip_tags($_POST['telepon']);
        $email = strip_tags($_POST['email']);
        $alamat = strip_tags($_POST['alamat']);
        $user = strip_tags($_POST['user']);
        $pass = strip_tags($_POST['pass']);
        
        $tabel = 'tbl_user';
        # proses insert
        $data[] = array(
            'username'		=>$user,
            'password'		=>md5($pass),
            'nama_pengguna'	=>$nama,
            'telepon'		=>$telepon,
            'email'			=>$email,
            'alamat'		=>$alamat
        );
        $proses->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Data Berhasil");window.location="../index.php"</script>';
    }
    if(!empty($_GET['aksi'] == 'tambah-bb'))
    {
        $bb_id = strip_tags($_POST['bb_id']);
        $bb_address = strip_tags($_POST['bb_address']);
        $bb_sell_price = strip_tags($_POST['bb_sell_price']);
        $bb_year = strip_tags($_POST['bb_year']);
        $bb_type = strip_tags($_POST['bb_type']);
        $bb_lng = strip_tags($_POST['bb_lng']);
        $bb_lat = strip_tags($_POST['bb_lat']);
     
        $tabel = 'mst_bb';
        # proses insert
        $data[] = array(
            'bb_id'		    =>$bb_id,
            'bb_address'	=>$bb_address,
            'bb_sell_price'	=>$bb_sell_price,
            'bb_year'		=>$bb_year,
            'bb_type'		=>$bb_type,
            'bb_lng'		=>$bb_lng,
            'bb_lat'		=>$bb_lat
        );
        $proses->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Data Berhasil");window.location="../billboard.php"</script>';
    }
    if(!empty($_GET['aksi'] == 'tambah-offer'))
    {
        $id_offer = strip_tags($_POST['id_offer']);
        $id_employee = strip_tags($_POST['id_employee']);
        $id_bb = strip_tags($_POST['id_bb']);
        $offer_price = strip_tags($_POST['offer_price']);
        $trx_state = strip_tags($_POST['trx_state']);
     
        $tabel = 'trx_offer';
        # proses insert
        $data[] = array(
            'id_offer'		    =>$id_offer,
            'id_employee'	    =>$id_employee,
            'id_bb'	            =>$id_bb,
            'offer_price'		=>$offer_price,
            'trx_state'		    =>$trx_state
        );
        $proses->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Data Berhasil");window.location="../offer.php"</script>';
    }

    // proses edit
	if(!empty($_GET['aksi'] == 'edit-user'))
	{
		$nama = strip_tags($_POST['nama']);
		$telepon = strip_tags($_POST['telepon']);
		$email = strip_tags($_POST['email']);
		$alamat = strip_tags($_POST['alamat']);
		$user = strip_tags($_POST['user']);
		$pass = strip_tags($_POST['pass']);
		
        // jika password tidak diisi
        if($pass == '')
        {
            $data = array(
                'username'		=>$user,
                'nama_pengguna'	=>$nama,
                'telepon'		=>$telepon,
                'email'			=>$email,
                'alamat'		=>$alamat
            );
        }else{

            $data = array(
                'username'		=>$user,
                'password'		=>md5($pass),
                'nama_pengguna'	=>$nama,
                'telepon'		=>$telepon,
                'email'			=>$email,
                'alamat'		=>$alamat
            );
        }
        $tabel = 'tbl_user';
        $where = 'id_login';
        $id = strip_tags($_POST['id_login']);
        $proses->edit_data($tabel,$data,$where,$id);
        echo '<script>alert("Edit Data Berhasil");window.location="../index.php"</script>';
    }
    if(!empty($_GET['aksi'] == 'edit-bb'))
    {
        $bb_id = strip_tags($_POST['bb_id']);
        $bb_address = strip_tags($_POST['bb_address']);
        $bb_sell_price = strip_tags($_POST['bb_sell_price']);
        $bb_year = strip_tags($_POST['bb_year']);
        $bb_type = strip_tags($_POST['bb_type']);
        $bb_lng = strip_tags($_POST['bb_lng']);
        $bb_lat = strip_tags($_POST['bb_lat']);
     
        $tabel = 'mst_bb';
        # proses edit
        $data = array(
            'bb_id'		    =>$bb_id,
            'bb_address'	=>$bb_address,
            'bb_sell_price'	=>$bb_sell_price,
            'bb_year'		=>$bb_year,
            'bb_type'		=>$bb_type,
            'bb_lng'		=>$bb_lng,
            'bb_lat'		=>$bb_lat
        );
        $tabel = 'mst_bb';
        $where = 'bb_id';
        $id = strip_tags($_POST['bb_id']);
        $proses->edit_data($tabel,$data,$where,$id);
        echo '<script>alert("Edit Data Berhasil");window.location="../billboard.php"</script>';
    }
    if(!empty($_GET['aksi'] == 'edit-offer'))
    {
        $id_offer = strip_tags($_POST['id_offer']);
        $id_employee = strip_tags($_POST['id_employee']);
        $id_bb = strip_tags($_POST['id_bb']);
        $offer_price = strip_tags($_POST['offer_price']);
        $trx_state = strip_tags($_POST['trx_state']);
     
        $tabel = 'trx_offer';
        # proses edit
        $data = array(
            'id_offer'		    =>$id_offer,
            'id_employee'	=>$id_employee,
            'id_bb'	=>$id_bb,
            'offer_price'		=>$offer_price,
            'trx_state'		=>$trx_state
        );
        $tabel = 'trx_offer';
        $where = 'id_offer';
        $id = strip_tags($_POST['id_offer']);
        $proses->edit_data($tabel,$data,$where,$id);
        echo '<script>alert("Edit Data Berhasil");window.location="../offer.php"</script>';
    }
    // hapus data
    if(!empty($_GET['aksi'] == 'hapus-user'))
    {
        $tabel = 'tbl_user';
        $where = 'id_login';
        $id = strip_tags($_GET['hapusid']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Berhasil");window.location="../index.php"</script>';
    }
    if(!empty($_GET['aksi'] == 'hapus-bb'))
    {
        $tabel = 'mst_bb';
        $where = 'bb_id';
        $id = strip_tags($_GET['hapusid']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Berhasil");window.location="../billboard.php"</script>';
    }
    if(!empty($_GET['aksi'] == 'hapus-offer'))
    {
        $tabel = 'trx_offer';
        $where = 'id_offer';
        $id = strip_tags($_GET['hapusid']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Berhasil");window.location="../offer.php"</script>';
    }

    // login
    if(!empty($_GET['aksi'] == 'login'))
    {   
        // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
        $user = strip_tags($_POST['user']);
        $pass = strip_tags($_POST['pass']);
        // panggil fungsi proses_login() yang ada di class prosesCrud()
        $result = $proses->proses_login($user,$pass);
        if($result == 'gagal')
        {
            echo "<script>window.location='../login.php?get=gagal';</script>";
        }else{
            // status yang diberikan 
            session_start();
            $_SESSION['ADMIN'] = $result;
            // status yang diberikan 
            echo "<script>window.location='../index.php';</script>";
        }
    }
?>