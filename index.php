<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto De Teste", "<p>Este e um email de <b>teste</b>!</p>", "caiomotorola2010@gmail.com",
    "Caio Campos", "ccaio5119@gmail.com", "Caio Landgraf");

var_dump($novoEmail);