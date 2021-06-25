<?php

function feedbackListPage()
{
    $email = strtolower(getPOSTParameter('email'));

    $result = getFeedback($email);

    if ($result)
    {
        renderTemplate('feedback_list.tpl.php', $result);
    }
    else
    {
        renderTemplate('get_feedback_form.tpl.php', ['email' => $email, 'not_found_msg' => 'User not found!']);
    }
}