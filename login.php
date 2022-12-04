<?php
session_start();

include('db_connect.php');
$msg = false;

if (isset($_POST['register'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    
    $query = "select * from user where user = '".$user_name."' AND password = '".$user_password."'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        if (empty($row['code'])) {
            header("Location: welcome.php");
        } else {
            $msg = "Tài Khoản chưa được xác thực";
        }
    } else {
        $msg = "Tài Khoản hoặc Mật Khẩu chưa đúng";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/1982px-Spotify_icon.svg.png">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <title>Login</title>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h1>Login</h1>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter Your Username" required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Your Password" required>
                    </div>
                    <input type="submit" value="Login" class="submit" name="register">
                    <div class="check">
                        <input type="checkbox" name="" id="" style="width: 15px; height: 15px"><span>Remember Me</span>
                    </div>
                    <p>Don't have a account yet?<a href="signup.php">Sign Up</a></p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img class="slides" src="img/EDM.png" width="85%">
            <img class="slides" src="img/R&B.png" width="85%">
            <img class="slides" src="img/Pop.png" width="85%">
            <img class="slides" src="img/Country.png" width="85%">
            <img class="slides" src="img/Rock.png" width="85%">
            <!-- <h3>Incorrect Password</h3> -->
            <?php
            echo ('<h3>'.$msg.'</h3>');
            // echo ("<h3 class=\"vinh\">$msg</h3>");
            ?>
            <script>
                w3.slideshow(".slides", 1500);
            </script>
        </div>
    </header>
</body>

</html>