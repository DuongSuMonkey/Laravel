<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class text extends Model
{
    use HasFactory,LogsActivity;
    protected $fillable=['Id','name','content','audio_id','page_id','XPos','YPos'];
    protected $table='texts';
    public $timestamps=false;
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logAll();
    }
}
