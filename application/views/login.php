<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Managemen Restoran</title>
	
    <link href="http://localhost/ws/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/ws/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="http://localhost/ws/stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="http://localhost/ws/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="http://localhost/ws/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="http://localhost/ws/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="http://localhost/ws/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="http://localhost/ws/css/animate.css" rel="stylesheet" />
    <link href="http://localhost/ws/css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="http://localhost/ws/img/photo/ta.png" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="http://localhost/ws/color/default.css" rel="stylesheet">
	<style type="text/css">
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
    #page-top #wrapper .navbar.navbar-custom.navbar-fixed-top .container.navigation .navbar-header.page-scroll .navbar-brand marquee {
	color: #999999;
}
    </style>
</head>

<body id="page-top" class="body" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
				  <div class="col-sm-6 col-md-6">
					<p class="bold text-left"><h1>SISTEM MANAJEMEN RESTORAN</h1></p>
					</div>
					
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">
				<marquee>Silahkan login sebagai pengguna aplikasi !</marquee>
				<br>
                </a>
            </div>
			<br>
			<br>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
			  <?php echo validation_errors(); ?> 
			  
				<?php echo form_open("index.php/login/cek_login"); ?>
                <input type="teks" name="id_karyawan" placeholder="Username" required></input>
                <input type="password" name="password" placeholder="Password" required></input>
                <input type="submit" value="Login">
                <?php echo form_close(); ?>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<br>
			<br>
	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra"> <br>Podomoro Sambal Ijo</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Jalan Tiban Global, Tiban Indah, Sekupang, Kota Batam, Kepulauan Riau 29426<br></h4>
					<h6>Phone:0856-4397-3383</h6>
					</div>

						<ul class="lead-list">
							<li><span class="fa fa-check fa-2x icon-success"></span> <h6><span class="list"><strong>Waiter</strong><br/>Melayani pembeli, mengelola pesanan</span></h6></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <h6><span class="list"><strong>Chef</strong><br/>Menyiapkan pesanan</span></h6></li>
							<li><span class="fa fa-check fa-2x icon-success"></span><h6> <span class="list"><strong>Chasier</strong><br/>Mengelola pembayaran</span></h6></li>
						</ul>


					</div>
					<div class="col-lg-6">
						<div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<img src="http://localhost/ws/img/dummy/o.png" class="img-responsive" alt="" />
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->
	

	

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
    <script src="http://localhost/ws/js/jquery.min.js"></script>	 
    <script src="http://localhost/ws/js/bootstrap.min.js"></script>
    <script src="http://localhost/ws/js/jquery.easing.min.js"></script>
	<script src="http://localhost/ws/js/wow.min.js"></script>
	<script src="http://localhost/ws/js/jquery.scrollTo.js"></script>
	<script src="http://localhost/ws/js/jquery.appear.js"></script>
	<script src="http://localhost/ws/js/stellar.js"></script>
	<script src="http://localhost/ws/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="http://localhost/ws/js/owl.carousel.min.js"></script>
	<script src="http://localhost/ws/js/nivo-lightbox.min.js"></script>
    <script src="http://localhost/ws/js/custom.js"></script>
    
</body>

</html>
