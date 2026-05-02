<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query Aman (Prepared Statements)
    $stmt = $conn->prepare("SELECT id, username FROM admin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        echo "<h3 style='color:green;'>Login Berhasil!</h3>";
    } else {
        echo "<h3 style='color:red;'>Aman Bro! Sistem gagal dibobol pakai SQL Injection.</h3>";
    }
    $stmt->close();
}
?>

<h2>Login Admin (Versi Kebal)</h2>
<form method="POST" action="">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit" name="submit">Login</button>
</form>
