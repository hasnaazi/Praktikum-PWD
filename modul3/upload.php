<html>
<head>
<title>Upload file</title>
</head>
<body>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$direktori = 'image/';
$nama_foto = $_FILES['foto']['nama'];
$size_foto = $_FILES['foto']['size'];
$tipe_foto = $_FILES['foto']['type'];
$upload = $direktori.$nama_foto;
$submit = $_POST['submit'];


if($submit){
move_uploaded_file($_FILES["foto"]["tmp_name"] , $upload);
echo"<H3>File berhasil diupload</H3>
</br></br>
<img_border='0' src='$upload></br></br>
<b>Informasi File :</b></br>
Nama file : $nama_foto</br>
Ukuran file : $size_foto byte </br>
Tipe File : $tipe_foto </br>";
}else{
?>
<form method ='POST' enctype='multipart/form-data' action='upload.php'>
Upload file :<input type='file' name='foto' size='20'></br>
<input type='submit' name='submit' value='UPLOAD'>
</form>
<?php
}
?>
</body>
</html>