<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use CrudTrait;
    use HasFactory;
   
   protected $fillable=[

    'model',
    'device_number',
    'status',
   ];
}
