<?php
session_start();
if ($_SESSION["session_id"]) {
unset($_SESSION["session_id"]);
session_destroy();
header('location: index.php');
}
else{
    header('location: index.php');
}
?>