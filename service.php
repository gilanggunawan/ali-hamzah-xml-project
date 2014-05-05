<?php

// koneksi ke database di sistem A
$host = "localhost";
$user = "root";
$pass = "";

mysql_connect($host, $user, $pass);
mysql_select_db("logged");
// membaca username dari GET request
$user = $_GET['nama'];
// membaca password dari GET request
$pass = $_GET['pass'];
 //membaca data password user berdasar usernamenya
$query = "SELECT * FROM logged WHERE username = '$nama'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$password = $data['pass'];
 
// mencocokkan password user dari db dan dari GET request
if ($pass == $pass) $respon = "TRUE";
else $respon = "FALSE"; 
// membuat header dokumen XML
header('Content-Type: text/xml');
echo "<?xml version='1.0'?>";
 
// membuat tag data respon pada dokumen XML
echo "<data>";
echo "<response>".$respon."</response>";
echo "</data>";
?>
