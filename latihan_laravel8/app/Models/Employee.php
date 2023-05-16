<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// untuk menampilkan data yang di ambil dari database
class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];
}
