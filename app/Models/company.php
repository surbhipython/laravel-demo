<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class company extends Model
{
    use HasFactory;

        protected $fillable = ['name', 'email','image','address','created_at','updated_at'];
}