<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Awal</title>
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
            background: linear-gradient(120deg, #ff0000, #000000);
            height: 100%;
            background-position: center;

            background-size: cover;

        }

        .topnav {
            overflow: hidden;
            background: linear-gradient(120deg, #ff0000, #000000);

        }

        .h5 {
            color: red;
            font-size: 30px;
            text-align: center;
            padding: 100px 0 10px 0;
            text-shadow: 3px 2px 1px black;

        }

        .topnav a:hover {
            color: rgb(6, 6, 7);
            background-color: aliceblue;
        }

        .topnav a {
            float: left;
            display: block;
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            border-bottom: 3px solid transparent;
        }

        .topnav a:hover {
            border-bottom: 3px solid rgb(255, 255, 255);
        }

        .topnav a.active {
            border-bottom: 3px solid rgb(255, 255, 255);
        }

        .topnav-right {
            float: right;
        }

        table {
            border: solid 1px;
        }

        .button {
            background-color: rgb(11, 11, 11);
            color: black;
            border: 2px solid #ffff;
        }
    </style>
</head>

<body>
    <div class="topnav">
        <a href="{{url('login1')}}">Login Masyarakat</a>
        <a href="{{url('login2')}}">Login Admin</a>
        <a href="{{url('login3')}}">Login Petugas</a>
    </div>
    <div class="h5">
        <h2>Selamat Datang di Halaman</h2>
        <h2>Awal Silahkan Login Terlebih Dahulu</h2>
        <h3>ㅤ</h3>
        <h3>ㅤ</h3>
        <h3>ㅤ</h3>
        <h3>ㅤ</h3>
        <h3>ㅤ</h3>
    </div>
</body>

</html>
