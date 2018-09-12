<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Pemilik</title>
	
    <!-- css -->
    <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="<?= base_url() ?>stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="<?= base_url() ?>css/nivo-lightbox.css" rel="stylesheet" />
	<link href="<?= base_url() ?>css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="<?= base_url() ?>css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="<?= base_url() ?>css/animate.css" rel="stylesheet" />
    <link href="<?= base_url() ?>css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="<?= base_url() ?>img/photo/1.jpg" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="<?= base_url() ?>color/default.css" rel="stylesheet">
	<style type="text/css">
	body,td,th {
	font-family: "Times New Roman";
	color: #fff;
}
h1,h2,h3,h4,h5,h6 {
	font-family:"Times New Roman";
}
h1 {
	color: #fff;
}
h2 {
	color: #fff;
}
h3 {
	color: #fff;
}
h4 {
	color: #fff;
}
h5 {
	color: #666;
}
h6 {
	color: #fff;
}
    a:hover {
	color: #40546a;
}
    </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left"><h1>HALAMAN PEMILIK</h1></p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>pemilik/c_menu/">
                
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
                
                <li><a href="<?= base_url() ?>pemilik/c_menu/">Menu</a></li>
                <li class="active"><a href="<?= base_url() ?>pemilik/c_karyawan/">Karyawan</a></li>
                <li><a href="<?= base_url() ?>pemilik/c_penggajian/">Penggajian</a></li>
                <li><a href="<?= base_url() ?>pemilik/c_penghasilan/">Penghasilan</a></li>
                <li><a href="<?= base_url() ?>login/logout/">Logout</a></li>
				
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
        <div class="left-menu">
       <div class="page">
    <br>
	<br>
	<h3>&nbsp;&nbsp;&nbsp;&nbsp;Tambah Data Karyawan</h3>
	
	<form method="post" action="<?= base_url() ?>pemilik/c_tambahkaryawan/addkaryawanDb/">
  <table align="center" width="85%" border="0" cellspacing="0" cellpadding="5">
  
<?php
//koneksi ke mysql
mysql_connect("localhost", "root", "");
mysql_select_db("restoran");
?>
    <tbody >
      
		<tr>
        <td>Id Karyawan</td>
        <td> <input class="form-control input-md" type="text" name="id_karyawan" placeholder="Id Karyawan" size="50" required> </td>
      </tr>
	   <tr>
        <td>Password</td>
        <td> <input type="password" class="form-control input-md" name="password" placeholder="Password" size="50" required> </td>
      </tr>
	  <tr>
        <td>Nama Karyawan</td>
        <td>
          <input class="form-control input-md" type="text" name="nama_karyawan" placeholder="Nama Karyawan" size="50" required> </td>
		</tr>
     
	  <tr>
        <td>Alamat</td>
        <td> <input class="form-control input-md" type="text" name="alamat" placeholder="Alamat" size="50" required> </td>
      </tr>
      <tr>
        <td>Agama</td>
        <td> <input class="form-control input-md" type="text" name="agama" placeholder="Agama" maxlength="13" size="50" required></td>
      </tr>
	  <tr>
        <td>Jenis Kelamin</td>
        <td> <input type="radio" name="jenis_kelamin" value="Laki-laki" size="25" > Laki-Laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" size="25" > Perempuan</td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td> <input class="form-control input-md" type="date" name="ttl" placeholder="Tanggal Lahir" size="50" required> </td>
      </tr>
      <tr>
        <td>Nomor Telepon</td>
        <td><input type="number" class="form-control input-md" name="no_telp" placeholder="Nomor Telepon" maxlength="13" size="50" required></td>
      </tr>
	  
      <tr>
        <td>Status</td>
        <td><input type="radio" name="status" value="Aktif" size="25">Aktif
        <input type="radio" name="status" value="Tidak Aktif" size="25"> Tidak Aktif </td>
      </tr>
	  <tr>
        <td>Jenis User</td>
        <td><input type="radio" name="user" value="Kasir" size="25">Kasir
        <input type="radio" name="user" value="Pemilik" size="25"> Pemilik
		<input type="radio" name="user" value="Koki" size="25">Koki
		<input type="radio" name="user" value="pelayan" size="25">Pelayan
		</td>
      </tr>
      <tr>  
        <td>
               </td>
        <td>
		<br>
          <input class="input btn-primary" type="reset">  &nbsp;&nbsp; <input class="input btn-success" type="submit" value="Tambah"></td>  
      </tr> 
    </tbody>
  </table>
</form>
	
  </div>
		
		</div>
</div>		
    </section>
	

	<footer>
			<div class="row">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div align="center" class="text-center">
					<p><h5>&copy;Copyright - Politeknik Negeri Batam 2017</h5></p>
					</div>
					</div>
		
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="<?= base_url() ?>js/jquery.min.js"></script>	 
    <script src="<?= base_url() ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>js/jquery.easing.min.js"></script>
	<script src="<?= base_url() ?>js/wow.min.js"></script>
	<script src="<?= base_url() ?>js/jquery.scrollTo.js"></script>
	<script src="<?= base_url() ?>js/jquery.appear.js"></script>
	<script src="<?= base_url() ?>js/stellar.js"></script>
	<script src="<?= base_url() ?>plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="<?= base_url() ?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>js/nivo-lightbox.min.js"></script>
    <script src="<?= base_url() ?>js/custom.js"></script>
    
</body>

</html>
