<?php 

include_once 'winteresso/winteresso.php';
WIN_CONNECT_DB("localhost", "root", "", "admintest"); // local server : OS Windows

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  // filter 
  $usernamefilter = mysqli_real_escape_string($koneksi, $username);
  $passwordfilter = mysqli_real_escape_string($koneksi, $password);

  if(!empty(trim($username)) and !empty(trim($password))){ 

    // for table only username and password
    WINREAD_USERPASS("admin", "username", "usernamefilter", "password", "passwordfilter"); 

    if($connectregister){
      header("location:../login.php");
    }else{
      WIN_DIALOG("username or password wrong");
    }
  }else{
      WIN_DIALOG("no empty");
  }

}

 ?>
