<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'password',
        'nama',
        'no_ktp',
        'status',
        'alamat',
        'tanggal_lahir',
        'pekerjaan',  
        'tanggal_mulai',
        'tanggal_akhir',
        'keterangan',
        'aktif',
        'keterangan_non_aktif',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'tanggal_lahir' => 'datetime',
        'tanggal_mulai' => 'datetime',
        'tanggal_akhir' => 'datetime',
    ];

    public function penanggungJawab() {
        return $this->hasOne(PenanggungJawab::class, 'id_admin', 'id');
    }
}
