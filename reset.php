<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title> FITNESS ELITE</title>
    <link href="img/logo.jpg.jpg" rel="icon">

    <!--font Awesome CSS -->
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" rel="stylesheet">
    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:900|Fjalla+One|Lato|Merriweather|Ultra" rel="stylesheet">

    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/signin.css">


</head>


<body class="text-center">

    <!--  NAVBAR -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <h2><img alt="Fitness Elite" class="navbar-brand" src="img/logo.jpg.jpg"><i><strong class="logo"> FITNESS ELITE</strong></i></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

            </ul>
            <form action="login.php">
                <button class="btn btn-outline-success my-2 mx-2 px-5 my-sm-0" type="submit">Login</button>
            </form>
            <form action="signup.php">
                <button class="btn btn-outline-primary my-2 mx-2 px-5 my-sm-0" type="submit">Signup</button>
            </form>
        </div>
    </nav>


    <form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h1>Reset Password</h1>
        <input type="password" id="password" name="password" class="form-control my-4" placeholder="Password" required autofocus>
        <input type="password" id="Vpassword" name="vpassword" class="form-control my-4" placeholder="Confirm Password" required>
        <input type="email" name="mail" value="<?php echo $_GET["mail"];?>" hidden>
        <button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Reset</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        include 'db.php';
        $pass = $_POST["password"];
        $cpass = $_POST["vpassword"];
        $password = password_hash($pass, PASSWORD_DEFAULT);
        $email = $_POST["mail"];
        if ($pass === $cpass) {
            $query = "UPDATE accounts SET password = '$password' WHERE email = '$email';";
            $run = mysqli_query($connect, $query);
            if ($run) {
    ?>
                <script>
                    alert("Password Updated Successfully.\nPlease Login.");
                    window.location = "login.php";
                </script>
            <?php
            } else {
?>
                <script>
                    alert("oops! Something went wrong. Try Again Later.");
                    window.location = history.back();
                </script>
            <?php
            }
        } else {
?>
            <script>
                alert("Password and confirm password dosen't match.\nPlease retry.");
                window.location = history.back();
            </script>
    <?php
        }
    }

?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>