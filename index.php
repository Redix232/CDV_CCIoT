<?php

$host = 'mwiemannapp-server.mysql.database.azure.com'; 
$dbname = 'test';
$user = 'fjrltfjbwg'; 
$password = 'rDX1T3)OE8c0';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Przygotuj zapytanie SELECT
    $query = "SELECT * FROM tabela"; 
    
    // Wykonaj zapytanie
    $statement = $pdo->query($query);
    
    // Pobierz wyniki zapytania
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    // Wyświetl wyniki
    foreach ($results as $row) {
        echo $row['kolumna1'] . ' ' . $row['kolumna2'] . "<br/>";
    }
    
} catch (PDOException $e) {
    // Obsłuż wyjątek w przypadku problemów z połączeniem
    echo "Błąd połączenia z bazą danych: " . $e->getMessage();
}
?>
