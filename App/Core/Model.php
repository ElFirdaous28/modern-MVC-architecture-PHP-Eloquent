<?php

namespace App\Core;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $guarded = ['id']; // Prevent mass assignment of `id`
    public $timestamps = true;   // Enable timestamps (if your table has `created_at` & `updated_at`)
}