<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class touch extends Model
{
    use HasFactory;
    protected $fillable=['id','page_id','XPos','YPos','Width','Height'];
    protected $table='stories';
    public $timestamps=false;
}
