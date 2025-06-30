<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'rahmi_anggotas';

    protected $fillable = [
        'nama', 'email', 'alamat',
    ];

    // Relasi ke peminjaman
    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
