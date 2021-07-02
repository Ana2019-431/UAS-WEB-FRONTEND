<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';
    protected $fillable = ['Nama','foto','Jenis_Kelamin','Alamat','updated_at'];

    public function getFoto()
    {
        if(!$this->foto){
            return asset('images/image-default.png');
        }
        return asset('images/'.$this->foto);
    }
}
