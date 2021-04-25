<?php
const GET_METHOD = 'GET';

function feedbacksListPage(): void
{
    $data = (getRequestMethod() === GET_METHOD) ? handleFormFeedback() : []; 
    renderTemplate('feedbacks.tpl.php', ['data' => $data]);
}

function handleFormFeedback(): array 
{
    $noError = true;
    $data=
    [
        'form' =>
        [
            'email' => getGetParameter('email')
        ],
        'errors' => 
        [
            'email' => '',
            'noError' => true,
        ],
        'file' =>
        [
            'found' => false,
            'status' => '',
            'content' => []
        ]
    ];

    $data['errors']['email'] = validateEmail($data['form']['email']);
    $data['errors']['email'] = validateSure($data['form']['email']);

    foreach($data['errors'] as $key => $value)
    {
        if ($key != 'noError' && $value != '' ) $data['errors']['noError'] = false;
    }

    $file = '../data/'.$data['form']['email'] . '.txt';
    if (file_exists($file)) 
    {
        $data['file']['content'] = file_get_contents($file);
        $data['file']['content'] = explode(';',$data['file']['content']);
        $data['file']['found']=true; 
    }
    else 
    {
        $data['file']['status']='Файл не найден!';
    }
     
    return $data;
}