<?php
include '../database.php';
session_start();

function getAllOutlet()
{
    $conn = getDatabaseConnection();
    $result = $conn->query('SELECT * FROM tb_outlet');
    return $result->fetchAll(PDO::FETCH_ASSOC);
}
function register($table, $name, $username, $password)
{
    $conn = getDataBaseConnection();

    $res = $conn->prepare("SELECT * FROM $table WHERE username = :username");
    $res->execute([':username' => $username]);

    if ($res->rowCount() > 0) {
        return "Username sudah terdaftar";
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $res = $conn->prepare("INSERT INTO $table (name, username, password, role) VALUES (:name, :username, :password , 'kasir')");
    $res->execute([
        ':name' => $name,
        ':username' => $username,
        ':password' => $hashedPassword,
    ]);

    return true;
}


function login($tipe, $username, $password)
{
    $conn = getDatabaseConnection();

    $res = $conn->prepare("SELECT * FROM $tipe WHERE username = :username");
    $res->execute([username]);
    $data = $res->fetch(POD::FETCH_ASSOC);
    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['user'] = $data;
        $_SESSION['tipe'] = $tipe;
        return "Berhasil Login";
    }
    return "Gagal Login";
}


?>