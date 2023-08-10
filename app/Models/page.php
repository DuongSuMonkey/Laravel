<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    use HasFactory;
    protected $fillable=['Id','story_id','name','title','background_url','content'];
    protected $table='pages';
    public $timestamps=false;
  
}
