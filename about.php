<?php
session_start();
if ($_SESSION["session_id"]) {
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About Us -FITNESS ELITE</title>
        <link href="img/logo.jpg.jpg" rel="icon">

        <!-- Bootstrap and Font Awesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Exo:900|Fjalla+One|Lato|Merriweather|Ultra" rel="stylesheet">

        <!-- Main CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/about.css" rel="stylesheet">
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


        <!-- About Gym -->

        <div id="heading">
            <span>
                <h1>Our Vision</h1>
            </span>
            <p>To provide best Fitness Facilities.</p>
        </div>

        <div id="about">
            <div class="row">
                <div class="col">
                    <img alt="About Gym" src="../img/about-gym.jpg">
                </div>
                <div class="col">
                    <p>Have all your trainers create a timeline of goals for new members. Trainers should focus on setting goals
                        and timelines for expected improvements in energy, stress levels, lean mass, BMI, and health status.
                        Creating a timeline helps new members understand the steps required on the journey to be physically fit.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio labore exercitationem minus sapiente,
                        beatae expedita enim vel error sunt modi tempore voluptas ducimus vitae, impedit molestias culpa
                        voluptates? Exercitationem inventore natus autem voluptatibus, numquam pariatur quae quo nobis et
                        blanditiis?
                        You can create a branded tool that introduces to the new members the expected improvements, and the tool
                        allows trainers or coaches to show the member how much faster results will occur if a program or package
                        is purchased.</p>
                </div>
            </div>
        </div>

        <!-- Team -->
        <div id="team">
            <h1>Meet The Team</h1>
            <div class="container">
                <div class="row py-3">
                    <div class="col m-3">
                        <img alt="Founder" src="img/founder.jpg">
                        <div class="col">
                            <h3>John</h3>
                            <p>FOUNDER</p>
                        </div>
                    </div>
                    <div class="col m-3">
                        <img alt="Manager" src="img/manager.jpg">
                        <div class="col">
                            <h3>Alex</h3>
                            <p>MANAGER</p>
                        </div>
                    </div>
                    <div class="col m-3">
                        <img alt="Trainer Female" src="img/trainer-f.jpg">
                        <div class="col">
                            <h3>Maria</h3>
                            <p>HEAD TRAINER</p>
                        </div>
                    </div>
                    <div class="col m-3">
                        <img alt="Trainer Male" src="img/trainer-m.jpg">
                        <div class="col">
                            <h3>Peter</h3>
                            <p>HEAD TRAINER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trainer -->

        <div id="trainer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <h3>YOUR TRAINER</h3>
                        <h1>PAUL WILSON</h1>
                        <hr>
                        <p>An established fitness authority and one of the most sought after fitness talents, it’s no wonder Paul has been featured in all the top fitness outlets.</p>
                        <img alt="Featured" src="../img/featured.png">

                    </div>
                    <div class="col">
                        <img alt="Trainer" height="500" src="../img/trainer.png" width="500">
                    </div>
                </div>
            </div>
        </div>

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
                <a href="index.php" class="text-primary"> FITNESS ELITE </a>
            </div>
        </footer>

        <!-- Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

    </html>

    <?php
    } else {
?>
        <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About Us -FITNESS ELITE</title>
        <link href="img/logo.jpg.jpg" rel="icon">

        <!-- Bootstrap and Font Awesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Exo:900|Fjalla+One|Lato|Merriweather|Ultra" rel="stylesheet">

        <!-- Main CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/about.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
    </head>

    <body>

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


        <!-- About Gym -->

        <div id="heading">
            <span>
                <h1>Our Vision</h1>
            </span>
            <p>To provide best Fitness Facilities.</p>
        </div>

        <div id="about">
            <div class="row">
                <div class="col">
                    <img alt="About Gym" src="../img/about-gym.jpg">
                </div>
                <div class="col">
                    <p>Have all your trainers create a timeline of goals for new members. Trainers should focus on setting goals
                        and timelines for expected improvements in energy, stress levels, lean mass, BMI, and health status.
                        Creating a timeline helps new members understand the steps required on the journey to be physically fit.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio labore exercitationem minus sapiente,
                        beatae expedita enim vel error sunt modi tempore voluptas ducimus vitae, impedit molestias culpa
                        voluptates? Exercitationem inventore natus autem voluptatibus, numquam pariatur quae quo nobis et
                        blanditiis?
                        You can create a branded tool that introduces to the new members the expected improvements, and the tool
                        allows trainers or coaches to show the member how much faster results will occur if a program or package
                        is purchased.</p>
                </div>
            </div>
        </div>

        <!-- Team -->
        <div id="team">
            <h1>Meet The Team</h1>
            <div class="container">
                <div class="row py-3">
                    <div class="col m-3">
                        <img alt="Founder" src="img/founder.jpg">
                        <div class="col">
                            <h3>John</h3>
                            <p>FOUNDER</p>
                        </div>
                    </div>
                    <div class="col m-3">
                        <img alt="Manager" src="img/manager.jpg">
                        <div class="col">
                            <h3>Alex</h3>
                            <p>MANAGER</p>
                        </div>
                    </div>
                    <div class="col m-3">
                        <img alt="Trainer Female" src="img/trainer-f.jpg">
                        <div class="col">
                            <h3>Maria</h3>
                            <p>HEAD TRAINER</p>
                        </div>
                    </div>
                    <div class="col m-3">
                        <img alt="Trainer Male" src="img/trainer-m.jpg">
                        <div class="col">
                            <h3>Peter</h3>
                            <p>HEAD TRAINER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trainer -->

        <div id="trainer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <h3>YOUR TRAINER</h3>
                        <h1>PAUL WILSON</h1>
                        <hr>
                        <p>An established fitness authority and one of the most sought after fitness talents, it’s no wonder Paul has been featured in all the top fitness outlets.</p>
                        <img alt="Featured" src="../img/featured.png">

                    </div>
                    <div class="col">
                        <img alt="Trainer" height="500" src="../img/trainer.png" width="500">
                    </div>
                </div>
            </div>
        </div>

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
                <a href="index.php" class="text-primary"> FITNESS ELITE </a>
            </div>
        </footer>

        <!-- Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About Us -FITNESS ELITE</title>
        <link href="img/logo.jpg.jpg" rel="icon">

        <!-- Bootstrap and Font Awesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Exo:900|Fjalla+One|Lato|Merriweather|Ultra" rel="stylesheet">

        <!-- Main CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/about.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
    </head>

    <body>

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


        <!-- About Gym -->

        <div id="heading">
            <span>
                <h1>Our Vision</h1>
            </span>
            <p>To provide best Fitness Facilities.</p>
        </div>

        <div id="about">
            <div class="row">
                <div class="col">
                    <img alt="About Gym" src="../img/about-gym.jpg">
                </div>
                <div class="col">
                    <p>Have all your trainers create a timeline of goals for new members. Trainers should focus on setting goals
                        and timelines for expected improvements in energy, stress levels, lean mass, BMI, and health status.
                        Creating a timeline helps new members understand the steps required on the journey to be physically fit.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio labore exercitationem minus sapiente,
                        beatae expedita enim vel error sunt modi tempore voluptas ducimus vitae, impedit molestias culpa
                        voluptates? Exercitationem inventore natus autem voluptatibus, numquam pariatur quae quo nobis et
                        blanditiis?
                        You can create a branded tool that introduces to the new members the expected improvements, and the tool
                        allows trainers or coaches to show the member how much faster results will occur if a program or package
                        is purchased.</p>
                </div>
            </div>
        </div>

        <!-- Team -->
        <div id="team">
            <h1>Meet The Team</h1>
            <div class="container">
                <div class="row py-3">
                    <div class="col m-3">
                        <img alt="Founder" src="img/founder.jpg">
                        <div class="col">
                            <h3>John</h3>
                            <p>FOUNDER</p>
                        </div>
                    </div>
                    <div class="col m-3">
                        <img alt="Manager" src="img/manager.jpg">
                        <div class="col">
                            <h3>Alex</h3>
                            <p>MANAGER</p>
                        </div>
                    </div>
                    <div class="col m-3">
                        <img alt="Trainer Female" src="img/trainer-f.jpg">
                        <div class="col">
                            <h3>Maria</h3>
                            <p>HEAD TRAINER</p>
                        </div>
                    </div>
                    <div class="col m-3">
                        <img alt="Trainer Male" src="img/trainer-m.jpg">
                        <div class="col">
                            <h3>Peter</h3>
                            <p>HEAD TRAINER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trainer -->

        <div id="trainer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <h3>YOUR TRAINER</h3>
                        <h1>PAUL WILSON</h1>
                        <hr>
                        <p>An established fitness authority and one of the most sought after fitness talents, it’s no wonder Paul has been featured in all the top fitness outlets.</p>
                        <img alt="Featured" src="../img/featured.png">

                    </div>
                    <div class="col">
                        <img alt="Trainer" height="500" src="../img/trainer.png" width="500">
                    </div>
                </div>
            </div>
        </div>

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
                <a href="index.php" class="text-primary"> FITNESS ELITE </a>
            </div>
        </footer>

        <!-- Bootstrap Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

    </html>
<?php
}
?>