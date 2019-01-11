<?php
/**
 * Created by PhpStorm.
 * User: caiol
 * Date: 11/01/2019
 * Time: 18:57
 */

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


/**
 * Class Email
 * @package Notification
 */
class Email
{
    /**
     * @var string
     */
    private $mail = \stdClass::class;


    /**
     * Email constructor.
     */
    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = 'smtp.sendgrid.net';                      // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = 'apikey';       // SMTP username
        $this->mail->Password = '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';                        // SMTP password
        $this->mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;                                    // TCP port to connect to
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('ccaio5119@gmail.com', 'Suporte Informatika');
    }

    /**
     *
     */
    public function sendMail($subject, $body, $replyEmail, $replyName, $addrenssEmail, $addrenssName)
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addrenssEmail, $addrenssName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}