<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

echo 'Conectei' . PHP_EOL;

$pdo->exec("INSERT INTO phones (ddd, number, student_id) 
    VALUES ('11', '999999999', 1), ('21', '2222222222', 1);
"
);
exit();
$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');

$createTableSql = '
    CREATE TABLE IF NOT EXISTS phones(
        id INTEGER PRIMARY KEY,
        ddd TEXT,
        student_id INTEGER,
        FOREIGN KEY(student_id) REFERENCES students(id)
    );
';
$pdo->exec($createTableSql);