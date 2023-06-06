<?php
session_start();
if ($_SESSION["session_id"]) {
    $key = $_GET["key"];
    $pay = $_GET["pay"];
    include 'db.php';
    $query = "select * from accounts where email = '$_SESSION[session_id]' and password = '$key';";
    $run = mysqli_query($connect, $query);
    $runCount = mysqli_num_rows($run);
    if ($runCount) {
        $otp = (string)rand(100000, 999999);
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Payment</title>
            <link href="img/logo.jpg.jpg" rel="icon">

            <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" rel="stylesheet">
            <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Exo:900|Fjalla+One|Lato|Merriweather|Ultra" rel="stylesheet">
            <link rel="stylesheet" href="css/payment.css">
            <script src="script/main.js"></script>
        </head>

        <body>
            <div class="container-fluid px-1 px-md-2 px-lg-4 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11">
                        <div class="card border-0">
                            <div class="row justify-content-center">
                                <h3 class="mb-4">Credit Card Checkout</h3>
                            </div>
                            <form id="form" action="paymentcheck.php?key=<?php echo "$key&pay=$pay&otp=$otp";?>" method="POST">
                                <div class="row">
                                    <div class="col-sm-7 border-line pb-3">
                                        <div class="form-group">
                                            <p class="text-dark text-sm mb-0">Name on the card</p> <input type="text" name="name" placeholder="Name" size="15" autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-dark text-sm mb-0">Card Number</p>
                                            <div class="row px-3"> <input type="number" id="card-num" name="card-num" placeholder="0000 0000 0000 0000" size="16" id="cr_no" min="1" max="9999999999999999" required>
                                                <p class="mb-0 ml-3">/</p> <i class="fas fa-credit-card ml-1 fa-2x"></i>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-dark text-sm mb-0">Expiry date</p> <input type="text" name="exp" placeholder="MM/YY" size="6" id="exp" minlength="5" maxlength="5" required>
                                        </div>
                                        <div class="form-group">
                                            <p class="text-dark text-sm mb-0">CVV/CVC</p> <input type="password" id="cvv" name="cvv" placeholder="000" size="1" minlength="3" maxlength="3" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-sm-center justify-content-center pt-4 pb-4"> <small class="text-sm text-dark">Billing Number</small>
                                        <h5 class="mb-5">
                                            <?php
                                            $bill = rand(10000000, 99999999);
                                            echo $bill;
?>
                                        </h5> <small class="text-sm text-dark">Payment amount</small>
                                        <div class="row px-3 justify-content-sm-center">
                                            <input type="number" name="bill" value="<?php echo $bill;?>" hidden>
                                            <h2 class=""><span class="font-weight-bold mr-2">₹</span><span class="text-danger"><?php echo $pay; ?></span></h2>
                                        </div> <button type="submit" id="submit" class="btn btn-red text-center mt-4">PAY</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(function() {
                    $("#submit").click(function() {
                        alert("Your OTP is <?php echo $otp;?>");
                    });
                });
            </script>

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