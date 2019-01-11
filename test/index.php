<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(
    2,
    "smtp.sendgrid.net",
    "apikey",
    "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",
    "tls",
    "587",
    "caiomotorola2010@gmail.com",
    "Caio Campos"
    );

$novoEmail->sendMail("Assunto De Teste", "<p>Este e um email de <b>teste</b>!</p>", "caiomotorola2010@gmail.com",
    "Caio Campos", "ccaio5119@gmail.com", "Caio Landgraf");

var_dump($novoEmail);