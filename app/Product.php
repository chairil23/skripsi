<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected  $fillable = ['id','freelancer_id','jdl_Pdk','hrg_awal','hrg_promo','category_id','subcategory_id','description'];

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
            'description' => ' ',            
            'images' => [
                Image::form(),
            ]

        ];
    }
}

