<?php

class phpMailer{
	private $mailer;

	public function __construct(){
		require_once('PHPMailer/src/PHPMailer.php');
		require_once('PHPMailer/src/SMTP.php');
		$this->mailer= new PHPMailer\PHPMailer\PHPMailer;
		$this->mailer->isSMTP();
		$this->mailer->Host ="smtp.gmail.com";
		//$this->mailer->CharSet ="UTF-8";
		$this->mailer->Port = 465;
		$this->mailer->SMTPAuth=true;
		$this->mailer->Username = "zocolSCVPA@gmail.com";
		//$this->mailer->SMTPDebug=true;
		$this->mailer->Password = "Zocol2018";
		$this->mailer->setFrom("zocolSCVPA@gmail.com");
		$this->mailer->SMTPSecure="ssl";

	}

	public function addDestinatario($email){
		$this->mailer->addAddress($email);
	}

	public function enviarMensaje($contenido){
		$this->mailer->subject="se ha enviado informacion";
		$this->mailer->msgHTML($contenido);
		if ($this->mailer->send()){
			return "enviado";
	}else{
		return "no se pudo enviar debido a : ".$this->mailer->ErrorInfo."<br>";
	}
}
}

 ?>