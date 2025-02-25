<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kota', 'level', 'province_id'];
    public $timestamps = false;

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
