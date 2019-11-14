<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into barang(merk,harga)values
	('".$_POST['merk']."',
	 '".$_POST['harga']."')";
	 $proses_data=mysql_query($query_tambah_data);
if($proses_data){
	echo 'Tambah Data Berhasil ';
} else {
	echo mysql_error();
}
}


?>
<form method="POST" action="">
<!--- membuat dua table,  -->
<!--- table barang, tipe data varchar -->
<!--- harga, tipe data integer, paling banyak 10 -->
<!--- id nya didepan primary key, yang dibelakang  -->
<!--- membuat database namanya semester3 -->

<!--- pr membuat tabel pembayaran barang dengan 3 field id_barang, kuantity, harga . nama file input pembayaran.php-->
<!--- name harus sama dengan database -->
<!--- auto increment iputan otomatis -->

	<table>
		<tr>
			<td>Nama Barang</td>
			<td><input name="merk" type="text"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input name="harga" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
</form>
