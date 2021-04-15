<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];


    protected $fillable =[
    'serial', 'polise', 'Account_name','file',
    'receiver_full_name','receiver_phone_number','receiver_secondary_phone_number',
    'city','area','receiver_street_name','receiver_notes',
    'package_charge','shpping_charge','postal_charge','package_content'
    ];
}
