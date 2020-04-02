<?php

use App\Fossile;
use Illuminate\Database\Seeder;

class FossileSeeder extends Seeder
{
    public function run()
    {
        $ArrFossiles = [
            [
                'name' => 'Ankylosaure(x3)',
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> "Pas d'info",
                'price'=> '8.500',
                'img' => 'https://zupimages.net/up/20/14/cds9.jpg'
            ],
            [
                'name' => 'Apatosaure(x3)',
                'rare' => 2,
                'when' => 'Pas de période',
                'where'=> "Pas d'info",
                'price'=> '13.500',
                'img' => 'https://zupimages.net/up/20/14/cds9.jpg'
            ],
            [
                'name' => 'Archélon(x2)',
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> "Pas d'info",
                'price'=> '7.500',
                'img' => 'https://zupimages.net/up/20/14/cds9.jpg'
            ],
            [
                'name' => 'Brachiosaure(x2)',
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> "Pas d'info",
                'price'=> '11.000',
                'img' => 'https://zupimages.net/up/20/14/cds9.jpg'
            ],
            [
                'name' => 'Brontothérium(x3)',
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> "Pas d'info",
                'price'=> '11.000',
                'img' => 'https://zupimages.net/up/20/14/cds9.jpg'
            ],
            [
                'name' => 'Dimétrodon(x3)',
                'rare' => 2,
                'when' => 'Pas de période',
                'where'=> "Pas d'info",
                'price'=> '15.000',
                'img' => 'https://zupimages.net/up/20/14/cds9.jpg'
            ],
            [
                'name' => 'Séismosaure(x5)',
                'rare' => 3,
                'when' => 'Pas de période',
                'where'=> "Pas d'info",
                'price'=> '23.000',
                'img' => 'https://zupimages.net/up/20/14/cds9.jpg'
            ],
            [
                'name' => 'Tyrannosaure rex(x3)',
                'rare' => 3,
                'when' => 'Pas de période',
                'where'=> "Pas d'info",
                'price'=> '16.500',
                'img' => 'https://zupimages.net/up/20/14/cds9.jpg'
            ],

        ];

        forEach($ArrFossiles as $fossile){
            Fossile::create(
                $fossile
            );
        }
    }
}
