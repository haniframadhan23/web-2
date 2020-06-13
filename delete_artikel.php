<?php
Include “koneksi.php”;
$articleID = $_GET[‘articleID’];
$perintah=”DELETE FROM articles WHERE articleID = \”$articleID\””;
$hasil= mysql_query ($perintah);
If($hasil){
Echo “Artikel berhasil dihapus<br>”;
}
else {
echo “Artikel Gagal dihapus”;
}
?>
