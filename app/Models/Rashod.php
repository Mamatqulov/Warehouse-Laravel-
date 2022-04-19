<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rashod extends Model
{
    use HasFactory;
    protected $rashod_table = "rashod";
    protected $fillable = array(
       "id_rashod", "pokupatel","tel","date","dostavka","count_r"
    );
    public $timestamps = false;
}
