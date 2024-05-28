<?php

declare(strict_types=1);

function is_input_empty(string $email, string $password, string $nom, string $prenom)
{
    if (empty($email) || empty($password) || empty($nom) || empty($prenom)) {
        return true;
    } else {
        return false;
    }
}


function is_email_invalid(string $email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_email_registered(object $pdo, string $email)
{
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $email, string $nom, string $prenom, string $password)
{
    set_user($pdo, $email, $nom, $prenom, $password);
}
