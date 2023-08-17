<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class stories extends Model
{
    use HasFactory,LogsActivity;
    protected $fillable=['Id','name','author','genre','status','content'];
    protected $table='stories';
    public $timestamps=false;
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()
       ;
    }
    public function pages()
  {
    return $this->hasMany(page::class, 'story_id');
  }
  
}
