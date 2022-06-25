<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $primarykey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'mess'
    ];

}
