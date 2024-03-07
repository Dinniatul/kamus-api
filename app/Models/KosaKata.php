<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KosaKata extends Model
{
    use HasFactory;

    protected $fillable = ['kosa_kata', 'arti', 'detail', 'ucapan_talawi', 'ucapan_indonesia'];
}
