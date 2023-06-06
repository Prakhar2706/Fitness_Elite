<?php
session_start();
if ($_SESSION["session_id"]) {
    $key = $_GET["key"];
    include 'db.php';
    $query = "select * from accounts where email = '$_SESSION[session_id]' and password = '$key';";
    $run = mysqli_query($connect, $query);
    $runCount = mysqli_num_rows($run);
    if ($runCount) {
        while ($row = mysqli_fetch_assoc($run)) {
            $fName = $row["first_name"];
            $lName = $row["last_name"];
        }

        date_default_timezone_set("Asia/Calcutta");
        $date = date("d/y/m");
        $time = date("d/ m/ y", strtotime('+1 day'));

        $bill = $_GET["bill"];
        $pay = $_GET["pay"];
        $otp = $_GET["otp"];
        $mail = $_SESSION["session_id"];
        date_default_timezone_set("Asia/Calcutta");
        $bTime = date("h:m:sa - d/m/y");
        if ($_POST["otp"] === $otp) {
            $payQuery = "INSERT INTO `payments` (`usermail`, `name`, `ammount`, `free`, `freetime`, `paymment_time`) VALUES ('$mail', '$fName $lName', '0', '1', '04:00 pm - $time', '$bTime')";
            $payRun = mysqli_query($connect, $payQuery);
            if ($payRun) {
                header("location: free.php?key=$key");
            } else {
?>
                <script>
                    alert("oops! Something went wrong.\nPlease retry payment.");
                    window.location = history.back();
                </script>
        <?php
            }
        }
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