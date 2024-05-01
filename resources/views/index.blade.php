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
                    <li><a href="{{ url('/') }}" id="active"><b>Home</b></a></li>
                    <li><a href="{{ url('/Login') }}" ><b>Login</b></a></li>
                    <li><a href="{{ url('/Register') }}"><b>Register</b></a></li> 
                </ul>
            </nav>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="menu-box">
                <ul>
                    <li><a href="#" id="active">Rencana Perjalanan</a></li>
                    <li><a href="#">Rute</a></li>
                    <li><a href="#">Jadwal</a></li>
                    <li><a href="#">Track Bus</a></li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>
