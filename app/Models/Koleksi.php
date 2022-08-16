<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function foto(){
        return $this->hasMany(Foto::class);
    }

    public static function koleksis($datas){
        $koleksis = [];
        foreach($datas as $data){
            $koleksis[] = $data->koleksi;
        }
        return $koleksis;
    }
}
