<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	

    <title>Pembayaran</title>
	
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

.button {
    background-color: #40546a;
    border: none;
    color: white;
    padding: 5px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
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
  		  
                <li ><a href="<?= base_url() ?>pemilik/c_menu/">Menu</a></li>
                <li><a href="<?= base_url() ?>pemilik/c_karyawan/">Karyawan</a></li>
                <li><a href="<?= base_url() ?>pemilik/c_penggajian/">Penggajian</a></li>
                <li class="active"><a href="<?= base_url() ?>pemilik/c_penghasilan/">Penghasilan</a></li>
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
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
        <div class="left-menu">
      <div align="center">
	  <br>
        <h3>PENGHASILAN</h3></div> 		  
      </div>		  
       <div align="center">
	   <form method="post" action="<?= base_url() ?>kasir/c_pembayaran/search_penghasilan/">
        
          &nbsp;&nbsp;<input type="text" name = "keyword" placeholder="Masukkan tanggal penghasilan" size="40" required>
        <input type="submit" value="lihat">
		</form>
		</div> <br>
					<table width="400" border="1" align="center">
				<thead >
					<tr >
						<th class="text-center" width="40" bgcolor="#40546a">Penghasilan</th>
					</tr>
			  </thead>
				<tbody>
					<?php
					
						//Kita akan melakukan looping sesuai dengan data yang dimiliki
						$i=1; //nantinya akan digunakan untuk pengisian Nomor
						foreach ($listPenghasilan->result() as $row) {
						
					?>	
					<tr>
						<td bgcolor="#FFFFFF" align="center">Rp. <?= number_format($row->total,0,",",".") ?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
	</table>
	
	<table align="center" border="0" width="20%">
	  <?php 
	  mysql_connect("localhost", "root", "");
		mysql_select_db("restoran");
    $query = "SELECT sum(total)as jumlah FROM pembayaran";
	$hasil = mysql_query($query);
	$data = mysql_fetch_array($hasil);
	$jml = $data['jumlah'];

	?>
	<tr><th class="text-center" width="50" bgcolor="#40546a">Total Penghasilan</th></tr>
	<tr>
	<td bgcolor="#FFFFFF" align="center" width="50" >Rp. <?php echo number_format($jml,0,",","."); ?></td>
		</tr>
		<br>
		<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<tr>
	
	</table></form>
	<br>
	
	<table align="center" border="0" width="20%">
		<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><a href="<?= base_url() ?>welcome/"><input class="button" type="button" value="cetakDetailPenghasilan"> </input></a></td>
		<tr>
	
	</table></form>
	
		
		
		</div>
</div>		
</div>
    </section>

	<footer>
			<div class="row">
					<div align="center" class="wow fadeInLeft" data-wow-delay="0.1s">
			
					<p>&copy;Copyright - Politeknik Negeri Batam 2017</p>
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
