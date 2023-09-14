<?php
    use PHPMailer\PHPMailer\PHPMailer;

    class Email {
        function __construct() {
            include('classes/PHPMailer/src/PHPMailer.php');
            include('classes/PHPMailer/src/SMTP.php');
            $mail = new PHPMailer(true);
            $email = 'contato@gustavosouza.com';

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'sandbox.smtp.mailtrap.io';
                $mail->SMTPAuth = true;
                $mail->SMTPDebug = 0;
                $mail->Username = 'f7cdfe30941438';
                $mail->Password = 'deb2ecd305f70d';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 2525;

                // Sender and recipients
                $mail->setFrom('foo@foo.com', 'John Doe');
                $mail->addAddress($email, 'Admin');
                $mail->addReplyTo($email, 'Admin');

                // Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'New e-mail from John Doe';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                // Send email
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
?>