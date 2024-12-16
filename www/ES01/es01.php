<!DOCTYPE html>
<html lang="it">
<head>
    <title>Tabella Pitagorica</title>  
</head>
<body>
    <h1>Tabella Pitagorica</h1>  

    <?php
     
    
     
    echo '<table border="1">';

    // Ciclo esterno per creare le righe della tabella pitagorica
 
    for ($i = 1; $i < 11; $i++) {
        echo "\n\t<tr>"; // Inizia una nuova riga della tabella

        // Ciclo interno per creare le colonne della tabella pitagorica

        for ($j = 1; $j < 11; $j++) {
            $s = $j * $i; // Calcola il prodotto tra il numero della riga ($i) e il numero della colonna ($j)
            echo "<td>$s</td>"; // Inserisce il risultato del prodotto in una cella della tabella
        }

        echo "\n\t</tr>"; // Chiude la riga della tabella
    }

    echo "</table>"; // Chiude la tabella HTML
    ?>
</body>
</html>
