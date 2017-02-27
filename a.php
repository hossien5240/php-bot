<?php
$token = "345244468:AAFAtK5RA1JJFYArq8qFf413Y8D7pX4j56M";
$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
print_r($userbot->result->username);
