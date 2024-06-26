<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{   
    protected $table = 'student';
    use HasFactory;

    protected $fillable = [
        'students_DNI',
        'name',
        'last_name',
        'date_of_birth'
    ];
}
