<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    use HasFactory;
    protected $table = 'zipcodes';
    protected $primaryKey = 'd_codigo';
    public $incrementing = false;
    public $timestamps = false;
}
