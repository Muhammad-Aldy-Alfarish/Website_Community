 <!-- Koneksi DB Ke Web -->

 <?php
    $server = "localhost";
	$user = "root";
	$pass = "";
	$database = "register_db";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
    
    //jika tombol simpan diklik
	if(isset($_POST['bsimpan']))
	{
		//Pengujian Apakah data akan diedit atau disimpan baru
		if($_GET['hal'] == "edit")
		{
			//Data akan di edit
			$edit = mysqli_query($koneksi, "UPDATE tmhs set
											 	nim = '$_POST[tnim]',
											 	nama = '$_POST[tnama]',
												alamat = '$_POST[talamat]'
											 WHERE id_mhs = '$_GET[id]'
										   ");
			if($edit) //jika edit sukses
			{
				echo "<script>
						alert('Edit data suksess!');
						document.location='tablepegawai.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Edit data GAGAL!!');
						document.location='tablepegawai.php';
				     </script>";
			}
		}
		else
		{
			//Data akan disimpan Baru
			$simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nim, nama, alamat)
										  VALUES ('$_POST[tnim]', 
										  		 '$_POST[tnama]', 
										  		 '$_POST[talamat]')
										 ");
			if($simpan) //jika simpan sukses
			{
				echo "<script>
						alert('Simpan data suksess!');
						document.location='tablepegawai.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Simpan data GAGAL!!');
						document.location='tablepegawai.php';
				     </script>";
			}
		}


		
	}

	//Pengujian jika tombol Edit / Hapus di klik
	if(isset($_GET['hal']))
	{
		//Pengujian jika edit Data
		if($_GET['hal'] == "edit")
		{
			//Tampilkan Data yang akan diedit
			$tampil = mysqli_query($koneksi, "SELECT * FROM tmhs WHERE id_mhs = '$_GET[id]' ");
			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//Jika data ditemukan, maka data ditampung ke dalam variabel
				$vnim = $data['nim'];
				$vnama = $data['nama'];
				$valamat = $data['alamat'];
			}
		}
		else if ($_GET['hal'] == "hapus")
		{
			//Persiapan hapus data
			$hapus = mysqli_query($koneksi, "DELETE FROM tmhs WHERE id_mhs = '$_GET[id]' ");
			if($hapus){
				echo "<script>
						alert('Hapus Data Suksess!!');
						document.location='tablepegawai.php';
				     </script>";
			}
		}
	}

    if(isset($_GET['hal'])) 
    {
        if($_GET['hal'] == "info") 
        {
            $tampil = mysqli_query($koneksi, "SELECT * FROM thms WHERE id_mhs = '$_GET[id]' ");
            $data = mysqli_fetch_array($tampil);
            if($data)
            {
                $detail = $data['detail'];
                $img = $data['img'];
            }
        }
    }

