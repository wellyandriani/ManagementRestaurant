<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pendaftaran</title>
	
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
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
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
		<div id="notifications"><?php echo $this->session->flashdata('msg');?> </div>
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					
					    </div>
						
  <div class="page" align="center">
    <h3>Pemeriksaan Pasien</h3>
	
	<table border="1" align="center">
				<thead >
					<tr >
						<th class="text-center" width="40" bgcolor="#4ACCD1">No.</th>
						<th class="text-center" width="200" bgcolor="#4ACCD1">Id Karyawan</th>
                        <th class="text-center" width="190" bgcolor="#4ACCD1">Nama Pasien</th>
						<th class="text-center" width="190" bgcolor="#4ACCD1">No. Record</th>
						<th class="text-center" width="responsive" bgcolor="#4ACCD1">Action</th>
					</tr>
			  </thead>
				<tbody>
					<?php
					
						//Kita akan melakukan looping sesuai dengan data yang dimiliki
						$i=1; //nantinya akan digunakan untuk pengisian Nomor
						foreach ($listPendaftaran->result() as $row) {
						
					?>	
					<tr>
						<td bgcolor="#FFFFFF" align="center"><?php echo $i++ ?></td>
						<td bgcolor="#FFFFFF" align="center"><?= $row->id_karyawan?></td> 
						<td bgcolor="#FFFFFF" align="center"><?= $row->nama_pasien?></td>
                        <td bgcolor="#FFFFFF" align="center"><?= $row->no_medicalrecord?></td>
						<td bgcolor="#FFFFFF" align="center">
							<!-- Akan melakukan update atau delete sesuai dengan id yang diberikan ke controller -->
                            <a onclick="return konfirmasi()" href="<?= base_url() ?>perawat/c_pendaftaran/deletePendaftaranDb/<?= $row->no_medicalrecord ?>"> <input class="input btn-danger" type="submit" value="hapus" /></a>	
						<a href="<?= base_url() ?>perawat/c_pendaftaran/detailPendaftaran/<?= $row->no_medicalrecord ?>"><input type="submit" class="input btn-info" value="lihatDetail" /></a>
						</td>

					</tr>
					<?php
						}
					?>
				</tbody>
	</table>
  </div>
  <script> $('#notifications').slideDown('slow').delay(3000).slideUp('slow'); </script>
	<script type="text/javascript" language="JavaScript">
		function konfirmasi(){ 
			tanya = confirm("Anda yakin akan menghapus data?");
			if(tanya==true)return true;
			else return false;
		}
		</script>
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
    <script type="text/javascript" src="<?= base_url() ?>js/table-populator.js"></script>
</body>

</html>
