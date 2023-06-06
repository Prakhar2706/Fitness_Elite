<?php
session_start();
$ssid = $_SESSION["session_id"];
if ($ssid) {
    $key = $_GET["key"];
    include 'db.php';
    $query = "select * from accounts where email = '$_SESSION[session_id]' and password = '$key';";
    $run = mysqli_query($connect, $query);
    $runCount = mysqli_num_rows($run);
    if ($runCount) {
        while ($rowN = mysqli_fetch_assoc($run)) {
            $user_first_name = $rowN['first_name'];
        }
?>
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
        <link href="css/footer.css" rel="stylesheet">


    </head>

    <body>

        <!--  NAVBAR -->

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php?key=<?php echo $key; ?>">
                <h2><img alt="Fitness Elite" class="navbar-brand" src="img/logo.jpg.jpg"><i><strong class="logo"> FITNESS ELITE</strong></i></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?key=<?php echo $key; ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php?key=<?php echo $key; ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php?key=<?php echo $key; ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php?key=<?php echo $key; ?>">Contact Us</a>
                    </li>

                </ul>
                <button class="btn user my-2 mx-2 my-sm-0" disabled><i class="fa fa-user" aria-hidden="true"></i> <?php echo $user_first_name; ?></button>
                <form action="logout.php">
                    <button class="btn btn-outline-danger my-2 mx-2 my-sm-0" type="submit"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</button>
                </form>
            </div>
        </nav>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?gym" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?fitness" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?fit" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div id="bmi" class="my-3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3>Calculate Your BMI</h3>
                            <form class="bmi-form">
                                <input class="form-control m-2" id="height" placeholder="Enter Height in cm.." type="number" required>
                                <input class="form-control m-2" id="weight" placeholder="Enter Weight in Kgs.." type="number" required>
                                <input class="form-control m-2" id="output" readonly placeholder="Your BMI">
                                <button class="btn btn-lg btn-primary btn-block m-2" id='bmi-btn' type="submit">Calculate BMI</button>
                                <button class="btn btn-lg btn-primary btn-block m-2" id='bmi-resetbtn' type="reset">Reset</button>

                            </form>
                        </div>
                        <div class="col m-3">
                            <img alt="BMI" src="img/bmi-pic.png">
                        </div>
                        <div class="col m-3">
                            <img src="img/bmi-chart.png" style="background: #fff; width: 50vh;" alt="bmi-chart.png">
                        </div>
                    </div>
                </div>
            </div>

        <section class="background first section">
            <div class="box-main">

                <table>
                    <tr>
                        <td><img src="img/milkha singh.jpg.jpg" alt="milkha singh photo">
                        </td>
                        <td>
                            <h2>"Hardwork, will power & dedication.
                                For a man with these qualities, sky is the limit." </h2>
                            <h2 style="float: right;">- (Milkha Singh)</h2>
                        </td>
                    </tr>
                </table>
                <br>
                <p class="ms-para">
                    ""Health and fitness of a person means the complete presence of physical, mental
                    and social well being. One can maintain his/her health and fitness in many ways
                    however needs patience, hard work and commitment towards the good lifestyle.
                    Mostof the people are much conscious towards their health and fitness however on the other
                    hand, most of the people are involved in the sedentary lifestyle and suffering many diseases and overweight.
                    Maintaining good health is not an easy procedure, it is the result of continuous efforts with full commitment.
                    It takes years to get the desired health and fitness however, once we get, it benefits us a lot.""

                </p>
            </div>
            <!-- Grid -->

            <div id="grid">
                <div class="grid-head">
                    <h1>Welcome to FITNESS ELITE !</h1>
                    <p>
                        " We are committed to provide fitness education and knowledge to both Fitness Professionals and Fitness
                        Enthusiasts.
                        For the first time in India, all about Fitness under one roof at the most competitive rates.
                        Our motto is to take fitness to the grassroot level of India were every home has a fitness expert.
                        True enjoyment comes from positively directed activity of mind and good physical exercise;both are eternally
                        united ."
                    </p>
                    <div class="container">
                        <hr />
                    </div>
                    <h4>OUR PROCESS</h4>
                </div>
                <div class="container">
                    <div class="row" id='process'>
                        <div class="col">
                            <i class="fas fa-weight fa-3x"></i>
                            <h5>Analyze Your Goal</h5>
                            <p>1st Step, is Goal Analysis</p>
                        </div>
                        <div class="col">
                            <i class="fas fa-dumbbell fa-3x"></i>
                            <h5>Work Hard On It</h5>
                            <p>Focus on Goal & Work Hard</p>
                        </div>
                        <div class="col">
                            <i class="fas fa-tachometer-alt fa-3x"></i>
                            <h5>Improve Your Performance</h5>
                            <p>Constant Practise is the Key.</p>
                        </div>
                        <div class="col">
                            <i class="fas fa-chart-line fa-3x"></i>
                            <h5>Achieve Your Destinity</h5>
                            <p>Yes, You did it.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Footer -->

        <footer class="pt-4">
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sc mx-1">
                        <i class="fab fa-snapchat"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-yt mx-1">
                        <i class="fab fa-youtube"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-yt mx-1">
                        <i class="fab fa-instagram"> </i>
                    </a>
                </li>
            </ul>

            <div class="py-2 text-center"><i class="far fa-copyright"></i> 2021 Copyright :
                <a href="#" class="text-primary"> FITNESS ELITE </a>
            </div>
        </footer>

        <!-- Bootstrap Scripts-->
        <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script crossorigin="anonymous" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- Main Script -->
        <script src='script/main.js'></script>
    </body>

    </html>
<?php
    } else {
?>
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
        <link href="css/footer.css" rel="stylesheet">


    </head>

    <body>

        <!--  NAVBAR -->

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <h2><img alt="Fitness Elite" class="navbar-brand" src="img/logo.jpg.jpg"><i><strong class="logo"> FITNESS ELITE</strong></i></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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

        <div id="carouselExampleControls" class="carousel slide m-0" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?gym" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?fitness" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?fit" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div id="bmi" class="my-3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3>Calculate Your BMI</h3>
                            <form class="bmi-form">
                                <input class="form-control m-2" id="height" placeholder="Enter Height in cm.." type="number" required>
                                <input class="form-control m-2" id="weight" placeholder="Enter Weight in Kgs.." type="number" required>
                                <input class="form-control m-2" id="output" readonly placeholder="Your BMI">
                                <button class="btn btn-lg btn-primary btn-block m-2" id='bmi-btn' type="submit">Calculate BMI</button>
                                <button class="btn btn-lg btn-primary btn-block m-2" id='bmi-resetbtn' type="reset">Reset</button>

                            </form>
                        </div>
                        <div class="col m-3">
                            <img alt="BMI" src="img/bmi-pic.png">
                        </div>
                        <div class="col m-3">
                            <img src="img/bmi-chart.png" style="background: #fff; width: 50vh;" alt="bmi-chart.png">
                        </div>
                    </div>
                </div>
            </div>

        <section class="background first section">
            <div class="box-main">

                <table>
                    <tr>
                        <td><img src="img/milkha singh.jpg.jpg" alt="milkha singh photo">
                        </td>
                        <td>
                            <h2>"Hardwork, will power & dedication.
                                For a man with these qualities, sky is the limit." </h2>
                            <h2 style="float: right;">- (Milkha Singh)</h2>
                        </td>
                    </tr>
                </table>
                <br>
                <p class="ms-para">
                    ""Health and fitness of a person means the complete presence of physical, mental
                    and social well being. One can maintain his/her health and fitness in many ways
                    however needs patience, hard work and commitment towards the good lifestyle.
                    Mostof the people are much conscious towards their health and fitness however on the other
                    hand, most of the people are involved in the sedentary lifestyle and suffering many diseases and overweight.
                    Maintaining good health is not an easy procedure, it is the result of continuous efforts with full commitment.
                    It takes years to get the desired health and fitness however, once we get, it benefits us a lot.""

                </p>
            </div>
            <!-- Grid -->

            <div id="grid">
                <div class="grid-head">
                    <h1>Welcome to FITNESS ELITE !</h1>
                    <p>
                        " We are committed to provide fitness education and knowledge to both Fitness Professionals and Fitness
                        Enthusiasts.
                        For the first time in India, all about Fitness under one roof at the most competitive rates.
                        Our motto is to take fitness to the grassroot level of India were every home has a fitness expert.
                        True enjoyment comes from positively directed activity of mind and good physical exercise;both are eternally
                        united ."
                    </p>
                    <div class="container">
                        <hr />
                    </div>
                    <h4>OUR PROCESS</h4>
                </div>
                <div class="container">
                    <div class="row" id='process'>
                        <div class="col">
                            <i class="fas fa-weight fa-3x"></i>
                            <h5>Analyze Your Goal</h5>
                            <p>1st Step, is Goal Analysis</p>
                        </div>
                        <div class="col">
                            <i class="fas fa-dumbbell fa-3x"></i>
                            <h5>Work Hard On It</h5>
                            <p>Focus on Goal & Work Hard</p>
                        </div>
                        <div class="col">
                            <i class="fas fa-tachometer-alt fa-3x"></i>
                            <h5>Improve Your Performance</h5>
                            <p>Constant Practise is the Key.</p>
                        </div>
                        <div class="col">
                            <i class="fas fa-chart-line fa-3x"></i>
                            <h5>Achieve Your Destinity</h5>
                            <p>Yes, You did it.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Footer -->

        <footer class="pt-4">
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sc mx-1">
                        <i class="fab fa-snapchat"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-yt mx-1">
                        <i class="fab fa-youtube"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-yt mx-1">
                        <i class="fab fa-instagram"> </i>
                    </a>
                </li>
            </ul>

            <div class="py-2 text-center"><i class="far fa-copyright"></i> 2021 Copyright :
                <a href="#" class="text-primary"> FITNESS ELITE </a>
            </div>
        </footer>

        <!-- Bootstrap Scripts-->
        <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script crossorigin="anonymous" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- Main Script -->
        <script src='script/main.js'></script>
    </body>

    </html>
<?php
    }

} else {
?>
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
        <link href="css/footer.css" rel="stylesheet">


    </head>

    <body>

        <!--  NAVBAR -->

        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <h2><img alt="Fitness Elite" class="navbar-brand" src="img/logo.jpg.jpg"><i><strong class="logo"> FITNESS ELITE</strong></i></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?gym" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?fitness" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1920x1080/?fit" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div id="bmi" class="my-3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3>Calculate Your BMI</h3>
                            <form class="bmi-form">
                                <input class="form-control m-2" id="height" placeholder="Enter Height in cm.." type="number" required>
                                <input class="form-control m-2" id="weight" placeholder="Enter Weight in Kgs.." type="number" required>
                                <input class="form-control m-2" id="output" readonly placeholder="Your BMI">
                                <button class="btn btn-lg btn-primary btn-block m-2" id='bmi-btn' type="submit">Calculate BMI</button>
                                <button class="btn btn-lg btn-primary btn-block m-2" id='bmi-resetbtn' type="reset">Reset</button>

                            </form>
                        </div>
                        <div class="col m-3">
                            <img alt="BMI" src="img/bmi-pic.png">
                        </div>
                        <div class="col m-3">
                            <img src="img/bmi-chart.png" style="background: #fff; width: 50vh;" alt="bmi-chart.png">
                        </div>
                    </div>
                </div>
            </div>

        <section class="background first section">
            <div class="box-main">

                <table>
                    <tr>
                        <td><img src="img/milkha singh.jpg.jpg" alt="milkha singh photo">
                        </td>
                        <td>
                            <h2>"Hardwork, will power & dedication.
                                For a man with these qualities, sky is the limit." </h2>
                            <h2 style="float: right;">- (Milkha Singh)</h2>
                        </td>
                    </tr>
                </table>
                <br>
                <p class="ms-para">
                    ""Health and fitness of a person means the complete presence of physical, mental
                    and social well being. One can maintain his/her health and fitness in many ways
                    however needs patience, hard work and commitment towards the good lifestyle.
                    Mostof the people are much conscious towards their health and fitness however on the other
                    hand, most of the people are involved in the sedentary lifestyle and suffering many diseases and overweight.
                    Maintaining good health is not an easy procedure, it is the result of continuous efforts with full commitment.
                    It takes years to get the desired health and fitness however, once we get, it benefits us a lot.""

                </p>
            </div>
            <!-- Grid -->

            <div id="grid">
                <div class="grid-head">
                    <h1>Welcome to FITNESS ELITE !</h1>
                    <p>
                        " We are committed to provide fitness education and knowledge to both Fitness Professionals and Fitness
                        Enthusiasts.
                        For the first time in India, all about Fitness under one roof at the most competitive rates.
                        Our motto is to take fitness to the grassroot level of India were every home has a fitness expert.
                        True enjoyment comes from positively directed activity of mind and good physical exercise;both are eternally
                        united ."
                    </p>
                    <div class="container">
                        <hr />
                    </div>
                    <h4>OUR PROCESS</h4>
                </div>
                <div class="container">
                    <div class="row" id='process'>
                        <div class="col">
                            <i class="fas fa-weight fa-3x"></i>
                            <h5>Analyze Your Goal</h5>
                            <p>1st Step, is Goal Analysis</p>
                        </div>
                        <div class="col">
                            <i class="fas fa-dumbbell fa-3x"></i>
                            <h5>Work Hard On It</h5>
                            <p>Focus on Goal & Work Hard</p>
                        </div>
                        <div class="col">
                            <i class="fas fa-tachometer-alt fa-3x"></i>
                            <h5>Improve Your Performance</h5>
                            <p>Constant Practise is the Key.</p>
                        </div>
                        <div class="col">
                            <i class="fas fa-chart-line fa-3x"></i>
                            <h5>Achieve Your Destinity</h5>
                            <p>Yes, You did it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->

        <footer class="pt-4">
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-sc mx-1">
                        <i class="fab fa-snapchat"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-yt mx-1">
                        <i class="fab fa-youtube"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-yt mx-1">
                        <i class="fab fa-instagram"> </i>
                    </a>
                </li>
            </ul>

            <div class="py-2 text-center"><i class="far fa-copyright"></i> 2021 Copyright :
                <a href="#" class="text-primary"> FITNESS ELITE </a>
            </div>
        </footer>

        <!-- Bootstrap Scripts-->
        <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script crossorigin="anonymous" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- Main Script -->
        <script src='script/main.js'></script>
    </body>

    </html>
<?php
}
?>