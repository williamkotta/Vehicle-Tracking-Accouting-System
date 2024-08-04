<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceRequisition extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable=[
        'device_number',
        'technician_name',
        'technician_phonenumber',
        'status',
    ];
}
