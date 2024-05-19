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
            font-family: Arial, sans-serif;
            background-image: url('your-background-image-url.jpg'); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 500px;
            margin-top: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            text-align: center;
        }

        h1 {
            color: #ffffff;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            justify-content: center;
        }

        .logout-button {
            padding: 10px 20px;
            background-color: aquamarine;
            color: #000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            font-size: 16px;
        }

        .logout-button:hover {
            background-color: #7fffd4;
            box-shadow: 0 0 15px aquamarine;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 20px;
            }

            .logout-button {
                font-size: 14px;
                padding: 8px 16px;
            }
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
