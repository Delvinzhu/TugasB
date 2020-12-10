<?php

use Illuminate\Database\Seeder;
use App\Unit;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $un = [
            [
                'name' => 'Bouquet',
                'image' => 'bouquet.png',
            ],
            [
                'name' => 'Flower Board',
                'image' => 'flower board.png',
            ],
            [
                'name' => 'Gift Basket',
                'image' => 'gift basket.png',
            ],

        ];

        foreach($un as $u){
            Unit::create($u);
        }
    }
}
