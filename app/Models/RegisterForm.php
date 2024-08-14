<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'surname','othernames','email','phone','address','learner_surname','learner_names','dob','previous_class','remarks',
    ];
}
