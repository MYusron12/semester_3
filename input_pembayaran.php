<?php
include('koneksi.php');
if(isset($_POST['simpan'])){
	$query_pembayaran="insert into pembayaran(id_barang,qty,harga) values
	('".$_POST['id_barang']."',
	'".$_POST['qty']."',
	'".$_POST['harga']."')";
	$proses_pembayaran=mysql_query($query_pembayaran);
if($proses_pembayaran) {
	echo 'Pembayaran Berhasil Di Input';
} else {
	echo mysql_error();
}
}

?>

<form method="POST">
	<table>
		<tr>
			<td>ID_Barang</td>
			<td><input name="id_barang" type="number"></td>
		</tr>
		<tr>
			<td>QUANTITY</td>
			<td><input name="qty" type="number"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input name="harga" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
	</table>
</form>
