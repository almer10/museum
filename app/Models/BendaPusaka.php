<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class BendaPusaka extends Model
{
    use HasFactory;

    const DIRETORY = 'pusaka';
    const CATEGORY = [
        'keris', 
        'badik', 
        'pedang', 
        'tombak', 
        'gobang', 
        'golok', 
        'cis', 
        'rencong', 
        'meriam',
        'perhiasan',
        'kendaraan',
        'alat makan',
    ];
    

    protected $table = 'benda_pusaka';
    protected $fillable = [
        'kategori',
        'nama_benda',
        'jumlah',
        'kondisi_dahulu',
        'kondisi_sekarang',
        'asal_perolehan',
        'deskripsi',
        'tanggal_perolehan',
        'tempat_penyimpanan',
        'foto',
    ];

    protected $casts = [
        'tanggal_perolehan' => 'datetime',
    ];

    public function saveWithFile()
    {
        $this->foto = $this->foto->store(self::DIRETORY, 'public');
        $this->save();
    }

    public function updateWithFile()
    {
        if ($this->getAttribute('foto') instanceof UploadedFile) {
            $this->foto = $this->foto->store(self::DIRETORY, 'public');
            Storage::disk('public')->delete($this->getOriginal('foto'));
        }

        if ($this->isDirty()) {
            $this->save();
        };
    }

    protected static function booted()
    {
        static::deleting(function ($bendaPusaka) {
            Storage::disk('public')->delete($bendaPusaka->foto);
        });
    }
}
