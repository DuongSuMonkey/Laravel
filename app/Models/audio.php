<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class audio extends Model
{
    use HasFactory,LogsActivity;
    protected $fillable=['Id','name','file_name','page_id'];
    protected $table='audios';
    public $timestamps=false;
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()
       ;
    }
    
}
