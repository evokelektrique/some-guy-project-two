<?php
/**
 * Zana Salimi Email Service Application
 * Version: 1.0
 */

require_once __DIR__ . "/Helper.php";
require_once __DIR__ . "/actions.php";
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
   <title>Email Service - سرویس ایمیل</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Css -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="<?= Helper::url() ?>resources/fonts/dana/css/fontface.css">
   <link rel="stylesheet" type="text/css" href="<?= Helper::url() ?>resources/css/app.css">

   <!-- JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

   <div class="container mt-5">
      <h3 class="fw-bold">ارسال و دریافت ایمیل</h3>
      <?php
      // READ LATEST EMAIL
      $username = "USERNAME";
      $password = "PASSWORD";
      $mailserver = "mail.server.com";
      $mailbox = imap_open("{$mailserver}INBOX", $username, $password);
      $headers = imap_headers($mail);
      $last = imap_num_msg($mail);
      $header = imap_header($mail, $last);
      $body = imap_body($mail, $last);
      imap_close($mail);

      // Print latest email
      echo "Latest email: " . $body;


      // SEND EMAIL
      $message = "Hello world";
      $subject = "My E-mail subject";
      $to = "some@email.com";
      mail($to, $subject, $message);
      ?>

   </div>

   <footer class="footer container-fluid fixed-bottom bg-light py-3">
      <p class="text-center">تهیه کننده: <b>زانا سلیمی</b></p>
   </footer>
</body>
</html>
