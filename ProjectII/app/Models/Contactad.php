<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactad extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primarykey = 'id';
    protected $guarded = [];
}
