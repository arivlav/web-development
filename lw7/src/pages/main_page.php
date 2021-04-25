<?php

const POST_METHOD = 'POST';

function mainPage(): void
{
    $data = (getRequestMethod() === POST_METHOD) ? handleFormMain() : []; 
    renderTemplate('main.tpl.php', ['data' => $data]);
}  

function handleFormMain(): array
{
    $data=
    [
        'form' =>
        [
            'name' => getPostParameter('name'),
            'email' => getPostParameter('email'),
            'country' => getPostParameter('country'),
            'gender' => getPostParameter('gender'),
            'message' => getPostParameter('message')
        ],
        'errors' => 
        [
            'name' => '',
            'email' => '',
            'country' => '',
            'gender' => '',
            'message' => '',
            'noError' => true
        ],
        'send' => false
    ];

    $data['errors']['name'] = validateName($data['form']['name']);
    $data['errors']['name'] = validateSure($data['form']['name']);
    $data['errors']['email'] = validateEmail($data['form']['email']);
    $data['errors']['email'] = validateSure($data['form']['email']);
    $data['errors']['message'] = validateSure($data['form']['message']);

    foreach($data['errors'] as $key => $value)
    {
        if ($key != 'noError' && $value != '' ) $data['errors']['noError'] = false;
    }

    if ($data['errors']['noError']) 
    {
        saveFeedbackPage($data['form']);
        $data['send'] = true;
    }

    return $data;
}