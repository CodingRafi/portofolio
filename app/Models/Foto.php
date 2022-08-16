<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Foto extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function koleksi(){
        return $this->belongsTo(Koleksi::class);
    }

    public static function uploadFoto($gambar, $koleksi, $kategori){
        if(count($gambar) > 0){ // mengecek lagi bener bener ada gak isinya
            foreach($gambar as $file){
                $nama = $file->store('fotoProject');
                Foto::create([
                    'koleksi_id' => $koleksi->id,
                    'nama' => $nama,
                    'kategori' => $kategori
                ]);
            }
        }
    }

    public static function UploadSigleFoto($foto, $koleksi, $kategori){
        $nama = $foto->store('fotoProject');
        Foto::create([
            'koleksi_id' => $koleksi->id,
            'nama' => $nama,
            'kategori' => $kategori
        ]);
    }

    public static function foto($koleksis){
        $fotos = [];

        foreach($koleksis as $koleksi){
            if(count($koleksi) > 0){
                $fotos[] = $koleksi[0]->foto; 
            }else{
                $fotos[] = [[]];
            }
        }
        
        return $fotos;
    }

    public static function deleteFoto($fotos){
        foreach ($fotos as $key => $foto) {
            Storage::delete($foto->nama);
            Foto::destroy($foto->id);
        }
    }
}
