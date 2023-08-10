<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class text extends Model
{
    use HasFactory;
    protected $fillable=['Id','name','content','audio_id','page_id','XPos','YPos'];
    protected $table='texts';
    public $timestamps=false;
}
