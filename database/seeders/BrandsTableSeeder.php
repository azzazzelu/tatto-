<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $brands = [
            'TattooPro',
            'InkedArt',
            'PureInk',
            'TattLife',
            'SkinMaster',
            'InkFamous',
            'TattooGen',
            'ArtisticSkin',
            'NeedleWave',
            'Tattoozy',
            'ElectricInk',
            'ColorBurst',
            'InkedProfessionals',
            'PrecisionTattoo',
            'TattooKing',
            'InkEmpire',
            'TattooFlex',
            'EliteInk',
            'InkCraft',
            'TattooGuru',
            'ProSkin',
            'InkTechnology',
            'ArtInk',
            'TattooSupreme',
            'EpicInks',
            'InkVision',
            'TattooPhantom',
            'SkinAesthetic',
            'InkTrail',
            'TattooPower',
            'ProTattooGear',
            'InkSpectrum',
            'TattooNation',
            'InkMasters',
            'ArtisanInk',
            'SupremeTattoo',
            'InkedFusion',
            'ProfessionalInks',
            'TrueInk',
            'TattooArtistry',
            'MasterTattoo',
            'InkSavvy'
        ];

        foreach ($brands as $brand) {
            Brands::create(['name' => $brand]);
        }
    }
}
