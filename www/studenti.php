<?php
    // Connessione al database.
    $pdo = new PDO(
        "mysql:host=db;dbname=scuola;charset=utf8mb4",
        getenv("DB_USER"),
        getenv("DB_PASSWORD")
    );

    //Seleziona tutti gli studenti
    $sql = "SELECT Id_Studente, Nome, Cognome, Email FROM Studente ORDER BY Id_Studente";

    $query = $pdo->query($sql);

    // Recupera gli utenti come oggetti.
    $studenti = $query->fetchAll(PDO::FETCH_OBJ);

    if (count($studenti) === 0) {
        echo "<p>Nessun utente registrato.</p>";
		return;
    }
    // Stampa i dati di ogni utente.
    foreach ($studenti as $studente) {
        echo "<h2>Utente numero " . $studente->Id_Studente . "</h2>";
        echo "<p>Nome: " . htmlspecialchars($studente->Nome) . "</p>";
        echo "<p>Cognome: " . htmlspecialchars($studente->Cognome) . "</p>";
        echo "<p>Email: " . htmlspecialchars($studente->Email) . "</p>";
        echo "<hr>";
    }

    echo "<p>Fine print degli studenti</p>"

    ?>

    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Elenco Studenti</title>

        <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f2f4f8;
        color: #333;
        margin: 0;
        padding: 30px;
    }

    h2 {
    color: #2563eb;
    margin-bottom: 10px;
    }

    p {
        font-size: 16px;
        margin: 8px 0;
    }

    hr {
        border: none;
        border-top: 1px solid #ddd;
        margin: 20px 0;
    }

    a {
        display: inline-block;
        background-color: #2563eb;
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 5px;
        margin-top: 15px;
    }

    a:hover {
        background-color: #1d4ed8;
    }
        </style>

    </head>
    <body>
            <a href="index.php">Torna al form di inserimento dati.</a>
    </body>
    </html>


