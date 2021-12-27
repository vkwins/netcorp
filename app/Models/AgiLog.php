<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgiLog extends Model
{
    use HasFactory;
    protected $table = 'agi_log';
    public $timestamps = false;
    protected $fillable = ['name','year_mon','count','local_time','lat','lng','speed','direction'];
    protected $dates = ['year_mon','local_time'];
}