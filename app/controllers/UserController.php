<?php

namespace App\controllers;

use App\core\App;
use App\models\User;

class UserController
{
    /**
     * @return void
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @return void
     */
    public function members()
    {
        $users = User::getAll();

        return view('members', [
            'users' => $users
        ]);
    }

    /**
     * @return bool
     */
    public function store(): bool
    {
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            // get details of the uploaded file
            $fileTmpPath = $_FILES['photo']['tmp_name'];
            $fileName = $_FILES['photo']['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $uploadFileDir = 'public/storage/';
            $dest_path = $uploadFileDir . $newFileName;
            move_uploaded_file($fileTmpPath, $dest_path);
            $_POST['photo'] = $dest_path;
        } else {
            $_POST['photo'] = 'public/storage/no-image.jpg';
        }

        $validation = User::validate($_POST);
        if (!$validation) {
            User::create($_POST);
        } else {
            echo json_encode($validation);
        }

        return true;
    }
	
	/**
     * @return bool
     */
	public function validateField(): bool
	{
		$validation = User::validateOne($_POST['field'], $_POST['value']);
		if ($validation) {
            echo json_encode($validation);
        }		
		
		return true;
	}
}