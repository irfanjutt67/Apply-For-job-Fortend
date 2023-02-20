<?php
    include('s_connection.php');
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "localsss6900@gmail.com"; //enter you email address
        $mail->Password = '123456789k,k'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('localsss6900@gmail.com'); // Gmail address which you used as SMTP server
        $mail->addAddress('localsss6900@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Page)';
        $mail->Body = "<h3>Name : $name <br>Email: $email <br>Phone : $subject <br>Message : $body</h3>";

        if ($mail->send()) {

            $autoRespond = new PHPMailer();
            $autoRespond->setFrom('localsss6900@gmail.com', 'SZ');
            $autoRespond->AddAddress($email); 
            $autoRespond->Subject = "We received your submission"; 
            $autoRespond->Body = "We received your submission. We will contact you ASAP";
            $autoRespond->Send(); 

            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
