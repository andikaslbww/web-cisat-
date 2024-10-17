<?php
if (isset($_POST['submit'])) {
    // Ambil nilai username dan password dari input form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password sesuai
    if ($username == "andika" && $password == "1234") {
        // Redirect ke cisat.php jika login berhasil
        header("Location: home.php");
        exit;
    } else {
        // Jika login gagal, tampilkan pesan error
        echo "Username atau password salah!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="border">
            <form action="" method="post"> <!-- Fixed the typo from 'from' to 'form' -->
                <h1>Login</h1>

                <ul>
                    <li>
                        <label for="username">Username: </label>
                        <br>
                        <input type="text" name="username" id="username" required>
                    </li>
                    <li>
                        <label for="password">Password: </label>
                        <br>
                        <input type="password" name="password" id="password" placeholder="" required>
                    </li>
                    <li>
                    </li>
                    <li>
                        <button type="submit" name="submit">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>