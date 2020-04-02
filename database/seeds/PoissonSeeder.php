<?php

use App\Poisson;
use Illuminate\Database\Seeder;

class PoissonSeeder extends Seeder
{
    public function run()
    {
        $ArrPoissons = [
            [
                'name' => 'Arapaima',
                'rare' => 3,
                'when' => 'Juin-Septembre',
                'where'=> 'Rivière',
                'price'=> '10.000',
                'img' => 'https://zupimages.net/up/20/14/710u.jpg'
            ],
            [
                'name' => 'Anchois',
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> 'Océan',
                'price'=> '200',
                'img' => 'https://zupimages.net/up/20/14/3jar.jpg'
            ],
            [
                'name' => 'Thon',
                'rare' => 3,
                'when' => 'Novembre-avril',
                'where'=> 'Océan',
                'price'=> '7.000',
                'img' => 'https://zupimages.net/up/20/14/pktm.jpg'
            ],
            [
                'name' => 'Bar',
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> 'Rivière',
                'price'=> '400',
                'img' => 'https://zupimages.net/up/20/14/uxvv.jpg'
            ],
            [
                'name' => 'Scarus',
                'rare' => 2,
                'when' => 'Mars-Novembre',
                'where'=> 'Océan',
                'price'=> '5.000',
                'img' => 'https://zupimages.net/up/20/14/0led.jpg'
            ],
            [
                'name' => 'Arowana',
                'rare' => 3,
                'when' => 'Juin-Septembre',
                'where'=> 'Rivière',
                'price'=> '10.000',
                'img' => 'https://zupimages.net/up/20/14/ge57.png'
            ],
            [
                'name' => 'Ayu',
                'rare' => 1,
                'when' => 'Juillet-septembre',
                'where'=> 'Rivière',
                'price'=> '900',
                'img' => 'https://zupimages.net/up/20/14/wo6p.jpg'
            ],
            [
                'name' => 'Bar commun',
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> 'Océan',
                'price'=> '400',
                'img' => 'https://zupimages.net/up/20/14/chz7.jpg'
            ],
            [
                'name' => 'Bichir',
                'rare' => 2,
                'when' => 'Juin-Septembre',
                'where'=> 'Rivière',
                'price'=> '4.000',
                'img' => 'https://zupimages.net/up/20/14/3jar.jpg'
            ],
            [
                'name' => 'Bouvière',
                'rare' => 1,
                'when' => 'Novembre-Mars',
                'where'=> 'Rivière',
                'price'=> '900',
                'img' => 'https://zupimages.net/up/20/14/hoiv.jpg'
            ],
            [
                'name' => 'Brochet',
                'rare' => 2,
                'when' => 'Septembre-Décembre',
                'where'=> 'Rivière',
                'price'=> '1.800',
                'img' => 'https://zupimages.net/up/20/14/5hiy.jpg'
            ],
            [
                'name' => 'Calmar',
                'rare' => 2,
                'when' => 'Décembre-Aout',
                'where'=> 'Océan',
                'price'=> '500',
                'img' => 'https://zupimages.net/up/20/14/jyo6.jpg'
            ],
            [
                'name' => 'Carangue grosse tête',
                'rare' => 2,
                'when' => 'Mai-Octobre',
                'where'=> 'Océan',
                'price'=> '4.500',
                'img' => 'https://zupimages.net/up/20/14/0fys.png'
            ],
            [
                'name' => 'Carassin',
                'rare' => 1,
                'when' => 'Pas de période',
                'where'=> 'Rivière',
                'price'=> '160',
                'img' => 'https://zupimages.net/up/20/14/vep1.jpg'
            ],
        ];

        forEach($ArrPoissons as $poisson){
            Poisson::create(
                $poisson
            );
        }
    }
}
