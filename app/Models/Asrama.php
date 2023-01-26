<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Santri;

class Asrama extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function santris()
    {
        return $this->hasMany(Santri::class);
    }
}
