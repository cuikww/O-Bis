<?php
    // include "services/database.php";
    // session_start();
    // $login_message="";
    // if (isset($_SESSION["isLogin"])) {
    //     header("location: Dashboard.php");
    // }

    // if(isset($_POST["Login"]) ) {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $hash_password = hash('sha256', $password);

    //     $sql = "SELECT * from users WHERE username='$username' AND password='$hash_password'";
    //     $result = $db->query($sql);

    //     if($result->num_rows > 0) {
    //         $data = $result->fetch_assoc();
    //         $_SESSION["username"] = $data["username"];
    //         $_SESSION["isLogin"] = true;
    //         header("location: Dashboard.php");

    //     }else{
    //         $login_message ="Login gagal, silahkan coba lagi";
    //     }

    // }
    // $db->close();

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
    <section id="main">
        <div class="header">
            <nav>
            <a href="{{ asset('img/logo.png') }}" class="logo"><img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo"></a>
                <ul class="menu">
                    <li><a href="{{ url('/') }}"><b>Home</b></a></li>
                    <li><a href="#" id="active" ><b>Login</b></a></li>
                    <li><a href="{{ url('/Register') }}"><b>Register</b></a></li> 
                </ul>
            </nav>
        </div>
    </section>
    <section class="content">        
        <h3> Masuk Akun</h3>
    
        <form action="Login.php" method="POST">
            <input type="text" placeholder="username" name="username"/>
            <input type="password" placeholder="password" name="password"/>
            <button type="submit" name ="Login"> Masuk </button>
        </form>
    </section>
</body>
</html>