<?php
$koneksi=mysqli_connect("localhost","root","","lat_dbase");

	if (! $koneksi){
		die("Gagal koneksi mysql_error());
	}
	echo "Koneksi Berhasil\n";
	$sql ='CREATE Database artikel_db';
	$buatdb = mysql_query( $koneksi,$sql );
	if(! $buatdb )
	{
		die('Database Gagal dibuat ' .mysql_error());
	}
	echo "Database artikel_db berhasil dibuat\n";
	mysqli_close($koneksi);
	?>