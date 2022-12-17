<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Video extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'title', 'path','created_at','updated_at'
    ];
}