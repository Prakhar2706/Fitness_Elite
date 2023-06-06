<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title> FITNESS ELITE</title>
    <link href="img/logo.jpg.jpg" rel="icon">

    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" rel="stylesheet">
    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Exo:900|Fjalla+One|Lato|Merriweather|Ultra" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/signup.css">


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
        </div>
    </nav>


    <form class="form-signin" action="createaccount.php" method="POST" autocomplete="TRUE">
        <h1 class="h3 mb-3 font-weight-normal"><i class="fas fa-user-circle"></i></h1>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first name">Fisrt Name*</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Prakhar" autofocus required>
            </div>
            <div class="form-group col-md-6">
                <label for="last name">Last Name*</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Gupta" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Email">Email*</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="abc@gmail.com" required>
            </div>
            <div class="form-group col-md-6">
                <label for="contact">Contact Number*</label>
                <input type="text" class="form-control" name="number" id="number" placeholder="+911234567890" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password*</label>
                <input type="password" class="form-control" name="Passwd" id="Passwd" placeholder="*******" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Re-Enter Password*</label>
                <input type="password" class="form-control" id="cPasswd" placeholder="*******" required>
            </div>
            <span id="error"></span>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="age">Age*</label>
                <input type="date" class="form-control" name="age" id="age" required>
            </div>
            <div class="form-group col-md-6">
                <label for="gender">Gender*</label>
                <input type="text" class="form-control" maxlength="1" name="gender" id="gender" placeholder="M/ F/ N(prefer not to say)" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Squestion">Security question*</label>
                <select name="Squestion" id="Squestion" class="form-control" required>
                    <option selected>Choose your security question</option>
                    <option value="What_is_your_nick_name">What is your nick name?</option>
                    <option value="What_is_your_pet_name">What is your pet name?</option>
                    <option value="What_is_your_favourite_song">What is your favourite song?</option>
                    <option value="What_is_your_job_role">What is your job role?</option>
                    <option value="What_is_your_favourite_game">What is your favourite game?</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="Sanswer">Security Answer*</label>
                <input type="text" class="form-control" name="Sanswer" id="Sanswer" placeholder="Cricket" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>


        <script>
            $(function() {
                var passwd = document.getElementById("Passwd");
                var cpasswd = document.getElementById("cPasswd");
                var gender = document.getElementById("gender");
                var error = document.getElementById("error");
                $(cpasswd).blur(function() {
                    if (passwd.value === cpasswd.value) {
                        error.innerHTML = "";
                        $(error).hide();
                    } else {
                        $(error).show();
                        error.innerHTML = "*Password and Re-Entered Password does not match!*";
                    }
                });
                $(gender).blur(function() {
                    if (gender.value === "M" || gender.value === "m" || gender.value === "F" || gender.value === "f" || gender.value === "N" || gender.value === "n") {
                        error.innerHTML = "";
                        $(error).hide();
                    } else {
                        error.innerHTML = "*Invalid Gender Input*";
                        $(error).show();
                    }
                });
            });
        </script>

        <!-- FOOTER -->
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
    </form>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>