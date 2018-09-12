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
					<p class="bold text-left"><h1>HALAMAN KASIR</h1></p>
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
			  <li><a href="<?= base_url() ?>kasir/c_pesanan/">Pesanan</a></li>
                <li class="active"><a href="<?= base_url() ?>kasir/c_pembayaran/">Transaksi</a></li>
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
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp; Tambah Data Transaksi</h3>
        <div class="center-menu">
        
       <div class="page">
    
<form method="post" action="<?= base_url() ?>kasir/c_pembayaran/addpembayaranDb/">
  <table align="center" width="85%" border="0" cellspacing="0" cellpadding="5">
  
<?php
//koneksi ke mysql
mysql_connect("localhost", "root", "");
mysql_select_db("restoran");

$query = "SELECT max(no_struk) as maxKode FROM pembayaran";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$kdMax = $data['maxKode'];

$noUrut = (int) substr($kdMax, 2, 6);
$noUrut++;
$newKode = "Tr". sprintf("%06s", $noUrut);

?>

    <tbody >
	<tr>
        <td>No Struk</td>
        <td>
          <input class="form-control input-md" readonly type="text" name="no_struk" placeholder="no_struk" value="<?php echo $newKode; ?>" size="23"> </td>
		</tr>
<tr>
        <td>Id Karyawan</td>
        <td>
          <select class="form-control input-md" name="id_karyawan" id="id_karyawan" onchange="changeValue(this.value)" >
        <option value="Tidak ada">-- Pilih Karyawan --</option>
        <?php 
    $result = mysql_query("select * from karyawan");    
    $jsArray = "var dtKar = new Array();\n";        
    while ($row = mysql_fetch_array($result)) {    
        echo '<option value="' . $row['id_karyawan'] . '">' . $row['id_karyawan'] . '</option>';    
        $jsArray .= "dtKar['" . $row['id_karyawan'] . "'] = {nama_karyawan:'" . addslashes($row['nama_karyawan']) . "',user:'".addslashes($row['user'])."'};\n";    
    }      
    ?>    
        </select>
			</td>
		</tr>
		<tr>
        <td>Nama</td>
        <td> <input class="form-control input-md" type="text" id="nama_karyawan" name="nama_karyawan" placeholder="Nama" size="40"  readonly required> </td>
      </tr>
		
		<tr>
        <td>Id Pesanan</td>
        <td>
		<select class="form-control input-md" name="no_meja" id="no_meja" onchange="changeValue(this.value)" >
        <option value="Tidak ada"> Pilih Id Pesanan</option>
        <?php 
    $result = mysql_query("select * from pesanan");    
    $jsArray = "var dtPas = new Array();\n";        
    while ($row = mysql_fetch_array($result)) {    
        echo '<option value="' . $row['id_pesanan'] . '">' . $row['nama'] . '</option>';    
        $jsArray .= "dtPas['" . $row['id_pesanan'] . "'] = {no_meja:'" . addslashes($row['no_meja']) . "',tanggal:'".addslashes($row['tanggal'])."',tagihan:'".addslashes($row['tagihan'])."'};\n";    
    }      
    ?>    
        </select>
		</td>
      </tr>
      <tr>
        <td>No_meja</td>
        <td> <input class="form-control input-md" type="text" id="no_meja" name="no_meja" placeholder="no_meja" size="50" readonly required></td>
      </tr>
	  <tr>
        <td>Tanggal</td>
        <td> <input class="form-control input-md" type="date" id="tanggal" name="tanggal" placeholder="Tanggal" readonly size="30" required></td>
      </tr>
       <tr>
        <td>Tagihan</td>
        <td> <input type="number" class="form-control input-md" name="tagihan" placeholder="tagihan" size="50" required></td>
      </tr>
	  <tr>
        <td>Jenis Pembayaran</td>
        <td> <input type="radio" name="jenis_pembayaran" value="Cash" size="25">Cash
        <input type="radio" name="jenis_pembayaran" value="Debit" size="25"> Debit
      </tr>
	   <tr>
        <td>Total Bayar</td>
        <td> <input type="number" class="form-control input-md mny" id="total" name="total" placeholder="Total Bayar" size="50" required /></td>
      </tr>
      <tr>  
        <td>
               </td>
        <td>
		<br>
          <input class="input btn-primary" type="reset" >  &nbsp;&nbsp; <input type="submit" class="input btn-success" value="Tambah"></td>  
      </tr> 
    </tbody>
	
  </table>
</form> 

	      <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(id_karyawan){  
    document.getElementById('nama_karyawan').value = dtKar[id_karyawan].nama_karyawan;  
    document.getElementById('user').value = dtKar[id_karyawan].user;  
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
					<h5>&copy;Copyright - Politeknik Negeri Batam 2017</h5>
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
