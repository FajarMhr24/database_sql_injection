<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query Rentan
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        echo "<h3 style='color:green;'>HACKED! Login Berhasil masuk sebagai Admin.</h3>";
    } else {
        echo "<h3 style='color:red;'>Login Gagal! Username atau Password salah.</h3>";
    }
}
?>

<!-- Form Login Sederhana -->
<h2>Login Admin (Versi Rentan)</h2>
<form method="POST" action="">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit" name="submit">Login</button>
</form>
