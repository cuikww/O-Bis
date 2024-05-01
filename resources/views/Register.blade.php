<?php
    // include "services/database.php";
    // session_start();

    // $register_message = "";
    // if (isset($_SESSION["isLogin"])) {
    //     header("location: Dashboard.php");
    // }
    // if(isset($_POST["Register"]) ) {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];

    //     $hash_password = hash("sha256", $password);

    //     try {
    //         $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";
    //         if($db->query($sql)){
    //             $register_message ="Daftar akun berhasil, silahkan login";
    //         }else{
    //             $register_message = "Daftar akun gagal, silahkan coba lagi";
    //         }
    //     } catch ( mysqli_sql_exception) {
    //         $register_message="username sudah ada";
    //     }
    //     $db->close();
    // }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <h3>Daftar Akun</h3>
    <section id="main">
        <div class="header">
            <nav>
            <a href="{{ asset('img/logo.png') }}" class="logo"><img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo"></a>
                <ul class="menu">
                    <li><a href="{{ url('/') }}"><b>Home</b></a></li>
                    <li><a href="{{ url('/Login') }}" ><b>Login</b></a></li>
                    <li><a href="#" id="active"><b>Register</b></a></li> 
                </ul>
            </nav>
        </div>
    </section>
    <section class="content">        
        <h3> Daftar Akun</h3>
       
        <form action="Register.php" method="POST">
            <input type="text" placeholder="username" name="username"/>
            <input type="password" placeholder="password" name="password"/>
            <button type="submit" name ="Register"> Daftar </button>
        </form>
    </section>
</body>
</html>