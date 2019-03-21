<head>
    <title> Penilaian captcha </title>
</head>
<body>
<p align="center"> Hasil Login <br/>
<?php
session_start();
if($_SESSION["nomorCaptcha"] !=$_POST["nilaiCaptcha"])
{
echo "username anda " .$_POST["username"];
echo "<br/>";
echo "password anda " .$_POST["password"];
echo "<br/>";
echo "kode captcha anda salah";
}
else
{
echo "username anda " .$_POST["username"];
echo "<br/>";
echo "password anda " .$_POST["password"];
echo "<br/>";
echo "kode captcha anda benar";
}
?>
</body>