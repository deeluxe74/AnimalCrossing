<?php

use App\Insecte;
use Illuminate\Database\Seeder;

class InsecteSeeder extends Seeder
{
    public function run()
    {
        $ArrInsectes = [
            [
                'name' => 'Abeille Naine',
                'rare' => 1,
                'when' => 'Mars-Juillet',
                'where'=> 'Ciel',
                'price'=> '200',
                'img' => 'https://zupimages.net/up/20/14/an1a.jpg'
            ],
            [
                'name' => 'Acrida cinerea',
                'rare' => 1,
                'when' => 'Avril-Novembre',
                'where'=> 'Sol',
                'price'=> '200',
                'img' => 'https://zupimages.net/up/20/14/3llw.jpg'
            ],
            [
                'name' => 'Agrias',
                'rare' => 2,
                'when' => 'Avril-Septembre',
                'where'=> 'Ciel',
                'price'=> '3.000',
                'img' => 'https://zupimages.net/up/20/14/z5o8.jpg'
            ],
            [
                'name' => 'Anax napolitain',
                'rare' => 1,
                'when' => 'Avril-Octobre',
                'where'=> 'Ciel',
                'price'=> '230',
                'img' => 'https://zupimages.net/up/20/14/462j.jpg'
            ],
            [
                'name' => 'Araignée',
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> 'Arbres',
                'price'=> '600',
                'img' => 'https://zupimages.net/up/20/14/dybr.jpg'
            ],
            [
                'name' => 'Attacus atlas',
                'rare' => 2,
                'when' => 'Avril-Septembre',
                'where'=> 'Arbres',
                'price'=> '3.000',
                'img' => 'https://zupimages.net/up/20/14/rojc.jpg'
            ],
            [
                'name' => "Bernard-l'ermite",
                'rare' => 2,
                'when' => 'Nuit',
                'where'=> 'Plage',
                'price'=> '1.000',
                'img' => 'https://zupimages.net/up/20/14/aqjr.png'
            ],
            [
                'name' => 'Bousier',
                'rare' => 2,
                'when' => 'Décembre-Février',
                'where'=> 'Sol',
                'price'=> '2.500',
                'img' => 'https://zupimages.net/up/20/14/k44e.png'
            ],
            [
                'name' => 'Bupreste',
                'rare' => 1,
                'when' => 'Avril-Aout',
                'where'=> 'Arbres',
                'price'=> '2.400',
                'img' => 'https://zupimages.net/up/20/14/vdss.jpg'
            ],
            [
                'name' => 'Capricorne agrumes',
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> 'Arbres',
                'price'=> '350',
                'img' => 'https://zupimages.net/up/20/14/8yor.jpg'
            ],

        ];

        forEach($ArrInsectes as $insecte){
            Insecte::create(
                $insecte
            );
        }
    }
}
