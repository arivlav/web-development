<?php

function saveFeedbackPage($data)
{
    $name = $data['name'];
    $email = $data['email'];
    $country = $data['country'];
    $gender = $data['gender'];
    $message = $data['message'];

    $req = "INSERT INTO message(name, email, country, gender, message_text) VALUES('$name', '$email', '$country', '$gender', '$message')";
    $query = DB() -> query($req);
    $query -> fetch();
}