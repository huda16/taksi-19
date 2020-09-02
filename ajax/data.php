<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM parkir
				WHERE
		  jeniskendaraan LIKE '%$keyword%' OR
		  jammasuk LIKE '%$keyword%' OR
		  jamkeluar LIKE '%$keyword%' OR
		  bayar LIKE '%$keyword%'
			";
$parkir = query($query);

?>

<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
	<tr>
		<th scope="col">No.</th>
		<th scope="col">Jenis Kendaraan</th>
		<th scope="col">Jam Masuk</th>
		<th scope="col">Jam Keluar</th>
		<th scope="col">Bayar</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $parkir as $row ) : ?>
	<tr>
		<td scope="row"><?= $i; ?></td>
		<td><?= $row["jeniskendaraan"]; ?></td>
		<td><?= $row["jammasuk"]; ?></td>
		<td><?= $row["jamkeluar"]; ?></td>
		<td><?= $row["bayar"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
 </table>