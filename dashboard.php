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
            <link href="css/pricing.css" rel="stylesheet">
            <link href="css/paymentpop.css" rel="stylesheet">
        </head>

        <body>

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
            <?php
            if ($_SESSION["session_id"] === "admin@fitnesselite.com") {
            ?>
                <div class="admin container" style="display: block;">
                    <div class="container">
                        <h2 class="my-5">Payment History</h2>
                        <table class="table marg">
                            <tbody>
                                <tr class="table-dark">
                                    <th class="px-2">Serial</th>
                                    <th class="px-2">Name</th>
                                    <th class="px-2">Mail-Id</th>
                                    <th class="px-2">Ammount</th>
                                    <th class="px-2">Time</th>
                                    <th class="px-2">Free Session</th>
                                    <th class="px-2">Free Session Time</th>
                                </tr>
                                <?php
                                $historyQuery = "select * from payments;";
                                $historyRun = mysqli_query($connect, $historyQuery);
                                $historyCount = mysqli_num_rows($historyRun);
                                if ($historyCount > 0) {
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($historyRun)) {
                                        echo "<tr>
<td>$i</td>
<td>$row[name]</td>
<td>$row[usermail]</td>
<td>₹ $row[ammount]</td>
<td>$row[paymment_time]</td>";
                                        if ($row['free'] === "1") {
                                            $ftime = $row['freetime'];
                                            echo "<td>Claimed</td>
<td>$ftime</td>
</tr>";
                                        } else if ($row['free'] == null) {
                                            echo "<td>Claimed</td>
<td>$ftime</td>
</tr>";
                                        } else {
                                            echo "<td>Not Claimed</td>
<td>NA</td>
</tr>";
                                        }
                                        $i++;
                                    }
                                } else {
                                    echo "<tr>
<td>0</td>
<td>Na</td>
<td>Na</td>
<td>Na</td>
<td>NA</td>
</tr>";
                                }
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
            } else {
?>
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">Our Charges</h1>
                    <p class="lead">The best investment you can ever make in your own health.</p>
                    <button class="btn btn-lg btn-block btn-primary" id="show">Show My Payment History</button>
                </div>
                <div class="pop container" id="pop">
                    <div class="container">
                        <i class="fa fa-window-close" id="close" aria-hidden="true"></i>
                        <h2 class="my-5">Your Payment history</h2>
                        <table class="table marg">
                            <tbody>
                                <tr class="table-dark">
                                    <th class="px-5">Serial</th>
                                    <th class="px-5">Ammount</th>
                                    <th class="px-5">Time</th>
                                    <th class="px-5">Free Claimed</th>
                                    <th class="px-5">Free Session Time</th>
                                </tr>
                                <?php
                                $historyQuery = "select * from payments where usermail = '$_SESSION[session_id]';";
                                $historyRun = mysqli_query($connect, $historyQuery);
                                $historyCount = mysqli_num_rows($historyRun);
                                if ($historyCount > 0) {
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($historyRun)) {
                                        echo "<tr>
<td>$i</td>
<td>₹ $row[ammount]</td>
<td>$row[paymment_time]</td>";
                                        if ($row['free'] === "1") {
                                            $ftime = $row['freetime'];
                                            echo "<td>Claimed</td>
<td>$ftime</td>
</tr>";
                                        } else if ($row['free'] == null) {
                                            echo "<td>Claimed</td>
<td>$ftime</td>
</tr>";
                                        } else {
                                            echo "<td>Not Claimed</td>
<td>NA</td>
</tr>";
                                        }
                                        $i++;
                                    }
                                } else {
                                    echo "<tr>
<td>0</td>
<td>Na</td>
<td>Na</td>
<td>Na</td>
<td>NA</td>
</tr>";
                                }
?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <script>
                    $(function() {
                        $("#show").click(function() {
                            $("#pop").show('slow');
                        });
                        $("#close").click(function() {
                            $("#pop").hide("slow");
                        });
                        $(document).on('keydown', function(e) {
                            if (e.key == "Escape") {
                                $("#pop").hide("slow");
                            }
                        });
                    });
                </script>
                <div class="container">
                    <div class="card-deck mb-3 text-center">
                        <?php
                        $freeQuery = "select * from payments where usermail = '$_SESSION[session_id]' and free = '1';";
                        $freeRun = mysqli_query($connect, $freeQuery);
                        $freeCount = mysqli_num_rows($freeRun);
                        if ($freeCount != "1") {
                        ?>
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Try Us</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">₹0</h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li><br></li>
                                        <li>3 Day trial</li>
                                        <li>Try us for 3 days</li>
                                        <li>If you feel good then join us</li>
                                        <li><br></li>
                                    </ul>
                                    <a href="freebooking.php?key=<?php echo $key; ?>" class="btn btn-lg btn-block btn-outline-primary">Try for free</a>
                                </div>
                            </div>
                        <?php
                        }
?>
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">General</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">₹800 <small class="text-muted">/ month</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Diet chart plan.</li>
                                    <li>Daily 1 hour excercise.</li>
                                    <li>Get Excercised with group of 10.</li>
                                    <li>Dedicated trainer for your group.</li>
                                    <li><br></li>
                                </ul>
                                <a href="payment.php?key=<?php echo $key; ?>&pay=800" class="btn btn-lg btn-block btn-primary">Choose General</a>
                            </div>
                        </div>
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Premium</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">₹1500 <small class="text-muted">/ month</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Diet chart plan.</li>
                                    <li>Protein shakes.</li>
                                    <li>Daily 2 hour excercise.</li>
                                    <li>Dedicated trainer for your own.</li>
                                    <li>Complete gym kit and accessories.</li>
                                </ul>
                                <a href="payment.php?key=<?php echo $key; ?>&pay=1500" class="btn btn-lg btn-block btn-primary">Choose Premium</a>
                            </div>
                        </div>
                    </div>
                    <script>
                        Holder.addTheme('thumb', {
                            bg: '#55595c',
                            fg: '#eceeef',
                            text: 'Thumbnail'
                        });
                    </script>
                <?php
            }
?>
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
                </div>

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>

        </html>
    <?php
    } else {
?>
        <script>
            alert("You are not doing the write thing!\nDon't try to interrupt others' account.");
            window.location = history.back();
        </script>
<?php
    }
} else {
    header("location: index.php");
}
?>