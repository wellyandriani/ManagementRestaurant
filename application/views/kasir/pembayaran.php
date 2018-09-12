<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>TRANSAKSI</title>
	
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
table{
		border-radius:5px;
	}
	body,td,th {
	font-family: "Times New Roman";
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
					<p class="bold text-left"><h1>HALAMAN KASIR</h1></p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">&nbsp;</p>
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
			  <li><a href="<?= base_url() ?>kasir/Kasir/">Pesanan</a></li>
                <li class="active"><a href="<?= base_url() ?>kasir/c_pembayaran/">TRANSAKSI</a></li>
                <li><a href="<?= base_url() ?>login/logout/">Logout</a></li>
				
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<!-- Section: intro -->
    <section class="intro" id="intro" name="intro">
		<div class="intro-content">
		<div id="notifications"><?php echo $this->session->flashdata('msg');?> </div>
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
        <div class="left-menu">
      <div align="center">
	  <br>
        <h3>TRANSAKSI</h3></div> 		  
       <div align="center">
	   <form method="post" action="<?= base_url() ?>kasir/c_pembayaran/search_keyword/">
          <input type="text" name = "keyword" placeholder="Masukkan no_struk Transaksi" size="30" required>
        <input type="submit" value="search">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="<?= base_url() ?>kasir/c_tambahpembayaran/"><button class="glyphicon glyphicon-plus" type="button">TambahTransaksi</button></a></span>
		</form></div>
		<p>&nbsp </p>
		
					<table border="1" align="center">
				<thead >
					<tr >
						<th class="text-center" width="40" bgcolor="#40546a">No.</th>
						<th class="text-center" width="160" bgcolor="#40546a">No Struk</th>
                        <th class="text-center" width="200" bgcolor="#40546a">Id Pesanan</th>
						<th class="text-center" width="160" bgcolor="#40546a">Tagihan</th>
						<th class="text-center" width="responsive" bgcolor="#40546a">Action</th>
					</tr>
			  </thead>
				<tbody>
					<?php
						//Kita akan melakukan looping sesuai dengan data yang dimiliki
						$i=1; //nantinya akan digunakan untuk pengisian Nomor
						foreach ($listPembayaran->result() as $row) {
						
					?>	
					<tr>
						<td bgcolor="#FFFFFF" align="center"><?php echo $i++ ?></td>
						<td bgcolor="#FFFFFF" align="center"><?= $row->no_struk ?></td> 
						<td bgcolor="#FFFFFF" align="center"><?= $row->id_pesanan?></td>
						<td bgcolor="#FFFFFF" align="center">Rp. <?= number_format($row->total,0,",",".")?></td>
						<td bgcolor="#FFFFFF" align="center">
							<!-- Akan melakukan update atau delete sesuai dengan id yang diberikan ke controller -->
                            <a onclick="return konfirmasi()" href="<?= base_url() ?>kasir/c_pembayaran/deletePembayaranDb/<?= $row->no_struk ?>"> <input class="input btn-danger" type="submit" value="hapus" /></a>
							<a href="<?= base_url() ?>kasir/c_pembayaran/detailPembayaran/<?= $row->no_struk ?>"><input type="submit" class="input btn-info" value="lihatDetail" /></a>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
	</table>
		<script type="text/javascript" language="JavaScript">
		function konfirmasi(){ 
			tanya = confirm("Anda yakin akan menghapus data?");
			if(tanya==true)return true;
			else return false;
		}
		</script>
		
		</div>
</div>		
</div>
    </section>

	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Podomoro Sambal Ijo</h5>
						<p>
						 Rumah Makan Fried Chicken
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Informasi</h5>
						<ul>
							<li>Home</li>
							<li>Menu</li>
							<li>Pelayanan</li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Podomoro</h5>
						<p>
						 Rumah makan yang sangat diminati, terkenal dengan ayam sambal ijonya yang pedas dan mantap
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Open Today  9AM-10PM
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> 0856-4397-3383
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Lokasi Kami</h5>
						<p>Jalan Tiban Global, Tiban Indah, Sekupang, Kota Batam, Kepulauan Riau 29426</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Sosial Media</h5>
						<ul class="company-social">
                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div align="center" class="text-center">
					<p>&copy;Copyright - Politeknik Negeri Batam 2017</p>
					</div>
					</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					</div>
					</div>
				</div>
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
	    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="../dist/Tabullet.js"></script>
    
</body>

</html>
