<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: inscriptionconnexion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://www.leptidigital.fr/wp-content/uploads/2022/10/actu-microsoft.jpeg') no-repeat center center/cover;
            margin: 0;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 40px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            position: relative;
        }

        h1 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .logout-button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .logout-button:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: scale(1.05);
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <form action="logout.php" method="POST">
        <button type="submit" class="logout-button">Déconnexion</button>
    </form>
</div>

</body>
</html>
