<?php

$connection = mysqli_connect('127.0.0.1','root','' ,'test_db');
if ($connection == false)
{
    echo 'Bad connection <br>';
    echo mysqli_connect_error();
    exit(); //die();  выход из скрипта
}
?>