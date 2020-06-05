<?php
$koneksi=mysqli_connect("localhost","root","","lat_dbase");

	if (! $koneksi){
		die("Gagal terhubung mysqli_connect_error());
	}
	echo "Koneksi Berhasil";
	$sql ="UPDATE tbl_mhs set Age='30' WHERE FirstName = 'Seliana' AND lastName = 'seli'";
	$updatetbl = mysql_query( $koneksi,$sql );
	if(! $updatetbl1 )
	{
		die('Update Tabel Gagal ' .mysql_error());
	}
	echo "Update Tabel Berhasil";
	mysqli_close($koneksi);
	?>