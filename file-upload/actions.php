<?php

/**
 * Zana Salimi File Uploader Application
 * Version: 1.0
 */

?>

<div class="container my-5">

<?php
// Upload
if(isset($_POST["submit"])) {
   $result = FileUploader::upload($_FILES["selected_file"]);

   if($result) {
      ?>
      <div class="alert alert-success">با موفقیت آپلود انجام شد</div>
      <?php
   } else {
      ?>
      <div class="alert alert-danger">آپلود به مشکل مواجه شد</div>
      <?php
   }
}
?>

</div>
