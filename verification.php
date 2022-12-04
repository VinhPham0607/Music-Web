<?php
session_start();

include('db_connect.php');
$msg = false;

if (isset($_POST['register'])) {
    $user_verify = $_POST['user_verify'];
    
    $queryy = "select * from user where code = '".$user_verify."'";
    $resultt = mysqli_query($con, $queryy);

    if (mysqli_num_rows($resultt) == 1) {
        $queryyy = mysqli_query($con, "update user set code='' where code ='".$user_verify."'");
        header("Location: login.php");
    } else {
        $msg = "Mã Xác Thực chưa đúng";
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
    <title>Verify</title>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h1>Verify</h1>
                    <div class="card">
                        <label for="verify">Verification Code</label>
                        <input type="text" name="user_verify" placeholder="Enter Your Verification Code" required>
                    </div>
                    <input type="submit" value="Verify" class="submit" name="register">
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