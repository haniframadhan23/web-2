<?php
$koneksi=mysqli_connect("localhost","root","","lat_dbase");

	if (! $koneksi){
		die("Gagal terhubung mysqli_connect_error());
	}
	echo "Koneksi Berhasil";
	$sql ="DELETE FROM tbl_mhs WHERE FirstName = 'Seliana'";
	$updatetbl1 = mysql_query( $koneksi,$sql );
	if(! $updatetbl )
	{
		die('Delete Tabel Gagal ' .mysql_error());
	}
	echo "Delete Tabel Berhasil";
	mysqli_close($koneksi);
	?>