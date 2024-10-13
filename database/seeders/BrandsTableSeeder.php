<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::truncate();

        for($iterador = 0; $iterador < count(self::$marcas); $iterador++){
            $marca = new Brand();
            $marca->name = self::$marcas[$iterador]["name"];
            $marca->country = self::$marcas[$iterador]["country"];
            $marca->url_logo = self::$marcas[$iterador]["url_logo"];
            $marca->save();
        }

    }

    private static $marcas = [
        [
            "name" => "Abarth",
            "country" => "it",
            "url_logo" => "/public/images/marcas/abart.png"
        ],
        [
            "name" => "Alfa Romeo",
            "country" => "it",
            "url_logo" => "/public/images/marcas/alfa_romeo.png"
        ],
        [
            "name" => "Audi",
            "country" => "de",
            "url_logo" => "/public/images/marcas/audi.png"
        ],
        [
            "name" => "BMW",
            "country" => "de",
            "url_logo" => "/public/images/marcas/bmw.png"
        ],
        [
            "name" => "Chevrolet",
            "country" => "us",
            "url_logo" => "/public/images/marcas/chevrolet.png"
        ],
        [
            "name" => "Ferrari",
            "country" => "it",
            "url_logo" => "/public/images/marcas/ferrari.png"
        ],
        [
            "name" => "Ford",
            "country" => "us",
            "url_logo" => "/public/images/marcas/ford.png"
        ],
        [
            "name" => "KTM",
            "country" => "at",
            "url_logo" => "/public/images/marcas/ktm.png"
        ],
        [
            "name" => "Lamborghini",
            "country" => "it",
            "url_logo" => "/public/images/marcas/lamborghini.png"
        ],
        [
            "name" => "Lotus",
            "country" => "gb",
            "url_logo" => "/public/images/marcas/lotus.png"
        ],
        [
            "name" => "Maserati",
            "country" => "it",
            "url_logo" => "/public/images/marcas/maserati.png"
        ],
        [
            "name" => "Mazda",
            "country" => "jp",
            "url_logo" => "/public/images/marcas/mazda.png"
        ],
        [
            "name" => "Mclaren",
            "country" => "gb",
            "url_logo" => "/public/images/marcas/mclaren.png"
        ],
        [
            "name" => "Mercedes",
            "country" => "de",
            "url_logo" => "/public/images/marcas/mercedes.png"
        ],
        [
            "name" => "Nissan",
            "country" => "jp",
            "url_logo" => "/public/images/marcas/nissan.png"
        ],
        [
            "name" => "Pagani",
            "country" => "it",
            "url_logo" => "/public/images/marcas/pagani.png"
        ],
        [
            "name" => "Porsche",
            "country" => "de",
            "url_logo" => "/public/images/marcas/porsche.png"
        ],
        [
            "name" => "Praga",
            "country" => "cz",
            "url_logo" => "/public/images/marcas/praga.png"
        ],
        [
            "name" => "RUF",
            "country" => "de",
            "url_logo" => "/public/images/marcas/ruf.png"
        ],
        [
            "name" => "Scuderia Glickenhaus",
            "country" => "it",
            "url_logo" => "/public/images/marcas/glickenhaus.png"
        ],
        [
            "name" => "Shelby",
            "country" => "us",
            "url_logo" => "/public/images/marcas/shelby.png"
        ],
        [
            "name" => "Tatuus",
            "country" => "it",
            "url_logo" => "/public/images/marcas/tatuus.png"
        ],
        [
            "name" => "Toyota",
            "country" => "jp",
            "url_logo" => "/public/images/marcas/toyota.png"
        ]
    ];
}