?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <meta name="description" content="" />
     <meta name="author" content="" />
     <title>Dashboard - Admin</title>
     <link href="css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
 </head>

 <body class="sb-nav-fixed">
     <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
         <a class="navbar-brand" href="index.html">Dashboard</a>
         <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
         <!-- Navbar Search-->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
             <div class="input-group">
                 <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                 <div class="input-group-append">
                     <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                 </div>
             </div>
         </form>
         <!-- Navbar-->
         <ul class="navbar-nav ml-auto ml-md-0">
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                     <a class="dropdown-item" href="#">Settings</a>
                     <a class="dropdown-item" href="activity.html">Activity Log</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="../login.php">Logout</a>
                 </div>
             </li>
         </ul>
     </nav>

     <!-- Sidenav -->
     <div id="layoutSidenav">
         <div id="layoutSidenav_nav">
             <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                 <div class="sb-sidenav-menu">
                     <div class="nav">
                         <div class="sb-sidenav-menu-heading">Core</div>
                         <a class="nav-link" href="../dist/index.php">
                             <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                             Dashboard
                         </a>
                         <div class="sb-sidenav-menu-heading">Data</div>
                         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                             <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                             Table
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                         </a>
                         <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav">
                                 <a class="nav-link" href="../dist/">Tabel Pegawai</a>
                                 
                             </nav>
                         </div>
                         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                             <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                             Coming Soon
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                         </a>
                         <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                     Coming Soon
                                     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                 </a>
                                 <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                     <nav class="sb-sidenav-menu-nested nav">
                                         <a class="nav-link" href="#">Login</a>
                                         <a class="nav-link" href="#">Register</a>
                                         <a class="nav-link" href="#">Forgot Password</a>
                                     </nav>
                                 </div>
                                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                     Coming Soon
                                     <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                 </a>
                                 <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                     <nav class="sb-sidenav-menu-nested nav">
                                         <a class="nav-link" href="404.html">Edit Data</a>
                                         <a class="nav-link" href="404.html">Advanced Chart</a>
                                         <a class="nav-link" href="404.html">Remove User</a>
                                     </nav>
                                 </div>
                             </nav>
                         </div>
                         <div class="sb-sidenav-menu-heading">Tambahan</div>
                         <a class="nav-link" href="charts.html">
                             <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                             Charts
                         </a>
                         <a class="nav-link" href="tables.html">
                             <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                             Tables
                         </a>
                     </div>
                 </div>
                 <div class="sb-sidenav-footer">
                     <div class="small">Logged in as:</div>
                     User
                 </div>
             </nav>
         </div>

         <div id="layoutSidenav_content">
             <main>
                 <div class="container-fluid">
                     <h1 class="mt-4">Tabel Anggota</h1>
                     <ol class="breadcrumb mb-4">
                         <li class="breadcrumb-item"><a href="../dist/edit.php">Dashboard</a></li>
                         <li class="breadcrumb-item active">Tabel Anggota</li>
                     </ol>

                     <!-- Form Input -->
                     
                     <div class="card mt-3">
                        <div class="card-header bg-primary text-white">
                            Form Input Data Anggota
                        </div>
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" name="tnim" value="<?=@$vnim?>" class="form-control" placeholder="Input Code anda disini!" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Input Nama anda disini!" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" name="talamat"  placeholder="Input Alamat anda disini!"><?=@$valamat?></textarea>
                                </div>

                                <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                                <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

                            </form>
                        </div>
                        </div>

                        <!-- Table -->

                     <div class="card mt-3">
	                        <div class="card-header bg-success text-white">
                                    Daftar Anggota
                                </div>
                                <div class="card-body">
                                    
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Uang Pendaftaran</th>
                                            <th>Uang Kas</th>
                                            <th>Uang Sumbangan</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                        <?php
                                            $no = 1;
                                            $tampil = mysqli_query($koneksi, "SELECT * from tmhs order by id_mhs desc");
                                            while($data = mysqli_fetch_array($tampil)) :

                                        ?>
                                        <tr>
                                            <td><?=$no++;?></td>
                                            <td><?=$data['nama']?></td>
                                            <td><?=$data['alamat']?></td>
                                            <td><?=$data['uang_pendaftaran']?></td>
                                            <td><?=$data['uang_kas']?></td>
                                            <td><?=$data['uang_sumbangan']?></td>
                                            <td>
                                                <a href="tablepegawai.php?hal=edit&id=<?=$data['id_mhs']?>" class="btn btn-warning "> Edit </a>
                                                <a href="tablepegawai.php?hal=hapus&id=<?=$data['id_mhs']?>" 
                                                onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger mt-2"> Hapus </a>


                                        
                                            </td>
                                        </tr>
                                    <?php endwhile; //penutup perulangan while ?>
                                    </table>
                            </div>
                        </div>
	<!-- Akhir Card Tabel -->



                     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
                     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                     <script src="js/scripts.js"></script>
                     <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
                     <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
                     <script src="assets/demo/datatables-demo.js"></script>
 </body>

 </html>