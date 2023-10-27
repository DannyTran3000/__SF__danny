<?php
class ContactController
{
  public function index()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      $result = mail(
        'trandangminhnhat.dev@gmail.com',
        "[STRAWFLAG] - [NEW MESSAGE] | $name",
        $message,
        "From: $email"
      );

      // $mail = new PHPMailer();
      // $mail->isSMTP();
      // $mail->Host = 'smtp.gmail.com';
      // $mail->SMTPAuth = true;
      // $mail->Username = 'trandangminhnhat.dev@gmail.com';
      // $mail->Password = 'Mygodislove1303';
      // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      // $mail->Port = 587;

      // $mail->setFrom($email);
      // $mail->addAddress('dannytran.strawflag@gmail.com');
      // $mail->isHTML(true);

      // $mail->Subject = "[STRAWFLAG] - [NEW MESSAGE] | $name";
      // $mail->Body = $message;

      // $result = $mail->send();

      header('Content-Type: application/json');
      echo json_encode([
        'data' => [
          'message' => json_encode($result)
        ],
        'status' => 200
      ]);
    }
  }
}