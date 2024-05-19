<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "monsite";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $pass = $_POST['pswd'];

    // Rechercher l'utilisateur dans la base de données
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Vérifier le mot de passe
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['password'])) {
            // Mot de passe correct, démarrer une session
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            // Rediriger vers la page "moncompte.php"
            header("Location: moncompte.php");
            exit();
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect";
        }
    } else {
        // Aucun utilisateur trouvé avec cet email
        echo "Aucun utilisateur trouvé avec cet email";
    }

    // Fermer la connexion
    $conn->close();
}
?>
