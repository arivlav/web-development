<?php

const POST_METHOD = 'POST';

function saveFeedbackPage()
{
    $data = (getRequestMethod() === POST_METHOD) ? handleFormMain() : [];
    if ($data['errors']['noError']) 
    {
        $file = '../data/'.$data['form']['email'] . '.txt';
        $content = implode(';', $data['form']);
        file_put_contents($file, $content);
    }
    unset($data['form']);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
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
        ]
    ];

    $data['errors']['name'] = validateSure($data['form']['name']);
    if ($data['form']['name'] != '') $data['errors']['name'] = validateName($data['form']['name']);
    $data['errors']['email'] = validateSure($data['form']['email']);
    if ($data['form']['email'] != '')  $data['errors']['email'] = validateEmail($data['form']['email']);
    $data['errors']['message'] = validateSure($data['form']['message']);

    foreach($data['errors'] as $key => $value)
    {
        if ($key != 'noError' && $value != '' ) $data['errors']['noError'] = false;
    }
    
    return $data;
}