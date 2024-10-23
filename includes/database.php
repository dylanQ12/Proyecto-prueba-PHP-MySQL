<?php
// Conexión a MySQL

$db = mysqli_connect(
    $_ENV['DB_HOST'] ?? '',
    $_ENV['DB_USER'] ?? '',
    $_ENV['DB_PASS'] ?? '',
    $_ENV['DB_NAME'] ?? ''
);

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}

/*
 * Conexión a Postgresql
$connection_string = "host=" . ($_ENV['DB_HOST'] ?? 'localhost') .
    " dbname=" . ($_ENV['DB_NAME'] ?? 'proyecto_practica') .
    " user=" . ($_ENV['DB_USER'] ?? 'postgres') .
    " password=" . ($_ENV['DB_PASS'] ?? '1234');

$db = pg_connect($connection_string);

if (!$db) {
    echo "Error: No se pudo conectar a PostgreSQL.";
    exit;
}
*/
