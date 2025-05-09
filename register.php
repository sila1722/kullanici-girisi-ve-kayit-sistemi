<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: login.php");
    } else {
        echo "Kayit başarisiz.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kayit Ol</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST">
    <h2>Kayit Ol</h2>
    Kullanici Adi: <input type="text" name="username" required><br>
    Şifre: <input type="password" name="password" required><br>
    <button type="submit">Kayit Ol</button>
</form>

</body>
</html>