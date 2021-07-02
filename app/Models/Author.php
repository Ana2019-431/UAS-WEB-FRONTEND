<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';
    protected $fillable = ['title','picture','content','published','created_at'];

    public function getPicture()
    {
        if(!$this->picture){
            return asset('admin/assets/img/image-default.png');
        }
        return asset('images/'.$this->picture);
    }
}
