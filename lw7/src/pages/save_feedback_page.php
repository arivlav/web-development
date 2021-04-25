<?php
function saveFeedbackPage($data)
{
    $file = '../data/'.$data['email'] . '.txt';
    $content = implode(';', $data);
    file_put_contents($file, $content);
}
