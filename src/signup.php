<?php
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
    $user = $_POST['txt'];
    $email = $_POST['email'];
    $phone = $_POST['broj'];
    $pass = password_hash($_POST['pswd'], PASSWORD_BCRYPT);

    // Insérer les données dans la base de données
    $sql = "INSERT INTO users (username, email, phone, password) VALUES ('$user', '$email', '$phone', '$pass')";

    if ($conn->query($sql) === TRUE) {
        // Démarrer une session
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['email'] = $email;
        // Rediriger vers la page "moncompte.php"
        header("Location: moncompte.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>
