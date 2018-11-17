<?php
    namespace MVC;

    use Http\Files;

    class File {
        private static $instance;
        public function __construct() {}

        public static function getInstance() {
            if(!self::$instance){
                self::$instance = new File();
            }
            return self::$instance;
        }
        public function issetFile($fileName){

        }
        public function deleteFile(){

        }
        public function issetFolder(){

        }
        public function deleteFolder(){

        }
        public function moveUploadedFile($directory, Files $uploadedFile, int $size = 0)
        {
            $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
            $basename = bin2hex(random_bytes(5)).(strtotime(date("Y/m/d"))*1000);
            $filename = sprintf('%s.%0.8s', $basename, $extension);
            $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);
            return $filename;
        }
    }
