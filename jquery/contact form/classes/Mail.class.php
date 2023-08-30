<?php
	class Mail{
		public $opt,$mailer;
		public $email = 'gustavoelia7@gmail.com'; // Seu e-mail aqui!
		public $senha = 'regura181310'; // Sua senha aqui!

		public function __construct(Array $parametros){
			include('classes/phpmailer/PHPMailerAutoload.php');
			$this->mailer = new PHPMailer();

			$this->mailer->IsSMTP();
			$this->mailer->Host = 'smtp.gmail.com'; // SERVIDOR SMTP DA HOSPEDAGEM
			$this->mailer->Port = 587; // PORTA DO SMTP
			$this->mailer->SMTPDebug = 2;
			$this->mailer->SMTPAuth = true;
			$this->mailer->SMTPSecure = 'tls';
			$this->mailer->Username = $this->email;
			$this->mailer->Password = $this->senha;

			$this->mailer->IsHTML(true);
			$this->mailer->SingleTo = true;

			$this->mailer->From = $this->email;
			$this->mailer->FromName = $this->email;

			$this->addAddress($this->email, 'Administrador');
			
			$this->mailer->Subject = 'Nova mensagem do site! (from localhost)';

			$body = '';
			foreach ($parametros as $key => $value) {
				$body.=ucfirst($key).": ".$value;
				$body.="<hr>";
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
				if($this->mailer->send()) {
					return true;
				} else {
					return false;
				}
			} catch(Exception $e) {
					echo "Message could not be sent. Mailer Error: {$this->mailer->ErrorInfo}";
					return false;
				}
			}
		}
?>