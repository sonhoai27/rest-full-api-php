<?php

    use MVC\Controller;

    class ControllersBooks extends Controller
    {

        public function index()
        {
            // Connect to database
            $model = $this->model('books');

            // Read All Books And Authors Data
            $data_list = array(
                "name" => "Nguyen Hoai Son",
                "Age" => 20
            );

        // Send Response
        $this->response->sendStatus(200);
        $this->response->setContent($data_list);
//            $this->view->data['me'] = $data_list;
//            $this->view->render("Books");
        }

        public function hello()
        {
            print_r($this->request->getUrl());
        }

        public function upload()
        {
            $uploadFiles = $this->request->getUploadedFiles();
            $uploadedFile = $uploadFiles['upload-image'];
            if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
                $filename = $this->file->moveUploadedFile(FINDER . "/Images", $uploadedFile);
                echo $filename;
            }
        }
    }
