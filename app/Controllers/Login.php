<?php

namespace App\Controllers;
use App\Models\UsersModel;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }


    public function authenticate()
    {
        $session = session();

        // Load the user model
        $model = new UsersModel();

        // Validate input
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        var_dump($_POST); die();

        // Check if user exists
        $user = $model->where('username', $username)->first();

        if ($user) {
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Set session data for authenticated user
                $session->set([
                    'username' => $user['username'],
                    'logged_in' => true
                ]);

                // Redirect to a success page or dashboard
                return redirect()->to('/dashboard');
            }
        }

        // Redirect back to login if authentication fails
        return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
