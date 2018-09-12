<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Administrator</title>
	
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
	font-family: "Open Sans", sans-serif;
}
    a {
	font-family: "Century Gothic";
}
a:visited {
	color: #FFF;
}
    #page-top #wrapper #intro .wow.fadeInDown .center-menu .page {
	color: #000;
}
    #page-top #wrapper #intro .wow.fadeInDown .center-menu {
	color: #000;
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
					<p class="bold text-left">Halaman Administrator</p>
					</div>
					
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>perawat/c_pasien/">
                
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
                <li><a href="<?= base_url() ?>perawat/c_pasien/">Pasien</a></li>
                <li><a href="<?= base_url() ?>perawat/c_pendaftaran/">Pemeriksaan</a></li>
                <li><a href="<?= base_url() ?>perawat/c_pembayaran/">pembayaran</a></li>
                <li><a href="<?= base_url() ?>perawat/c_bpjs/">BPJS</a></li>
                <li><a href="<?= base_url() ?>perawat/c_penghasilan/">Penghasilan</a></li>
				<li><a href="<?= base_url() ?>rujukan/">SuratRujukan</a></li>
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
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp; Detail Pemeriksaan</h3>
        <div class="center-menu">
        
       <div class="page">
	   
	           <?php
            foreach($detailpendaftaran->result() as $detail){
        ?>
		 <form method="post" >
		 <table align="center" width="85%" border="0" cellspacing="0" cellpadding="5">
		 <tbody >
		   <tr>
        <td>ID Karyawan</td>
        <td>
			  <input class="form-control input-md" size="23"  value="<?php echo $detail->id_karyawan; ?>" name="id_karyawan" readonly /></td>
			</tr>  
			   <tr>
        <td>Nama Dokter</td>
        <td>
			  <input readonly class="form-control input-md" required size="30" type="text" placeholder="nama" name="nama_karyawan" value="<?php echo $detail->nama_karyawan; ?>" /></td> 
              </tr>
			<tr>
        <td>Spesialis</td>
        <td>
			  <input readonly class="form-control input-md" required size="40" type="text" placeholder="Alamat" name="spesialis" value="<?php echo $detail->spesialis; ?>" /></td> 		 
               </tr>
		  <tr>
        <td>Nama Pasien</td>
        <td>
			  <input readonly class="form-control input-md" required size="30" type="text" placeholder="" name="nama_pasien" value="<?php echo $detail->nama_pasien; ?>" /></td>
		  </tr>
		 <tr>
        <td>No Mecidal Record</td>
        <td>
			  <input readonly class="form-control input-md" required size="30" type="text" placeholder="NIK" name="no_medicalrecord" value="<?php echo $detail->no_medicalrecord; ?>" /></td>
		  </tr>
		<tr>
		<td>Tanggal</td>
		<td>
		<input readonly class="form-control input-md" required size="30" type="text" placeholder="NIK" name="tanggal" value="<?php echo $detail->tanggal; ?>" /></td>
        </td>  
		</select>
      </tr>
		   <tr>  
        <td>
               </td>
        <td>
			  <span><a href="<?= base_url() ?>perawat/c_pendaftaran/"><button class="input btn-primary" type="button" >OK</button></a></span>
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
