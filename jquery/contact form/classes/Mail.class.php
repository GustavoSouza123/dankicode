<?php
	class Mail {
		public $opt, $mailer;

		public function __construct(Array $parameters){
			include('classes/phpmailer/PHPMailerAutoload.php');
			$this->mailer = new PHPMailer();
			$email = 'gustavoelia7@gmail.com'; // my email
			// $senha = '********'; // my password

			// SMTP settings
			$this->mailer->IsSMTP();
			$this->mailer->Host = 'sandbox.smtp.mailtrap.io'; // SMTP server
			$this->mailer->SMTPSecure = 'tls';
			$this->mailer->Port = 2525; // SMTP port
			$this->mailer->SMTPDebug = 0;
			$this->mailer->SMTPAuth = true;
			$this->mailer->Username = 'f7cdfe30941438';
			$this->mailer->Password = 'deb2ecd305f70d';

			// Sender and recipient
			$this->mailer->setFrom($parameters['email'], $parameters['name']);
			$this->mailer->addAddress($email, 'Admin');
			$this->mailer->addReplyTo($email, 'Admin');

			// Email content
			$this->mailer->IsHTML(true);
			$this->mailer->SingleTo = true;
			$this->mailer->Subject = 'Nova mensagem do site!';

			$body = 'From: ' . $parameters['name'] . ' &lt;' . $parameters['email'] . '&gt;';
			$body .= '<hr>';
			$body .= 'To: &lt;' . $email . '&gt;';
			$body .= '<hr>';
			foreach ($parameters as $key => $value) {
				if($key != 'name' && $key != 'email') {
					$body .= ucfirst($key).': '.$value;
					$body .= '<hr>';
				}
			}
	
			$this->mailer->Body = $body;
		}

		public function sendMail(){
			$this->mailer->CharSet = "utf-8";
			try {
				$this->mailer->send();
				return true;
			} catch(Exception $e) {
					echo "Message could not be sent. Mailer Error: {$this->mailer->ErrorInfo}";
					return false;
			}
		}
	}
?>