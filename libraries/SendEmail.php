<?php

class SendEmail {

   public  static function firemail($senderemail, $receiveremail, $subject, $message, $customer, $atttach=true)
    {
        $error = 'Error';
        $success = 'Success';

        $mail = new PHPMailer();
        $mail->CharSet = "UTF-8";
        $mail->IsSMTP();
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls";
        $mail->Host       = "smtp.mailgun.org";
        $mail->Port       = 587;
        $mail->Username   = USERNAME;
        $mail->Password   = PASSWORD;

        $mail->From = $senderemail;
        $mail->FromName = $customer;
        $mail->Sender = $senderemail;

        $mail->AddAddress($receiveremail);
        $mail->Subject = $subject;

        $mail->IsHTML(true);
        $mail->Body = $message;

        if ($atttach == true){
            $mail->addAttachment();
        }

        if (!$mail->Send()) {
            return $mail->ErrorInfo;
        } else {
            return $success;
        }


    }
    public static function compose($email,$serialnumber){

        $subject = 'Account Activation';
        $customer = 'AHPC';
        $message = "Your account has been approved this is your serial number <b>".$serialnumber."</b>";

        return self::firemail(MFCSENDEREMAIL, $email, $subject, $message, $customer, false);
    }
}