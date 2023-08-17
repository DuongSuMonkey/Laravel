<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class page extends Model
{
    use HasFactory,LogsActivity;
    protected $fillable=['Id','story_id','name','title','background_url','content'];
    protected $table='pages';
    public $timestamps=false;
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()
       ;
    }
    public function audios() {
        return $this->hasMany(audio::class,'page_id');
    }
    public function texts() {
        return $this->hasMany(text::class,'page_id');
    }
}
