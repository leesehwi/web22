<?php
    header('Content-Type: text/html; charset=UTF-8');
    $host = "34.64.186.173:3306";
    $dbusername = "root";
    $dbpassword = "gs9597";
    $dbname = "sehwiweb";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account WHERE userid = '$userid' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($userid == "" && $password ==""){
        header('location:index.html');
    }

    if($row['userid'] == $userid && $row['password'] == $password){
        echo "<script>location.href='home.html'</script>";

    } else{
        echo "<script>alert('Check your Credentials')</script>";
        echo "<script>location.replace('index.html')</script>";
    }
?>