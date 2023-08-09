<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stories extends Model
{
    use HasFactory;
    protected $fillable=['Id','name','author','genre','status','content'];
    protected $table='stories';
    public $timestamps=false;
    
}
