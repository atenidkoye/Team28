<?php

function emptyInput($name, $email, $password, $pssRepeat) {
    return empty($name) || empty($email) || empty($password) || empty($pssRepeat);
}

function invalidEmail($email) {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function passMatch($password, $pssRepeat) {
    return $password !== $pssRepeat;
}
