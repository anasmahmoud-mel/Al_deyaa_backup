<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customerlocation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable =['pop_city','pop_price','pop_area'];
} 

    