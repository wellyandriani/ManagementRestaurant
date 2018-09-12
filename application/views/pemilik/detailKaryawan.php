<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman pemilik</title>
	
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
<body bgcolor="#FFFFFF" alink="#CCCCCC" id="page-top" data-spy="scroll" data-target=".navbar-custom">


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
					<br>
					<br>
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp; Detail Data Karyawan</h3>
        <div class="center-menu">
        
       <div class="page">
	   
	           <?php
            foreach($detailkaryawan->result() as $detail){
        ?>
		 <form method="post" action="<?= base_url() ?>pemilik/c_karyawan/updatekaryawanDb/">
		 <table align="center" width="85%" border="0" cellspacing="0" cellpadding="5">
		 <tbody >
		 <tr>
        <td>Id Karyawan</td>
        <td>
			  <input size="40" readonly class="form-control input-md" type="text" name="id_karyawan" value="<?php echo $detail->id_karyawan; ?>" readonly /></td> 
              </tr>
		   <tr>
        <td>Nama Karyawan</td>
        <td>
			  <input size="40" readonly class="form-control input-md" placeholder="nama" value="<?php echo $detail->nama_karyawan; ?>" name="nama_karyawan"  /></td>
			</tr>  
			 <tr>
        <td>Alamat</td>
        <td>
			  <input required size="40"  class="form-control input-md" readonly type="text" placeholder="Alamat" name="alamat" value="<?php echo $detail->alamat; ?>" /></td> 		 
               </tr>
		 <tr>
        <td>Jenis Kelamin</td>
        <td>
			  <input size="40" readonly class="form-control input-md" placeholder="Jenis kelamin" value="<?php echo $detail->jenis_kelamin; ?>" name="jenis_kelamin"  /></td>
			</tr>  
		  <tr>
        <td>Tanggal Lahir</td>
        <td>
			  <input readonly required class="form-control input-md" size="40" type="text" placeholder="Tanggal Lahir" name="ttl" value="<?php echo $detail->ttl; ?>" /></td>
		  </tr>
			<tr>
        <td>Nomor Telepon</td>
        <td>
			  <input readonly size="40" type="text" class="form-control input-md" placeholder="No. telp" name="no_telp" value="<?php echo $detail->no_telp; ?>" /></td>
		  </tr>
		  		  <tr>
        <td>Status</td>
        <td><input size="40" readonly class="form-control input-md" placeholder="" value="<?php echo $detail->status; ?>" name="status"  /></td>
		  </tr>
		  <tr>
        <td>Jenis User</td>
        <td><input size="40" readonly class="form-control input-md" placeholder="nama" value="<?php echo $detail->user; ?>" name="user"  /></td>
		  </tr>
		   <tr>  
        <td>
               </td>
        <td>
		<br>
			<span><a href="<?= base_url() ?>pemilik/c_karyawan/"><button class="input btn-primary" type="button" >OK</button></a></span>
		  </tr>
		  </tbody>
  </table>
	</form>
        <?php
            }    
        ?>
     
  </div>
		</div>
		
</div>		
  </section>
	

	<footer>
			<div class="row">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div align="center" class="text-center">
					<p>&copy;Copyright - Politeknik Negeri Batam 2017</p>
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
