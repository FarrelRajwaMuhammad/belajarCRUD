<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    use HasFactory;

    protected $fillable = ['nama_provinsi'];
    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
