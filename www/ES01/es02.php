<!DOCTYPE html>
<html lang="it">
<head>
    <title>Esercitazione b</title>  
</head>
<body>

    <?php
    // Inizio del codice PHP

    // Definisco il nome dell'utente  
    $name = "Paolo"; 

    // Crea un oggetto DateTime che rappresenta l'ora attuale
    $today = new DateTime("now", new DateTimeZone('Europe/Rome'));

    // Estrae l'ora attuale in formato 24 ore 
    $hour = $today->format('H'); 

    // Determina il saluto in base all'ora attuale
    
    if ($hour >= 8 && $hour < 12) {
        $greeting = "Buongiorno";
    }

    elseif ($hour >= 12 && $hour < 20) {
        $greeting = "Buonasera";
    }

    else {
        $greeting = "Buonanotte";
    }

    // Recupero il tipo di browser dell'utente 
    $browser = $_SERVER['HTTP_USER_AGENT']; 

    // visualizzo il saluto, il buongiorno con la variabile$greeting e il nome con $name
    echo "$greeting $name, benvenuto nella mia prima pagina PHP!<br>";

    echo "Stai usando il browser: $browser"; // Mostra il browser dell'utente
    ?>

</body>
</html>
