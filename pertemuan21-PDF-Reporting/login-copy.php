<?php
// ================= session 
session_start();

// ======= cek cookie
if(isset($_COOKIE['login'])){
    if($_COOKIE['login'] == 'true'){
        $_SESSION['login'] = true;
    }
}

// ======= cek session
if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}
// ================= akhir session 

require 'functions.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result)== 1){
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            // set session
            $_SESSION["login"] = true;
            

            // cek remember me
            if(isset($_POST['remember'])){
                // buat cookie         
                setcookie('login', 'true', time()+ 60 );
            }
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="login-box">
        <h1>Halaman Login</h1>
        <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic; text-align: center">Username / password salah</p>
        <?php endif; ?>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </li>
                <li>
                    <label for="remember">Remember
                        me:</label>
                    <input type="checkbox" name="remember" id="remember">
                </li>
                <li>
                    <button type="submit" name="login">Login</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>