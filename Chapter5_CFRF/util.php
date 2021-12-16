<?php

//トークン作成
function createToken()
{
    if (!isset($_SESSION['token'])) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
    }
}

//トークンチェック
function validateToken()
{
    if (
        empty($_SESSION['token']) ||
        $_SESSION['token'] !== filter_input(INPUT_POST, 'token')
    ) {
        exit('Invalid post request');
    }
}

session_start();


function h($a){
    return htmlspecialchars($a,ENT_QUOTES,"UTF-8");

}

?>