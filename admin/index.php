<?php
include("../connect.php");
session_start();
if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $q = "SELECT * FROM `login` WHERE `username`='$uname' AND `password`='$pass';";
    $result = $conn->query($q);
    if ($result->num_rows > 0) {
        echo "<script>location='slidercontent.php'</script>";
        $_SESSION['username'] = $uname;
    } else {
        echo "<script>alert('you have entered incorrect password')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EPITOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid login-container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="login-div">
                    <h1 class="text-center">Log In</h1><br />
                    <form method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" placeholder="Enter username" name="uname" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" placeholder="Enter Password" class="form-control" />
                        </div>
                        <div class="text-right">
                            <button type="submit" name="login" class="btn btn-info">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>