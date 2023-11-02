<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <style>
        * {
            font-family: 'poppins', sans serif;
        }

        body {
            background: linear-gradient(120deg, #3383FF, #000000);
            background-size: cover;33FF36
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;

            width: 300px;
            margin: 50px auto;
            padding: -5px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgb(0,0, 0)
        }

        .bok1 {
            width: 350px;
            display: flex;
            flex-direction: column;
            padding: 0 15px 0 15px;
        }

        span {
            color: #fff;
            font-size: small;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }

        header {
            color: #ffffff;
            font-size: 30px;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;

        }

        .input-field {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 10px 0 10px 0;
           

        }   

        .input {
            height: 45px;
            width: 78%;
            border: none;
            outline: none;
            border-radius: 10px;
            color: #ffffff;
            margin-top: 7px;
            padding: 0 0 0 50px;
            background: rgba(255, 247, 247, 0.1);
        }

        ::-webkit-input-placeholder {
            color: #f8f8f8;
        }

        .sumbit {
            border: none;
            border-radius: 30px;
            font-size: 15px;
            height: 45px;
            outline: none;
            width: 100px;
            background: (255, 255, 255, 0, 7);
            cursor: pointer;
            transition: .3s;
        }

        .submit:hover {
            box-shadow: 1px 5px 7px 1px rgb(255, 255, 255);
        }

        .bottom {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            font-size: small;
            color:#f6f6f6;
            margin-top: 10px;
            
        }

        .left {
            display: flex;
            padding: 2px;
            color:#f6f6f6;
        }

        label a {
            color: #f6f6f6;
            text-decoration: none;
        }
        
    </style>
</head>

<body>
    <div class="box">
        <div class="box1">
            <div class="top-header">
                <form action="{{url('login2')}}" method="post">
                    @csrf
                    <header>Login Admin</header>
            </div>

            <div class="input-field">
                <input type="text" class="input" placeholder="username" name="username" required>

                <div class="input-field">
                    <input type="password" class="input" placeholder="password" name="password" required>

                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Login">
                </div>
                <div class="buttom">
                    <div class="left">
                        Belum Punya Akun? <a href="{{url('registrasi2')}}">Register</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
