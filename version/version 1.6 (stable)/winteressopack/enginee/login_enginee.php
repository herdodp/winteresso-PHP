<?php 
include_once "winteresso/winteresso.php";
WIN_CONNECT_DB("servername", "username", "password", "database");
session_start();
if(isset($_POST['submit'])){
  $username = $_POST['username']; // take input
  $password = $_POST['password']; // take input

  // filter input
  $usernamefilter = mysqli_real_escape_string($koneksi, $username);
  $passwordfilter = mysqli_real_escape_string($koneksi, $password);

  // for no space or blank input
  if(!empty(trim($usernamefilter)) and !empty(trim($passwordfilter))){
    WINREAD_DB("login", "connectlogin", "your_table_on_database");
    if(mysqli_num_rows($connectlogin) > 0){
    while($ambildata = mysqli_fetch_array($connectlogin)){
        $datausername = $ambildata['username']; // input table 1
        $datapassword = $ambildata['password']; // input table 2
      }

      if($username == $datausername and $password == $datapassword){
        $_SESSION['namauser'] = $datausername; // session username
        session_start();
        header("location:../index.php"); // move page after success login
      }

    }else{
      echo "No data";
    }

  }else{
    echo "No empty";
  }

}
 ?>

