<?php

namespace Database\Seeders;

use App\Models\Circuito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CircuitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Circuito::truncate();

        for($iterador = 0; $iterador<count(self::$circuitos); $iterador++){

            $circuito = new Circuito();
            $circuito->name = self::$circuitos[$iterador]["name"];
            $circuito->country = self::$circuitos[$iterador]["country"];
            $circuito->url_backgrounds = json_encode(self::$circuitos[$iterador]["url_backgrounds"]);
            $circuito->url_map = self::$circuitos[$iterador]["url_map"];
            $circuito->url_outline = self::$circuitos[$iterador]["url_outline"];
            $circuito->save();

        }

    }

    public static $circuitos = [
        [
            "name" => "ks_barcelona-layout_gp",
            "country" => "es",
            "url_backgrounds" => '[
                    "/public/images/circuitos/barcelona/layout_gp/bgr-preview.png",
                    "/public/images/circuitos/barcelona/layout_gp/bgr00.jpg",
                    "/public/images/circuitos/barcelona/layout_gp/bgr01.jpg",
                    "/public/images/circuitos/barcelona/layout_gp/bgr02.jpg"
                ]',
            "url_map" => "/public/images/circuitos/barcelona/layout_gp/map.png",
            "url_outline" => "/public/images/circuitos/barcelona/layout_gp/outline.png"
        ],
        [
            "name" => "ks_barcelona-layout_moto",
            "country" => "es",
            "url_backgrounds" => '[
                "/public/images/circuitos/barcelona/layout_moto/bgr-preview.png",
                "/public/images/circuitos/barcelona/layout_moto/bgr00.jpg",
                "/public/images/circuitos/barcelona/layout_moto/bgr01.jpg",
                "/public/images/circuitos/barcelona/layout_moto/bgr02.jpg",
            ]',
            "url_map" => "/public/images/circuitos/barcelona/layout_moto/map.png",
            "url_outline" => "/public/images/circuitos/barcelona/layout_moto/outline.png"
        ],
        [
            "name" => "ks_black_cat_country-layout_init",
            "country" => "us",
            "url_backgrounds" => '[
                "/public/images/circuitos/black_cat_country/layout_int/bgr-preview.png",
            ]',
            "url_map" => "/public/images/circuitos/black_cat_country/layout_int/map.png",
            "url_outline" => "/public/images/circuitos/black_cat_country/layout_int/outline.png"
        ],
        [
            "name" => "ks_black_cat_country-layout_long",
            "country" => "us",
            "url_backgrounds" => "[
                '/public/images/circuitos/black_cat_country/layout_long/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/black_cat_country/layout_long/map.png",
            "url_outline" => "/public/images/circuitos/black_cat_country/layout_long/outline.png"
        ],
        [
            "name" => "ks_black_cat_country-layout_short",
            "country" => "us",
            "url_backgrounds" => "[
                '/public/images/circuitos/black_cat_country/layout_short/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/black_cat_country/layout_short/map.png",
            "url_outline" => "/public/images/circuitos/black_cat_country/layout_short/outline.png"
        ],
        [
            "name" => "ks_brands_hatch-gp",
            "country" => "gb",
            "url_backgrounds" => "[
                '/public/images/circuitos/brands_hatch/layout_gp/bgr-preview.png',
                '/public/images/circuitos/brands_hatch/layout_gp/bgr00.jpg',
                '/public/images/circuitos/brands_hatch/layout_gp/bgr01.jpg',
                '/public/images/circuitos/brands_hatch/layout_gp/bgr02.jpg',
            ]",
            "url_map" => "/public/images/circuitos/brands_hatch/layout_gp/map.png",
            "url_outline" => "/public/images/circuitos/brands_hatch/layout_gp/outline.png"
        ],
        [
            "name" => "ks_brands_hatch-indy",
            "country" => "gb",
            "url_backgrounds" => "[
                '/public/images/circuitos/brands_hatch/layout_indy/bgr-preview.png',
                '/public/images/circuitos/brands_hatch/layout_indy/bgr00.jpg',
                '/public/images/circuitos/brands_hatch/layout_indy/bgr01.jpg',
                '/public/images/circuitos/brands_hatch/layout_indy/bgr02.jpg',
            ]",
            "url_map" => "/public/images/circuitos/brands_hatch/layout_indy/map.png",
            "url_outline" => "/public/images/circuitos/brands_hatch/layout_indy/outline.png"
        ],
        [
            "name" => "ks_drag-drag200",
            "country" => "gb",
            "url_backgrounds" => "[
                '/public/images/circuitos/drag/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/drag/map.png",
            "url_outline" => "/public/images/circuitos/drag/outline.png"
        ],
        [
            "name" => "drift",
            "country" => "jp",
            "url_backgrounds" => "[
                '/public/images/circuitos/drif/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/drif/map.png",
            "url_outline" => "/public/images/circuitos/drif/outline.png"
        ],
        [
            "name" => "ks_highlands-layout_init",
            "country" => "gb-sct",
            "url_backgrounds" => "[
                '/public/images/circuitos/highlands/layout_int/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/highlands/layout_int/map.png",
            "url_outline" => "/public/images/circuitos/highlands/layout_int/outline.png"
        ],
        [
            "name" => "ks_highlands-layout_drift",
            "country" => "gb-sct",
            "url_backgrounds" => "[
                '/public/images/circuitos/highlands/layout_drift/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/highlands/layout_drift/map.png",
            "url_outline" => "/public/images/circuitos/highlands/layout_drift/outline.png"
        ],
        [
            "name" => "ks_highlands-layout_long",
            "country" => "gb-sct",
            "url_backgrounds" => "[
                '/public/images/circuitos/highlands/layout_long/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/highlands/layout_long/map.png",
            "url_outline" => "/public/images/circuitos/highlands/layout_long/outline.png"
        ],
        [
            "name" => "ks_highlands-layout_short",
            "country" => "gb-sct",
            "url_backgrounds" => "[
                '/public/images/circuitos/highlands/layout_short/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/highlands/layout_short/map.png",
            "url_outline" => "/public/images/circuitos/highlands/layout_short/outline.png"
        ],
        [
            "name" => "imola",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/imola/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/imola/map.png",
            "url_outline" => "/public/images/circuitos/imola/outline.png"
        ],
        [
            "name" => "ks_laguna_seca",
            "country" => "us",
            "url_backgrounds" => "[
                '/public/images/circuitos/laguna_seca/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/laguna_seca/map.png",
            "url_outline" => "/public/images/circuitos/laguna_seca/outline.png"
        ],
        [
            "name" => "magione",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/magione/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/magione/map.png",
            "url_outline" => "/public/images/circuitos/magione/outline.png"
        ],
        [
            "name" => "monza",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/monza/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/monza/map.png",
            "url_outline" => "/public/images/circuitos/monza/outline.png"
        ],
        [
            "name" => "ks_monza66-full",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/monza_1966/layout_full/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/monza_1966/layout_full/map.png",
            "url_outline" => "/public/images/circuitos/monza_1966/layout_full/outline.png"
        ],
        [
            "name" => "ks_monza66-junior",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/monza_1966/layout_junior/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/monza_1966/layout_junior/map.png",
            "url_outline" => "/public/images/circuitos/monza_1966/layout_junior/outline.png"
        ],
        [
            "name" => "ks_monza66-road",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/monza_1966/layout_road/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/monza_1966/layout_road/map.png",
            "url_outline" => "/public/images/circuitos/monza_1966/layout_road/outline.png"
        ],
        [
            "name" => "mugello",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/mugello/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/mugello/map.png",
            "url_outline" => "/public/images/circuitos/mugello/outline.png"
        ],
        [
            "name" => "ks_nordschleife-nordschleife",
            "country" => "de",
            "url_backgrounds" => "[
                '/public/images/circuitos/nordschleife/nordschleife/bgr-preview.png',
                '/public/images/circuitos/nordschleife/nordschleife/bgr00.jpg',
                '/public/images/circuitos/nordschleife/nordschleife/bgr01.jpg',
                '/public/images/circuitos/nordschleife/nordschleife/bgr02.jpg',
            ]",
            "url_map" => "/public/images/circuitos/nordschleife/nordschleife/map.png",
            "url_outline" => "/public/images/circuitos/nordschleife/nordschleife/outline.png"
        ],
        [
            "name" => "ks_nordschleife-endurance",
            "country" => "de",
            "url_backgrounds" => "[
                '/public/images/circuitos/nordschleife/endurance/bgr-preview.png',
                '/public/images/circuitos/nordschleife/endurance/bgr00.jpg',
                '/public/images/circuitos/nordschleife/endurance/bgr01.jpg',
                '/public/images/circuitos/nordschleife/endurance/bgr02.jpg',
            ]",
            "url_map" => "/public/images/circuitos/nordschleife/endurance/map.png",
            "url_outline" => "/public/images/circuitos/nordschleife/endurance/outline.png"
        ],
        [
            "name" => "ks_nordschleife-endurance_cup",
            "country" => "de",
            "url_backgrounds" => "[
                '/public/images/circuitos/nordschleife/endurance_cup/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/nordschleife/endurance_cup/map.png",
            "url_outline" => "/public/images/circuitos/nordschleife/endurance_cup/outline.png"
        ],
        [
            "name" => "ks_nordschleife-touristenfahrten",
            "country" => "de",
            "url_backgrounds" => "[
                '/public/images/circuitos/nordschleife/touristenfahrten/bgr-preview.png',
                '/public/images/circuitos/nordschleife/touristenfahrten/bgr00.jpg',
                '/public/images/circuitos/nordschleife/touristenfahrten/bgr01.jpg',
                '/public/images/circuitos/nordschleife/touristenfahrten/bgr02.jpg',
            ]",
            "url_map" => "/public/images/circuitos/nordschleife/touristenfahrten/map.png",
            "url_outline" => "/public/images/circuitos/nordschleife/touristenfahrten/outline.png"
        ],
        [
            "name" => "ks_nurburgring-layout_gp_a",
            "country" => "de",
            "url_backgrounds" => "[
                '/public/images/circuitos/nurburgring/layout_gp_a/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/nurburgring/layout_gp_a/map.png",
            "url_outline" => "/public/images/circuitos/nurburgring/layout_gp_a/outline.png"
        ],
        [
            "name" => "ks_nurburgring-layout_sprint_a",
            "country" => "de",
            "url_backgrounds" => "[
                '/public/images/circuitos/nurburgring/layout_sprint_a/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/nurburgring/layout_sprint_a/map.png",
            "url_outline" => "/public/images/circuitos/nurburgring/layout_sprint_a/outline.png"
        ],
        [
            "name" => "ks_red_bull_ring-layout_gp",
            "country" => "at",
            "url_backgrounds" => "[
                '/public/images/circuitos/red_bull_ring/layout_gp/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/red_bull_ring/layout_gp/map.png",
            "url_outline" => "/public/images/circuitos/red_bull_ring/layout_gp/outline.png"
        ],
        [
            "name" => "ks_red_bull_ring-layout_national",
            "country" => "at",
            "url_backgrounds" => "[
                '/public/images/circuitos/red_bull_ring/layout_national/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/red_bull_ring/layout_national/map.png",
            "url_outline" => "/public/images/circuitos/red_bull_ring/layout_national/outline.png"
        ],
        [
            "name" => "ks_silverstone_gp",
            "country" => "gb",
            "url_backgrounds" => "[
                '/public/images/circuitos/silverstone/layout_gp/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/silverstone/layout_gp/map.png",
            "url_outline" => "/public/images/circuitos/silverstone/layout_gp/outline.png"
        ],
        [
            "name" => "ks_silverstone_internacional",
            "country" => "gb",
            "url_backgrounds" => "[
                '/public/images/circuitos/silverstone/layout_international/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/silverstone/layout_international/map.png",
            "url_outline" => "/public/images/circuitos/silverstone/layout_international/outline.png"
        ],
        [
            "name" => "ks_silverstone_national",
            "country" => "gb",
            "url_backgrounds" => "[
                '/public/images/circuitos/silverstone/layout_national/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/silverstone/layout_national/map.png",
            "url_outline" => "/public/images/circuitos/silverstone/layout_national/outline.png"
        ],
        [
            "name" => "ks_silverstone1967",
            "country" => "gb",
            "url_backgrounds" => "[
                '/public/images/circuitos/silverstone_1967/bgr-preview.png',
                '/public/images/circuitos/silverstone_1967/bgr00.jpg',
                '/public/images/circuitos/silverstone_1967/bgr01.jpg',
                '/public/images/circuitos/silverstone_1967/bgr02.jpg',
            ]",
            "url_map" => "/public/images/circuitos/silverstone_1967/map.png",
            "url_outline" => "/public/images/circuitos/silverstone_1967/outline.png"
        ],
        [
            "name" => "spa",
            "country" => "be",
            "url_backgrounds" => "[
                '/public/images/circuitos/spa/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/spa/map.png",
            "url_outline" => "/public/images/circuitos/spa/outline.png"
        ],
        [
            "name" => "trento-bondone",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/trento_bondone/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/trento_bondone/map.png",
            "url_outline" => "/public/images/circuitos/trento_bondone/outline.png"
        ],
        [
            "name" => "ks_vallelunga-extended_circuit",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/vallelunga/extended_circuit/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/vallelunga/extended_circuit/map.png",
            "url_outline" => "/public/images/circuitos/vallelunga/extended_circuit/outline.png"
        ],
        [
            "name" => "ks_vallelunga-classic_circuit",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/vallelunga/classic_circuit/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/vallelunga/classic_circuit/map.png",
            "url_outline" => "/public/images/circuitos/vallelunga/classic_circuit/outline.png"
        ],
        [
            "name" => "ks_vallelunga-club_circuit",
            "country" => "it",
            "url_backgrounds" => "[
                '/public/images/circuitos/vallelunga/club_circuit/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/vallelunga/club_circuit/map.png",
            "url_outline" => "/public/images/circuitos/vallelunga/club_circuit/outline.png"
        ],
        [
            "name" => "ks_zandvoort",
            "country" => "nl",
            "url_backgrounds" => "[
                '/public/images/circuitos/zandvoort/bgr-preview.png',
            ]",
            "url_map" => "/public/images/circuitos/zandvoort/map.png",
            "url_outline" => "/public/images/circuitos/zandvoort/outline.png"
        ]
    ];
}
