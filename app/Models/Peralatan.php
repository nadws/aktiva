<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;
    protected $table = 'tb_peralatan';
    protected $guarded = [];
}
