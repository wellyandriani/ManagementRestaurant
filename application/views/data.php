<html>
<body>
<br>
<h1 align="center">Penghasilan Klinik Griya Medica</h1>
<table border="0" align="center" width="85%" id="table">
	<tr >
						<th align="center" width="60" height="25" bgcolor="#4ACCD1">No</th>
						<th align="center" width="350" height="25" bgcolor="#4ACCD1">Penghasilan</th>
                        <th align="center" width="260" height="25" bgcolor="#4ACCD1">Tanggal</th>
  </tr>					
<?php
$i=1;
foreach($data->result() as $row) 
{
	?>
	<tr>
	<td bgcolor="#FFFFFF" align="center" height="15"><?php echo $i++ ?></td>
	<td bgcolor="#FFFFFF" align="center" height="15">Rp. <?= number_format($row->total,0,",",".") ?></td> 
    <td bgcolor="#FFFFFF" align="center" height="15"><?= $row->tanggal_out ?></td> 
	</tr>
	<?php
}
?>

</table>

</body>
</table>