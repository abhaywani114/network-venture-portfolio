<?php
require __DIR__.'/mail/class.phpmailer.php';
$phpMailer = new PHPMailer(true);
$phpMailer->isSMTP();
$phpMailer->Host = "smtp.zoho.com";
$phpMailer->SMTPAuth = true;
$phpMailer->Username = "support@network-venture.com";
$phpMailer->Password = "Pluto0912HONEY";
$phpMailer->SMTPSecure = "tls";
$phpMailer->Port = 587;
$phpMailer->isHTML(true);
$phpMailer->CharSet = "UTF-8";
$phpMailer->setFrom("mail-user", "mail-name");
$phpMailer->addAddress('admin@network-venture.com');//"mail-to");
$phpMailer->Subject = "subject";
$phpMailer->Body = "mail-body";
$phpMailer->send();
echo json_encode(['msg' => 'OK']);
?>