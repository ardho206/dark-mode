<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'name' => 'Mobile Legends',
                'slug' => 'mobile-legends',
                'logo' => '../img/logo/mlLogo.jpg',
                'banner' => '../img/banner/mlBanner.webp',
                'type' => 'Diamond',
                'inputType' => 'id-and-server',
                'topup' => true,
                'joki' => true
            ],
            [
                'name' => 'Free Fire',
                'slug' => 'free-fire',
                'logo' => '../img/logo/ffLogo.jpg',
                'banner' => '../img/banner/ffBanner.webp',
                'type' => 'Diamond',
                'inputType' => 'id-only',
                'topup' => false,
                'joki' => true
            ],
            [
                'name' => 'PUBG Mobile',
                'slug' => 'pubg-mobile',
                'logo' => '../img/logo/pubgLogo.jpg',
                'banner' => '../img/banner/pubgBanner.webp',
                'type' => 'UC',
                'inputType' => 'id-only',
                'topup' => true,
                'joki' => false
            ],
            [
                'name' => 'Arena Of Valor',
                'slug' => 'arena-of-valor',
                'logo' => '../img/logo/aovLogo.jpg',
                'banner' => '../img/banner/download.png',
                'type' => 'Voucher',
                'inputType' => 'id-only',
                'topup' => true,
                'joki' => true
            ],
            [
                'name' => 'Valorant',
                'slug' => 'valorant',
                'logo' => '../img/logo/valoLogo.png',
                'banner' => '../img/banner/valoBanner.webp',
                'type' => 'Point',
                'inputType' => 'id-only',
                'topup' => true,
                'joki' => false
            ]
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
