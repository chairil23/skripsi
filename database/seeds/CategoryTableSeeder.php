<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Subcategory;
use App\Product;

class CategoryTableSeeder extends Seeder
{

    protected $data = [
        'OUTDOOR' => [
            'BALIHO',
            'SPANDUK',
        ],
        'INDOOR' => [
            'TRIPOD BANNER',
            'X-BANNER',
            'POSTER',
            'ROLL UP BANNER'
        ],
        'OFFSET' => [
            'CETAK BUKU',
            'TABLE TENT',
            'NOTEBOOK',
            'KALENDER'
        ]
    ];

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {
       
        foreach($this->data as $categories => $subcategories){
            $id = Category::create(['name' => $categories])->id;

            foreach($subcategories as $subcategory){
                Subcategory::create([
                    'category_id' => $id,
                    'name' => $subcategory
                ]);
            }
        }
       
    }
}
