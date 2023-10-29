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