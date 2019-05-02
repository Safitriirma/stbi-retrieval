<?php
//membuat koneksi ke database
	$host='localhost';
	$user='root';
	$password='';
	$database='dbuts';
	
	$konek_db=mysqli_connect($host,$user,$password,$database);
?>
<html>
<title>Tokenisasi</title>
<style>
.btn{
	border: none;
	color: white;
	padding: 14px 28px;
	font-size: 16px;
	cursor: pointer;
}
.upload{background-color:#6666ff;}
.upload:hover {background: #b3b3ff;}

.home {background-color: #6666ff;}
.home:hover {background: #b3b3ff;}

.kosong{background-color: #ff4d4d;}
.kosong:hover {background: #ff0000;}
</style>

<body style="background-color:#3f51b5">
<center>
<h1 style="background-color:#ffc107">UNIVERSITAS STIKUBANK SEMARANG<br> INFORMATION RETRIEVAL 2019</h1>
<br>
<input type="button" value="Upload File PDF" onClick="window.open('upload.php')" button class="btn upload"> </button>
<input type="button" value="Home" onClick="window.open('index.php')" button class="btn home"> </button><br><br>

<center>
<h3>HASIL TOKENISASI DAN STEMMING</h3><br>

<!-- //////////Script untuk membuat tabel////////// -->
<table border='1' width='800'>
<tr>
	<th>Nama File</th>
	<th>Tokenisasi</th>
	<th>Token Stem</th>
</tr>

<?php
//Perintah untuk menampilkan data
$queri="Select * From dokumen" ; //menampilkan SEMUA
$hasil=mysqli_query($konek_db, $queri);  //fungsi untuk SQL

//perintah untuk membaca dan mengambil data dalam bentuk array
while ($data=mysqli_fetch_array($hasil)){
echo"
	<tr>
	<td>".$data['nama_file']."</td>
	<td>".$data['token']."</td>
	<td>".$data['tokenstem']."</td>
	</tr>
	";
}
?>
</table>
</center>
</body>
</html>
	