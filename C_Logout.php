<?php
session_start();
if(session_destroy()) {
    header("Location: A_Login.php");
}
?>
