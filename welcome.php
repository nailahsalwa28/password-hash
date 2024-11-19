<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
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

        .welcome-container {
            background: white;
            padding: 40px; /* Memperbesar padding */
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px; /* Memperbesar lebar kontainer */
        }

        h1 {
            color: #333;
            margin-bottom: 30px; /* Memperbesar jarak bawah */
            font-size: 28px; /* Memperbesar ukuran font judul */
        }

        p {
            font-size: 18px; /* Memperbesar ukuran font paragraf */
            color: #555;
            margin-bottom: 20px;
        }

        .logout-button {
            padding: 15px 30px; /* Memperbesar padding tombol */
            background-color: #1E2A5E;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px; /* Memperbesar ukuran font tombol */
            margin-top: 20px;
        }

        .logout-button:hover {
            background-color: #17204b;
        }
    </style>
</head>
<body>

<div class="welcome-container">
    <h1>Selamat Datang</h1>
    <p>Anda telah berhasil masuk ke akun Anda.</p>
    <button class="logout-button" onclick="location.href='login.php'">Keluar</button>
</div>

</body>
</html>
