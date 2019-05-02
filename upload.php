<html>
<head><title>Form Upload</title>
<style>
.btn{
	border: none;
	color: white;
	padding: 14px 28px;
	font-size: 16px;
	cursor: pointer;
}
.back (background-color: #ff80ab;)
.back:hover (background: #90caf9;)
</style>
</head>
<body style="background-color:#3f51b5">
<center>
<h1 style="background-color:#ffc107">UNIVERSITAS STIKUBANK <br> INFORMATION RETRIEVAL 2019</h1>

<h3>FORM UPLOAD</h3>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=upload>
</form>

<br><br><br>
<a href="index.php" button class="btn back">Kembali</a></button><br>
</center>
</body>
</html>