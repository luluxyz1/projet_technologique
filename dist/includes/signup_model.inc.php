<?php

declare(strict_types=1);


function get_email(object $pdo, string $email)
{
    $query = "SELECT id_utilisateur FROM utilisateur WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $email, string $nom, string $prenom, string $password)
{
    $query = "INSERT INTO utilisateur (email, nom, prenom, password) VALUES (:email, :nom, :prenom, :password);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12,
    ];
    $hashedPwd = password_hash($password, PASSWORD_BCRYPT, $options);


    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":password", $hashedPwd);
    $stmt->execute();
}
