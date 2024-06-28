<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'password'];
    protected $useTimestamps = true;

    // Optional: validation rules for the model data
    protected $validationRules = [
        'username' => 'required',
        'password' => 'required'
    ];

    // Optional: validation error messages
    protected $validationMessages = [
        'username' => [
            'required' => 'Username is required.'
        ],
        'password' => [
            'required' => 'Password is required.'
        ]
    ];

}