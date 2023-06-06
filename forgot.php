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
        <h1>Forgot Password</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control my-4" placeholder="Email address" required autofocus>
        <h2>Verify Security Question</h2>
        <select name="que" class="btn" required>
            <option selected disabled>-- Select --</option>
            <option value="What_is_your_nick_name">What is your nick name?</option>
            <option value="What_is_your_pet_name">What is your pet name?</option>
            <option value="What_is_your_favourite_song">What is your favourite song?</option>
            <option value="What_is_your_job_role">What is your job role?</option>
            <option value="What_is_your_favourite_game">What is your favourite game?</option>
        </select>
        <input type="text" id="ans" name="ans" class="form-control my-4" placeholder="Your Answer" required>

        <button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Reset Password</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        include 'db.php';
        $mail = $_POST["email"];
        $que = $_POST["que"];
        $ans = $_POST["ans"];
        $query = "select * from accounts where email = '$mail';";
        $run = mysqli_query($connect, $query);
        $count = mysqli_num_rows($run);
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($run)) {
                if ($row["security_question"] === $que && $row["security_answer"] === $ans ) {
                    header("location: reset.php?mail=$mail");
                } else {
?>
                    <script>
                        alert("Please recheck your security question and answer.");
                        window.location = history.back();
                    </script>
            <?php
                }
                
            }
        } else {
?>
            <script>
                alert("It looks like you are not a registered user.\nPlease create an account.");
                window.location = "signup.php";
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