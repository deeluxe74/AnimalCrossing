<?php

use App\Autres;
use Illuminate\Database\Seeder;

class AutresSeeder extends Seeder
{
    public function run()
    {
        $ArrAutres = [
            [
                'name' => "Branche d'arbre",
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> 'Arbres',
                'price'=> '5',
                'img' => 'https://zupimages.net/up/20/14/m0e0.jpg'
            ],
            [
                'name' => "Bois",
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> 'Arbres',
                'price'=> '60',
                'img' => 'https://zupimages.net/up/20/14/6lpn.png'
            ],
            [
                'name' => "Bois Dur",
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> 'Arbres',
                'price'=> '60',
                'img' => 'https://zupimages.net/up/20/14/cv4c.jpg'
            ],
            [
                'name' => "Bois tendre",
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> 'Arbres',
                'price'=> '60',
                'img' => 'https://zupimages.net/up/20/14/tqmu.jpeg'
            ],
            [
                'name' => "Fer",
                'rare' => 2,
                'when' => 'Pas de période',
                'where'=> 'Pierres',
                'price'=> '??',
                'img' => 'https://zupimages.net/up/20/14/hvxp.png'
            ],

        ];

        forEach($ArrAutres as $autres){
            Autres::create(
                $autres
            );
        }
    }
}
