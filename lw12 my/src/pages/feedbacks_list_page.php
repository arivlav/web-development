<?php

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
        'message' =>
        [
            'found' => false,
            'status' => '',
            'content' => []
        ]
    ];
    if ($data['form']['email'] != '')
    {
        $data['errors']['email'] = validateEmail($data['form']['email']);
        $data['errors']['email'] = validateSure($data['form']['email']);

        foreach($data['errors'] as $key => $value)
        {
            if ($key != 'noError' && $value != '' ) $data['errors']['noError'] = false;
        }

        $req = "SELECT * FROM message WHERE email='".$data['form']['email']."'";
        $query = DB() -> query($req);

        $result = $query -> fetch();   

        if ($result != '')
        {
            $data['message']['content'] = $result;
            $data['message']['found']=true;
        }  
        else
        {
            $data['message']['status']='Сообщение не найдено!'; 
        }
    }    
    return $data;
}