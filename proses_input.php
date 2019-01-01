<html><head><title>proses data dari form</title></head>
<body>
<h1>proses simpan data</h1>
<?
$server = "localhost";
$username="admin"; 
$password="123qwe"; 
$database="coba_database"; 

mysql_connect($server, $username, $password) or die ("Koneksinya Gagal");
mysql_select_db($database) or die ("Database Tidak Ditemukan");
$nama=$_POST[nama];
$alamat=$_POST[alamat];
$tanggal_lahir=$_POST[tanggal_lahir];
$password=$_POST[password]


$input=mysql_query("INSERT INTO mahasiswa (nama, alamat, tanggal_lahir, password) VALUES ('$nama', '$alamat', '$tanggal_lahir','$password')");

if($input)
{
echo "Data berhasil disimpan";
}
else
{
echo "Data gagal disimpan";
}
?>
| <a href="index.html">OK</a>
</body></html>