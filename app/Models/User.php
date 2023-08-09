<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
use HasFactory;
protected $fillable=['Id','taikhoan','password','name','age','sex','Type'];
protected $table='users';
public $timestamps=false;
// const CREATE_AT='create';
// const UPDATE_UP='update';
protected  $attributes=[
'age'=>5
];
   
}
