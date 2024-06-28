<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function process()
    {
        // Validate input
        $validation = $this->validate([
            'name' => 'required|min_length[4]|max_length[100]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'phone' => 'required|min_length[10]|max_length[15]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmPassword' => 'required|matches[password]',
        ]);

        // Check if validation passed
        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        // Retrieve input values
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $password = $this->request->getPost('password');


        if (empty($password)) {
            return redirect()->back()->withInput()->with('error', 'Password cannot be empty.');
        }

        $hashedPassword = password_hash((string)$password, PASSWORD_DEFAULT);

        if (!$hashedPassword) {
            return redirect()->back()->withInput()->with('error', 'Password hashing failed.');
        }

        // Save user data
        $usersModel = new UsersModel();
        $usersModel->save([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => $hashedPassword,
        ]);

        // Redirect with success message
        return redirect()->to('/login')->with('success', 'Registration successful. Please log in.');
    }
}
