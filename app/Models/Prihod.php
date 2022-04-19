<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prihod extends Model
{
    use HasFactory;
    protected $prihod_table = "prihod";
    protected $fillable = array(
       "name", "premechanie","razmer","white","dcolor","pdcolor","count_p"
    );
    public $timestamps = false;
}