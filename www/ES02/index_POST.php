<?php
// Definisco le credenziali corrette
$username_corretta = "admin";
$password_corretta = "123";

// Controllo se la richiesta è stata inviata tramite POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controllo se sono stati inviati i dati dell'utente
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Assegno i valori inseriti nel form alle variabili
        $username_inserito = $_POST["username"];
        $password_inserita = $_POST["password"];

        // Confronto le credenziali inserite con quelle corrette
        if ($username_inserito == $username_corretta && $password_inserita == $password_corretta) {

            echo "<h2>Accesso riuscito! Benvenuto, $username_inserito!</h2>";
        } else {

            echo "<h2>Username o password errati! Riprova.</h2>";
            visualizza_form(); 
        }
    } else {
        // Se i dati non sono stati inviati, ripropone il form
        visualizza_form();
    }
} else {
    // Se la pagina viene chiamata per la prima volta, visualizza il form
    visualizza_form();
}

// Funzione per visualizzare il form di login
function visualizza_form() {
    echo '
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Nome utente" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        
        <input type="submit" value="Login" name="submit">
    </form>';
}
?>
