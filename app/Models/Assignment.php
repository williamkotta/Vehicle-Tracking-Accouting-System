<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable =[
        'customername',
        'platenumber',
        'location',
         'reporter_name',
        'case_reported',
         'jobcard',
    ];

}
