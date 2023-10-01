<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RegisterModel;
use App\Models\ProductModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function login()
    {
        helper(['form']);
        return view('login');
    }

    public function register()
    {
        helper(['form']);
        return view('register');
    }

    public function authreg()
{
    helper(['form']);
    $rules = [
        'username' => 'required|min_length[1]|max_length[25]',
        'password' => 'required|min_length[1]|max_length[25]',
        'confirm_password' => 'required|matches[password]', // Add a rule for confirming the password
        'email' => 'required|valid_email', // Add a rule for email
    ];

    if ($this->validate($rules)) {
        $registerModel = new RegisterModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'email' => $this->request->getVar('email'), // Get the email input
        ];
        $registerModel->insert($data); // Insert data into the "register" table
        return redirect()->to('/login');
    } else {
        $data['validation'] = $this->validator;
        return view('register', $data);
    }
}

   

    public function authlogin()
    {
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $userModel->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            if (password_verify($password, $pass)) {
                $session->set('id', $data['id']);
                $session->set('username', $username);
                $session->set('isloggedin', true);
                return redirect()->to('/dashboard'); // Change this to the dashboard route
            } else {
                $session->setFlashdata('msg', 'Password is incorrect');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'There is no such username');
            return redirect()->to('/login');
        }
    }
}