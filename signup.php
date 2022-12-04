<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();

require 'vendor/autoload.php';

include('db_connect.php');
$msg = false;

if (isset($_POST['register'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];
    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

    $query1 = "select * from user where user = '".$user_name."'";
    $result1 = mysqli_query($con, $query1);
    $query2 = "select * from user where email = '".$user_email."'";
    $result2 = mysqli_query($con, $query2);

    if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)) {
        if (mysqli_num_rows($result1) == 0) {
            if (mysqli_num_rows($result2) == 0) {
                if ($user_password == $user_re_password) {
                    $query3 = "insert into user (user, email, password, code) VALUES ('$user_name', '$user_email', '$user_password', '$verification_code')";
                    $result3 = mysqli_query($con, $query3);
                    
                    if ($result3) {
                        echo "<div style='display: none;'>";
                       
                        $mail = new PHPMailer(true);

                        try {
                            //Server settings
                            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                            $mail->isSMTP();                                            //Send using SMTP
                            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                            $mail->Username   = 'vinhthusatthu@gmail.com';                     //SMTP username
                            $mail->Password   = 'qpgsfsnbplnassml';                               //SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
                            //Recipients
                            $mail->setFrom('vinhthusatthu@gmail.com', 'Music Web');
                            $mail->addAddress($user_email);
    
                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = 'Verification Code';
                            $mail->Body    = 'Mã xác thực: <b style="font-size: 30px;">'.$verification_code.'</b>';
    
                            $mail->send();
                            echo 'Message has been sent';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                        echo "</div>";
                        header("Location: verification.php");
                    } else {
                        $msg = "Lỗi";
                    }
                } else {
                    $msg = "Mật Khẩu nhập lại chưa đúng";
                }
            } else {
                $msg = "Địa Chỉ Email đã được sử dụng";
            }
        } else {
            $msg = "Tên Người Dùng đã được sử dụng";
        }
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
    <title>Sign Up</title>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h1>Sign Up</h1>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter Your Username" required>
                    </div>
                    <div class="card">
                        <label for="email">Email</label>
                        <input type="email" name="user_email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Your Password" required>
                    </div>
                    <div class="card">
                        <label for="re-password">Re-Password</label>
                        <input type="password" name="user_re_password" placeholder="Enter Your Re-Password" required>
                    </div>
                    <input type="submit" value="Sign Up" class="submit" name="register">
                    <p>You have a account?<a href="login.php">Login</a></p>
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
            ?>
            <script>
                w3.slideshow(".slides", 1500);
            </script>
        </div>
    </header>
</body>

</html>