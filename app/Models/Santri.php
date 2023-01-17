<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    // protected $guarded = [
    //     'id'
    // ];

    protected $fillable = [
        'user_id', 'nisn', 'nik', 'ttl', 'alamat'
    ];
}
