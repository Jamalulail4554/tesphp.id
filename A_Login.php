<?php
session_start();
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "admin";
    $password = "admin";

    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['login_user'] = $username;
        header("location: B_Welcome.php");
    } else {
        $error = "Login Berhasil";
        $error = "Username/Password Tidak Sesuai";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post" action="">
            <div class="textbox">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="textbox">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <input type="submit" class="btn" value="Login">
            <span><echo $error; ?></span>
        </form>
    </div>
</body>
</html>

<style>
    body {
    margin: 0;
    padding: 0;
    background: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
}

.login-box {
    width: 300px;
    padding: 40px;
    position: absolute;
    background: #fff;
    text-align: center;
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
}

.login-box h2 {
    margin: 0 0 20px;
    padding: 0;
    color: #333;
}

.textbox {
    position: relative;
    margin-bottom: 30px;
}

.textbox input {
    width: 100%;
    padding: 10px;
    background: #f2f2f2;
    border: none;
    outline: none;
}

.btn {
    width: 100%;
    margin: 0 0 20px;
    background: #333;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 15px;
    color: #fff;
}

.btn:hover {
    background: #555;
}
</style>