<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription/Connexion</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('https://cdn.dribbble.com/users/14179351/screenshots/20521357/media/eb5ae5c7eab58fad564b3b757cf805de.gif') no-repeat center center/cover;
            margin: 0;
        }

        .container {
            padding-top: 20px; /* Ajout du padding-top pour ajuster le débordement */
            background: rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 20px 40px; /* Ajustement du padding */
            max-width: 500px;
            width: 100%;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: max-width 0.5s ease;
        }

        .form-container {
            transition: transform 1.1s ease-in-out;
            display: flex;
        }

        .form-container.signup-active {
            transform: translateX(-115%);
        }

        .form-box {
            width: 100%;
            flex-shrink: 0;
            padding: 20px;
        }

        h1 {
            color: white;
            font-weight: 600;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 1.1rem;
        }

        button {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            background: aquamarine;
            color: #000;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        button:hover {
            background: #00aaff;
            color: #fff;
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 170, 255, 0.5);
        }

        button:active {
            transform: scale(0.95);
        }

        .toggle-btn {
            background: transparent;
            border: 1px solid aquamarine;
            color: aquamarine;
            margin-top: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .toggle-btn:hover {
            background: aquamarine;
            color: #000;
        }

        .form-group {
            margin-bottom: 20px;
        }

        @media screen and (max-width: 768px) {
            .container {
                max-width: 90%;
                padding: 20px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: calc(100% - 20px);
                padding: 10px;
            }

            button {
                padding: 10px;
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 480px) {
            .container {
                max-width: 100%;
                padding: 15px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: calc(100% - 18px);
                padding: 8px;
            }

            button {
                padding: 8px;
                font-size: 0.9rem;
            }
        }

        .glass-button {
            display: inline-block;
            padding: 12px 24px;
            border: none;
            text-decoration: none;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            font-size: 16px;
            letter-spacing: 1px;
            cursor: pointer;
            text-transform: uppercase;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .glass-button:hover {
            background-color: aquamarine;
            transform: scale(1.05);
            box-shadow: 0 0 20px aquamarine;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container" id="form-container">
            <div class="form-box" id="login-box">
                <h1>Connexion</h1>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pswd" placeholder="Mot de passe" required>
                    </div>
                    <button type="submit">Se connecter</button>
                </form>
                <button class="toggle-btn" onclick="toggleForm()">S'inscrire</button>
            </div>
            <div class="form-box" id="signup-box">
                <h1>Inscription</h1>
                <form action="signup.php" method="post">
                    <div class="form-group">
                        <input type="text" name="txt" placeholder="Nom d'utilisateur" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="broj" placeholder="Téléphone" required>
                    </div>
                    <div class="form-group">
                        <input type ="password" name="pswd" placeholder="Mot de passe" required>
                    </div>
                    <button type="submit">S'inscrire</button>
                </form>
                <button class="toggle-btn" onclick="toggleForm()">Revenir à la connexion</button>
            </div>
        </div>
        <a href="mikrausoft.php" class="glass-button">Revenir à l'accueil</a>
    </div>
</body>
</html>

<script>
    function toggleForm() {
        const formContainer = document.getElementById('form-container');
        formContainer.classList.toggle('signup-active');
    }
</script>

