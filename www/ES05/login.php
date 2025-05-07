<?php

$username = $_POST['username'];  
$passwd = $_POST['password'];    

if($username == "alessandro" && $passwd == "098") {

    $msg = "<h2>Benvenuto $username nella pagina riservata</h2>";
} else {
 
    $msg = "<h3 style='color:red'>username o pasword sbagliati</h3>";
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