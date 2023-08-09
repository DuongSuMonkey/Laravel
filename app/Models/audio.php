<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audio extends Model
{
    use HasFactory;
    protected $fillable=['Id','name','file_name'];
    protected $table='audio';
    public $timestamps=false;
}
