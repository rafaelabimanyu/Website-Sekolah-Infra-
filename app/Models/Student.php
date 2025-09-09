<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['nama','kelas','jenis_kelamin','status'];

    // Accessor label agar Blade tetap pakai teks Indonesia rapi
    public function getJenisKelaminLabelAttribute(): string
    {
        return $this->jenis_kelamin === 'L' ? 'Laki-Laki' : 'Perempuan';
    }

    public function getStatusLabelAttribute(): string
    {
        return $this->status === 'active' ? 'Active' : 'Graduated';
    }

    public function getStatusClassAttribute(): string
    {
        return $this->status === 'active' ? 'active' : 'grad';
    }
}
