<?php
	class Mail{
		public $opt,$mailer;
		public $email = 'gustavoelia7@gmail.com'; // Seu e-mail aqui!
		// public $senha = '********'; // Sua senha aqui!

		public function __construct(Array $parametros){
			include('classes/phpmailer/PHPMailerAutoload.php');
			$this->mailer = new PHPMailer();

			$this->mailer->IsSMTP();
			$this->mailer->Host = 'sandbox.smtp.mailtrap.io'; // SERVIDOR SMTP
			$this->mailer->SMTPSecure = 'tls';
			$this->mailer->Port = 2525; // PORTA DO SMTP
			$this->mailer->SMTPDebug = 0;
			$this->mailer->SMTPAuth = true;
			$this->mailer->Username = 'f7cdfe30941438';
			$this->mailer->Password = 'deb2ecd305f70d';

			$this->mailer->IsHTML(true);
			$this->mailer->SingleTo = true;

			$this->mailer->From = $parametros['email'];
			$this->mailer->FromName = $parametros['name'];

			$this->addAddress($this->email, 'Administrador');
			
			$this->mailer->Subject = 'Nova mensagem do site! (from localhost)';

			$body = '';
			foreach ($parametros as $key => $value) {
				$body .= ucfirst($key).": ".$value;
				$body .= "<hr>";
			}
	
			$this->mailer->Body = $body;
		}

		public function addAddress($mail,$nome){
			$this->mailer->addAddress($mail,$nome);
			return $this;
		}

		public function sendMail(){
			$this->mailer->CharSet = "utf-8";
			try {
				$this->mailer->send();
				echo "Email sent successfully!<br>";
				echo "<a href='index.html'>Submit more emails</a>";
				return true;
			} catch(Exception $e) {
					echo "Message could not be sent. Mailer Error: {$this->mailer->ErrorInfo}";
					return false;
			}
		}
	}
?>