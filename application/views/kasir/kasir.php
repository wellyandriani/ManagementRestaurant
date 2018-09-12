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
			  <li><a href="<?= base_url() ?>kasir/c_pesanan/">Pesanan</a></li>
                <li class="active"><a href="<?= base_url() ?>kasir/c_pembayaran/">TRANSAKSI</a></li>
                <li><a href="<?= base_url() ?>login/logout/">Logout</a></li>
				
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<div class="col-md-9">
		<div class="panel panel-default">
		 <div class="panel-body">
		 	<form class="form-horizontal" id="form_transaksi" role="form">
	      	<div class="col-md-8">
			    <!-- <div class="panel panel-default">
				  <div class="panel-body"> -->
	      		<!-- <div class="form-group">
			      <label class="control-label col-md-4" 
			      	for="tgl_transaksi">Tgl.Transaksi :</label>
			      <div class="col-md-5">
			        <input type="text" class="form-control" 
			        	name="tgl_transaksi" value="<?= date('d-m-Y') ?>" 
			        	readonly="readonly">
			      </div>
			    </div> -->
			    <div class="form-group">
			      <label class="control-label col-md-3" 
			      	for="id_menu">Id menu :</label>
			      <div class="col-md-5">
			        <input list="list_menu" class="form-control reset" 
			        	placeholder="Isi id..." name="id_menu" id="id_menu" 
			        	autocomplete="off" onchange="showBarang(this.value)">
	                  <datalist id="list_barang">
	                  	<?php foreach ($barang as $barang): ?>
	                  		<option value="<?= $barang->id_barang ?>"><?= $barang->nama_barang ?></option>
	                  	<?php endforeach ?>
	                  </datalist>
			      </div>
			      <div class="col-md-1">
			      	<a href="javascript:;" class="btn btn-primary" 
			      		data-toggle="modal" 
			      		data-target="#modal-cari-barang">
			      		<i class="fa fa-search"></i></a>
		          </div>
			    </div>
			    <div id="barang">
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="nama_barang">Nama Barang :</label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="nama_barang" id="nama_barang" 
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="harga_barang">Harga (Rp) :</label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="harga_barang" id="harga_barang" 
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="qty">Quantity :</label>
				      <div class="col-md-4">
				        <input type="number" class="form-control reset" 
				        	autocomplete="off" onchange="subTotal(this.value)" 
				        	onkeyup="subTotal(this.value)" id="qty" min="0" 
				        	name="qty" placeholder="Isi qty...">
				      </div>
				    </div>
			    </div><!-- end id barang -->
			    <div class="form-group">
			      <label class="control-label col-md-3" 
			      	for="sub_total">Sub-Total (Rp):</label>
			      <div class="col-md-8">
			        <input type="text" class="form-control reset" 
			        	name="sub_total" id="sub_total" 
			        	readonly="readonly">
			      </div>
			    </div>
			    <div class="form-group">
			    	<div class="col-md-offset-3 col-md-3">
			      		<button type="button" class="btn btn-primary" 
			      		id="tambah" onclick="addbarang()">
			      		  <i class="fa fa-cart-plus"></i> Tambah</button>
			    	</div>
			    </div>
			      <!-- </div>
			    </div> --><!-- end panel-->
	      	</div><!-- end col-md-8 -->
	      	<div class="col-md-4 mb">
				<div class="col-md-12">
				  	<div class="form-group">
				      <label for="total" class="besar">Total (Rp) :</label>
				      	<input type="text" class="form-control input-lg" 
			        	name="total" id="total" placeholder="0"
			        	readonly="readonly"  value="<?= number_format( 
                    	$this->cart->total(), 0 , '' , '.' ); ?>">
				    </div>
				    <div class="form-group">
				      <label for="bayar" class="besar">Bayar (Rp) :</label>
				        <input type="text" class="form-control input-lg uang" 
				        	name="bayar" placeholder="0" autocomplete="off"
				        	id="bayar" onkeyup="showKembali(this.value)">
				    </div>
				    <div class="form-group">
				      <label for="kembali" class="besar">Kembali (Rp) :</label>
				      	<input type="text" class="form-control input-lg" 
			        	name="kembali" id="kembali" placeholder="0"
			        	readonly="readonly">
				    </div>
				</div>
	      	</div><!-- end col-md-4 -->
	      	</form>

	      	<table id="table_transaksi" class="table table-striped 
	      		table-bordered">
				<thead>
				 	<tr>
					   	<th>No</th>
					   	<th>Id Barang</th>
					   	<th>Nama Barang</th>
					   	<th>Harga</th>
					   	<th>Quantity</th>
					   	<th>Sub-Total</th>
					   	<th>Aksi</th>
				 	</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<div class="col-md-offset-8" style="margin-top:20px">
				<button type="button" class="btn btn-primary btn-lg" 
				id="selesai" disabled="disabled" 
				onclick="alert('Belum ada action untuk save pejualan')">
				Selesai <i class="fa fa-angle-double-right"></i></button>
			</div>
	      </div>
	    </div>
	</div><!-- end col-md-9 -->
	<div class="col-md-12" id="footer">
		<small>Copyright <?= date('Y') ?>, All Right Reserved.</small>
	</div>

	<!-- Modal selesai -->
  <div class="modal fade" id="modal-cari-barang" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal cari barang dengan AJAX</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
          	<div class="form-group has-primary has-feedback">
            	<input type="text" class="form-control input-lg" placeholder="Search for...">
            	<span class="glyphicon glyphicon-search form-control-feedback"></span>
          	</div>
          	<table class="table">
          		<thead>
          			<tr>
          				<th>asd</th>
          				<th>asd</th>
          				<th>asd</th>
          				<th>asd</th>
          				<th>asd</th>
          				<th>asd</th>
          			</tr>
          		</thead>
          	</table>
		  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        </div>
      </div>
      
    </div>
  </div>

	<script type="text/javascript">

	function showBarang(str) 
	{

	    if (str == "") {
	        $('#nama_barang').val('');
	        $('#harga_barang').val('');
	        $('#qty').val('');
	        $('#sub_total').val('');
	        $('#reset').hide();
	        return;
	    } else { 
	      if (window.XMLHttpRequest) {
	          // code for IE7+, Firefox, Chrome, Opera, Safari
	           xmlhttp = new XMLHttpRequest();
	      } else {
	          // code for IE6, IE5
	          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	      }
	      xmlhttp.onreadystatechange = function() {
	           if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	              document.getElementById("barang").innerHTML = 
	              xmlhttp.responseText;
	          }
	      }
	      xmlhttp.open("GET", "<?= base_url(
	        'kasir/getbarang') ?>/"+str,true);
	      xmlhttp.send();
	    }
	}

	function subTotal(qty)
	{

		var harga = $('#harga_barang').val().replace(".", "").replace(".", "");

		$('#sub_total').val(convertToRupiah(harga*qty));
	}

	function convertToRupiah(angka)
	{

	    var rupiah = '';    
	    var angkarev = angka.toString().split('').reverse().join('');
	    
	    for(var i = 0; i < angkarev.length; i++) 
	      if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
	    
	    return rupiah.split('',rupiah.length-1).reverse().join('');
	
	}

	var table;
    $(document).ready(function() {

      showKembali($('#bayar').val());

      table = $('#table_transaksi').DataTable({ 
        paging: false,
        "info": false,
        "searching": false,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' 
        // server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?= site_url('kasir/ajax_list_transaksi')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ 0,1,2,3,4,5,6 ], //last column
          "orderable": false, //set not orderable
        },
        ],

      });
    });

    function reload_table()
    {

      table.ajax.reload(null,false); //reload datatable ajax 
    
    }

    function addbarang()
    {
        var id_barang = $('#id_barang').val();
        var qty = $('#qty').val();
        if (id_barang == '') {
          $('#id_barang').focus();
        }else if(qty == ''){
          $('#qty').focus();
        }else{
       // ajax adding data to database
          $.ajax({
            url : "<?= site_url('kasir/addbarang')?>",
            type: "POST",
            data: $('#form_transaksi').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //reload ajax table
               reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding data');
            }
        });

          showTotal();
          showKembali($('#bayar').val());
          //mereset semua value setelah btn tambah ditekan
          $('.reset').val('');
        };
    }

    function deletebarang(id,sub_total)
    {
        // ajax delete data to database
          $.ajax({
            url : "<?= site_url('kasir/deletebarang')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

          var ttl = $('#total').val().replace(".", "");

          $('#total').val(convertToRupiah(ttl-sub_total));

          showKembali($('#bayar').val());
    }

    function showTotal()
    {

    	var total = $('#total').val().replace(".", "").replace(".", "");

    	var sub_total = $('#sub_total').val().replace(".", "").replace(".", "");

    	$('#total').val(convertToRupiah((Number(total)+Number(sub_total))));

  	}

  	//maskMoney
	$('.uang').maskMoney({
		thousands:'.', 
		decimal:',', 
		precision:0
	});

	function showKembali(str)
  	{
	    var total = $('#total').val().replace(".", "").replace(".", "");
	    var bayar = str.replace(".", "").replace(".", "");
	    var kembali = bayar-total;

	    $('#kembali').val(convertToRupiah(kembali));

	    if (kembali >= 0) {
	      $('#selesai').removeAttr("disabled");
	    }else{
	      $('#selesai').attr("disabled","disabled");
	    };

	    if (total == '0') {
	      $('#selesai').attr("disabled","disabled");
	    };
  	}

	</script>
</body>
</html>