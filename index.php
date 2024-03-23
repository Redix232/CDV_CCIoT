<?php

$host = 'localhost'; 
$dbname = 'mwiemanndb';
$user = 'wbiksnbnml'; 
$password = 'T05H45Z455TQUNP8$';

try {

    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    $query = "SELECT * FROM tabela"; 
    $statement = $pdo->query($query);
    

    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    

    foreach ($results as $row) {
        echo $row['kolumna1'] . ' ' . $row['kolumna2'] . "<br/>";
    }
    
} catch (PDOException $e) {

    echo "Błąd połączenia z bazą danych: " . $e->getMessage();
}
?>
