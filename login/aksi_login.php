<?php
include "../database.php";
function loginUser($username,$password){
    $conn = getDatabaseConnection();
    $reqst = $conn->prepare(query: "SELECT * FROM user WHERE username = :username");
    $reqst->execute([':username' => $username]);
    $user = $reqst->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        return "Berhasil";
    } else {
        return "Gagal";
    }
}