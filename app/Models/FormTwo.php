<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormTwo extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['year', 'div_one', 'div_two', 'div_three', 'div_four', 'div_zero', 'necta_link'];
}
