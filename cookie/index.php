<?php

/**
 * Zana Salimi Cookie Application
 * Version: 1.0
 */

require_once __DIR__ . "/Helper.php";
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
   <title>Cookie</title>
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

   <div class="container">
      <div class="alert alert-success my-5">
      <?php 
      // Cookie options
      $expire_date = (new DateTime)->modify('now +5 day')->getTimestamp(); 
      $cookie_name = "cookie_name";
      $cookie_value = "zana salimi";

      // If cookie does not exists, create one
      if(!isset($_COOKIE[$cookie_name])) {

         // Create cookie
         setcookie($cookie_name, $cookie_value, $expire_date);
      }

      // Check cookie
      if(isset($_COOKIE[$cookie_name])) {
         echo "کوکی موجود می باشد با مقدار: " . $cookie_value;
      }
      ?>
      </div>
   </div>


   <footer class="footer container-fluid fixed-bottom bg-light py-3">
      <p class="text-center">تهیه کننده: <b>زانا سلیمی</b></p>
   </footer>
</body>
</html>
