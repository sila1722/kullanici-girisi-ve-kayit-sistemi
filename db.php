<?php
$conn = mysqli_connect("localhost", "root", "", "login_db");

if (!$conn) {
    die("Veritabani bağlanti hatasi: " . mysqli_connect_error());
}
?>