<?php

/**
 * Zana Salimi File Uploader Application
 * Version: 1.0
 */

class FileUploader {

   const FILE_SIZE_LIMIT = 5;

   /**
    * Upload given file into
    *
    * @param  array  $file $_FILES global variable
    * @param  string $dir  Directory to upload files to
    * @return boolean      Upload status
    */
   public static function upload($file, string $dir = "uploads"): bool {
      $full_dir = __DIR__ . "/" . $dir;

      // File size limit correction
      $limit_size = 1000000 * self::FILE_SIZE_LIMIT;

      // File size validation
      if($file["size"] > $limit_size) {
         return false;
      }

      // Upload file
      $upload = move_uploaded_file($file["tmp_name"], $full_dir . "/" . $file["name"]);
      if(!$upload) {
         return false;
      }

      return true;
   }

   /**
    * Get a list of files with their sizes in KB in given folder
    *
    * @param  string $dir Directory to scan files
    * @return array       List of files
    */
   public static function get_files_list(string $dir = "uploads"): array {
      $full_dir = __DIR__ . "/" . $dir;
      $files = [];

      $scan = scandir($full_dir);
      foreach($scan as $file) {
         if(in_array($file, [".", ".."])) {
            continue;
         }

         $files[] = [
            "name" => $file,
            "size" => filesize($full_dir . "/" . $file)
         ];
      }

      return $files;
   }
}
