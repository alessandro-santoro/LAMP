<!DOCTYPE html>
<html lang="it">
<head>
    <title>Accesso a pagina riservata</title>
</head>
<body>
    <h1>Accesso a pagina riservata</h1>
    <!-- solo gli utenti registrati possono accedere -->
    <p>Accesso consentito solo agli utenti registrati</p>

    <!-- Form di login che invia i dati a login.php con il metodo POST -->
    <form action="login.php" method="post">

        <!-- inserimento del nome utente -->
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="nomeutente" required>
        <br>

        <!-- inserimento della password -->
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="password" required>
        <br>

        <!-- inviare il form -->
        <input type="submit" value="Accedi">
        
        <!-- resettare il form -->
        <input type="reset" value="Annulla">
    </form>
</body>
</html>
