<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['numero'])) {
        $numero = $_POST['numero']; // Assegno il valore selezionato nel form alla variabile $numero

        // Mostro il titolo della tabella
        echo "<h2>Tabella dei Quadrati e dei Cubi</h2>";

        // Creo la tabella con i titoli delle colonne
        echo "<table border='1'>
                <tr>
                    <th>Numero</th> <!-- Colonna per il numero -->
                    <th>Quadrato</th> <!-- Colonna per il quadrato del numero -->
                    <th>Cubo</th> <!-- Colonna per il cubo del numero -->
                </tr>";

        // Ciclo che va da 1 a $numero
        for ($i = 1; $i <= $numero; $i++) {
            echo "<tr>
                    <td>$i</td> <!-- Mostra il numero -->
                    <td>" . ($i * $i) . "</td> <!-- Mostra il quadrato del numero -->
                    <td>" . ($i * $i * $i) . "</td> <!-- Mostra il cubo del numero -->
                  </tr>";
        }

        echo "</table>";
    }
} else {

    visualizzaForm();
}

// Funzione che visualizza il form per selezionare un numero
function visualizzaForm() {
    echo '
    <h2>Tabella dei Quadrati e dei Cubi</h2>
    <form method="post" action="">
        <!-- Etichetta e campo per selezionare un numero da 1 a 10 -->
        <label for="numero">Seleziona un numero intero N (1 a 10):</label>
        <select id="numero" name="numero">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br><br>

        <!-- Bottone per inviare il form -->
        <input type="submit" value="Crea tabella">
    </form>
    ';
}
?>
