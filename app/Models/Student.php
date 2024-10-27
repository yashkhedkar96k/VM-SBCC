<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
      protected $fillable = [
        'gr_no',
        'name',
        'caste',
        'place_of_birth',
        'date_of_birth',
        'last_institution_attended',
        'date_of_admission',
        'class_admitted',
        'conduct',
        'remarks',
        'extra_field',
        'status',
    ];
}
