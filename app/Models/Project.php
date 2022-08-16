<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function skill(){
        return $this->belongsToMany(Skil::class);
    }

    public function koleksi(){
        return $this->hasMany(Koleksi::class);
    }

    public function anggota(){
        return $this->hasMany(Anggota::class);
    }
}
