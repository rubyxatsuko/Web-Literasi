<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

// disini kalau untuk kita ingin menyambungkan ke database bisa menggunakan include atau require

require "db.php";

// ini kita mulai masuk ke dalam post yang dimana kita akan mengecek data yang kita masukan sesuai atau tidak dengan yang di database

// untuk $_POST didalam itu disesuaikan dengan name button nya 

session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = $conn->query("SELECT * FROM users WHERE email = '$username' AND password = '$password'");

    if ($login->num_rows > 0) {
        echo "<script>alert('Login berhasil')
        location.replace('views/Home/index.php');</script>";
        $_SESSION['admin'] = $login->fetch_assoc();
    } else {
        echo "<script>alert('Login gagal'), alert('Silahkan masukan username dan password yang sesuai')
        location.replace('');</script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'Kanit-Regular';
            src: url('assets/fonts/Kanit-Regular.ttf');
        }

        * {
            margin: 0;
            padding: 0;
            font-family: 'Kanit-Regular';
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url(assets/img/bg.jpg)no-repeat;
            background-position: center;
            background-size: cover;
        }
        .card{
            background-color: rgba(255, 255, 255, 0.5);
        }

        .card-header {
            background-color: orange ;
        }
        .form {
            color: white;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            justify-content: center;
            align-items: center;
        }

        h2 {
            font-size: 2em;
            color: white;
            text-align: center;
           
        }

        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 10px 18px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }


        button {
            background-color: orange;
            color: white;
            padding: 14px 20px;
            margin: 5px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .container {
            padding: 16px;
            
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-lg-5">
                    <div class="card bg-transparent">
                        <div class="card-header  text-white text-center">
                            <h2>Form Login</h2>
                        </div>
                        <form action="" method="post">
                            <div class="card-body">
                                <label for="name" class="form-label text-white">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" required><br>
                                <label for="password" class="form-label text-white">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password" required>
                                <button type="submit" name="login" class="button ">Login</button>
                                <div class="form-check text-white text-start mt-2 ">
                                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                                    <label class="form-check-label text-white" for="flexCheckDefault">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="container">
                                    <button type="button" class="cancelbtn">Cancel</button>
                                    <span class="psw text-white">Don't have a account? <a href="#">Register</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>