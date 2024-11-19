<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            padding: 10px;
            background-color: #1E2A5E;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 14px;
        }

        button:hover {
            background-color: #1E2A5E;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .success {
            color: blue;
            text-align: center;
            margin-bottom: 10px;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            color: #1E2A5E;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "passwordhash");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Simpan ke database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman login setelah registrasi berhasil
        header("Location: login.php");
        exit; // Hentikan skrip setelah redirect
    } else {
        $message = "<div class='error'>Error: " . $conn->error . "</div>";
    }
}

$conn->close();
?>

<form method="post" action="register.php">
    <h2>Daftar</h2>
    <?php echo $message; ?>
    <input type="text" name="username" placeholder="Nama Pengguna" required>
    <input type="password" name="password" placeholder="Kata Sandi" required>
    <button type="submit">Daftar</button>
    <div class="login-link">
        Sudah punya akun? <a href="login.php">Masuk di sini</a>
    </div>
</form>

</body>
</html>
