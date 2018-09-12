<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Pelayan</title>
	
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
					<p class="bold text-left">Halaman Pelayan</p>
					</div>
					
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>index.php/pemilik/c_menu/">
           
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
                <li class="active"><a href="<?= base_url() ?>index.php/pelayan/c_pasanan/">Pesanan</a></li>
                <li><a href="<?= base_url() ?>index.php/login/logout/">Logout</a></li>
				
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
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp; Pesanan</h3>
        <div class="center-menu">
        
       <div class="page">
		<?php
			foreach($pesanan->result() as $detail){		
        ?>
<form method="post" action="<?= base_url() ?>index.php/pelayan/c_pesanan/addpesananDb/">
  <table align="center" width="85%" border="0" cellspacing="0" cellpadding="5">
  
<?php
//koneksi ke mysql
mysql_connect("localhost", "root", "");
mysql_select_db("klinik");

?>

    <tbody >
      <tr>
	  
        <td>Id Karyawan</td>
        <td>
          <input class="form-control input-md" type="text" readonly id="id_karyawan" maxlength="15" name="id_karyawan" placeholder="Id Karyawan"  size="23"> </td>
		</tr>
		<tr>
        <td>Nama</td>
        <td>
		<select class="form-control input-md" name="nama_karyawan" id="nama_karyawan" onchange="changeValuedata(this.value)" >
        <option value="Tidak ada"> Pilih Dokter </option>
        <?php 
    $result = mysql_query("select * from karyawan where user='pelayan'");    
    $jsArray = "var dtKar = new Array();\n";        
    while ($row = mysql_fetch_array($result)) {    
        echo '<option value="' . $row['nama_karyawan'] . '">' . $row['nama_karyawan'] . '</option>';    
        $jsArray .= "dtKar['" . $row['nama_karyawan'] . "'] = {id_karyawan:'" . addslashes($row['id_karyawan']) . "'};\n";    
    }      
    ?>    
        </select>
		</td>
      </tr>
      <tr>
	   <tr>
        <td>Spesialis</td>
        <td> <input class="form-control input-md" type="text" readonly id="spesialis" name="spesialis" placeholder="spesialis" size="23" required> </td>
	  </tr>
        <td>Nama Pasien</td>
        <td> 
			<input placeholder="Nama Pasien" readonly value="<?php echo $detail->nama; ?>" class="form-control input-md" type="text" name="nama_pasien" size="30">
	  </tr>
      <tr>
        <td>No Medical Record</td>
        <td> <input class="form-control input-md" type="text" readonly value="<?php echo $detail->no_medicalrecord; ?>" id="no_medicalrecord" name="no_medicalrecord" placeholder="No Medical Record" size="23" required> </td>
	  </tr>
	  <tr>
        <td>Tanggal Pemeriksaan</td>
        <td> <input class="form-control input-md" type="date" name="tanggal" placeholder="Tanggal" size="50" required> </td>
      </tr>

      <tr>  
        <td>
               </td>
        <td>
         <input class="input btn-success" type="submit" value="Tambah"></td>  
      </tr> 
    </tbody>
  </table>
</form> 
<?php
			}
			?>
      <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValuedata(nama_karyawan){  
    document.getElementById('id_karyawan').value = dtKar[nama_karyawan].id_karyawan;
	document.getElementById('spesialis').value = dtKar[nama_karyawan].spesialis;	
    };  
    </script>
	      
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