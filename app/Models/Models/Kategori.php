<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'rahmi_kategoris';

    protected $fillable = ['nama_kategori'];

    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
