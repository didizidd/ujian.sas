<?php
include "koneksi.php";
if(isset ($_POST["submid"])){

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

$query = "INSERT INTO tb_users (username,email,password) VALUES ('$username','$email','$password')";
$eksekusi = mysqli_query ($koneksi,$query);

}
?>
<center>
<form action="daftar.php" method="POST">
    <label for="">username</label>
    <input type="text" name="username" placeholder="username"><br><br>
    <label for="">email</label>
    <input type="email" name="email" placeholder="email"><br><br>
    <label for="">password</label>
    <input type="password" name="password" placeholder="password"><br><br>

    <button type="submid" name="submid">daftar</button>
</form>
</center>