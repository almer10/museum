<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    use HasFactory;

    const DIRETORY = 'event';

    protected $fillable = [
        'name_event',
        'tanggal_event',
        'deskripsi',
        'foto',
    ];

    protected $casts = [
        'tanggal_event' => 'datetime',
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
