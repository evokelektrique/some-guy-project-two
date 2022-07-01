<?php

/**
 * Zana Salimi File Uploader Application
 * Version: 1.0
 */

require_once __DIR__ . "/Helper.php";
require_once __DIR__ . "/FileUploader.php";
require_once __DIR__ . "/actions.php";

// Get a list of files
$files = FileUploader::get_files_list();
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
   <title>File Uploader</title>
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
      <form accept="<?= Helper::url() ?>actions.php" method="POST" enctype="multipart/form-data">
         <div class="mb-3">
            <label for="selected_file" class="form-label">انتخاب فایل</label>
            <input class="form-control" type="file" id="selected_file" name="selected_file">
            <small class="fst-italic">حداکثر حجم مجاز <?= FileUploader::FILE_SIZE_LIMIT ?> مگابایت می باشد</small>
         </div>

         <input type="submit" class="btn btn-success" name="submit" value="آپلود فایل">
      </form>
   </div>

   <div class="container mt-5">
      <h3 class="fw-bold">لیست فایل های آپلود شده</h3>
      <?php if(empty($files)): ?>
         <p class="text-center fw-normal bg-light rounded py-5 mt-5 fs-5 text-warning">فایلی تاکنون آپلود نشده</p>
      <?php else: ?>
      <ul>
         <?php foreach($files as $file): ?>
         <li>
            <span class="badge bg-secondary me-1">نام: <?= $file["name"] ?></span>
            <span class="badge bg-secondary"><?= $file["size"] ?> بایت</span>
         </li>
         <?php endforeach; ?>
      </ul>
      <?php endif; ?>
   </div>

   <footer class="footer container-fluid fixed-bottom bg-light py-3">
      <p class="text-center">تهیه کننده: <b>زانا سلیمی</b></p>
   </footer>
</body>
</html>
