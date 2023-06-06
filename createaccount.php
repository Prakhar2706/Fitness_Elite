<?php
session_start();
include "db.php";
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$number = $_POST["number"];
$passwd = password_hash($_POST["Passwd"], PASSWORD_DEFAULT);
$gender = $_POST["gender"];
$age = $_POST["age"];
$squestion = $_POST["Squestion"];
$sanswer = $_POST["Sanswer"];

$query = "select * from accounts where email = '$email';";
$run = mysqli_query($connect, $query);
$runCheck = mysqli_num_rows($run);

if ($runCheck > 0) {
?>
    <script>
        alert("Your email is already registered.\nPlease do login.");
        window.location = "login.php";
    </script>
    <?php
} else {
    $createQuery = "INSERT INTO `accounts` (`first_name`, `last_name`, `email`, `age`, `phone`, `gender`, `password`, `security_question`, `security_answer`) VALUES ('$first_name', '$last_name', '$email', '$age', '$number', '$gender', '$passwd', '$squestion', '$sanswer')";
    $createRun = mysqli_query($connect, $createQuery);
    if ($createRun) {
        $_SESSION["session_id"] = $email;
        header("location: dashboard.php?key=$passwd");
    } else {
?>
        <script>
            alert("oops! Something went wrong.\nplease try again later.");
            window.location = "login.php";
        </script>
<?php
    }
}

?>