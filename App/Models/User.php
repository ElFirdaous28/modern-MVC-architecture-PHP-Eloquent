<?php

namespace App\Models;

use Core\Model; // Import the base Model class

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email'];
}
