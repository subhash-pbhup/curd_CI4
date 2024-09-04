<?php

namespace App\Controllers;

use App\Models\Admin_model;
use CodeIgniter\Files\File;

class Admin extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model=model(Admin_model::class);
    }

    public function index()
    {

        $data = [
            'admin_data' =>$this->model->getadmin(),
            'title'     => 'News archive',
        ];

        return view('admin', $data);
           
    }

    public function save()
    {

        $img = $this->request->getFile('file');


        $newName = $img->getRandomName();
        $path="file";
        $img->move('file', $newName);

        $data = array(
            'name'  => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'mobile'  => $this->request->getPost('mobile'),
            'address' => $this->request->getPost('address'),
            'file' => $newName,
        );



        // echo"<pre>";
        // print_r($img->getRandomName());
        // die;

        $this->model->saveProduct($data);
        return redirect()->to('admin');
    }

    public function delete($id = null){
        $this->model->admindel($id);
        return redirect()->to('/admin');
    }

}