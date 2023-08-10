<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audio extends Model
{
    use HasFactory;
    protected $fillable=['Id','name','file_name','page_id'];
    protected $table='audios';
    public $timestamps=false;
}
