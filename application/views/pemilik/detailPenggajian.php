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
				<li ><a href="<?= base_url() ?>pemilik/c_menu/">Menu</a></li>
                <li><a href="<?= base_url() ?>pemilik/c_karyawan/">Karyawan</a></li>
                <li class="active"><a href="<?= base_url() ?>pemilik/c_penggajian/">Penggajian</a></li>
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
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp; Detail Data Penggajian</h3>
        <div class="center-menu">
        
       <div class="page">
	   
	           <?php
            foreach($detailpenggajian->result() as $detail){
        ?>
		 <form method="post" action="<?= base_url() ?>pemilik/c_penggajian/detailPenggajianDb/">
		 <table align="center" width="85%" border="0" cellspacing="0" cellpadding="5">
		 <tbody >
		   <tr>
        <td>Id Karyawan</td>
        <td>
			  <input class="form-control input-md" size="40"  name="id_karyawan" readonly  value="<?php echo $detail->id_karyawan; ?>" /></td>
			</tr>  
			   <tr>
        <td>Nama Karyawan</td>
        <td>
			  <input class="form-control input-md" required size="40" readonly type="text" placeholder="nama" name="nama_karyawan" value="<?php echo $detail->nama_karyawan; ?>" /></td> 
              </tr>
			<tr>
        <td>Jabatan</td>
        <td>
			  <input class="form-control input-md" required size="40" readonly type="text" placeholder="" name="jabatan" value="<?php echo $detail->jabatan; ?>" /></td> 		 
               </tr>
		  <tr>
        <td>Jumlah Jam Kerja</td>
        <td>
			  <input class="form-control input-md" required size="40" readonly type="text" placeholder="" name="jumlah_jam" value="<?php echo $detail->jumlah_jam; ?>" /></td>
		  </tr>
		<tr>
		<td>Upah/Jam</td>
		<td>
		<input class="form-control input-md" required size="40" type="text" readonly placeholder="" name="upah" value="Rp. <?php echo number_format($detail->upah,0,",","."); ?>" /></td> 
		</tr>
		<tr>
        <td>Overtime</td>
        <td>
			  <input class="form-control input-md" required size="40" readonly type="text" placeholder="" name="overtime" value="<?php echo $detail->overtime; ?>" /></td>
		</tr>
		<tr>
        <td>Upah Overtime</td>
        <td>
			  <input class="form-control" required size="40" readonly type="text" placeholder="NIK" name="upah_overtime" value="Rp. <?php echo number_format($detail->upah_overtime,0,",","."); ?>" /></td>
		</tr>
		<tr>
        <td>Potongan</td>
        <td>
			  <input class="form-control input-md" required size="40" readonly type="text" placeholder="" name="potongan" value="<?php echo $detail->potongan; ?>" /></td>
		</tr>
				 <tr>
        <td>Total Gaji</td>
        <td>
			  <input class="form-control input-md" required size="40" readonly type="text" placeholder="" name="total_gaji" value="Rp. <?php echo number_format($detail->total_gaji,0,",","."); ?>" /></td>
		  </tr>
		<tr>  
        <td></td>
        <td>
		<span><a href="<?= base_url() ?>pemilik/c_penggajian/"><button class="input btn-primary" type="button" >OK</button></a></span>
		</td> 
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
