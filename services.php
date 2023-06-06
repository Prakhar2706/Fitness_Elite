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
    <title>Services -FITNESS ELITE</title>
    <link href="img/logo.jpg.jpg" rel="icon">

    <!-- Bootstrap and Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo:900|Fjalla+One|Lato|Merriweather|Ultra" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/services.css" rel="stylesheet">
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

    <!-- Training -->
    <div id="training" class="container">
        <div id="heading">
            <span>
                <h1>PERSONAL AND GROUP TRAINING</h1>
            </span>
        </div>

        <script>
            $(function() {
                setInterval(() => {
                    var window_width = screen.width;
                    var card = document.getElementById("card");
                    if (window_width <= 531 && window_width > 375) {
                        $(card).addClass("card");
                    } else if (window_width == 375) {
                        $(card).addClass('card');
                        $(".hovereffect").css({
                            "padding-inline": "19%"
                        });
                    } else if (window_width < 375) {
                        $(card).addClass("card");
                    } else {
                        $(card).removeClass('card');
                    }
                }, 1000);
            });
        </script>

        <div class="row" id="card">
            <div class="col hovereffect">
                <img alt="Personal Training" src="img/personal-training.jpg">
                <div class="overlay">
                    <h2>PERSONAL<br> TRAINING</h2>
                </div>
                <div class="col text">
                    <p>A trainer can help you figure out if your goals are realistic. Help you stay motivated: Knowing you have
                        an appointment with a pro can help you maintain motivation to exercise during the week. Push you a
                        little harder:</p>
                </div>
            </div>
            <div class="col hovereffect">
                <img alt="Semi Personal Training" src="img/semi-personal.jpg">
                <div class="overlay">
                    <h2>SEMI-PERSONAL TRAINING</h2>
                </div>
                <div class="col text">
                    <p>It's the fine combination between group training and personal training that let you reap the benefits of
                        both the worlds.
                        It’s a way to receive the motivation and support of a group while receiving a heavy dose of
                        focused. </p>
                </div>
            </div>
            <div class="col hovereffect">
                <img alt="Group Training" src="img/group-training.jpg">
                <div class="overlay">
                    <h2>GROUP<br> TRAINING</h2>
                </div>
                <div class="col text">
                    <p>Group training is an opportunity for your members to become part of a community. This will increase your
                        retention and beyond fitness goals; the sense of belonging is what will keep your members turning up to
                        class and coming back.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div id="services">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img alt="Service 1" src="img/service-1.png">
                </div>
                <div class="col-7">
                    <a href="signup.php">
                        <h1>AEROBICS</h1>
                    </a>
                    <p>Aerobic exercise is any type of cardiovascular conditioning. It can include activities like brisk
                        walking, swimming, running, or cycling.
                        You probably know it as “cardio.” By definition, aerobic exercise means “with oxygen.” Your
                        breathing and heart rate will increase during aerobic activities.
                        Aerobic exercise reduces the risk of many conditions, including obesity, heart disease, high blood
                        pressure, type 2 diabetes, metabolic syndrome, stroke and certain types of cancer.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <a href="signup.php">
                        <h1>H.I.I.T.</h1>
                    </a>
                    <p>HIIT stands for High-Intensity Interval Training. The intensity in these workouts means there is
                        little (if any) downtime built in. This workout is also comprised of interval training, which means
                        exercises are done in bursts.
                        They can start slow and become faster from one exercise to another. Typically, cardio and strength
                        training are combined to create a well-rounded high-intensity interval training workout.</p>
                </div>
                <div class="col-5">
                    <img alt="Service 2" src="img/service-2.png">
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <img alt="Service 3" class="ml-5" src="img/service-3.png">
                </div>
                <div class="col-5">
                    <a href="signup.php">
                        <h1>ZUMBA</h1>
                    </a>
                    <p>You may be able to burn between 300 and 900 calories during one hour of mid- to high-intensity Zumba.
                        Doing Zumba two or three times a week, combined with weekly strength training sessions and a
                        balanced diet, may help you meet your weight loss goals.</p>
                </div>
                <div class="row">
                    <div class="col-5">
                        <a href="signup.php">
                            <h1>H.I.I.T.</h1>
                        </a>
                        <p>HIIT stands for High-Intensity Interval Training. The intensity in these workouts means there is
                            little (if any) downtime built in. This workout is also comprised of interval training, which means
                            exercises are done in bursts.
                            They can start slow and become faster from one exercise to another. Typically, cardio and strength
                            training are combined to create a well-rounded high-intensity interval training workout.</p>
                    </div>
                    <div class="col-5">
                        <img alt="Service 1" src="img/service-2.png">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Footer  -->

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
    <title>Services -FITNESS ELITE</title>
    <link href="img/logo.jpg.jpg" rel="icon">

    <!-- Bootstrap and Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo:900|Fjalla+One|Lato|Merriweather|Ultra" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/services.css" rel="stylesheet">
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

    <!-- Training -->
    <div id="training" class="container">
        <div id="heading">
            <span>
                <h1>PERSONAL AND GROUP TRAINING</h1>
            </span>
        </div>

        <script>
            $(function() {
                setInterval(() => {
                    var window_width = screen.width;
                    var card = document.getElementById("card");
                    if (window_width <= 531 && window_width > 375) {
                        $(card).addClass("card");
                    } else if (window_width == 375) {
                        $(card).addClass('card');
                        $(".hovereffect").css({
                            "padding-inline": "19%"
                        });
                    } else if (window_width < 375) {
                        $(card).addClass("card");
                    } else {
                        $(card).removeClass('card');
                    }
                }, 1000);
            });
        </script>

        <div class="row" id="card">
            <div class="col hovereffect">
                <img alt="Personal Training" src="img/personal-training.jpg">
                <div class="overlay">
                    <h2>PERSONAL<br> TRAINING</h2>
                </div>
                <div class="col text">
                    <p>A trainer can help you figure out if your goals are realistic. Help you stay motivated: Knowing you have
                        an appointment with a pro can help you maintain motivation to exercise during the week. Push you a
                        little harder:</p>
                </div>
            </div>
            <div class="col hovereffect">
                <img alt="Semi Personal Training" src="img/semi-personal.jpg">
                <div class="overlay">
                    <h2>SEMI-PERSONAL TRAINING</h2>
                </div>
                <div class="col text">
                    <p>It's the fine combination between group training and personal training that let you reap the benefits of
                        both the worlds.
                        It’s a way to receive the motivation and support of a group while receiving a heavy dose of
                        focused. </p>
                </div>
            </div>
            <div class="col hovereffect">
                <img alt="Group Training" src="img/group-training.jpg">
                <div class="overlay">
                    <h2>GROUP<br> TRAINING</h2>
                </div>
                <div class="col text">
                    <p>Group training is an opportunity for your members to become part of a community. This will increase your
                        retention and beyond fitness goals; the sense of belonging is what will keep your members turning up to
                        class and coming back.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div id="services">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img alt="Service 1" src="img/service-1.png">
                </div>
                <div class="col-7">
                    <a href="signup.php">
                        <h1>AEROBICS</h1>
                    </a>
                    <p>Aerobic exercise is any type of cardiovascular conditioning. It can include activities like brisk
                        walking, swimming, running, or cycling.
                        You probably know it as “cardio.” By definition, aerobic exercise means “with oxygen.” Your
                        breathing and heart rate will increase during aerobic activities.
                        Aerobic exercise reduces the risk of many conditions, including obesity, heart disease, high blood
                        pressure, type 2 diabetes, metabolic syndrome, stroke and certain types of cancer.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <a href="signup.php">
                        <h1>H.I.I.T.</h1>
                    </a>
                    <p>HIIT stands for High-Intensity Interval Training. The intensity in these workouts means there is
                        little (if any) downtime built in. This workout is also comprised of interval training, which means
                        exercises are done in bursts.
                        They can start slow and become faster from one exercise to another. Typically, cardio and strength
                        training are combined to create a well-rounded high-intensity interval training workout.</p>
                </div>
                <div class="col-5">
                    <img alt="Service 2" src="img/service-2.png">
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <img alt="Service 3" class="ml-5" src="img/service-3.png">
                </div>
                <div class="col-5">
                    <a href="signup.php">
                        <h1>ZUMBA</h1>
                    </a>
                    <p>You may be able to burn between 300 and 900 calories during one hour of mid- to high-intensity Zumba.
                        Doing Zumba two or three times a week, combined with weekly strength training sessions and a
                        balanced diet, may help you meet your weight loss goals.</p>
                </div>
                <div class="row">
                    <div class="col-5">
                        <a href="signup.php">
                            <h1>H.I.I.T.</h1>
                        </a>
                        <p>HIIT stands for High-Intensity Interval Training. The intensity in these workouts means there is
                            little (if any) downtime built in. This workout is also comprised of interval training, which means
                            exercises are done in bursts.
                            They can start slow and become faster from one exercise to another. Typically, cardio and strength
                            training are combined to create a well-rounded high-intensity interval training workout.</p>
                    </div>
                    <div class="col-5">
                        <img alt="Service 1" src="img/service-2.png">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Footer  -->

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
    <title>Services -FITNESS ELITE</title>
    <link href="img/logo.jpg.jpg" rel="icon">

    <!-- Bootstrap and Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo:900|Fjalla+One|Lato|Merriweather|Ultra" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/services.css" rel="stylesheet">
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

    <!-- Training -->
    <div id="training" class="container">
        <div id="heading">
            <span>
                <h1>PERSONAL AND GROUP TRAINING</h1>
            </span>
        </div>

        <script>
            $(function() {
                setInterval(() => {
                    var window_width = screen.width;
                    var card = document.getElementById("card");
                    if (window_width <= 531 && window_width > 375) {
                        $(card).addClass("card");
                    } else if (window_width == 375) {
                        $(card).addClass('card');
                        $(".hovereffect").css({
                            "padding-inline": "19%"
                        });
                    } else if (window_width < 375) {
                        $(card).addClass("card");
                    } else {
                        $(card).removeClass('card');
                    }
                }, 1000);
            });
        </script>

        <div class="row" id="card">
            <div class="col hovereffect">
                <img alt="Personal Training" src="img/personal-training.jpg">
                <div class="overlay">
                    <h2>PERSONAL<br> TRAINING</h2>
                </div>
                <div class="col text">
                    <p>A trainer can help you figure out if your goals are realistic. Help you stay motivated: Knowing you have
                        an appointment with a pro can help you maintain motivation to exercise during the week. Push you a
                        little harder:</p>
                </div>
            </div>
            <div class="col hovereffect">
                <img alt="Semi Personal Training" src="img/semi-personal.jpg">
                <div class="overlay">
                    <h2>SEMI-PERSONAL TRAINING</h2>
                </div>
                <div class="col text">
                    <p>It's the fine combination between group training and personal training that let you reap the benefits of
                        both the worlds.
                        It’s a way to receive the motivation and support of a group while receiving a heavy dose of
                        focused. </p>
                </div>
            </div>
            <div class="col hovereffect">
                <img alt="Group Training" src="img/group-training.jpg">
                <div class="overlay">
                    <h2>GROUP<br> TRAINING</h2>
                </div>
                <div class="col text">
                    <p>Group training is an opportunity for your members to become part of a community. This will increase your
                        retention and beyond fitness goals; the sense of belonging is what will keep your members turning up to
                        class and coming back.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div id="services">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <img alt="Service 1" src="img/service-1.png">
                </div>
                <div class="col-7">
                    <a href="signup.php">
                        <h1>AEROBICS</h1>
                    </a>
                    <p>Aerobic exercise is any type of cardiovascular conditioning. It can include activities like brisk
                        walking, swimming, running, or cycling.
                        You probably know it as “cardio.” By definition, aerobic exercise means “with oxygen.” Your
                        breathing and heart rate will increase during aerobic activities.
                        Aerobic exercise reduces the risk of many conditions, including obesity, heart disease, high blood
                        pressure, type 2 diabetes, metabolic syndrome, stroke and certain types of cancer.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <a href="signup.php">
                        <h1>H.I.I.T.</h1>
                    </a>
                    <p>HIIT stands for High-Intensity Interval Training. The intensity in these workouts means there is
                        little (if any) downtime built in. This workout is also comprised of interval training, which means
                        exercises are done in bursts.
                        They can start slow and become faster from one exercise to another. Typically, cardio and strength
                        training are combined to create a well-rounded high-intensity interval training workout.</p>
                </div>
                <div class="col-5">
                    <img alt="Service 2" src="img/service-2.png">
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <img alt="Service 3" class="ml-5" src="img/service-3.png">
                </div>
                <div class="col-5">
                    <a href="signup.php">
                        <h1>ZUMBA</h1>
                    </a>
                    <p>You may be able to burn between 300 and 900 calories during one hour of mid- to high-intensity Zumba.
                        Doing Zumba two or three times a week, combined with weekly strength training sessions and a
                        balanced diet, may help you meet your weight loss goals.</p>
                </div>
                <div class="row">
                    <div class="col-5">
                        <a href="signup.php">
                            <h1>H.I.I.T.</h1>
                        </a>
                        <p>HIIT stands for High-Intensity Interval Training. The intensity in these workouts means there is
                            little (if any) downtime built in. This workout is also comprised of interval training, which means
                            exercises are done in bursts.
                            They can start slow and become faster from one exercise to another. Typically, cardio and strength
                            training are combined to create a well-rounded high-intensity interval training workout.</p>
                    </div>
                    <div class="col-5">
                        <img alt="Service 1" src="img/service-2.png">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Footer  -->

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