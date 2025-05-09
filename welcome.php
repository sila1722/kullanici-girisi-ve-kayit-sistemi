<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hoş Geldin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Hoş geldin, <?php echo $_SESSION['username']; ?>!</h2>
<a href="logout.php">Çikiş Yap</a>

</body>
</html>