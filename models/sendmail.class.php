<?php 
require_once 'common/lib/phpmailer/class.phpmailer.php';

/**
* 
*/
class SendMail extends PHPMailer
{

	public function hj(){
		echo '<br> -> '.MAIL_SECURE;
		echo '<br> -> '.MAIL_HOST;
		echo '<br> -> '.MAIL_PORT;
		echo '<br> -> '.MAIL_USER;
		echo '<br> -> '.MAIL_USER_PASS;
		echo '<br> -> '.MAIL_USER;
		echo '<br> -> '.MAIL_ALTBODY;
	}

	// METODOS
	/*
	public function sendMail(){

		$dataMail = $this->getMailRecep();
        
        $AddAddressCount = count($dataMail['AddAddress']);
        $AddCCCount = count($dataMail['AddCC']);
        $AddBCCCount = count($dataMail['AddBCC']);

		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth=true;
		$mail->SMTPSecure=MAIL_SECURE;
		$mail->SMTPDebug=1;
		$mail->Host=MAIL_HOST;
		$mail->Port=MAIL_PORT;
		$mail->Username=MAIL_USER;
		$mail->Password=MAIL_USER_PASS;
	    $mail->From=MAIL_USER;
		$mail->FromName=$this->getMailFrom();
		$mail->Subject=$this->getMailSubject();
		$mail->AltBody=MAIL_ALTBODY;
		$mail->AddAttachment($file['file_tmp_name'],$file['file_name']);
		$mail->CharSet="UTF-8";
		$mail->MsgHTML($this->html_view_mail($arrMail));


        if($AddAddressCount > 0){
            for($i=0;$i<$AddAddressCount;$i++){
                $mail->AddAddress($dataMail['AddAddress'][$i],$dataMail['AddAddress'][$i]);               
            }
        }
        if($AddCCCount > 0){
            for($f=0;$f<$AddCCCount;$f++){
                $mail->AddCC($dataMail['AddCC'][$f],$dataMail['AddCC'][$f]);               
            }     
        }
        if($AddBCCCount > 0){
            for($g=0;$g<$AddBCCCount;$g++){
                $mail->AddBCC($dataMail['AddBCC'][$g],$dataMail['AddBCC'][$g]);               
            }   
        }

		$mail->IsHTML(true);
		$mailSended = $mail->Send();

		return $mailSended;
	}
    */
 
}

 ?>