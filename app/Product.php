<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected  $fillable = ['id','jdl_Pdk','hrg_awal','hrg_promo','kategori','sub_kategori','description'];

    public function freelancer(){
    return $this->belongsTo(Freelancer::class);
}

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function subCategory(){
        return $this->belongsTo(SubCategory::class);
    }

    public function form(){
        return [
            'jdl_Pdk' => ' ',
            'hrg_awal' => 0,
            'hrg_promo' => 0,
            'kategori' => ' ',
            'description' => ' ',            
            'images' => [
                Image::form(),
            ]

        ];
    }
}

