<!DOCTYPE html>
<html lang="it">
<head>
    <title>Accesso a pagina riservata</title>
</head>
<body>
    <h1>Accesso a pagina riservata</h1>

    <p>Accesso consentito solo agli utenti registrati</p>

    <!-- Form di login che invia i dati a login.php con il metodo POST -->
    <form action="login.php" method="post">

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="nomeutente" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="password" required>
        <br>
 
        <input type="submit" value="Accedi">
        
        <input type="reset" value="Annulla">
    </form>
</body>
</html>
