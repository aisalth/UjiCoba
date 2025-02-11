<?php
include "koneksi.php";
session_start();

// if(isset($_SESSION['username'])){
//     echo "Selamat datang ". $_SESSION['username'];
//     echo "<br>";
//     echo "<a href = 'logout.php'>Logout</a>";
// } else{
//     echo "Anda Belum Login";
//     echo "<br>";
//     echo "<a href='login.php'>Login</a>";
// }

if(!isset($_SESSION['username'])){
    header("location: login.php");
}

echo "Selamat Datang, ". $_SESSION['username']."!";
echo "<a href = 'logout.php'>Logout</a>";


// if(isset($_SESSION['username'])){
//     echo "Selamat Datang, ". $_SESSION['username']. "!";
//     echo "<br>";
//     echo "<a href=logout.php>Logout</a>";
// } else{
//     echo "Anda belum login";
//     echo "<br>";
//     echo "<a href=login.php>Login</a>";
// }

?>