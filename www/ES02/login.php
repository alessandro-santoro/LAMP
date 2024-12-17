<?php
// Recupera i dati inviati dal form di login
$username = $_POST['username'];  
$passwd = $_POST['password'];    

// Verifico se le credenziali inserite sono corrette
if($username == "alessandro" && $passwd == "098") {

    $msg = "<h2>Inserire altre credenziali</h2>";
} else {
 
    $msg = "Benvenuto $username nella pagina riservata del mio sito!";
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Accesso a pagina riservata</title>
</head>
<body>
    <h1>Pagina di login</h1>
    
    <?=$msg?>

</body>
</html>
