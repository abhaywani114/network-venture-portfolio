<?php
require __DIR__.'/mail/class.phpmailer.php';
$from = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = nl2br($_POST['message']);

$phpMailer = new PHPMailer(true);
//$phpMailer->SMTPDebug = 4; // Enable verbose debug output
$phpMailer->isSMTP();
$phpMailer->Host = "smtp.zoho.in";
$phpMailer->SMTPAuth = true;
$phpMailer->Username = "support@network-venture.com";
$phpMailer->Password = "jq8xbK8KHQei";
$phpMailer->SMTPSecure = "tls";
$phpMailer->Port = 587;
$phpMailer->isHTML(true);
$phpMailer->CharSet = "UTF-8";
$phpMailer->setFrom("support@network-venture.com", "Support");
$phpMailer->addAddress('support@network-venture.com','admin@network-venture.com');//"mail-to");
$phpMailer->Subject = "Contact Request | $subject";
$phpMailer->Body = <<<EOD
Sender: $from <br/>
From Email: $email <br/>
Msg: <br/>
$msg
EOD;

$phpMailer->send();
echo json_encode(['msg' => 'OK']);
?>