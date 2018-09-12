<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penggajian</title>
	
	
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
                <li><a href="<?= base_url() ?>pemilik/c_karyawan/">Karyawan</a></li>
                <li class="active"><a href="<?= base_url() ?>pemilik/c_penggajian/">Penggajian</a></li>
                <li><a href="<?= base_url() ?>pemilik/c_penghasilan/">Penghasilan</a></li>
                <li><a href="<?= base_url() ?>login/logout/">Logout</a></li></ul>
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
					
                    <h3>&nbsp;&nbsp;&nbsp;&nbsp; Tambah Data Penggajian</h3>
        <div class="center-menu">
        
       <div class="page">
    
<form method="post" action="<?= base_url() ?>pemilik/c_penggajian/addpenggajianDb/">
  <table align="center" width="85%" border="0" cellspacing="0" cellpadding="5">
  
<?php
//koneksi ke mysql
mysql_connect("localhost", "root", "");
mysql_select_db("restoran");

$sql = mysql_query("SELECT * FROM karyawan");
?>

    <tbody >
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
        <td>Jabatan</td>
        <td> <input class="form-control input-md" type="text" id="user" name="jabatan" placeholder="user" size="40" readonly required> </td> </td>
      </tr>
      <tr>
        <td>Jumlah Jam Kerja</td>
        <td> <input class="form-control input-md" type="number" id="jumlah_jam" name="jumlah_jam" placeholder="Jumlah Jam" size="50" onkeyup="sum();" required></td>
      </tr>
	  <tr>
        <td>Upah/Jam</td>
        <td> <input class="form-control input-md" type="number" id="upah" name="upah" placeholder="upah" size="50" onkeyup="sum();" required></td>
      </tr>
	  <tr>
        <td>Overtime</td>
        <td><input class="form-control input-md" type="number" id="overtime" name="overtime" placeholder="Overtime" size="50" onkeyup="sum();" required></td>
      </tr>
       <tr>
        <td>Upah Overtime</td>
        <td><input class="form-control input-md" type="number" id="upah_overtime" name="upah_overtime" placeholder="Upah Overtime" onkeyup="sum();" size="50" required></td>
      </tr>
	   <tr>
        <td>Potongan</td>
        <td> <input class="form-control input-md" type="number" id="potongan" name="potongan" placeholder="potongan" onkeyup="sum();" value="0" size="50" required></td>
      </tr>
	   <tr>
        <td>Total Gaji</td>
        <td> <input readonly class="form-control input-md" type="number" id="total_gaji" name="total_gaji" placeholder="Total Gaji" size="50" required></td>
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
 </table>
      <script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(id_karyawan){  
    document.getElementById('nama_karyawan').value = dtKar[id_karyawan].nama_karyawan;  
    document.getElementById('user').value = dtKar[id_karyawan].user;  
    };  
    </script>
    <script>
function sum() {
      var txtFirstNumberValue = document.getElementById('jumlah_jam').value;
      var txtSecondNumberValue = document.getElementById('upah').value;
	  var txtThirdNumberValue = document.getElementById('overtime').value;
	  var txtForthNumberValue = document.getElementById('upah_overtime').value;
	  var txtFivthNumberValue = document.getElementById('potongan').value;
      var result = (parseInt(txtFirstNumberValue)*parseInt(txtSecondNumberValue)) + (parseInt(txtThirdNumberValue)*parseInt(txtForthNumberValue)) - parseInt(txtFivthNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total_gaji').value = result;
      }
}
</script>
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
