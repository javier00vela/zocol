<?php 
class shapeMailer{
	private $mailer;

	public function __construct(){
		$this->mailer= new PHPMailer;
		$this->mailer->isSMTP();
		$this->mailer->Host = "smtp.gmail.com";
		$this->mailer->port = 587;
		$this->mailer->SMTPAuth=true;
		$this->mailer->Username = 'jjvela04@misena.edu.co';
		$this->mailer->Password = 'Javiervela04';
	}

	public function addDestinatario($nombre, $email){
		$this->mailer->addAdress($email,$nombre);
	}

	public function enviarMensaje($shapes = array()){
		$this->mailer->subject="se ha enviado informacion";
		$body="<h1>las figuras registradas son:</h1>"
		$this->mailer->msgHTML($body);
		$body .= "<ul>";
		foreach ($shapes as $figura){
			if ($figura instanceof shapeInterface){
				$body.= "<li>{$figura->tipo_figura}</li>"
			}
		}

		body .="</ul>";
		$this->mailer->msgHTML($body);
		if ($this->mailer->send())
			return true;
	}else{
		return false;
	}
}


 ?>