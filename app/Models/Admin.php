<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // ✅ THIS IS REQUIRED

class Admin extends Authenticatable
{
    protected $guarded = [];
    protected $hidden = [
        'password',
    ];

    public static function createAdmin()
    {
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
