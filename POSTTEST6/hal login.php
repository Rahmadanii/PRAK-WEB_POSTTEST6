<?php
session_start();
if (isset($_POST['regisSubmit'])) {
    $_SESSION['regisSubmit'] = $_POST['regisSubmit'];
    $_SESSION['regisEmail'] = $_POST['regisEmail'];
    $_SESSION['regisUsername'] = $_POST['regisUsername'];
    $_SESSION['regisBirth'] = $_POST['regisBirth'];
    $_SESSION['regisGender'] = $_POST['regisGender'];
    $_SESSION['regisPassword'] = $_POST['regisPassword'];
    $_SESSION['konfirPassword'] = $_POST['konfirPassword'];
    $_SESSION['regisReset'] = $_POST['regisReset'];
}
var_dump($_SESSION);
var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN LOGIN</title>
    <link rel="stylesheet" href="style login.css">
</head>

<body><br><br>
    <center>
        <h2>Silahkan Masukkan Data Diri Anda!!!</h2><br>
        <div class="box-hal-login">
            <form action="hal login.php" method="get">
                <label for="email">Email</label><br>
                <input type="text" name="regisEmail" id="username"><br>
                <label for="username">Username</label><br>
                <input type="text" name="regisUsername" id="username"><br>
                <label for="date of birth">Date Of Birth</label><br>
                <input type="date" name="regisBirth" id="date of birth"><br>
                <label for="gender">Gender</label><br><br>
                <input type="radio" name="regisGender" id="gender">Male
                <input type="radio" name="regisGender" id="gender">Female<br><br>
                <label for="password">Password</label><br>
                <input type="password" name="regispassword" id="username"><br>
                <label for="password">Confirm Password</label><br>
                <input type="password" name="konfirPass" id="konfirPass"><br><br>
                <input type="submit" name="regisSubmit" value="Login"> <input type="reset" name="regisReset" value="Cancel">
            </form>
        </div>
    </center>
    </div>

    <?php
    //Kodingan PHP  
    if (isset($_GET['submit']) && isset($_SESSION['regisSubmit'])) {
        if ($_GET['email'] == $_SESSION['regisEmail']) {
            if ($_GET['username'] == $_SESSION['regisUsername']) {
                if ($_GET['date of birth'] == $_SESSION['regisBirth']) {
                    if ($_GET['gender'] == $_SESSION['regisGender']) {
                        if ($_GET['password'] == $_SESSION['regisPassword']) {
                            if ($_GET['reset'] == $_SESSION['regisReset']) {
                                echo "<h1>Login Berhasil</h1>";
                            }
                        }
                    }
                }
            }
        }
    }
    ?>
</body>

</html>