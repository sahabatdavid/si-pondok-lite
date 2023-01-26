<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Asrama;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'asrama_id', 'nisn', 'nik', 'ttl', 'alamat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function asrama()
    {
        return $this->belongsTo(Asrama::class);
    }
}
