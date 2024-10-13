<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\map;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::truncate();

        for($iterador = 0; $iterador<count(self::$coches); $iterador++){
            $coche = new Car();
            $coche->name = self::$coches[$iterador]["name"];
            $coche->category = self::$coches[$iterador]["category"];
            $coche->power = self::$coches[$iterador]["power"];
            $coche->torque = self::$coches[$iterador]["torque"];
            $coche->weight = self::$coches[$iterador]["weight"];
            $coche->power_to_weight_ratio = self::$coches[$iterador]["power_to_weight_ratio"];
            $coche->top_speed = self::$coches[$iterador]["top_speed"];
            $coche->year = self::$coches[$iterador]["year"];
            $coche->description = self::$coches[$iterador]["description"];
            $coche->url_image = self::$coches[$iterador]["url_image"];
            $coche->brand_id = self::$coches[$iterador]["brand_id"];
            $coche->save();
        }

    }

    public static $coches = [
        [
            "name" => "ks_abarth500_assetto_corse",
            "category" => "race",
            "power" => 195,
            "torque" => 302,
            "weight" => 930,
            "power_to_weight_ratio" => 4.60,
            "top_speed" => 225,
            "year" => 2014,
            "description" => "The Abarth 500 Assetto Corse is a super sports car that takes up the racing baton from the legendary Abarth 595. Not only that, it's been designed with low running costs in mind, perfectly in keeping with our proud tradition of opening up racing to enthusiasts everywhere.
                            This is a race-ready car with features designed to power it to the finish line: a 16-valve, 1.4 litre engine with 190bhp, Brembo brakes and 17” OZ forged aluminium wheels. Inside, it's stripped out and equipped for safety.",
            "url_image" => "/public/images/coches/abart/abarth500_assetto_corse.png",
            "brand_id" => 1
        ],
        [
            "name" => "abarth500_s1",
            "category" => "street",
            "power" => 175,
            "torque" => 245,
            "weight" => 1025,
            "power_to_weight_ratio" => 6.40,
            "top_speed" => 211,
            "year" => 2008,
            "description" => "The Step1 tuned version of Abarth500 EsseEsse has non adjustable aftermarket dampers and lowered springs and an ECU reprogramming which gives a little more boost on the turbos, gaining a fair amount of power and torque.
                            Turning the modern Fiat 500 into an Abarth meant lowering the ride, adding a turbocharger to the 1.4-litre engine (no mean feat under that tiny bonnet), giving it Torque Transfer Control for more aggressive cornering and improving the aerodynamics with side-skirts and spoilers.
                            The little Abarth is fast, very agile and plenty of fun.",
            "url_image" => "/public/images/coches/abart/abarth500_s1.png",
            "brand_id" => 1
        ],
        [
            "name" => "abarth500",
            "category" => "street",
            "power" => 160,
            "torque" => 230,
            "weight" => 1025,
            "power_to_weight_ratio" => 6.40,
            "top_speed" => 211,
            "year" => 2008,
            "description" => "Turning the modern Fiat 500 into an Abarth meant lowering the ride, adding a turbocharger to the 1.4-litre engine (no mean feat under that tiny bonnet), giving it Torque Transfer Control for more aggressive cornering and improving the aerodynamics with side-skirts and spoilers.
                            The little Abarth is fast, very agile and plenty of fun.",
            "url_image" => "/public/images/coches/abart/abarth500.png",
            "brand_id" => 1
        ],
        [
            "name" => "ks_abarth_595ss",
            "category" => "street",
            "power" => 32,
            "torque" => 44,
            "weight" => 470,
            "power_to_weight_ratio" => 18.9,
            "top_speed" => 130,
            "year" => 1964,
            "description" => "Carlo Abarth began his well-known association with Fiat in 1952, building the Abarth 1500 Biposto upon Fiat mechanicals.
                            Fiat \"Nuova 500\" was introduced in 1957 and Abarth soon realized some versions with elaborate mechanics. In 1963 he was presented the \"595\", produced until the end of 1971 in two series. The Abarth receives from FIAT incomplete cars and then mounts on them the special pieces.
                            In February 1964 the 595 SS was presented, featuring a top speed of 130 km/h.",
            "url_image" => "/public/images/coches/abart/abarth_595ss.png",
            "brand_id" => 1
        ],
        [
            "name" => "ks_abarth_595ss_s1",
            "category" => "street",
            "power" => 32,
            "torque" => 44,
            "weight" => 470,
            "power_to_weight_ratio" => 18.9,
            "top_speed" => 130,
            "year" => 1964,
            "description" => "Carlo Abarth began his well-known association with Fiat in 1952, building the Abarth 1500 Biposto upon Fiat mechanicals.
                            Fiat \"Nuova 500\" was introduced in 1957 and Abarth soon realized some versions with elaborate mechanics. In 1963 he was presented the \"595\", produced until the end of 1971 in two series. The Abarth receives from FIAT incomplete cars and then mounts on them the special pieces.
                            In February 1964 the 595 SS was presented, featuring a top speed of 130 km/h.",
            "url_image" => "/public/images/coches/abart/abarth_595ss_s1.png",
            "brand_id" => 1
        ],
        [
            "name" => "ks_abarth_595ss_s2",
            "category" => "street",
            "power" => 65,
            "torque" => 80,
            "weight" => 470,
            "power_to_weight_ratio" => 6.71,
            "top_speed" => 130,
            "year" => 1964,
            "description" => "Carlo Abarth began his well-known association with Fiat in 1952, building the Abarth 1500 Biposto upon Fiat mechanicals.
                            Fiat \"Nuova 500\" was introduced in 1957 and Abarth soon realized some versions with elaborate mechanics. In 1963 he was presented the \"595\", produced until the end of 1971 in two series. The Abarth receives from FIAT incomplete cars and then mounts on them the special pieces.
                            In February 1964 the 595 SS was presented, featuring a top speed of 130 km/h.",
            "url_image" => "/public/images/coches/abart/abarth_595ss_s2.png",
            "brand_id" => 1
        ],

        [
            "name" => "ks_alfa_romeo_155_v6",
            "category" => "race",
            "power" => 420,
            "torque" => 294,
            "weight" => 1050,
            "power_to_weight_ratio" => 2.50,
            "top_speed" => 280,
            "year" => 1996,
            "description" => "The Deutsche Tourenwagen Meisterschaft (DTM), was at that time by far the most prestigious championship
                            for touring cars. In the early years, the starting grid was formed exclusively by German manufacturers.
                            Until 1993, when Alfa Romeo decided to officially participate with the 155 V6 Ti driven by Alessandro Nannini
                            and Nicola Larini and with other cars assigned to semi-official teams.",
            "url_image" => "/public/images/coches/alfa_romeo/alfa_romeo_155_v6.png",
            "brand_id" => 2
        ],
        [
            "name" => "ks_alfa_33_stradale",
            "category" => "street",
            "power" => 230,
            "torque" => 206,
            "weight" => 700,
            "power_to_weight_ratio" => 3.04,
            "top_speed" => 260,
            "year" => 1967,
            "description" => "The Alfa Romeo 33 is not just beautiful, it is sublime! Without a doubt everyone, inside and outside the industry, recognises it as one of the most beautiful cars of all time.
                            The 33 Stradale, first built in 1967, was based on the Autodelta Alfa Romeo Tipo 33 racing car. The car, designed by Franco Scaglione, and built by Carrozzeria Marazzi, made its debut at the 1967 Turin Motorshow. Just 18 examples were ever built.
                            The 33 Stradale is the first production vehicle to feature dihedral doors, also known as butterfly doors. The 33 Stradale also features windows which seamlessly curve upward into the 'roof' of the vehicle. The car has aluminium body on aluminium tubular chassis. As a result of being built by hand, each model differs from the others for some details.
                            The car has 13-inch Campagnolo magnesium wheels, the fronts eight and the rears nine inches wide; there are Girling disc brakes on all four corners, the rear ones are inboard. Suspension is like in mid-1960s race car with upper and lower control arms in front and double trailing arms in the rear, along with substantial antiroll bars.
                            The race-bred engine bore no relation to the mass-produced units in Alfa's more mainstream vehicles. The engine is closely related to the V8 of the Alfa Montreal, albeit with smaller capacity and in a much higher state of tune.
                            The car takes 5.5 seconds to reach 60 mph (96.6 km/h) from a standing start and has a top speed of 260 km/h (160 mph). In 1968 it was the fastest commercially available car in the standing kilometre with the time of 24.0 seconds measured by German Auto, Motor und Sport magazine.",
            "url_image" => "/public/images/coches/alfa_romeo/alfa_33_stradale.png",
            "brand_id" => 2
        ],
        [
            "name" => "ks_alfa_romeo_gta",
            "category" => "race",
            "power" => 170,
            "torque" => 200,
            "weight" => 750,
            "power_to_weight_ratio" => 4.41,
            "top_speed" => 210,
            "year" => 1965,
            "description" => "Autodelta, Alfa Romeo's racing division directed by Carlo Chiti, developed a car for competition that closely resembled the roadgoing Giulia. The cars were named GTA instead of GT, A standing for Alleggerita, italian for lightweight.
                            The GTA had aluminium outer body panels instead of steel, magnesium allow wheels, clear plastic side windows and various other lightweight parts, bringing down the dry weight to about 750kg. The engine had extensive modifications and upgrades, delivering up to 170bhp in race trim.
                            Five hundred cars were made for homologation purposes and the cars were very successful, obtaining numerous victories and the title in 1966 with Andrea de Adamich. Different evolutions of the car would go ahead and also win the 1970 championship as well as many races up in the early 70s.",
            "url_image" => "/public/images/coches/alfa_romeo/alfa_romeo_gta.png",
            "brand_id" => 2
        ],
        [
            "name" => "ks_alfa_romeo_4c",
            "category" => "street",
            "power" => 240,
            "torque" => 350,
            "weight" => 925,
            "power_to_weight_ratio" => 3.90,
            "top_speed" => 245,
            "year" => 2013,
            "description" => "Extraordinary performance, unique handling, extreme aerodynamics and design that takes up the stylistic features of the Alfa Romeo tradition. This in brief is the new Alfa Romeo 4C, a driving machine without compromise that beckons drivers to take to the road or track to experience the thrill of driving it.
                            The Alfa Romeo 4C is essentiality and light weight, a car where everything has been designed to provide total driving pleasure. That same essentiality shaped its design. The car expresses a natural beauty that results from a perfect blend of function and form. Its layout and size immediately brings one of the most beautiful coupés of all time to mind, the Alfa Romeo 33 Stradale. Like the legendary 33 Stradale, the 4C is designed to meet extreme mechanical and functional requirements. Its body aerodynamically covers the engine and chassis with clean and essential surfaces.
                            This vehicle quite simply screams Alfa. Its sports car soul creates unique driving sensations, both on the road and when racing, where velocity and transverse accelerations offer even the most expert driver unrivalled driving thrills: from 0 to 100 km/h in just 4.5 seconds flat, 258 km/h of top speed, deceleration peaks in the range of 1.2 g and lateral acceleration peaks over 1.1 g. All this is also achieved with a balanced weight distribution, with 40% on the front axle and 60% on the rear.",
            "url_image" => "/public/images/coches/alfa_romeo/alfa_romeo_4c.png",
            "brand_id" => 2
        ],
        [
            "name" => "ks_alfa_giulia_qv",
            "category" => "street",
            "power" => 510,
            "torque" => 600,
            "weight" => 1595,
            "power_to_weight_ratio" => 3.13,
            "top_speed" => 307,
            "year" => 2016,
            "description" => "The new Giulia Quadrifoglio represents more than the most powerful Alfa Romeo ever created for road use. It’s the convergence of engineering and emotion that can only belong to a brand as fabled as Alfa Romeo. Here's to a sports badge born more than a century ago, that still stands for something totally original today: a passion for motoring unlike any other. Visceral. Energetic. Technological. Crafted.
                            The heart of Giulia Quadrifoglio is a gasoline-powered 2.9 V6 bi-turbo engine with 90° opposed cylinders. The engine delivers 510 hp and 600 Nm of torque between 2500 and 5000 RPM.
                            Made entirely of aluminum, it is extraordinarily powerful, yet lightweight. This new engine is developed with Ferrari expertise.
                            The Giulia Quadrifoglio is more than a showcase for the best power–to–weight ratio in its class, it's a study in how to use that power. The perfect 50:50 weight distribution creates optimal balance and showcases the advantage of a rear–wheel–drive layout in a front-engine vehicle. By pairing rear–wheel drive with Giulia Quadrifoglio’s front–mounted, all–aluminum 6–cylinder engine, the Alfa Romeo engineering team was able to carefully distribute weight throughout the chassis.
                            The Giulia Quadrifoglio is equipped with an innovative system that ensures the optimal distribution of torque to the two rear shafts, thanks to an electronically controlled differential featuring two clutches. This results in greater traction and more secure handling, even at high speeds, on curves, and on any type of roads.
                            The Giulia Quadrifoglio is the only sedan in the world with an Active Aero splitter: a carbon appendix positioned under the front bumper. At speeds of over 100 km/h it opens thanks to two actuators controlled by the Alfa™ CDC (Chassis Domain Control), providing additional stability by increasing downforce, especially when taking high-speed curves.",
            "url_image" => "/public/images/coches/alfa_romeo/alfa_giulia_qv.png",
            "brand_id" => 2
        ],
        [
            "name" => "alfa_romeo_giulietta_qv_le",
            "category" => "street",
            "power" => 240,
            "torque" => 349,
            "weight" => 1390,
            "power_to_weight_ratio" => 5.79,
            "top_speed" => 241,
            "year" => 2014,
            "description" => "The Giulietta Quadrifoglio Verde inherits the engine of the super compact Alfa Romeo 4C. A 1750 4-cylinder unit with aluminium block, with turbocharger that delivers 240 HP at 5750 rpm and 340 Nm at 2000 rpm. Thanks to a 22 kg weight reduction, achieved by using lightweight aluminium, and combination with the Alfa TCT automatic transmission, this power unit allows the Giulietta Quadrifoglio Verde to accelerate from 0 to 100 km/h in 6.6 seconds.
                            A twin dry clutch automatic transmission, consisting of two gearboxes in parallel that allow the next gear to engage while the previous one is still engaged. The Alfa TCT offers continuous torque delivery without power loss during the shift, which becomes faster and more direct, translating into an even more intense driving sensation.",
            "url_image" => "/public/images/coches/alfa_romeo/alfa_romeo_giulietta_qv_le.png",
            "brand_id" => 2
        ],
        [
            "name" => "alfa_romeo_giulietta_qv",
            "category" => "street",
            "power" => 235,
            "torque" => 349,
            "weight" => 1390,
            "power_to_weight_ratio" => 5.91,
            "top_speed" => 241,
            "year" => 2014,
            "description" => "The Giulietta Quadrifoglio Verde inherits the engine of the super compact Alfa Romeo 4C. A 1750 4-cylinder
                            unit with aluminium block, with turbocharger that delivers 235 HP at 5750 rpm and 340 Nm at 2000 rpm.
                            The 2013 version comes with a 6 speed manual transmission and mananges 0-100 in 6.6 seconds.",
            "url_image" => "/public/images/coches/alfa_romeo/alfa_romeo_giulietta_qv.png",
            "brand_id" => 2
        ],
        [
            "name" => "ks_alfa_mito_qv",
            "category" => "street",
            "power" => 168,
            "torque" => 250,
            "weight" => 1140,
            "power_to_weight_ratio" => 6.70,
            "top_speed" => 219,
            "year" => 2012,
            "description" => "The Alfa Romeo MiTo Quadrifoglio mounts a new 1.4-litre MultiAir Turbo Petrol engine which develops 170hp at 5,500 rpm and up to 250 Nm at 2,500rpm in Sport mode (230Nm in Natural or All-weather modes).
                            The MultiAir electrohydraulic valve management system reduces fuel consumption by controlling intake air directly via the inlet valves (without using the throttle) and reduces polluting emissions by using extremely precise combustion control.
                            It's fitted with the Alfa Romeo's latest-generation, six-speed, double dry-clutch ALFA TCT transmission.
                            As in the Alfa Giulietta, this new transmission offers automatic or sequential manual shifting, either via the gear lever or steering-wheel mounted paddle shifters, and can be reconfigured for different driving scenarios via the Alfa D.N.A.
                            driving mode selector, which also tunes throttle response, engine performance, power steering assistance and the suspension depending on the mode.",
            "url_image" => "/public/images/coches/alfa_romeo/alfa_mito_qv.png",
            "brand_id" => 2
        ],

        [
            "name" => "ks_audi_r18_etron_quattro",
            "category" => "race",
            "power" => 700,
            "torque" => 850,
            "weight" => 915,
            "power_to_weight_ratio" => 1.30,
            "top_speed" => 330,
            "year" => 2014,
            "description" => "The concept behind the Audi R18 e-tron quattro is unprecedented in LMP sport, and its realization a pioneering achievement. In the first development step, the engineers from Audi Sport and their partners investigated a wide variety of solutions. These included a parallel hybrid, where both drive systems propel the rear wheels. After weighing up considerations such as traction, handling characteristics, packaging and weight distribution, they ultimately decided to separate the drive systems by axle – the combustion engine drives the rear wheels permanently, and the electric drive propels the front wheels on demand.
                            On the R18 e-tron quattro, part of the braking energy benefits the motor generator unit (MGU) that is located at the front axle. Their two permanently excited synchronous machines convert the recovered energy into direct current through power electronics. This current drives a flywheel energy storage system positioned on the left inside the cockpit.
                            When the speed exceeds 120 km/h, the energy is called up from the storage system again. Converted back into alternating current by the power electronics, it then supplies the MGU’s two electric motors. These jointly feed more than 160 kW to the front wheels via single-stage planetary gears; the central control unit keeps the revs and torque in line with the conditions prevailing at the rear wheels. The racing car temporarily becomes a quattro with four driven wheels.",
            "url_image" => "/public/images/coches/audi/audi_r18_etron_quattro.png",
            "brand_id" => 3
        ],
        [
            "name" => "ks_audi_sport_quattro_rally",
            "category" => "race",
            "power" => 540,
            "torque" => 570,
            "weight" => 1090,
            "power_to_weight_ratio" => 2.01,
            "top_speed" => 250,
            "year" => 1984,
            "description" => "Introduced in 1984, the Audi Sport quattro S1 E2 revolutionized rallying. Just like the other manufacturers, Audi used the lenient homologation requirements to create a new rally car. All the car maker needed for homologation was a production run of a mere 200 cars.
                            Blomqvist's spectacular, sideways driving style suited the Sport quattro perfectly. By flicking the tail out, the Swede overcame the natural understeer of the nose-heavy Audi. He won five of the twelve rounds and was crowned the 1984 World Champion. Mikkola and Roehrl also won a round, which was enough to clinch the constructor's trophy as well.",
            "url_image" => "/public/images/coches/audi/audi_sport_quattro_rally.png",
            "brand_id" => 3
        ],
        [
            "name" => "ks_audi_r8_lms_2016",
            "category" => "race",
            "power" => 500,
            "torque" => 500,
            "weight" => 1270,
            "power_to_weight_ratio" => 2.54,
            "top_speed" => 0,
            "year" => 2016,
            "description" => "The new Audi R8 LMS, now featuring even more race car technology, is following in the footsteps of its successful predecessor.
                            Audi fans were already able to marvel at the new GT3 sports car from Neckarsulm in full action in 2015, for instance in the 24-hour race at the Nurburgring,
                            where the Audi Sport Team WRT celebrated overall victory with the new R8 LMS. At the 12-hour race at Sepang the Audi R8 LMS took a one-two-three win.
                            The 2016 season also began successfully: An overall victory in the Dubai 24 Hours and a class win in the classic Daytona 24 Hours.",
            "url_image" => "/public/images/coches/audi/audi_r8_lms_2016.png",
            "brand_id" => 3
        ],
        [
            "name" => "ks_audi_r8_lms",
            "category" => "race",
            "power" => 570,
            "torque" => 500,
            "weight" => 1250,
            "power_to_weight_ratio" => 2.19,
            "top_speed" => 0,
            "year" => 2009,
            "description" => "The Audi R8 LMS is the first race car to have been specifically developed by Audi for customer teams. Maximum reliability, ease of use for teams and drivers and, obviously, competitiveness were the focal topics guiding the development of the mid-engine sports car. The result: The GT3 version of the R8 LMS ultra and its US version for the GT Daytona (GTD) class are fast and reliable. Numerous successes and championship titles have been providing impressive proof of this since 2009.
                            The perfect base for both race car versions stems from road cars. More than 50 per cent of the production parts of the Audi R8 V10 are also used for racing by Audi Sport customer racing. The production V10 engine with FSI gasoline direct injection has such good genes that it has been adopted for the race cars almost unchanged. This financially benefits the Audi customer teams as well. The first inspection is due only after 10.000 race kilometres, followed by the first rebuild after 20.000 kilometres.
                            Audi Sport customer racing is just as much a part of Technical Development (TE) at Audi as Audi Sport is. Armin Plietsch, Head of Technology at Audi Sport customer racing, can draw on the entire know-how of the Audi Group and the huge wealth of experience from the DTM, WEC and other racing series. Before switching to the GT project at Audi Sport he was involved in the DTM programme in a leading role. Details such as the Audi R8 LMS ultra's rear wing suspended from the top, the small winglets at the front, as well a glance into the interior, reveal the close kinship between the customer sport race cars and Audi's successful DTM and LMP1 race cars.",
            "url_image" => "/public/images/coches/audi/audi_r8_lms.png",
            "brand_id" => 3
        ],
        [
            "name" => "ks_audi_tt_cup",
            "category" => "race",
            "power" => 310,
            "torque" => 400,
            "weight" => 1125,
            "power_to_weight_ratio" => 3.62,
            "top_speed" => 0,
            "year" => 2016,
            "description" => "For the Audi Sport TT Cup, the German manufacturer has developed a visually as well as technologically attractive sports car for racing, the Audi TT cup.
                            The body shell of the Audi TT racing version consists of aluminum and carbon fiber. This ensures that the Audi TT cup that tips the scales at
                            1,125 kilograms is a lightweight and extremely agile car.
                            The Audi TT cup car uses the 2.0 TFSI from the Audi TTS. The four-cylinder engine delivers 228kW (310hp) in the production model and accelerates the TTS from 0 to 100km/h in 4.7 seconds. By means of a so-called Push-to-pass function, the drivers can briefly boost the engine's output by 22kW (30hp) for overtaking maneuvers by pushing a button on the steering wheel. A blue lamp in the windshield indicates the boost activation. LEDs in the rear side windows show how many times the driver can still use the additional power. The number of available boosts is defined by the regulations.
                            Power is transmitted to the front wheels via a direct-shift dual-clutch transmission. The six-speed S tronic, which has been specifically tuned for use in racing, is operated by shift paddles on the steering wheel. Accordingly, the Audi TT cup only has two pedals, used for acceleration and braking.",
            "url_image" => "/public/images/coches/audi/audi_tt_cup.png",
            "brand_id" => 3
        ],
        [
            "name" => "ks_audi_tt_vln",
            "category" => "race",
            "power" => 390,
            "torque" => 530,
            "weight" => 1120,
            "power_to_weight_ratio" => 2.87,
            "top_speed" => 0,
            "year" => 2015,
            "description" => "Audi TT RS (VLN) has been developed in order to respond to the high demand by customers wishing to use the TT and other vehicles of the brand in motorsport.
                            It's based on a five-cylinder TFSI engine and features racing-specific new developments in the areas of the body, suspension and aerodynamics.",
            "url_image" => "/public/images/coches/audi/audi_tt_vln.png",
            "brand_id" => 3
        ],
        [
            "name" => "ks_audi_r8_plus",
            "category" => "street",
            "power" => 550,
            "torque" => 540,
            "weight" => 1620,
            "power_to_weight_ratio" => 3.00,
            "top_speed" => 317,
            "year" => 2007,
            "description" => "The Audi R8 V10 Plus is the top model of the R8 series. Developing 550 hp, its maximum torque is 540 Nm at 6,500 rpm. With 7 Speed S-Tronic Automatic transmission, the R8 V10 plus catapults from zero to 100 km/h in 3.5 seconds and achieves a top speed of 317 km/h.
                            The R8 embodies Audi's full expertise in ultra-lightweight design and, as in car racing, the aerodynamics of this car has been optimized for propulsion. The underfloor contains five NACA nozzles, along with two diffusors in the front section, which increase the propulsion at the front axle.
                            In detail the Plus is equipped with carbon fiber side blades, mirrors and air inlets. The theme is extended to the engine bay with carbon fiber panels and LED illumination.",
            "url_image" => "/public/images/coches/audi/audi_r8_plus.png",
            "brand_id" => 3
        ],
        [
            "name" => "ks_audi_sport_quattro_s1",
            "category" => "street",
            "power" => 373,
            "torque" => 425,
            "weight" => 1298,
            "power_to_weight_ratio" => 3.43,
            "top_speed" => 272,
            "year" => 1994,
            "description" => "With its wheelbase shortened by a meaningful 12.6 inches between the B- and C-pillars, the Audi Sport quattro was not only significantly shorter than the standard Quattro found in showrooms, but its steel monocoque shell also featured numerous GRP and carbon-kevlar panels to further trim weight. As such, there was very little shared with serial production Audis. By the end of the production in 1984, Audi had produced 224 examples of what remains as one of the great homologation specials of the 1980s.The step version offers a lowered and stiffer suspension with more open setup possibilities, the turbo from the Group-B rally racer and lockable centre and rear differential.",
            "url_image" => "/public/images/coches/audi/audi_sport_quattro_s1.png",
            "brand_id" => 3
        ],
        [
            "name" => "ks_audi_sport_quattro",
            "category" => "street",
            "power" => 306,
            "torque" => 350,
            "weight" => 1298,
            "power_to_weight_ratio" => 4.18,
            "top_speed" => 250,
            "year" => 1994,
            "description" => "With its wheelbase shortened by a meaningful 12.6 inches between the B- and C-pillars, the Audi Sport quattro was not only significantly shorter than the standard Quattro found in showrooms, but its steel monocoque shell also featured numerous GRP and carbon-kevlar panels to further trim weight. As such, there was very little shared with serial production Audis. By the end of the production in 1984, Audi had produced 224 examples of what remains as one of the great homologation specials of the 1980s.",
            "url_image" => "/public/images/coches/audi/audi_sport_quattro.png",
            "brand_id" => 3
        ],
        [
            "name" => "ks_audi_a1s1",
            "category" => "street",
            "power" => 231,
            "torque" => 370,
            "weight" => 1340,
            "power_to_weight_ratio" => 5.80,
            "top_speed" => 241,
            "year" => 2015,
            "description" => "Back in the 1980s an Audi S1 garnered a legendary reputation – it was the car that would see the brand dominate the World Rally Championship in its day. Now the abbreviation is coming back – but this time as a road-going version: the Audi S1 and the S1 Sportback constitute the new flagship models in the compact A1 model line, adding an entry-level version to the Audi S model portfolio.
                            Like all Audi S models, the S1 and the S1 Sportback also come with quattro permanent all-wheel drive onboard. At its heart is a hydraulic multi-plate clutch located on the rear axle. Its specifically tuned control software boasts a decidedly dynamic setup. The electronic differential lock with the fine-tuned wheel-selective torque control is a function of the Electronic Stabilization Control (ESC).
                            The Audi S1 and the S1 Sportback are instantly recognizable as the flagship models in the A1 model line. Their xenon plus headlights are all-new while the LED rear lights come with new, horizontally structured graphics. A host of details – particularly on the front and rear bumper, the side sills and the exhaust system – boast more striking styling. Four new exterior colors supplement the available paint finishes. The optional quattro exterior styling package hones the look further, courtesy of features such as a large roof spoiler.",
            "url_image" => "/public/images/coches/audi/audi_a1s1.png",
            "brand_id" => 3
        ],

        [
            "name" => "bmw_1m",
            "category" => "street",
            "power" => 340,
            "torque" => 500,
            "weight" => 1495,
            "power_to_weight_ratio" => 4.46,
            "top_speed" => 250,
            "year" => 2004,
            "description" => "The letter M now comes to the segment of the BMW 1 Series to symbolise outstanding power delivery and the highly dynamic driving properties of a high-performance sports car.
                            In the BMW 1 Series M Coupe, the technology of a high-performance car is combined with the agility and lightness of a compact model to create a whole new dimension of sports-style driving pleasure. With this 2-door model, BMW M GmbH is now realising for the first time in this vehicle class its concept of racing-oriented performance characteristics in a car developed for everyday use . This further extends the company's model range, paving the way for younger target groups to be able to access the hallmark driving experience offered by an M car.
                            The BMW 1 Series M Coupe in-line 6-cylinder engine with M TwinPower Turbo and petrol direct injection develops a maximum output of 250 kW/340 bhp with an engine-speed-oriented characteristic curve typical of BMW M cars. With chassis technology derived directly from motor racing, a power-to-weight ratio reduced to 4.4 kilograms per bhp and precisely optimised aerodynamic components including innovative air curtains at the front end, supreme conversion of superior propulsion power into thrilling driving dynamics is guaranteed. The BMW 1 Series M Coupe accelerates in 4.9 seconds from zero to 100 km/h and reaches the 200 km/h mark after 17.3 seconds.",
            "url_image" => "/public/images/coches/bmw/bmw_1m.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_1m_s3",
            "category" => "street",
            "power" => 400,
            "torque" => 580,
            "weight" => 1495,
            "power_to_weight_ratio" => 3.74,
            "top_speed" => 250,
            "year" => 2004,
            "description" => "The Stage 3 tuned version of BMW 1M series has adjustable aftermarket dampers with coilover springs, camber plates to adjust for massive range of camber at the front, and rear toe links for equally big range of camber adjustment at the rear. The engine is tuned with a new ECU that raises the turbo boost at over 1bar with an overboost function of over 1.3 bar, adjustable from the cockpit. Beware though, the engine can't handle that kind of pressure for too much time.
                            The letter M now comes to the segment of the BMW 1 Series to symbolise outstanding power delivery and the highly dynamic driving properties of a high-performance sports car.
                            In the BMW 1 Series M Coupe, the technology of a high-performance car is combined with the agility and lightness of a compact model to create a whole new dimension of sports-style driving pleasure. With this 2-door model, BMW M GmbH is now realising for the first time in this vehicle class its concept of racing-oriented performance characteristics in a car developed for everyday use . This further extends the company's model range, paving the way for younger target groups to be able to access the hallmark driving experience offered by an M car.
                            The BMW 1 Series M Coupe in-line 6-cylinder engine with M TwinPower Turbo and petrol direct injection develops a maximum output of 250 kW/340 bhp with an engine-speed-oriented characteristic curve typical of BMW M cars. With chassis technology derived directly from motor racing, a power-to-weight ratio reduced to 4.4 kilograms per bhp and precisely optimised aerodynamic components including innovative air curtains at the front end, supreme conversion of superior propulsion power into thrilling driving dynamics is guaranteed. The BMW 1 Series M Coupe accelerates in 4.9 seconds from zero to 100 km/h and reaches the 200 km/h mark after 17.3 seconds.",
            "url_image" => "/public/images/coches/bmw/bmw_1m_s3.png",
            "brand_id" => 4
        ],
        [
            "name" => "ks_bmw_m235i_racing",
            "category" => "race",
            "power" => 333,
            "torque" => 500,
            "weight" => 1424,
            "power_to_weight_ratio" => 4.27,
            "top_speed" => 250,
            "year" => 2014,
            "description" => "The basis our engineers had to start with when developing the racing version of the BMW M235i Racing was exceptionally good, said BMW Motorsport Director Jens Marquardt. The production models from the BMW M Performance Automobiles range are already incredibly sporty. Because of this, we did not have to make many modifications in order to get the BMW M235i Coupé up and running as a racing car. BMW Motorsport can look back on a long tradition of allowing ambitious teams and drivers an affordable way into motor racing – and of offering them an absolutely competitive car. That was the case recently with the BMW M3 GT4, and that is now being superseded with the BMW M235i Racing.
                            The motorsport genes are also easily recognisable in the production version of the BMW M235i Coupé, courtesy of the aerodynamically optimised body design. It is propelled by the most powerful petrol engine developed so far for a BMW M Performance Automobiles, a six-cylinder in-line engine with M Performance TwinPower Turbo technology. With a capacity of 2,979ccm, the racing version is capable of generating 333hp
                            Motorsport-specific driving aids such as ABS, DSC and traction control ensure that the motorsport newcomers can also handle the BMW M235i Racing surely and safely. The car also comes with mechanical limited-slip differential, which is also available for the BMW M235i Coupé in the original BMW Parts range. The racing car is also fitted with features such as the FIA-certified safety cell and the modern safety tank. On top of this come components from the BMW M Performance Parts range, such as the rear and front spoilers, diffusor and carbon wing mirrors.",
            "url_image" => "/public/images/coches/bmw/bmw_m235i_racing.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_m3_e30",
            "category" => "street",
            "power" => 238,
            "torque" => 240,
            "weight" => 1200,
            "power_to_weight_ratio" => 5.04,
            "top_speed" => 248,
            "year" => 1986,
            "description" => "Based on the 1986 model year E30 3-Series, the E30 M3 used the BMW S14 four cylinder engine.The production of the E30 road car was to homologate the M3 for Group A Touring Car racing.
                            The Sport Evolution model production run of 600 (sometimes referred as EVO3) increased engine displacement to 2.5 L and produced 235 hp (175 kW). Sport Evolution models have enlarged front bumper openings and an adjustable multi-position front splitter and rear wing. Brake cooling ducts were installed in place of front foglights. An additional 786 convertibles were also produced.
                            To keep the car competitive in racing following year-to-year homologation rules changes, homologation specials were produced. Homologation (motorsport) rules roughly stated that the race version must reflect the street car aerodynamically and in engine displacement. These include: the Evo 1, Evo 2, and Sport Evolution some of which featured less weight, improved aerodynamics, taller front wheel arches (Sport Evolution; to further facilitate 18-inch (460 mm) wheels in DTM), brake ducting, and more power. Other limited-production models (based on evolution models but featuring special paintwork and/or unique interior schemes commemorating championship wins) include the Europa, Ravaglia, Cecotto, and Europameister. Production of the original E30 M3 ended in early 1992.",
            "url_image" => "/public/images/coches/bmw/bmw_m3_e30.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_m3_e30_drift",
            "category" => "street",
            "power" => 343,
            "torque" => 365,
            "weight" => 1150,
            "power_to_weight_ratio" => 3.35,
            "top_speed" => 250,
            "year" => 1986,
            "description" => "The Drift tuned version of E30 series is based on a stripped M3 E30 with an engine and grearbox swap from an E46 M3. The engine is capable of more than 340bhp but adds weight at the front. A completely locked rear diff, high duty coilover springs, bigger antiroll bars and lot's of lock, make this one of the most desired drift tuned cars. Be careful though, the old rear suspension and the short wheelbase make the car quite nervous.
                            Based on the 1986 model year E30 3-Series, the E30 M3 used the BMW S14 four cylinder engine.The production of the E30 road car was to homologate the M3 for Group A Touring Car racing.
                            The Sport Evolution model production run of 600 (sometimes referred as EVO3) increased engine displacement to 2.5 L and produced 235 hp (175 kW). Sport Evolution models have enlarged front bumper openings and an adjustable multi-position front splitter and rear wing. Brake cooling ducts were installed in place of front foglights. An additional 786 convertibles were also produced.
                            To keep the car competitive in racing following year-to-year homologation rules changes, homologation specials were produced. Homologation (motorsport) rules roughly stated that the race version must reflect the street car aerodynamically and in engine displacement. These include: the Evo 1, Evo 2, and Sport Evolution some of which featured less weight, improved aerodynamics, taller front wheel arches (Sport Evolution; to further facilitate 18-inch (460 mm) wheels in DTM), brake ducting, and more power. Other limited-production models (based on evolution models but featuring special paintwork and/or unique interior schemes commemorating championship wins) include the Europa, Ravaglia, Cecotto, and Europameister. Production of the original E30 M3 ended in early 1992.",
            "url_image" => "/public/images/coches/bmw/bmw_m3_e30_drift.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_m3_e30_gra",
            "category" => "race",
            "power" => 290,
            "torque" => 310,
            "weight" => 945,
            "power_to_weight_ratio" => 3.26,
            "top_speed" => 280,
            "year" => 1986,
            "descripttion" => "Based on the 1986 model year E30 3-Series, the E30 M3 used the BMW S14 four cylinder engine.The production of the E30 road car was to homologate the M3 for Group A Touring Car racing.
                            The M3 had a commanding presence on the international touring car racing scene for five years. It became the most successful touring car of all times by winning the two champion's titles in the European Touring Car Championship and twice in the German Touring Car Championship. There were also numerous further victories and championship wins at international level.
                            The late 80s cars were starting to showcase the extreme potential of the car, with engines screaming at over 8000RPM and outputs of over 290 bhp. The chassis and suspension was modified and reinforced to support the extra power and provide adequate handling.",
            "url_image" => "/public/images/coches/bmw/bmw_m3_e30_gra.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_m3_e30_s1",
            "category" => "street",
            "power" => 238,
            "torque" => 240,
            "weight" => 1200,
            "power_to_weight_ratio" => 5.04,
            "top_speed" => 248,
            "year" => 1986,
            "description" => "The Step1 tuned version of E30 series has non adjustable aftermarket dampers and lowered springs. There are some compromises as the rear subframe chassis spring sockets, can't handle very stiff springs, so the front is more stiff than the rear.
                            Based on the 1986 model year E30 3-Series, the E30 M3 used the BMW S14 four cylinder engine.The production of the E30 road car was to homologate the M3 for Group A Touring Car racing.
                            The Sport Evolution model production run of 600 (sometimes referred as EVO3) increased engine displacement to 2.5 L and produced 235 hp (175 kW). Sport Evolution models have enlarged front bumper openings and an adjustable multi-position front splitter and rear wing. Brake cooling ducts were installed in place of front foglights. An additional 786 convertibles were also produced.
                            To keep the car competitive in racing following year-to-year homologation rules changes, homologation specials were produced. Homologation (motorsport) rules roughly stated that the race version must reflect the street car aerodynamically and in engine displacement. These include: the Evo 1, Evo 2, and Sport Evolution some of which featured less weight, improved aerodynamics, taller front wheel arches (Sport Evolution; to further facilitate 18-inch (460 mm) wheels in DTM), brake ducting, and more power. Other limited-production models (based on evolution models but featuring special paintwork and/or unique interior schemes commemorating championship wins) include the Europa, Ravaglia, Cecotto, and Europameister. Production of the original E30 M3 ended in early 1992.",
            "url_image" => "/public/images/coches/bmw/bmw_m3_e30_s1.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_m3_e30_dtm",
            "category" => "race",
            "power" => 350,
            "torque" => 310,
            "weight" => 945,
            "power_to_weight_ratio" => 2.70,
            "top_speed" => 280,
            "year" => 1986,
            "description" => "Based on the 1986 model year E30 3-Series, the E30 M3 used the BMW S14 four cylinder engine.The production of the E30 road car was to homologate the M3 for Group A Touring Car racing.
                            The M3 had a commanding presence on the international touring car racing scene for five years. It became the most successful touring car of all times by winning the two champion's titles in the European Touring Car Championship and twice in the German Touring Car Championship. There were also numerous further victories and championship wins at international level.
                            The 1990-1992 cars of the Deutsche Tourenwagen Meisterschaft (DTM) were the most extreme versions and reached their maximum potential, with engines screaming over 9000RPM and outputs of over 350 bhp. The chassis was heavily modified and reinforced to support the extremely stiff suspensions that characterised the cars of the day. In the latest versions of the car ABS was also permitted in the DTM championship and the teams could setup their cars with gearboxes featuring 6 ratios.",
            "url_image" => "/public/images/coches/bmw/bmw_m3_e30_dtm.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_m3_e92",
            "category" => "street",
            "power" => 414,
            "torque" => 400,
            "weight" => 1605,
            "power_to_weight_ratio" => 3.87,
            "top_speed" => 250,
            "year" => 2015,
            "description" => "The fourth generation - 20 years and still designed to thrill. The BMW M3 Coupe continues the tradition of the M GmbH to build a perfect high-performance sports car. It comes with a completely new V8 engine and drivetrain, a lightweight body that is also extremely stiff, a lowered centre of gravity and a carbon roof which, while just as strong as a steel roof, weighs far less. And of course, everything has been tried and tested on the toughest proving ground in the world, the Nurburgring-Nordschleife. Underneath the distinctive powerdome: the V8 high-rev engine with up to 8.400 rpm which is transferred by the double-clutch transmission M DKG Drivelogic to the M differential lock and then to the rear wheels without the slightest disruption to tractive force.
                            With a vehicle as powerful and dynamic as this, styling is never an aim in itself. Form will always be driven by functional considerations. The expressive front is designed to accommodate the V8 high-rev engine. The muscular rear allows for the wider track and four tailpipes. Even the shape of the exterior mirrors adds to the overall aerodynamics. Only the interplay of all these measures ensures the desired effect: sports car performance that is ideally suited to everyday driving.",
            "url_image" => "/public/images/coches/bmw/bmw_m3_e92.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_m3_e92_drift",
            "category" => "street",
            "power" => 414,
            "torque" => 400,
            "weight" => 1605,
            "power_to_weight_ratio" => 3.87,
            "top_speed" => 250,
            "year" => 2015,
            "description" => "The Drift tuned version of M3 E92 series has adjustable aftermarket dampers with coilover springs, camber plates to adjust for massive range of camber at the front, and rear toe links for equally big range of camber adjustment at the rear. The front steering rods are also modify to permits very wide angles for steering up to 55 degrees.
                            The fourth generation - 20 years and still designed to thrill. The BMW M3 Coupe continues the tradition of the M GmbH to build a perfect high-performance sports car. It comes with a completely new V8 engine and drivetrain, a lightweight body that is also extremely stiff, a lowered centre of gravity and a carbon roof which, while just as strong as a steel roof, weighs far less. And of course, everything has been tried and tested on the toughest proving ground in the world, the Nurburgring-Nordschleife. Underneath the distinctive powerdome: the V8 high-rev engine with up to 8.400 rpm which is transferred by the double-clutch transmission M DKG Drivelogic to the M differential lock and then to the rear wheels without the slightest disruption to tractive force.
                            With a vehicle as powerful and dynamic as this, styling is never an aim in itself. Form will always be driven by functional considerations. The expressive front is designed to accommodate the V8 high-rev engine. The muscular rear allows for the wider track and four tailpipes. Even the shape of the exterior mirrors adds to the overall aerodynamics. Only the interplay of all these measures ensures the desired effect: sports car performance that is ideally suited to everyday driving.",
            "url_image" => "/public/images/coches/bmw/bmw_m3_e92_drift.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_m3_e92_s1",
            "category" => "street",
            "power" => 414,
            "torque" => 400,
            "weight" => 1605,
            "power_to_weight_ratio" => 3.87,
            "top_speed" => 250,
            "year" => 2015,
            "description" => "The Step1 tuned version of M3 E92 series has non adjustable aftermarket dampers and lowered springs. There are some compromises as the rear subframe chassis spring sockets, can't handle very stiff springs, so the front is more stiff than the rear.
                            The fourth generation - 20 years and still designed to thrill. The BMW M3 Coupe continues the tradition of the M GmbH to build a perfect high-performance sports car. It comes with a completely new V8 engine and drivetrain, a lightweight body that is also extremely stiff, a lowered centre of gravity and a carbon roof which, while just as strong as a steel roof, weighs far less. And of course, everything has been tried and tested on the toughest proving ground in the world, the Nurburgring-Nordschleife. Underneath the distinctive powerdome: the V8 high-rev engine with up to 8.400 rpm which is transferred by the double-clutch transmission M DKG Drivelogic to the M differential lock and then to the rear wheels without the slightest disruption to tractive force.
                            With a vehicle as powerful and dynamic as this, styling is never an aim in itself. Form will always be driven by functional considerations. The expressive front is designed to accommodate the V8 high-rev engine. The muscular rear allows for the wider track and four tailpipes. Even the shape of the exterior mirrors adds to the overall aerodynamics. Only the interplay of all these measures ensures the desired effect: sports car performance that is ideally suited to everyday driving.",
            "url_image" => "/public/images/coches/bmw/bmw_m3_e92_s1.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_m3_gt2",
            "category" => "race",
            "power" => 485,
            "torque" => 499,
            "weight" => 1245,
            "power_to_weight_ratio" => 2.56,
            "top_speed" => 270,
            "year" => 2009,
            "description" => "The BMW M3 Race Version. Sportiness personified.
                            In the course of developing the race version of the BMW M3, BMW engineers were faced with an ambitious task: to improve upon the sportiness of an already sporting car. A better base would, though, be difficult to find. In standard form the vehicle delivers powerful dynamics and sporting aesthetics.
                            In order to enable the BMW M3 to make full use of this performance on the race circuit, the experts in Munich have not concentrated solely on the engine, but have race-tuned the chassis as well. The race version of the BMW M3 is wider and significantly lighter than its production equivalent, enabling it to perfectly transmit the power of its V8 to the track. Widespread use of carbon-reinforced plastic (CRP) provides proof of substantial weight reduction. As with the production version, the race car's roof is manufactured from this high-tech material.
                            The race version of the BMW M3 is clearly aimed at the top echelon of motorsport. As such, it is no surprise to discover that in the course of its development, begun in mid-2007, numerous Formula One techniques were applied. These include computational fluid dynamics (CFD) and wind tunnel analyses, both of which have ensured the best possible aerodynamic package for the BMW M3.",
            "url_image" => "/public/images/coches/bmw/bmw_m3_gt2.png",
            "brand_id" => 4
        ],
        [
            "name" => "ks_bmw_m4",
            "category" => "street",
            "power" => 431,
            "torque" => 550,
            "weight" => 1572,
            "power_to_weight_ratio" => 3.64,
            "top_speed" => 250,
            "year" => 2015,
            "description" => "The M4's engine brace, trunk lid and the roof are all made of Carbon Fiber Reinforced Plastic (CFRP) to shed pounds. But the real masterpiece for both is the CFRP driveshaft — a one-piece unit that offers exceptional strength while reducing rotating mass, resulting in a tighter drive with less counteractive momentum. This cornering king's real crown is its rear-axle subframe with solid mounts, bolted directly to the body without the use of bushings to make for the tightest possible handling, and its control arms—made of aluminium—shed weight, even where you can't see it.
                            This car's high-pressure, quick-response turbocharging system utilizes two TwinPower turbos to provide a broad plateu, while BMW's double-VANOS technology varies camshaft timing, allowing higher pressure to build inside the cylinder for optimal power output throughout the rev range. The Active M Differential uses Dynamic Stability Control data, pedal position, wheel rotation, and yaw rate to act on each wheel before any of them breaks free. An electric motor varies power distribution between wheels, shifting it in tight turns, and even decreasing understeer during full-load cornering.
                            The M4's Power isn't all under the hood. Its exterior features an integrated rear spoiler made of lightweight Carbon Fiber, and a CFRP diffuser, both of which keep the weight off while creating rear down-force. An optional 7-speed dual-clutch transmission with paddle shifters provides instantaneous track-inspired shifts, but for the purists who want an analog connection to the road, a 6-speed manual transmission comes standard.",
            "url_image" => "/public/images/coches/bmw/bmw_m4.png",
            "brand_id" => 4
        ],
        [
            "name" => "ks_bmw_m4_akrapovic",
            "category" => "street",
            "power" => 445,
            "torque" => 589,
            "weight" => 1572,
            "power_to_weight_ratio" => 3.53,
            "top_speed" => 250,
            "year" => 2015,
            "description" => "The M4's engine brace, trunk lid and the roof are all made of Carbon Fiber Reinforced Plastic (CFRP) to shed pounds. But the real masterpiece for both is the CFRP driveshaft — a one-piece unit that offers exceptional strength while reducing rotating mass, resulting in a tighter drive with less counteractive momentum. This cornering king's real crown is its rear-axle subframe with solid mounts, bolted directly to the body without the use of bushings to make for the tightest possible handling, and its control arms—made of aluminium—shed weight, even where you can't see it.
                            This car's high-pressure, quick-response turbocharging system utilizes two TwinPower turbos to provide a broad plateu, while BMW's double-VANOS technology varies camshaft timing, allowing higher pressure to build inside the cylinder for optimal power output throughout the rev range. The Active M Differential uses Dynamic Stability Control data, pedal position, wheel rotation, and yaw rate to act on each wheel before any of them breaks free. An electric motor varies power distribution between wheels, shifting it in tight turns, and even decreasing understeer during full-load cornering.
                            The M4's Power isn't all under the hood. Its exterior features an integrated rear spoiler made of lightweight Carbon Fiber, and a CFRP diffuser, both of which keep the weight off while creating rear down-force. An optional 7-speed dual-clutch transmission with paddle shifters provides instantaneous track-inspired shifts, but for the purists who want an analog connection to the road, a 6-speed manual transmission comes standard.",
            "url_image" => "/public/images/coches/bmw/bmw_m4_akrapovic.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_z4_drift",
            "category" => "street",
            "power" => 390,
            "torque" => 580,
            "weight" => 1525,
            "power_to_weight_ratio" => 3.91,
            "top_speed" => 250,
            "year" => 2009,
            "description" => "The Drift tuned version of Z4 E89 35is series has adjustable aftermarket dampers with coilover springs, camber plates to adjust for massive range of camber at the front, and rear toe links for equally big range of camber adjustment at the rear. The front steering rods are also modify to permits very wide angles for steering up to 55 degrees. The engine is tuned with a new ECU that raises the turbo boost at over 1bar and a locked rear differential is installed to help those rear tyres spinning together. A slight weight reduction has also been achieved.
                            The BMW Z4 Roadster represents the interplay of classical proportions and state-of-the-art technology. The  BMW Z4 sDrive35is offering a higher standard of performance ensured both by the modified straight-six power unit with BMW Twin Turbo Technology and High Precision Injection, on the one hand, and by BMW's seven-speed Sport Automatic with double clutch operation and the M Sports Package including the adaptive M Suspension likewise featured as standard, on the other.
                            The BMW Z4 sDrive35is also comes as standard with an M Sports Package including the M Aerodynamics Package and adaptive M Suspension featuring electronically controlled dampers for even greater agility without making any concessions in terms of comfort.",
            "url_image" => "/public/images/coches/bmw/bmw_z4_drift.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_z4",
            "category" => "street",
            "power" => 330,
            "torque" => 500,
            "weight" => 1605,
            "power_to_weight_ratio" => 4.86,
            "top_speed" => 250,
            "description" => "The BMW Z4 Roadster represents the interplay of classical proportions and state-of-the-art technology. The  BMW Z4 sDrive35is offering a higher standard of performance ensured both by the modified straight-six power unit with BMW Twin Turbo Technology and High Precision Injection, on the one hand, and by BMW's seven-speed Sport Automatic with double clutch operation and the M Sports Package including the adaptive M Suspension likewise featured as standard, on the other.
                            The BMW Z4 sDrive35is also comes as standard with an M Sports Package including the M Aerodynamics Package and adaptive M Suspension featuring electronically controlled dampers for even greater agility without making any concessions in terms of comfort.",
            "url_image" => "/public/images/coches/bmw/bmw_z4.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_z4_gt3",
            "category" => "race",
            "power" => 530,
            "torque" => 520,
            "weight" => 1265,
            "power_to_weight_ratio" => 2.38,
            "top_speed" => 280,
            "description" => "The BMW Z4 GT3, which was officially launched and completed its first test drives at the start of March, is already enjoying great popularity among BMW Motorsport customers. The first cars have been delivered to private BMW teams, who will prepare them for use in various national and international championships.
                            The largest difference between production and racing car can be found under the bonnet: while the production version of the BMW Z4 is driven by a six-cylinder engine, the GT3 car is powered by a 4.0-litre eight-cylinder engine similar to the unit used in the BMW M3 GT2. This powerful heart produces over 500 bhp. Its excellent performance characteristics and good torque curve make the base engine from the production version of the BMW M3 predestined for use in motorsport.
                            The fitting of the V8 engine had a considerable influence on the development of the BMW Z4 GT3. Initially, design-space examinations were performed using CATIA V5 design software, in order to place the engine in the ideal position and meet racing specifications. The engineers then added all the other components.
                            When it comes to electronics, the private teams can look forward to innovative BMW solutions, which have already been tried and tested on the BMW M3 GT2: the modern ECU408 takes over the engine management, while the Power400 electronic control unit is responsible for controlling all the actuators. The power is transmitted through a six-speed, sequential gearbox with &ldquo;Quick Shift&rdquo; function.
                            The front axle of the BMW Z4 GT3 is a completely new design, based on a series concept. It is equipped with a tubular stabiliser bar with adjustable blades. The rear axle is designed as a longitudinal link axle, as with the series version of the BMW Z4. During the development, BMW Motorsport engineers worked hand in hand in other areas with their colleagues from series production. This allowed them to access calculations from the field of computational fluid dynamics (CFD) when designing the car's aerodynamics. Furthermore, tests were also carried out in the wind tunnel and on the BMW Group's test benches.
                            Front and rear wings, bonnet, roof, fender and many other components are made of carbon fibre reinforced plastics (CFRP). Using this lightweight, torsion-resistant material contributed significantly to reducing the weight of the BMW Z4 GT3 to 1,200 kilograms
                            As with all cars in the BMW customer racing range, the emphasis was also put on cost-efficiency when developing the BMW Z4 GT3. As a result, the car offers a very good cost/performance ratio and gives private teams the opportunity to participate in affordable motorsport at the highest level.",
            "url_image" => "/public/images/coches/bmw/bmw_z4_gt3.png",
            "brand_id" => 4
        ],
        [
            "name" => "bmw_z4_s1",
            "category" => "street",
            "power" => 330,
            "torque" => 500,
            "weight" => 1605,
            "power_to_weight_ratio" => 4.86,
            "top_speed" => 250,
            "year" => 2009,
            "description" => "The Step1 tuned version of Z4 E89 35is series has non adjustable aftermarket dampers and lowered springs. There are some compromises as the rear subframe chassis spring sockets, can't handle very stiff springs, so the front is more stiff than the rear. The open body limits the stiffness of the springs.
                        The BMW Z4 Roadster represents the interplay of classical proportions and state-of-the-art technology. The  BMW Z4 sDrive35is offering a higher standard of performance ensured both by the modified straight-six power unit with BMW Twin Turbo Technology and High Precision Injection, on the one hand, and by BMW's seven-speed Sport Automatic with double clutch operation and the M Sports Package including the adaptive M Suspension likewise featured as standard, on the other.
                        The BMW Z4 sDrive35is also comes as standard with an M Sports Package including the M Aerodynamics Package and adaptive M Suspension featuring electronically controlled dampers for even greater agility without making any concessions in terms of comfort.",
            "url_image" => "/public/images/coches/bmw/bmw_z4_s1.png",
            "brand_id" => 4
        ],

        [
            "name" => "ks_corvette_c7r",
            "category" => "street",
            "power" => 455,
            "torque" => 625,
            "weight" => 1496,
            "power_to_weight_ratio" => 3.29,
            "top_speed" => 290,
            "year" => 2014,
            "description" => "And only a Corvette with the perfect balance of technology, design and performance can wear the iconic Stingray designation.
                            The Corvette Stingray features an estimated 450 horsepower and 610 Nm of torque, and it is able to accelerate from 0-60 in less than four seconds and achieve more than 1g in cornering grip. This model takes advantage of lightweight materials, advanced manufacturing techniques and technology transfer from the Corvette Racing program to produce an ideal 50/50 weight balance and to deliver a world-class power-to-weight ratio.
                            The technologically advanced foundation is an all-new aluminum frame structure that is 57 percent stiffer and 45 kg lighter. The greater torsional rigidity reduces unwanted noise and improves ride and handling.
                            This model features main rails composed of five customized aluminum segments, including aluminum extrusions at each end, a center main rail section and hollow-cast nodes at the suspension interface points. Each segment is tuned – varying in thickness from 2mm to 11mm – tailoring the gauge, shape and strength properties to optimize the requirements for each frame section with minimal weight.
                            The innovative use of materials includes a standard carbon fiber hood and roof panel, as well as underbody panels created with carbon-nano composite technology, an advanced blend of traditional composite material and carbon fiber, which allows lighter underbody panels without a loss of strength or stiffness. Fenders, doors, rear quarter panels and the rear hatch panel are made with lighter-density Sheet Molded Compound.
                            The seven-speed manual incorporates rev-matching technology for upshifts and downshifts. This driver-selectable feature can be easily engaged or disengaged via paddles on the steering wheel. The seven-speed is used with a new dual-mass flywheel and dual-disc clutch, which deliver greater shift quality and feel through lower inertia. The transmission with the Z51 Performance Package includes specific close-ratio gearing for more aggressive driving.",
            "url_image" => "/public/images/coches/chevrolet/corvette_c7r.png",
            "brand_id" => 5
        ],
        [
            "name" => "ks_corvette_c7_stingray",
            "category" => "race",
            "power" => 495,
            "torque" => 650,
            "weight" => 1320,
            "power_to_weight_ratio" => 2.66,
            "top_speed" => 280,
            "year" => 2015,
            "description" => "When it comes to endurance racing, Corvette has been the benchmark of success for nearly 15 years, says Jim Campbell, U.S. vice president, Performance Vehicles and Motorsports.
                            Many of the architectural and aerodynamic features of the C7.R are based on equivalent components and technologies from the 2015 Corvette Z06, including a new, aluminium frame. As before, the race car and the Z06 will share the same, production-based aluminum frame. By leveraging advanced manufacturing materials - such as laser welding, Flowdrill-machined fasteners and a GM-patented aluminum spot-welding process - the production structure is significantly stronger than its predecessor. For Corvette Racing, this equates to a race chassis for the C7.R that is 40 percent stronger than the outgoing C6.R.
                            The addition of direct fuel injection to the Corvette Z06 will enable the technology to return to a Corvette race car for the first time since the end of the GT1 era in 2009. It promises greater efficiency, which can make a significant difference in long-distance endurance racing such as Daytona and Le Mans through fewer time-consuming pit stops.
                            The aerodynamic strategies of the Corvette Stingray came directly from the Corvette C6.R - including the forward-tilted radiator, functional hood and front-quarter panel vents, and rear transmission and differential cooling intakes. The Z06 and C7.R take that aerodynamic foundation to the next level, sharing aggressive strategies for increased cooling and aerodynamic downforce, including similar front splitters, rocker panels, and front- and rear-brake cooling ducts.",
            "url_image" => "/public/images/coches/chevrolet/corvette_c7_stingray.png",
            "brand_id" => 5
        ],

        [
            "name" => "ks_ferrari_sf70h",
            "category" => "race",
            "power" => 1000,
            "torque" => 700,
            "weight" => 750,
            "power_to_weight_ratio" => 0.6,
            "top_speed" => 360,
            "year" => 2017,
            "description" => "The 63rd single-seater designed and built by Scuderia Ferrari to take part in the 2017 Championship is born out of a regulation change that is without precedent in this category of motor sport. In the past, regulations generally went in the direction of slowing the cars down. However, in the year 2017 the rule changes went in the opposite direction, meaning the cars can have more aerodynamic downforce and more mechanical grip.
                            There are several differences between the 668 project and Ferraris from the recent past: the lengthened nose and the arrow-shaped wing are a consequence of the regulations, as is the obvious fin on the engine cover and more complex aero appendages ahead of the air intakes on the sidepods.
                            The layout of some of the mechanical components on the hybrid power unit has been revised, while other areas maintain a similar layout to the 2016 car.",
            "url_image" => "/public/images/coches/ferrari/ferrari_sf70h.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_f2004",
            "category" => "opwh",
            "power" => 856,
            "torque" => 400,
            "weight" => 605,
            "power_to_weight_ratio" => 1.43,
            "top_speed" => 360,
            "year" => 2004,
            "description" => "The year 2004, the record season for Ferrari, went into a second act with the 2004 Championship: out of the 18 GPs, the Scuderia won 15 races (13 by Schumacher, 2 by Barrichello), 8 one-two wins, 12 pole positions for a total of 262 points in the Constructors' Championship. Already in August, Ferrari archived the Championship files: at the Hungarian GP the Scuderia won the Constructors' Title – the 14th in its history – with a one-two win, while Schumacher gained his fifth title in a row, the seventh of his career, in Belgium, on the same track where he debuted in the year 1991.
                            The season made history also thanks to one of the most competitive single-seaters ever built: the F2004, fitted with the new engine dubbed 053, a 10-cylinder unit with 865 bhp at 18,300 rpm, which exceeded all expectations in terms of performance and reliability, also regarding the new challenge set by the regulations, which aimed at reducing costs: one engine per race weekend, with an average lifespan of 800 instead of 350 kilometres.",
            "url_image" => "/public/images/coches/ferrari/ferrari_f2004.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_f138",
            "category" => "opwh",
            "power" => 763,
            "torque" => 310,
            "weight" => 642,
            "power_to_weight_ratio" => 0.84,
            "top_speed" => 340,
            "year" => 2013,
            "description" => "The Ferrari F138 (originally known as the Ferrari F2013, and sometimes referred to by its project number, the Ferrari 664) is a Formula One racing car designed and built by Scuderia Ferrari for use in the 2013 Formula One season. It was driven by two-times World Champion Fernando Alonso and his team-mate Felipe Massa. The chassis was named &quot;F138&quot; to represent the year that it would be raced in, 2013,
                            and to mark the final season that Formula One would use V8 engines. Weight includes driver",
            "url_image" => "/public/images/coches/ferrari/ferrari_f138.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_sf15t",
            "category" => "opwh",
            "power" => 840,
            "torque" => 721,
            "weight" => 702,
            "power_to_weight_ratio" => 0.83,
            "top_speed" => 350,
            "year" => 2015,
            "description" => "The SF15-T was built to compete in the 2015 Formula One season in which it was driven by Sebastian Vettel and Kimi Räikkönen.
                            Launched on 30 January 2015, it is the second car made by Ferrari since the reintroduction of turbo engines back in 2014.* Weight includes driver",
            "url_image" => "/public/images/coches/ferrari/ferrari_sf15t.png",
            "brand_id" => 6
        ],
        [
            "name" => "ferrari_312t",
            "category" => "opwh",
            "power" => 495,
            "torque" => 308,
            "weight" => 606,
            "power_to_weight_ratio" => 1.22,
            "top_speed" => 320,
            "year" => 1975,
            "description" => "1975. The year of the 312 T, where the T stood for the transversal gearbox, in a 90-degree angle to the engine. This solution led to a compact engine and an improved weight distribution and a very fast and agile car, but also quite nervous and difficult to drive to the limit. After 11 years the Scuderia regained the Drivers&#39; Title with Niki Lauda, thanks to his 5 wins, 8 places on the podium, 9 pole positions and 12 times in the points in 14 races. The Constructors&#39; Title was won thanks to the contribution of Clay Regazzoni, who won the Italian GP. This was the end of the domination by V8s with the first V12-cylinder winning the Champfile:///C:/Users/juanf/Downloads/Ferrari_FXX.rarionship with almost 500bhp",
            "url_image" => "/public/images/coches/ferrari/ferrari_312t.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_312_67",
            "category" => "opwh",
            "power" => 390,
            "torque" => 330,
            "weight" => 548,
            "power_to_weight_ratio" => 1.41,
            "top_speed" => 300,
            "year" => 1967,
            "description" => "Scuderia Ferrari started the 1967 Championship with the 312/67. The car's official debut was at the Champions' Race in Brands-Hatch with Bandini and Scarfiotti behind the wheel.
                            The Scuderia's best results came courtesy of New Zealander Chris Amon, who managed third position on the podium on three occasions.",
            "url_image" => "/public/images/coches/ferrari/ferrari_312_67.png",
            "brand_id" => 6
        ],
        [
            "name" => "ferrari_f40",
            "category" => "spcl",
            "power" => 478,
            "torque" => 577,
            "weight" => 1175,
            "power_to_weight_ratio" => 2.46,
            "top_speed" => 324,
            "year" => 1987,
            "description" => "The F40 was built to celebrate Ferrari's 40th anniversary. A very fast berlinetta designed by Pininfarina, it was built mainly from composites. Its sophisticated high-performance, turbo-charged running gear combined with a first class chassis gave it the kind of great dynamic prowess that was close to that of a racing car. It was greeted with great enthusiasm by enthusiasts and the number of examples eventually built exceeded the company's wildest dreams.
                            The bodies were mounted on a 2450mm wheelbase chassis, as on the GTO, but both front and rear track were increased, as was the overall length mainly due to the longer more aerodynamic nose. The chassis had factory reference numbers F 120 AB, all were numbered in the continuous chassis number road car sequence, which commenced from chassis number 75000. The construction followed the Ferrari principle of a tubular steel chassis frame, now with a progressively deformable front section to meet increasing legislation worldwide. The overall premise was similar to that of the GTO, however there were additional stiffening braces, and the composite elements were bonded to the chassis frame with a special adhesive to provide even greater strength. The F40 was the first series production car to use mainly composite materials for its body panels, which totalled only eleven pieces, due to the large single unit front and rear sections. Whereas the GTO chassis had a bolted rear section to simplify engine removal, this element was unnecessary on the F40 due to the fully removable rear body section, which provided good access to all the mechanical components. Large cross drilled ventilated disc brakes with twin hydraulic circuits, without servo assistance. Independent suspension via tubular steel wishbones, coil springs, and hydraulic shock absorbers was provided, together with front and rear anti roll bars.
                            The mid mounted engine was a 90 degree V8 unit fitted longitudinally as in the GTO. However the development work on the Evoluzione models in the interim saw a small increase in capacity, a slightly higher compression ratio of 7.7:1, a rise in boost pressure, and numerous other changes that resulted in a significant increase in power output and also improved torque. The total cubic capacity was 2936cc. It had four valves per cylinder, twin overhead camshafts per bank, each bank being provided with its own toothed drive belt, dry sump lubrication, with twin IHI water cooled turbochargers feeding intake air via a pair of Behr intercoolers at 1.1 bar, coupled to a Weber-Marelli IAW combined ignition/fuel injection system, to provide a claimed power output of 478bhp at 7000rpm. The differential assembly was mounted on the back of the engine in unit with the rear mounted five speed all synchromesh gearbox.",
            "url_image" => "/public/images/coches/ferrari/ferrari_f40.png",
            "brand_id" => 6
        ],
        [
            "name" => "ferrari_f40_s3",
            "category" => "spcl",
            "power" => 610,
            "torque" => 715,
            "weight" => 1175,
            "power_to_weight_ratio" => 1.93,
            "top_speed" => 0,
            "year" => 1987,
            "description" => "The Stage 3 version of the Ferrari F40, comes with the factory option of modified turbos and boost, to raise the already impressive factory power to an outrageous value of over 600bhp. The car also comes equipped with heavy duty track oriented suspension and slick tyres, making this version just a step lower than the all mighty LM racing version. Incredibly, even though the original car has more than enough power, this engine modification is found on quite a big number of the F40's in the market.
                            The F40 was built to celebrate Ferrari's 40th anniversary. A very fast berlinetta designed by Pininfarina, it was built mainly from composites. Its sophisticated high-performance, turbo-charged running gear combined with a first class chassis gave it the kind of great dynamic prowess that was close to that of a racing car. It was greeted with great enthusiasm by enthusiasts and the number of examples eventually built exceeded the company's wildest dreams.
                            The bodies were mounted on a 2450mm wheelbase chassis, as on the GTO, but both front and rear track were increased, as was the overall length mainly due to the longer more aerodynamic nose. The chassis had factory reference numbers F 120 AB, all were numbered in the continuous chassis number road car sequence, which commenced from chassis number 75000. The construction followed the Ferrari principle of a tubular steel chassis frame, now with a progressively deformable front section to meet increasing legislation worldwide. The overall premise was similar to that of the GTO, however there were additional stiffening braces, and the composite elements were bonded to the chassis frame with a special adhesive to provide even greater strength. The F40 was the first series production car to use mainly composite materials for its body panels, which totalled only eleven pieces, due to the large single unit front and rear sections. Whereas the GTO chassis had a bolted rear section to simplify engine removal, this element was unnecessary on the F40 due to the fully removable rear body section, which provided good access to all the mechanical components. Large cross drilled ventilated disc brakes with twin hydraulic circuits, without servo assistance. Independent suspension via tubular steel wishbones, coil springs, and hydraulic shock absorbers was provided, together with front and rear anti roll bars.
                            The mid mounted engine was a 90 degree V8 unit fitted longitudinally as in the GTO. However the development work on the Evoluzione models in the interim saw a small increase in capacity, a slightly higher compression ratio of 7.7:1, a rise in boost pressure, and numerous other changes that resulted in a significant increase in power output and also improved torque. The total cubic capacity was 2936cc. It had four valves per cylinder, twin overhead camshafts per bank, each bank being provided with its own toothed drive belt, dry sump lubrication, with twin IHI water cooled turbochargers feeding intake air via a pair of Behr intercoolers at 1.1 bar, coupled to a Weber-Marelli IAW combined ignition/fuel injection system, to provide a claimed power output of 478bhp at 7000rpm. The differential assembly was mounted on the back of the engine in unit with the rear mounted five-speed all synchromesh gearbox.",
            "url_image" => "/public/images/coches/ferrari/ferrari_f40_s3.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_fxx_k",
            "category" => "sptc",
            "power" => 1050,
            "torque" => 900,
            "weight" => 1165,
            "power_to_weight_ratio" => 0.9,
            "top_speed" => 350,
            "year" => 2015,
            "description" => "The FXX K is the R&D program of Ferrari starring the first hybrid prototype of Maranello.
                            In the name, the initials K recalls the \"KERS\" technology (kinetic energy recovery) for maximizing performance on the track.
                            Free from homologations and regulations, the FXX K has been developed with no compromise and is equipped with technological innovations that guarantee an unbelievable driving experience.
                            The FXX K features 1050hp (860hp by V12 heat engine, 190hp by electric engine) and a torque above 900Nm. Its 6262cc V12 engine has been optimized for performance and is managable through a 4 positions \"manettino\": Qualify, Long Run, Manual Boost, Fast Charge",
            "url_image" => "/public/images/coches/ferrari/ferrari_fxx_k.png",
            "brand_id" => 6
        ],
        [
            "name" => "ferrari_laferrari",
            "category" => "sptc",
            "power" => 963,
            "torque" => 900,
            "weight" => 1255,
            "power_to_weight_ratio" => 0.7,
            "top_speed" => 350,
            "year" => 2015,
            "description" => "The LaFerrari represents Ferrari's most ambitious project yet to push the boundaries of technology on a road car, drawing together the finest expression of the marque's technical capabilities in both GT and Formula 1 engineering.
                            The LaFerrari is Ferrari's first ever production car to be equipped with the F1-derived hybrid solution – the HY-KERS system – which combines an electric motor producing over 150 CV with the most powerful incarnation yet of Ferrari's classic V12, with 800 CV at 9000 rpm.
                            To attain the performance goals set for the LaFerrari, Ferrari drew not only on the Scuderia's F1 experience in the choice of materials, design and engineering, but brought in the expertise of Rory Byrne, the legendary F1 designer who was responsible for no fewer than 11 of Ferrari's World Championship-winning cars.
                            The engineers' aim was to deliver the highest degree of aerodynamic efficiency ever achieved with any road car, with a coefficient of nearly 3, thanks to technical solutions honed with CFD analysis and fine-tuned in the F1 Wind Tunnel.
                            Thanks to myriad innovations across the board in its design and construction, the LaFerrari delivers absolutely exceptional performance, establishing itself as Ferrari's fastest-ever road car. The LaFerrari slashes more than 5 seconds off the Enzo's lap record at the Fiorano circuit.",
            "url_image" => "/public/images/coches/ferrari/ferrari_laferrari.png",
            "brand_id" => 6
        ],
        [
            "name" => "ferrari_599xxevo",
            "category" => "sptc",
            "power" => 750,
            "torque" => 700,
            "weight" => 1310,
            "power_to_weight_ratio" => 1.74,
            "top_speed" => 303,
            "year" => 2012,
            "description" => "The 36th edition of the Bologna Motor Show provides the venue for the unveiling of an evolution of the extreme, non-homologated sports berlinetta, the 599XX. Ferrari has introduced a package of performance-enhancing technical features available to clients participating in the track-based research and development programme for the 2012-2013 seasons.
                            Already the fruit of the very finest Ferrari road car and Formula 1-derived technology, the 599XX now features improved chassis dynamics thanks to an active aerodynamic package integrated with the vehicles' electronic control systems, and the adoption of new Pirelli tyres. The car is also more powerful than before (750 CV) and weighs 35 kg less.
                            The key to the aero package is the active rear wing design which represents a new aerodynamic concept called 'opening gap'. The wing features two flaps, with profiles similar to those used in Formula 1, which rotate electronically to adjust the downforce between the front and rear axles in function of vehicle speed and the manoeuvre being effected. The result of this concept is better performance in cornering.
                            The 599XX active rear wing is actuated automatically according to specific parameters which are integrated with the car's other control functions (ESP, ABS, SCM and F1-Trac). As a result of this integration, all the electronic controls have been suitably recalibrated. The 'opening gap' system logic is based on the following parameters:
                            - steering wheel angle
                            - longitudinal acceleration
                            - lateral acceleration
                            - vehicle speed
                            The new aerodynamics package for the 599XX also includes a modified front splitter and a new rear diffuser featuring a larger surface area and redesigned fences and foot-plates. Total downforce at 200 km/h is boosted to 330 kg when the flaps are open and 440 kg in the closed configuration.",
            "url_image" => "/public/images/coches/ferrari/ferrari_599xxevo.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_812_superfast",
            "category" => "sptc",
            "power" => 800,
            "torque" => 718,
            "weight" => 1525,
            "power_to_weight_ratio" => 1.91,
            "top_speed" => 340,
            "year" => 2017,
            "description" => "Ferrari chose the 87th edition of the Geneva International Motor Show for the world premiere of the new 12-cylinder berlinetta, the 812 Superfast, the most powerful and fastest Ferrari in the marque's history. This new car not only introduces a plethora of innovative features but is also particularly significant as the V12 series marked the official start of the glorious Prancing Horse story in 1947, 70 years ago.
                            The 812 Superfast thus ushers in a new era in Ferrari 12-cylinder history, in doing so building on the invaluable legacies of the F12berlinetta and F12tdf. It is aimed at clients demanding the most powerful and exclusive Ferrari in the range: an uncompromising sports car that will deliver exhilarating driving both on road and track yet also be comfortable enough to allow its owners to enjoy it as an all-round experience.",
            "url_image" => "/public/images/coches/ferrari/ferrari_812_superfast.png",
            "brand_id" => 6
        ],
        [
            "name" => "ferrari_458",
            "category" => "sptc",
            "power" => 570,
            "torque" => 540,
            "weight" => 1573,
            "power_to_weight_ratio" => 2.76,
            "top_speed" => 325,
            "year" => 2011,
            "description" => "While it's true that every Ferrari is innovative by definition, it's equally true that in the course of the Prancing Horse's history, certain cars have marked a genuine departure from the current range. This is very much the case with the Ferrari 458 Italia, which is a massive leap forward from the company's previous mid-rear engined sports cars.
                            The Ferrari 458 Italia is a completely new car from every point of view: engine, design, aerodynamics, handling, instrumentation and ergonomics, just to name a few.
                            The 458 Italia is designed for owners for whom the priority is uncompromising on-road performance with occasional track day capability, but who still demand a car that is useable in day-to-day driving like all Ferrari's recent models.",
            "url_image" => "/public/images/coches/ferrari/ferrari_458.png",
            "brand_id" => 6
        ],
        [
            "name" => "ferrari_458_gt2",
            "category" => "rccr",
            "power" => 470,
            "torque" => 520,
            "weight" => 1245,
            "power_to_weight_ratio" => 2.65,
            "top_speed" => 270,
            "year" => 2011,
            "description" => "The 458 garnered a plethora of victories in its first two racing seasons: from the 24 Hours of Le Mans to the Teams and Constructors' titles in the likes of the Le Mans Series, the International Le Mans Cup and the FIA World Endurance Championship. It also delivered Drivers' title in the FIA GT and the GT3 Asia, Drivers' and Teams' titles in the International GT Open, in the Blancpain Championship and the British GT Championship.
                            The Ferrari 458 Italia GT2 simulated is an amazingly efficient car in terms of aerodynamics and chassis performance. Because of that, the engine is very restricted to keep the performance in balance with the other cars of the series. While the street car engine can deliver over 570bhp at 9000rpm, the race engine outputs about 100bhp less and although the limiter is at 8500, it doesn't make sense to push the engine above 7500rpm.",
            "url_image" => "/public/images/coches/ferrari/ferrari_458_gt2.png",
            "brand_id" => 6
        ],
        [
            "name" => "ferrari_458_s3",
            "category" => "sptc",
            "power" => 570,
            "torque" => 540,
            "weight" => 1140,
            "power_to_weight_ratio" => 2.0,
            "top_speed" => 325,
            "year" => 2011,
            "description" => "The Ferrari 458 Stage 3, has extensive modifications to the suspension springs and dampers, similar to those seen on the 458 challenge trofeo car. It sits much lowered to the ground, taking full advantage of the underbody aerodynamics. It is also much lighter than the road car weighting under 1200kg. This brings to the surface the amazing engine and handling, while overall grip is well supported by slick tyres.
                            While it's true that every Ferrari is innovative by definition, it's equally true that in the course of the Prancing Horse's history, certain cars have marked a genuine departure from the current range. This is very much the case with the Ferrari 458 Italia, which is a massive leap forward from the company's previous mid-rear engined sports cars.
                            The Ferrari 458 Italia is a completely new car from every point of view: engine, design, aerodynamics, handling, instrumentation and ergonomics, just to name a few.
                            The 458 Italia is designed for owners for whom the priority is uncompromising on-road performance with occasional track day capability, but who still demand a car that is useable in day-to-day driving like all Ferrari's recent models.",
            "url_image" => "/public/images/coches/ferrari/ferrari_458_s3.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_488_gtb",
            "category" => "sptc",
            "power" => 660,
            "torque" => 760,
            "weight" => 1370,
            "power_to_weight_ratio" => 2.08,
            "top_speed" => 330,
            "year" => 2015,
            "description" => "The Ferrari 488 GTB provides track-level performance that can be enjoyed to the maximum even by non-professional drivers in everyday use. Its response times, nimbleness and on-the-limit driving guarantee a unique sense of exhilaration and unparalleled driving pleasure.
                            This car's new 3902 cc V8 turbo is at the top of its class for power output, torque and response times, making it the new benchmark for this kind of architecture.
                            The Ferrari 488 GTB's subsystems and electronic controls make its power and performance instantly available and controllable. It is, in fact, the most responsive production model there is, with razor-sharp response times comparable to those of a track car.",
            "url_image" => "/public/images/coches/ferrari/ferrari_488_gtb.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_488_gt3",
            "category" => "rccr",
            "power" => 500,
            "torque" => 640,
            "weight" => 1270,
            "power_to_weight_ratio" => 2.54,
            "top_speed" => 300,
            "year" => 2011,
            "description" => "The Ferrari 488 GT3 is the the racing version of the latest 488 GTB, presented at the Ferrari Finali Mondiali, as replacement for the 458 Italia.
                            This car features large side intakes to provide a better air flow to its twin-turbocharged 3.9-liter V8.",
            "url_image" => "/public/images/coches/ferrari/ferrari_488_gt3.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_288_gto",
            "category" => "spcl",
            "power" => 400,
            "torque" => 496,
            "weight" => 1160,
            "power_to_weight_ratio" => 2.9,
            "top_speed" => 305,
            "year" => 1984,
            "description" => "Announced by Enzo Ferrari in September 1983, and unveiled at the Geneva Motor Show in March 1984, the GTO (also unofficially known with the 288 prefix) sparked off a wave of enthusiasm. The legendary name, the stunning styling by Pininfarina, the engine with its seemingly inexhaustible power (2.8 litres and 8 cylinders) and the widespread use of composite materials made the GTO the closest thing to a racing car.
                            To meet customer demand, 272 were built instead of the planned 200: all were sold before production began.
                            The 288 appellation refers to the total cubic capacity of the engine and number of cylinders, 2.8 litres with 8 cylinders. Obviously, the \"GTO\" model name was a retro touch referring to the legendary 250 GTO of the early sixties, to which it was intended to be the spiritual successor in GT racing.",
            "url_image" => "/public/images/coches/ferrari/ferrari_288_gto.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_330_p4",
            "category" => "spcl",
            "power" => 450,
            "torque" => 588,
            "weight" => 792,
            "power_to_weight_ratio" => 1.76,
            "top_speed" => 320,
            "year" => 1967,
            "description" => "With a styling very similar to that of the 330 P3, this model was powered by a V12 engine that had been radically redesigned by Franco Rocchi. The most obvious modification was the introduction of a three-valve cylinder head – two inlet and one exhaust.
                            Fuel feed was provided by a Lucas injection system. The chassis was slightly shorter than the 330 P3's, and the new suspension system improved roadholding. The car won numerous races and earned its place in the history books after a memorable 1-2-3 at Daytona.",
            "url_image" => "/public/images/coches/ferrari/ferrari_330_p4.png",
            "brand_id" => 6
        ],
        [
            "name" => "ks_ferrari_250_gto",
            "category" => "spcl",
            "power" => 300,
            "torque" => 294,
            "weight" => 880,
            "power_to_weight_ratio" => 2.93,
            "top_speed" => 280,
            "year" => 1962,
            "description" => "The 250 GTO model was the pinnacle of the development of the 250 GT series in competition form, whilst still remaining a road car. It made its public debut at the annual pre-season Ferrari press conference in January 1962, and was the only front-engined model on display, with its monoposto and sports racing counterparts all having a mid-engine configuration.
                            The 250 GTO was the ultimate expression of the Ferrari 250 GT car. It was equally at home on the road or track – perhaps the last dual-purpose road/race car produced – and has achieved legendary status amongst aficionados of the marque. With only a relatively small production run of thirty-six cars, and with many of the examples produced having a great racing pedigree, it has become one of the icons of Ferrari's production history, with a revered position in collectors' circles.",
            "url_image" => "/public/images/coches/ferrari/ferrari_250_gto.png",
            "brand_id" => 6
        ],

        [
            "name" => "ks_ford_gt40",
            "category" => "race",
            "power" => 430,
            "torque" => 530,
            "weight" => 1025,
            "power_to_weight_ratio" => 2.38,
            "top_speed" => 335,
            "year" => 1966,
            "description" => "The Ford GT40 is a high performance American-British endurance racing car, built and designed in England (Mk I, Mk II, and Mk III) and in the United States (Mk IV), and powered by a series of American-built engines, which won the 24 Hours of Le Mans four consecutive times, from 1966 to 1969
                            Simulated in Assetto Corsa is chassis # P-1075, which won in 1968 and 1969, becoming the first car in Le Mans history to win the race more than once with the same chassis, using an American Ford V-8 engine originally of 4.7-litre displacement capacity (289 cubic inches), enlarged to 4.9-litre with special alloy Gurney-Weslake cylinder heads.
                            This specific version of the car has wider tyres, better brakes and chassis and bodywork improvements, making a much better car to drive hard and race, becoming even comfortable for its drivers in long 4 hours driving stints as it was necessary back in 1969 races",
            "url_image" => "/public/images/coches/ford/fordGT40.png",
            "brand_id" => 7
        ],
        [
            "name" => "ks_ford_mustang_2015",
            "category" => "street",
            "power" => 435,
            "torque" => 542,
            "weight" => 1680,
            "power_to_weight_ratio" => 3.84,
            "top_speed" => 250,
            "year" => 2015,
            "description" => "The way Mustang looks, drives and sounds is key to the visceral experience that makes drivers just want to get in and hit the road. With more options to choose from, there is a Mustang to fit any lifestyle.
                            Mustang GT continues with the latest edition of the throaty 5.0-liter V8, now featuring an upgraded valvetrain and cylinder heads that yield more than 420 horsepower and 390 lb.-ft. of torque. A new intake manifold improves low-speed breathing for better fuel economy, idle stability and emissions.
                            The feeling of freedom and confidence Mustang instills in its drivers is amplified when they can take control of how the car behaves. On a twisty back road or a weekend track day, the driver can tap the toggle switches on the console to quickly adjust steering effort, engine response, and transmission and electronic stability control settings using the available Selectable Drive Modes to create the perfect Mustang at any time.",
            "url_image" => "/public/images/coches/ford/ford_mustang_2015.png",
            "brand_id" => 7
        ],
        [
            "name" => "ks_ford_escort_mk1",
            "category" => "race",
            "power" => 260,
            "torque" => 200,
            "weight" => 885,
            "power_to_weight_ratio" => 3.40,
            "top_speed" => 220,
            "year" => 1973,
            "description" => "The Ford Escort is born from a partnership between Ford and Lotus during the 60s. This car became a icon of racing thanks to its successes in rallying and GT races in 1968, 1969 and along first years of the 70s, due the release of the &quot;RS1600&quot; powered by a Ford Cosworth engine.
                            The RS in the model name is a abbreviation of &quot;Rallye Sport&quot;, and although &quot;1600&quot; was the initial engine displacement, in 1973 this was increased to 1800cc.",
            "url_image" => "/public/images/coches/ford/ford_escort_mk1.png",
            "brand_id" => 7
        ],

        [
            "name" => "ktm_xbow_r",
            "category" => "street",
            "power" => 300,
            "torque" => 400,
            "weight" => 795,
            "power_to_weight_ratio" => 2.65,
            "top_speed" => 250,
            "year" => 2008,
            "description" => "The Philosophy. Ready to Race
                            As different as cars and motorcycles may be, KTM has managed to transfer its development principles from two wheels to a sports car in every way. In this way the unique driving experience and the spectacular merits of the drive are not just dependent on the performance of the engine. Just as they have managed to do with motorcycles, the KTM developers have kept the weight of the vehicle extremely light by using the latest materials, an intelligent construction and a purist styling.
                            With the the KTM X-BOW R the product range of the super sports car with the carbon monocoque includes the most powerful version yet developed. The R is the result of concentrated further development of this spectacular lightweight sports car. In the rear of the R is a 300 h.p 2.0 Liter TFSI engine from Audi with a maximum torque of 400 Nm and this ensures an unbelievable driving experience both on and off the racing circuit, because naturally the KTM X-BOW R is homologated for use on the road.",
            "url_image" => "/public/images/coches/ktm/ktm_xbow_r.png",
            "brand_id" => 8
        ],

        [
            "name" => "ks_lamborghini_sesto_elemento",
            "category" => "sptc",
            "power" => 570,
            "torque" => 540,
            "weight" => 999,
            "power_to_weight_ratio" => 1.75,
            "top_speed" => 350,
            "year" => 2011,
            "description" => "Automobili Lamborghini is redefining the future of super sports cars with this very limited special edition.
                            The Sesto Elemento is a masterpiece of extreme lightweight engineering that demonstrates the outstanding expertise of Automobili Lamborghini in all areas of carbon-fiber technology.
                            Boasting an extremely lightweight construction thanks to advanced carbon fiber technology, the Lamborghini Sesto Elemento has an overall curb weight of just 999 kilograms (2,202 lb) - including the V10 power unit and the permanent all-wheel drive. With its sensational power-to-weight ratio of only 1.75 kilograms per CV, this limited-edition super sports car offers unrivalled performance: from 0 to 100 km/h in a record time of only 2.5 seconds.",
            "url_image" => "/public/images/coches/lamborghini/lamborghini_sesto_elemento.png",
            "brand_id" => 9
        ],
        [
            "name" => "ks_lamborghini_huracan_performante",
            "category" => "sptc",
            "power" => 640,
            "torque" => 600,
            "weight" => 1382,
            "power_to_weight_ratio" => 2.15,
            "top_speed" => 325,
            "year" => 2014,
            "description" => "The Huracán Performante has reworked the concept of super sports cars and taken the notion of performance to levels never seen before. The vehicle has been re-engineered in its entirety, as regards its weight, engine power, chassis and above all by introducing an innovative system of active aerodynamics: ALA. The use of the awarded Forged Composites®, a shapable forged carbon fiber material patented by Automobili Lamborghini, is a real nice touch and it contributes to make the vehicle even lighter in weight.
                            The front and rear spoilers, made entirely of Forged Composites®, enable the aerodynamics to be actively exploited to achieve maximum performance by increasing or decreasing the downforce as required. The new, even lighter wheel rims hold the new Pirelli P Zero Corsa tyres, providing incredible grip.
                            The even more powerful V10 engine, massive use of Forged Composites® to make it even lighter in weight, the LDF 7-speed dual-clutch transmission and the new ALA active aerodynamic system that controls air and directs it in its favor.
                            Aerodinamica Lamborghini Attiva is a smart and innovative system that manages active aerodynamics. ALA adapts to the driving style and type of route. When necessary, it increases vertical load to assist stability and speed through curves, or it reduces aerodynamic resistance to assist acceleration and reaching the top speed.",
            "url_image" => "/public/images/coches/lamborghini/lamborghini_huracan_performante.png",
            "brand_id" => 9
        ],
        [
            "name" => "ks_lamborghini_huracan_gt3",
            "category" => "rccr",
            "power" => 600,
            "torque" => 500,
            "weight" => 1239,
            "power_to_weight_ratio" => 2.07,
            "top_speed" => 322,
            "year" => 2015,
            "description" => "The Lamborghini Huracán GT3 is equipped with an Alu-Carbon chassis and a fully integrated FIA-compliant roll-cage. The subframe has been modified both at the front and rear to accommodate a high performance water radiator (front), and for a better positioning of the gearbox (rear), improving aerodynamics.The kerb weight is 1239 Kg with a 42/58 front/rear weight distribution. The final weight will be set by the FIA BOP.
                            The bodywork is in composite materials and, along with the aerodynamics, has been developed in collaboration with Dallara Engineering with the direct involvement of the founder Gian Paolo Dallara. Aerodynamics have been tuned to grant the best possible air flow penetration, and maximum adherence and traction in any condition on any asphalt. Efficiency has been improved thanks to the rear adjustable wing, adjustable front diffuser and louvres. The new aerodynamics also allow improved cooling of the braking system.
                            As for the Huracán Super Trofeo, the GT3 is equipped with new bodywork fast- fittings and equipped with a new, enhanced-performing engine and gearbox oil cooler. Special attention has been given to safety, with the new Lamborghini Huracán GT3 equipped with a carbon frame 8862 specification seat; an OMP fire extinguishing system; and an innovative roof hatch which enables, in case of need, quick assistance by medical personnel through the roof of the car. Seat belts are provided by OMP, the fuel tank is an FT3 type and the pedals are adjustable. Front and rear lights are LED. The new multifunction steering wheel has been re-engineered along with OMP.
                            The new rear-wheel drive Huracán GT3 adopts the V10 direct injection engine mounted on the road car, managed by a Bosch Motorsport control unit that also manages traction control, gearbox and the TFT display on the dashboard. All wiring and connectors are designed specifically for racing. The engine is fixed on the chassis by rigid mountings and is coupled with a sequential six-speed gearbox, according to FIA regulations, and a three-disc racing clutch.
                            The braking system is made up by 380 x 34 mm steel discs at the front (6 pot), and 355 x 32mm steel discs at the back (4 pot), according to FIA regulations, equipped with Bosch ABS. This system features 12 different settings that can be actioned directly from the steering wheel, as can traction control. The tyre sizes are 315/680 at the front and 325/705 at the back. The car is equipped with a pneumatic lifting system.",
            "url_image" => "/public/images/coches/lamborghini/lamborghini_huracan_gt3.png",
            "brand_id" => 9
        ],
        [
            "name" => "ks_lamborghini_huracan_st",
            "category" => "rccr",
            "power" => 620,
            "torque" => 570,
            "weight" => 1270,
            "power_to_weight_ratio" => 2.04,
            "top_speed" => 310,
            "year" => 2014,
            "description" => "The redesigned Huracán Super Trofeo was developed in collaboration with Dallara Engineering, with direct involvement by founder Giampaolo Dallara. Dallara's history with Lamborghini dates back to 1963 when he worked as a Lamborghini engineer and later led the development of the legendary Miura.
                            The Huracán Super Trofeo adopts the direct-injected V10 engine from the road car, delivering 620 horsepower in race trim, and a rear-drive set-up meant to accelerate the series racers' transition into GT racing. The vehicle weighs an ultra-light 1,270 kg, attributed to the hybrid carbon fiber/aluminium chassis and strict motorsports weight reduction. The weight/power ratio is 2.04 kg/hp.
                            The aerodynamics provide better efficiency, traction and downforce using a ten-position rear wing, front and rear diffusers as well as adjustable front air intakes. The Huracán Super Trofeo will be exclusively-equipped with Pirelli tires engineered specifically for this application.",
            "url_image" => "/public/images/coches/lamborghini/lamborghini_huracan_st.png",
            "brand_id" => 9
        ],
        [
            "name" => "ks_lamborghini_aventador_sv",
            "category" => "sptc",
            "power" => 750,
            "torque" => 690,
            "weight" => 1525,
            "power_to_weight_ratio" => 2.03,
            "top_speed" => 350,
            "year" => 2011,
            "description" => "With increased power, lower weight, improved aerodynamics and innovative technologies the Lamborghini Aventador LP 750-4 Superveloce is the most pure incarnation of a Lamborghini to date: unmistakable Lamborghini super sports car DNA, dynamic superiority and exceptional driving precision.
                            A focus on weight reduction while incorporating innovative technologies has resulted in the most sports-oriented, fastest and most emotional series production Lamborghini ever. The weight has been further reduced by 50 kg through enhanced lightweight engineering including significant use of carbon fiber. The naturally aspirated V12 engine's power is increased to 750 hp. This results in a power-to-weight-ratio of 2,03 kg/hp. The Superveloce accelerates from 0 to 100 km/h in 2.8 seconds and powers on to reach a top speed of more than 350 km/h.",
            "url_image" => "/public/images/coches/lamborghini/lamborghini_aventador_sv.png",
            "brand_id" => 9
        ],
        [
            "name" => "ks_lamborghini_gallardo_sl_s3",
            "category" => "sptc",
            "power" => 1200,
            "torque" => 540,
            "weight" => 1390,
            "power_to_weight_ratio" => 1.16,
            "top_speed" => 349,
            "year" => 2007,
            "description" => "Even more dynamic, lighter, more powerful and stunning - the Lamborghini Gallardo LP 570-4 Superleggera is the new top model in the Gallardo line-up. Its evocative &quot;superlight&quot; badge refers to a driving machine of true sporting character and describes a high-performance and lean automotive athlete. The Superleggera makes its entrance to continue the success of its predecessor, launched in 2007, of which Lamborghini produced and sold no less than 618 in just one year.
                            What do you get though if you unleash some dedicated tuners on the Gallardo engine? A bi-turbo highly modified engine that is capable of doing more than 850bhp on pump fuel and more than 1200bhp on race fuel and full turbo boost.
                            The chassis has also been tuned accordingly with stiffer springs and dampers all around. Nevertheless you better watch out when you decide to give full boost. The performance is simply out of this world and the car can spin all four tyres in curva grande at monza in 6th gear... Remember, you need to brake 1 to 2 km before every turn as it takes some space to slow down from ultrasonic speeds!",
            "url_image" => "/public/images/coches/lamborghini/lamborghini_gallardo_sl_s3.png",
            "brand_id" => 9
        ],
        [
            "name" => "ks_lamborghini_gallardo_sl",
            "category" => "sptc",
            "power" => 570,
            "torque" => 540,
            "weight" => 1340,
            "power_to_weight_ratio" => 2.35,
            "top_speed" => 325,
            "year" => 2007,
            "description" => "Even more dynamic, lighter, more powerful and stunning - the Lamborghini Gallardo LP 570-4 Superleggera is the new top model in the Gallardo line-up. Its evocative &quot;superlight&quot; badge refers to a driving machine of true sporting character and describes a high-performance and lean automotive athlete. The Superleggera makes its entrance to continue the success of its predecessor, launched in 2007, of which Lamborghini produced and sold no less than 618 in just one year.
                            Compared with the already lean Gallardo LP 560-4, the weight of the Gallardo Superleggera has been trimmed by 70 kilograms. The super sportscar from Sant'Agata Bolognese boasts a dry weight of no more than 1340 kilograms - the lightest road-going model in Lamborghini's range, and a new arrival in one of the most exclusive market niche segments.
                            One key factor is the exterior and interior components made from carbon-fiber. Carbon-fiber is ideal for the manufacture of sportscars as its use allows for weight reduction and improved mechanical features. The car's performance is thus enhanced thanks to a better weight-to-power ratio and reduced total mass, which means that CO2 emissions are also lower. Lamborghini has been at the forefront in this material's application for many years, and now the brand is extending its leadership even further.
                            The V10 power unit with 5.2 liters of displacement generates 570 bhp in the Gallardo Superleggera. This puts the weight-to-power ratio of the new top model at only 2.35 kilograms per HP and guarantees breathtaking performance. The Gallardo LP 570-4 Superleggera handles the dash from zero to 100 km/h in 3.4 seconds and flies past the 200 km/h mark only 10.2 seconds later, ultimately reaching 325 km/h. The engine with &quot;Iniezione Diretta Stratificata&quot; gasoline direct injection also boasts an impressive degree of efficiency. Its fuel consumption and CO2 emissions have been reduced by 20,5 percent compared to the previous model.
                            The Gallardo Superleggera is an uncompromising driving machine. Its running gear, with its mighty braking system, has a dedicated and exceptionally precise set-up. The Lamborghini Gallardo LP 570-4 Superleggera brings a whole new meaning to the term &quot;super sportscar&quot;.",
            "url_image" => "/public/images/coches/lamborghini/lamborghini_gallardo_s.png",
            "brand_id" => 9
        ],
        [
            "name" => "ks_lamborghini_countach",
            "category" => "spcl",
            "power" => 442,
            "torque" => 500,
            "weight" => 1490,
            "power_to_weight_ratio" => 3.34,
            "top_speed" => 295,
            "year" => 1983,
            "description" => "The Lamborghini Countach is a mid-engined, V12 sports car produced by Italian car manufacturer Lamborghini from 1974 to 1990. Its design pioneered and popularized the wedge-shaped, sharply angled look popular in many high-performance sports cars. It also popularized the \"cabin-forward\" design concept, which pushes the passenger compartment forward to accommodate a larger engine. The word \"countach\" is an exclamation of astonishment in the local Piedmontese language.
                            The Countach's styling and visual impression made it an icon of great design to almost everyone except automotive engineers. The superior performance characteristics of later Lamborghini models (such as the Diablo, or the Murciélago) appealed to performance car drivers and engineers, but they never had the originality or outrageousness that gave the Countach its distinction.
                            The Countach entered production as the LP400 with a 3929 cc engine delivering 375 metric horsepower (370 hp) .In 1978, a new LP400 S model was introduced. Though the engine was slightly downgraded from the LP400 model (355 metric horsepower (350 bhp)), the most radical changes were in the exterior. 1982 saw another improvement, this time giving a bigger, more powerful 4754 cc engine.
                            In 1985 the engine was improved again, bored and stroked to 5167 cc and given four valves per cylinder (\"quattrovalvole\" in Italian), hence the model's name, Countach 5000 Quattrovalvole or 5000 QV in short. The carburetors were moved from the sides to the top of the engine for better breathing—unfortunately this created a hump on the engine deck, reducing the already poor rear visibility to almost nothing. Some body panels were also replaced by Kevlar. In later versions of the engine, the carburetors were replaced with fuel injection. Although this change was the most notable on the exterior, the most prominent change under the hood was the introduction of fuel injection.",
            "url_image" => "/public/images/coches/lamborghini/lamborghini_countach.png",
            "brand_id" => 9
        ],
        [
            "name" => "ks_lamborghini_countach_s1",
            "category" => "spcl",
            "power" => 442,
            "torque" => 500,
            "weight" => 1490,
            "power_to_weight_ratio" => 3.34,
            "top_speed" => 295,
            "year" => 1983,
            "description" => "The Lamborghini Countach is a mid-engined, V12 sports car produced by Italian car manufacturer Lamborghini from 1974 to 1990. Its design pioneered and popularized the wedge-shaped, sharply angled look popular in many high-performance sports cars. It also popularized the \"cabin-forward\" design concept, which pushes the passenger compartment forward to accommodate a larger engine. The word \"countach\" is an exclamation of astonishment in the local Piedmontese language.
                            The Countach's styling and visual impression made it an icon of great design to almost everyone except automotive engineers. The superior performance characteristics of later Lamborghini models (such as the Diablo, or the Murciélago) appealed to performance car drivers and engineers, but they never had the originality or outrageousness that gave the Countach its distinction.
                            The Countach entered production as the LP400 with a 3929 cc engine delivering 375 metric horsepower (370 hp) .In 1978, a new LP400 S model was introduced. Though the engine was slightly downgraded from the LP400 model (355 metric horsepower (350 bhp)), the most radical changes were in the exterior. 1982 saw another improvement, this time giving a bigger, more powerful 4754 cc engine.
                            In 1985 the engine was improved again, bored and stroked to 5167 cc and given four valves per cylinder (\"quattrovalvole\" in Italian), hence the model's name, Countach 5000 Quattrovalvole or 5000 QV in short. The carburetors were moved from the sides to the top of the engine for better breathing—unfortunately this created a hump on the engine deck, reducing the already poor rear visibility to almost nothing. Some body panels were also replaced by Kevlar. In later versions of the engine, the carburetors were replaced with fuel injection. Although this change was the most notable on the exterior, the most prominent change under the hood was the introduction of fuel injection.",
            "url_image" => "/public/images/coches/lamborghini/lamborghini_countach_s1.png",
            "brand_id" => 9
        ],
        [
            "name" => "ks_lamborghini_miura_sv",
            "category" => "clsc",
            "power" => 385,
            "torque" => 400,
            "weight" => 1245,
            "power_to_weight_ratio" => 3.19,
            "top_speed" => 300,
            "year" => 1966,
            "description" => "Lamborghini Miura P400 SV
                            The Lamborghini Miura is a sports car that was produced by Italian automaker Lamborghini between 1966 and 1973. The car is widely considered to have instigated the trend of high performance, two-seater, mid-engined sports cars. At launch, it was the fastest production road car available.
                            The 12 cylinder, double overhead camshaft naturally aspirated engine has 2 valves per cylinder and a volume of 3.9 litres. It produces power and torque figures of 385 bhp at 7850 rpm and 399 Nm (294 lbft/40.7 kgm) at 5750 rpm respectively.	This power is transmitted to the wheels through a 5 speed manual gearbox. With a claimed kerb weight of 1293 kg, the Lamborghini Miura P400SV can dispense with the 0-100 km/h benchmark in 4.50 seconds and the kilometre from rest in 23.2 seconds. Its maximum speed claimed is 290 km/h or 180 mph.
                            The SV can be distinguished from its predecessors from its lack of eyelashes around the headlamps, wider rear fenders to accommodate the new 9-inch-wide rear wheels and Pirelli Cinturato tires, and different tail lights. The problem with excessive front end lift at speed was also reduced somewhat in the later model car, but not eliminated entirely.  150 Lamborghini Miura P400 SVs were produced.",
            "url_image" => "/public/images/coches/lamborghini/lamborghini_miura_sv.png",
            "brand_id" => 9
        ],

        [
            "name" => "lotus_exos_125_s1",
            "category" => "opwh",
            "power" => 750,
            "torque" => 450,
            "weight" => 660,
            "power_to_weight_ratio" => 0.88,
            "top_speed" => 322,
            "year" => 2010,
            "description" => "Simplify and add lightness
                            ...and some power. The Stage 1 version of the Lotus Exos 125, brings the true F1 Cosworth power unit from 2009. It outputs around 750bhp at a staggering 18000rpm!
                            ...and some downforce. Optimisations in the rear wing and diffuser, improve the aerodynamic efficiency of the car. You can use a bit less rear wing now, achieving the same downforce with less drag, improving the car's performance.
                            ...and some tyres. You've got 4 slick compounds to choose from, each with very particular characteristics. Normally in F1 races the organisation chooses which compounds are available to the teams, but here you can choose any of them.
                            The development programme has harnessed input from an experienced group including past masters such as Nigel Mansell & Jean Alesi. Their inputs ensure the car delivers outstanding levels of speed and performance which is complimented by a consistency of driveability that is sympathetic to all driving styles.
                            The Lotus 125 embodies all the performance attributes of a modern f1 car, but without the need for F1 levels
                            of personal support and associated running costs. The Lotus 125 offers the thrill of f1 ownership at a fraction of the cost - but with no compromises.",
            "url_image" >= "/public/images/coches/lotus/lotus_exos_125_s1.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_exos_125",
            "category" => "opwh",
            "power" => 640,
            "torque" => 450,
            "weight" => 660,
            "power_to_weight_ratio" => 1.03,
            "top_speed" => 320,
            "year" => 2010,
            "description" => "Simplify and add lightness
                            When you press the ENGINE START button in your Lotus 125 you'll be igniting more than 60 years of motor racing heritage.
                            The lotus 125 has amassed thousands of testing miles, visiting tracks and locations such as Vallelunga, Italy, Yas marina circuit Abu Dhabi, Portimao Portugal, complimented with many miles of testing at the Lotus Test Track in Hethel. This exhaustive test schedule has been conducted in various locations, in differing extreme conditions under the watchful eye and expert direction of the vastly experienced LRGP Test Team. Therefore, you can be assured of the pedigree, reliability and performance that a lotus 125 is capable of delivering.
                            The development programme has harnessed input from an experienced group including past masters such as Nigel Mansell & Jean Alesi. Their inputs ensure the car delivers outstanding levels of speed and performance which is complimented by a consistency of driveability that is sympathetic to all driving styles.
                            The Lotus 125 embodies all the performance attributes of a modern f1 car, but without the need for F1 levels
                            of personal support and associated running costs. The Lotus 125 offers the thrill of f1 ownership at a fraction of the cost - but with no compromises.",
            "url_image" => "/public/images/coches/lotus/lotus_exos_125.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_98t",
            "category" => "opwh",
            "power" => 1000,
            "torque" => 800,
            "weight" => 523,
            "power_to_weight_ratio" => 1.67,
            "top_speed" => 330,
            "year" => 1986,
            "description" => "The Lotus 98T was a development of the Lotus 97T of 1985.
                            Of the four chassis built three were assigned to Ayrton Senna, now in his second year with Team Lotus, and one to team mate Johnny Dumfries.
                            Designed by Gérard Ducarouge and Martin Ogilvie the chassis featured a lower monocoque than the 97T as a result of a regulation change stipulating a reduction in fuel capacity to 195 litres. The powertrain consisted of the new Renault EF15B turbo V6 engine driving through a six speed Hewland gearbox.
                            The EF15B was to appear in two forms, the standard engine and the D.P. engine which featured pneumatic valve springs for the first time. At the end of the season Renault introduced the revised EF15C which in addition to the D.P. valve gear also boasted common rail fuel injection and much revised water cooling through the cylinder head reducing the likelihood of pre-ignition (detonation). Power figures for this period of F1 history are largely speculative as most engine manufactures freely admitted that their test beds would not have a sufficient power rating to measure the 1.5 litre turbos output at above 4 bar boost. It is generally accepted that the Renault EF15 produced between 1,200 bhp (890 kW) and 1,300 bhp (970 kW) at 5.5 absolute bar boost",
            "url_image" => "/public/images/coches/lotus/lotus_98t.png",
            "brand_id" => 10
        ],
        [
            "name" => "ks_lotus_72d",
            "category" => "opwh",
            "power" => 440,
            "torque" => 332,
            "weight" => 550,
            "power_to_weight_ratio" => 1.25,
            "top_speed" => 300,
            "year" => 1970,
            "description" => "The Lotus 72 was a Formula One car designed by Colin Chapman and Maurice Philippe of Lotus for the 1970 Formula One season.
                            This was yet another innovative design by Chapman featuring inboard brakes, side mounted radiators in sidepods, as opposed to the nose mounted radiators which had been commonplace since the 1950s and an overhead air intake. The overall shape of the car was innovative too, resembling a wedge on wheels which was inspired by the earlier Lotus 56 gas turbine car, and the layout taken from the Lotus 63 four wheel drive project testbed. The shape made for better air penetration and higher speeds. In a back-to-back test with the Lotus 49, the 72 was 12 mph faster with the same Cosworth engine.
                            Chapman's efforts produced one of the most remarkable and successful designs in F1 history. Taking the stressed engine layout technique from the Lotus 49 and adding advanced aerodynamics produced a car that was years ahead of its rivals. To begin with however, problems with the handling of the car had to be overcome, due to a lack of 'feel' caused by the anti-dive suspension geometry - which was designed to prevent the nose of the car dipping significantly under braking - and the anti-squat set-up at the rear, which was supposed to stop the car 'squatting down' under acceleration. Once the suspension was modified, there were no further problems. The car caused a sensation amongst the media and fans, with many people clamouring to see the remarkable car in action.",
            "url_image" => "/public/images/coches/lotus/lotus_72d.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_49",
            "category" => "opwh",
            "power" => 410,
            "torque" => 350,
            "weight" => 575,
            "power_to_weight_ratio" => 1.40,
            "top_speed" => 300,
            "year" => 1967,
            "description" => "After a difficult first year for Lotus in the 3 litre formula, Chapman went back to the drawing board and came up with a design that was both back to basics, and a leap ahead. Taking inspiration from earlier designs, particularly the Lotus 43 and Lotus 38 Indycar, the 49 was the first F1 car to be powered by the now-famous Ford Cosworth DFV engine after Chapman convinced Ford to build an F1 powerplant.
                            The 49 was an advanced design in Formula 1 because of its chassis configuration. The specially-designed engine became a stress-bearing structural member (seen first with the H16 engine in the Lotus 43 and BRM P83), bolted to the monocoque at one end and the suspension and gearbox at the other. Since then virtually all Formula 1 cars have been built this way.",
            "url_image" => "/public/images/coches/lotus/lotus_49.png",
            "brand_id" => 10
        ],
        [
            "name" => "ks_lotus_25",
            "category" => "opwh",
            "power" => 195,
            "torque" => 160,
            "weight" => 451,
            "power_to_weight_ratio" => 2.31,
            "top_speed" => 260,
            "year" => 1962,
            "description" => "The Lotus 25 was a racing car designed by Colin Chapman for the 1962 Formula One season.The revolutionary fully stressed monocoque made the car more rigid and structurally stronger than typical F1 cars of the period. This was three times stiffer than the Lotus 24, while the chassis weighed only half as much. The car also was extremely low and narrow, with a smaller frontal area and was nicknamed 'The Bathtub' since the driver has to sit reclined behind the wheel. In the hands of Jim Clark it took 14 World Championship Grand Prix wins and propelled him to his 1963 World Championship title.",
            "url_image" => "/public/images/coches/lotus/lotus_25.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_evora_gtc",
            "category" => "rccr",
            "power" => 450,
            "torque" => 460,
            "weight" => 1205,
            "power_to_weight_ratio" => 2.68,
            "top_speed" => 273,
            "year" => 2014,
            "description" => "The GX and GTC Evoras are an advanced version of the Evora GT4 Enduro car. With wider wheels and stunning moulded wheel arches to cover them, the GX and GTC cars offer even greater levels of grip, both when cornering or accelerating, to the already outstanding performance of the Enduro car
                            The GTC version is powered by a slightly more peaky engine, ABS and Traction Control are fitted and equipped with GT3 type of tyres and 92 litters of fuel tank.",
            "url_image" => "/public/images/coches/lotus/lotus_evora_gtc.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_evora_gx",
            "category" => "rccr",
            "power" => 440,
            "torque" => 460,
            "weight" => 1395,
            "power_to_weight_ratio" => 3.22,
            "top_speed" => 288,
            "year" => 2014,
            "description" => "The GX and GTC Evoras are an advanced version of the Evora GT4 Enduro car. With wider wheels and stunning moulded wheel arches to cover them, the GX and GTC cars offer even greater levels of grip, both when cornering or accelerating, to the already outstanding performance of the Enduro car
                            The GX version is powered by slightly less powerful but more torquey engine. Has a bit better aerodynamics but no ABS or Traction Control. It is  equipped with some compounds of the GT2 type of tyres and a 120-liter fuel tank.",
            "url_image" => "/public/images/coches/lotus/lotus_evora_gx.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_2_eleven",
            "category" => "sptc",
            "power" => 252,
            "torque" => 242,
            "weight" => 670,
            "power_to_weight_ratio" => 2.65,
            "top_speed" => 249,
            "year" => 2007,
            "description" => "Launched at the 77th annual Geneva International Motor Show, the Lotus 2-Eleven is aimed at the true track day enthusiast, taking Colin Chapman's philosophy of Performance Through Lightweight to its most extreme level yet.
                            Weighing in at just 670 kg (1,477 lbs) with 255 PS (252 bhp / 188 kw) on tap courtesy of its supercharged and intercooled 1796 cc engine, the Lotus 2-Eleven boasts a power to weight ratio similar to that of a 1960s Formula One car. Designed with the most serious of track day enthusiasts in mind, the Lotus 2-Eleven offers race car levels of performance coupled with legendary Lotus Ride and Handling to deliver a truly outstanding track day car.",
            "url_image" => "/public/images/coches/lotus/lotus_2_eleven.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_evora_gte",
            "category" => "sptc",
            "power" => 420,
            "torque" => 461,
            "weight" => 1395,
            "power_to_weight_ratio" => 3.22,
            "top_speed" => 288,
            "year" => 2014,
            "description" => "The Lotus Evora GTE Road Car Concept is a race inspired celebration of the ground breaking race car developed with a single-minded aim to be successful in the new global motorsport GTE category, which includes the world famous Le Mans 24 Hours.
                            This high-strung Evora elicits over 420 bhp from its race-developed engine, fed through a sequential AMT racing gearbox and put to the pavement through ultra-lightweight forged alloy wheels with center-lock hubs shod with Pirelli P-Zero Corsa tires.",
            "url_image" => "/public/images/coches/lotus/lotus_evora_gte.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_evora_gte_carbon",
            "category" => "sptc",
            "power" => 420,
            "torque" => 461,
            "weight" => 1285,
            "power_to_weight_ratio" => 3.06,
            "top_speed" => 288,
            "year" => 2014,
            "description" => "The Lotus Evora GTE Carbon Concept is a unique modification of the already rare Evora GTE
                            Every single body panel and interior is made from carbonfibre, thus reducing the weight of the original Evora GTE by more than 100kg
                            This high-strung Evora elicits over 420 bhp from its race-developed engine, fed through a sequential AMT racing gearbox and put to the pavement through ultra-lightweight forged alloy wheels with center-lock hubs shod with Pirelli P-Zero Corsa tires.",
            "url_image" => "/public/images/coches/lotus/lotus_evora_gte_carbon.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_2_eleven_gt4",
            "category" => "rccr",
            "power" => 270,
            "torque" => 252,
            "weight" => 670,
            "power_to_weight_ratio" => 2.48,
            "top_speed" => 260,
            "year" => 2007,
            "description" => "Launched at the 77th annual Geneva International Motor Show, the Lotus 2-Eleven is aimed at the true track day enthusiast, taking Colin Chapman's philosophy of 'Performance Through Lightweight' to its most extreme level yet.
                            Lotus Sport, the performance division of Lotus Cars Ltd has developed a striking race specification 2-Eleven eligible to compete in the 2009 SRO GT4 European Supersport Championship. This car builds upon the development of the Lotus Sport 2-Eleven range and 2006 Championship winning GT3 Exige to provide an extremely competitive package.",
            "url_image" => "/public/images/coches/lotus/lotus_2_eleven_gt4.png",
            "brand_id" => 10
        ],
        [
            "name" => "ks_lotus_3_eleven",
            "category" => "rccr",
            "power" => 460,
            "torque" => 525,
            "weight" => 890,
            "power_to_weight_ratio" => 1.93,
            "top_speed" => 290,
            "year" => 2015,
            "description" => "Designed as an uncompromised manifestation of the Lotus spirit, the new car is focused on providing an undiluted driving experience and underlines the company’s ability to deliver legendary handling and blistering speed.
                            Working on the concept of less is more, and keeping close to Lotus’ track roots, the dramatic new vehicle features an all-new lightweight body, with an open cockpit design and a revised V6 supercharged engine developing 460hp.
                            Two variations of the Lotus 3-Eleven are available: Road and Race; both delivering an impressive combination of high performance, agility and precision. Based on the Road version, the Race includes a much more aggressive aero kit, a sequential gearbox and an FIA approved driver’s seat with a six-point harness.
                            Assetto Corsa simulates the Race version. With a dry weight of below 900kg (Race version), the 3-Eleven offers an enviable power to weight ratio, in excess of 500hp per tonne, and is capable of sprinting from 0-60 mph in less than 3.0 seconds before reaching a maximum speed of 290km/h for the Race version and 280 km/h for the Road version",
            "url_image" => "/public/images/coches/lotus/lotus_3_eleven.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_elise_sc",
            "category" => "sptc",
            "power" => 217,
            "torque" => 242,
            "weight" => 929,
            "power_to_weight_ratio" => 4.28,
            "top_speed" => 235,
            "year" => 2008,
            "description" => "The name Lotus is synonymous with sublime handling and poised vehicle dynamics around the world. The Elise leads the way with its lightweight, state-of-the-art, extruded and bonded aluminium chassis, allied to motorsport derived wishbone suspension with body panels made from lightweight composite.
                            Its unique design ensures an extremely rigid chassis, and the perfect foundation for an agile sports car. Since its launch, the Elise has been hailed as one of the best sports cars that money can buy, creating perfect harmony between driver and machine.
                            Production combines high technology processes with hand finishing techniques, from chassis construction through to final assembly. Teams of specialists oversee every process ensuring Lotus' high-quality engineering standards are met. With engineering effectiveness comes efficiency, allowing Lotus to extract every aspect of dynamic performance from each component - remaining true to Chapmans' original principle of performance through lightweight.",
            "url_image" => "/public/images/coches/lotus/lotus_elise_sc.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_evora_s",
            "category" => "sptc",
            "power" => 345,
            "torque" => 400,
            "weight" => 1385,
            "power_to_weight_ratio" => 4.01,
            "top_speed" => 277,
            "year" => 2014,
            "description" => "The essence of the Evora is found in its exceptional engineering and focus on performance. Production combines high technology processes with hand finishing techniques, from chassis construction through to final assembly.
                            The Evora S blends the sublime handling attributes of the Lotus Evora with the surging linear power of a supercharged V6 engine. Delivering even more attitude, the forced induction power plant delivers 345 hp and 295 lbft of torque. There's no appreciable weight gain: at 1,437 kg the Evora S is still lightweight, muscling from 0 to 60 mph in 4.4 seconds, powering to its 178 mph maximum.
                            The state-of-the-art Evora chassis is composed of an extruded and bonded aluminium structure, developed for its lightweight yet incredibly stiff design, with a central tub containing the driver's cockpit and safety cell - a format closely reflecting the layout and construction of modern-day racing cars. Its unique design ensures a chassis so stiff that it takes 27,000 Nm to twist it just one degree.
                            With its state-of-the-art, lightweight chassis, the Evora's handling is truly remarkable. From its functional aerodynamics, to its mid-engined construction giving optimum weight distribution, through to its race-derived components, such as Bilstein dampers, Eibach springs and AP Racing track tuned braking system - Lotus' motorsport expertise feature in its design and engineering.",
            "url_image" => "/public/images/coches/lotus/lotus_evora_s.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_exige_240_s3",
            "category" => "sptc",
            "power" => 270,
            "torque" => 270,
            "weight" => 900,
            "power_to_weight_ratio" => 3.33,
            "top_speed" => 249,
            "year" => 2008,
            "description" => "The stage 3 version of the Lotus Exige 240R, has an upgraded engine with up to 270bhp, much stiffer and lowered suspension with uprated dampers and a locked read differential 25% power and coast. With its featherweight chassis, this car can really put to shame much more powerful supercars on a tight track.
                            The name Lotus is synonymous with sublime handling and poised vehicle dynamics around the world. The Elise leads the way with its lightweight, state-of-the-art, extruded and bonded aluminium chassis, allied to motorsport derived wishbone suspension with body panels made from lightweight composite.
                            Its unique design ensures an extremely rigid chassis, and the perfect foundation for an agile sports car. Since its launch, the Elise has been hailed as one of the best sports cars that money can buy, creating perfect harmony between driver and machine.
                            Production combines high technology processes with hand finishing techniques, from chassis construction through to final assembly. Teams of specialists oversee every process ensuring Lotus' high-quality engineering standards are met. With engineering effectiveness comes efficiency, allowing Lotus to extract every aspect of dynamic performance from each component – remaining true to Chapmans' original principle of performance through lightweight.",
            "url_image" => "/public/images/coches/lotus/lotus_exige_240_s3.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_exige_240",
            "category" => "sptc",
            "power" => 243,
            "torque" => 236,
            "weight" => 930,
            "power_to_weight_ratio" => 3.83,
            "top_speed" => 249,
            "year" => 2008,
            "description" => "The name Lotus is synonymous with sublime handling and poised vehicle dynamics around the world. The Elise leads the way with its lightweight, state-of-the-art, extruded and bonded aluminium chassis, allied to motorsport derived wishbone suspension with body panels made from lightweight composite.
                            Its unique design ensures an extremely rigid chassis, and the perfect foundation for an agile sports car. Since its launch, the Elise has been hailed as one of the best sports cars that money can buy, creating perfect harmony between driver and machine.
                            Production combines high technology processes with hand finishing techniques, from chassis construction through to final assembly. Teams of specialists oversee every process ensuring Lotus' high-quality engineering standards are met. With engineering effectiveness comes efficiency, allowing Lotus to extract every aspect of dynamic performance from each component – remaining true to Chapmans' original principle of performance through lightweight.",
            "url_image" => "/public/images/coches/lotus/lotus_exige_240.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_exige_s_roadster",
            "category" => "sptc",
            "power" => 345,
            "torque" => 400,
            "weight" => 1166,
            "power_to_weight_ratio" => 3.38,
            "top_speed" => 233,
            "year" => 2013,
            "description" => "More raw than a Japanese tasting menu, the Lotus Exige S Roadster combines its coupé twin's mesmerizing grunt and handling with an open air experience that makes the driver feel all the more at one with the road.
                            It's the first time an Exige model has been offered with a factory-fitted soft top roof, one which is typically lightweight and easy to put up and take down. In true Lotus fashion the finely tuned suspension delivers a responsive ride and sublimely agile handling, whilst the supercharged 3.5 V6 engine with race-derived technologies delivers stunning performance.",
            "url_image" => "/public/images/coches/lotus/lotus_exige_s_roadster.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_exige_s",
            "category" => "sptc",
            "power" => 345,
            "torque" => 400,
            "weight" => 1176,
            "power_to_weight_ratio" => 3.41,
            "top_speed" => 274,
            "year" => 2012,
            "description" => "Welcome to the world of the new Lotus Exige S.
                            Unveiled at the Frankfurt Motor Show in September 2011, the Exige S represents the very essence of Lotus – ultimate lightweight raw performance combined with unparallelled ride and handling which promises a mind blowing drive like no other.
                            The Exige S features high performance Pirelli P-Zero Corsa tyres as standard with a Lotus DPM (Dynamic Performance Management) switch that allows the driver to switch between three driving modes: Touring, Sport and DPM off.
                            An additional Race Pack option is available offering a fourth driving mode providing maximum possible traction out of corners, and an optimised track suspension setting.",
            "url_image" => "/public/images/coches/lotus/lotus_exige_s.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_exige_scura",
            "category" => "sptc",
            "power" => 257,
            "torque" => 243,
            "weight" => 925,
            "power_to_weight_ratio" => 3.60,
            "top_speed" => 245,
            "year" => 2009,
            "description" => "Lotus Cars unveils its latest special edition - the Exige Scura, so called due to its dramatic matt black and carbon fibre theme, at the Tokyo International Motorshow on 21st of October 2009.
                            Translated as 'dark' from Italian, the name 'Scura' reflects the stealth character of this already fierce looking Lotus and its stunning soft-feel matt black paint finish. Limited to just 35 cars globally, this Exige evokes a desire to 'indulge your dark side'.
                            Whilst there is no doubt that this is a visually stunning car, the Exige Scura is not just about its looks - it begs to be taken on track, and its racing character encompasses poise, power and technology to make it a serious contender. Equipped with the most powerful engine in the Exige range and generating 260PS, the Exige Scura achieves a top speed of around 245 km/h and reaches 0-100 kmh in just 4.1 seconds.",
            "url_image" => "/public/images/coches/lotus/lotus_exige_scura.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_exige_v6_cup",
            "category" => "sptc",
            "power" => 345,
            "torque" => 400,
            "weight" => 1080,
            "power_to_weight_ratio" => 3.09,
            "top_speed" => 274,
            "year" => 2013,
            "description" => "The new road-going Lotus Exige V6 Cup builds upon the success of the previous Series 2 Exige Cup 240/255 and 260. Based upon the road-going Exige S, the lightweight V6 Cup is powered by a 3.5 litre supercharged V6 engine, driving through a 6-speed close ratio gearbox providing an exhilarating thrill for racers and track enthusiasts.
                            Multi-adjustable race suspension, front and rear anti-roll bars in conjunction with 4 way adjustable DPM (Dynamic Performance Management) provide the Exige V6 Cup with track focused adjustable handling to enable every driver to get the most out of the car.",
            "url_image" => "/public/images/coches/lotus/lotus_exige_v6_cup.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_elise_sc_s1",
            "category" => "sptc",
            "power" => 217,
            "torque" => 242,
            "weight" => 929,
            "power_to_weight_ratio" => 4.28,
            "top_speed" => 235,
            "year" => 2008,
            "description" => "The Step1 tuned version of Lotus Elise SC has adjustable Lotus track option coilover dampers and springs as seen on the more extreme Lotus Exige R and Cup
                            The name Lotus is synonymous with sublime handling and poised vehicle dynamics around the world. The Elise leads the way with its lightweight, state-of-the-art, extruded and bonded aluminium chassis, allied to motorsport derived wishbone suspension with body panels made from lightweight composite.
                            Its unique design ensures an extremely rigid chassis, and the perfect foundation for an agile sports car. Since its launch, the Elise has been hailed as one of the best sports cars that money can buy, creating perfect harmony between driver and machine.
                            Production combines high technology processes with hand finishing techniques, from chassis construction through to final assembly. Teams of specialists oversee every process ensuring Lotus' high-quality engineering standards are met. With engineering effectiveness comes efficiency, allowing Lotus to extract every aspect of dynamic performance from each component - remaining true to Chapmans' original principle of performance through lightweight.",
            "url_image" => "/public/images/coches/lotus/lotus_elise_sc_s1.png",
            "brand_id" => 10
        ],
        [
            "name" => "lotus_elise_sc_s2",
            "category" => "sptc",
            "power" => 217,
            "torque" => 242,
            "weight" => 929,
            "power_to_weight_ratio" => 4.28,
            "top_speed" => 235,
            "year" => 2008,
            "description" => "The Step2 tuned version of Lotus Elise SC has adjustable Lotus track option coilover dampers and springs. This car also has the additional limited slip differential with 25% lock on power and coast. Lotus doesn't advice the use of an LSD because it brings turn in understeer.
                            The name Lotus is synonymous with sublime handling and poised vehicle dynamics around the world. The Elise leads the way with its lightweight, state-of-the-art, extruded and bonded aluminium chassis, allied to motorsport derived wishbone suspension with body panels made from lightweight composite.
                            Its unique design ensures an extremely rigid chassis, and the perfect foundation for an agile sports car. Since its launch, the Elise has been hailed as one of the best sports cars that money can buy, creating perfect harmony between driver and machine.
                            Production combines high technology processes with hand finishing techniques, from chassis construction through to final assembly. Teams of specialists oversee every process ensuring Lotus' high-quality engineering standards are met. With engineering effectiveness comes efficiency, allowing Lotus to extract every aspect of dynamic performance from each component - remaining true to Chapmans' original principle of performance through lightweight.",
            "url_image" => "/public/images/coches/lotus/lotus_elise_sc_s2.png",
            "brand_id" => 10
        ],

        [
            "name" => "ks_maserati_mc12_gt1",
            "category" => "race",
            "power" => 580,
            "torque" => 650,
            "weight" => 1100,
            "power_to_weight_ratio" => 1.89,
            "top_speed" => 320,
            "year" => 2004,
            "description" => "The Maserati MC12 entered production in 2004 as base for the racing variant to compete in the GT Championship. In fact, one requirement for participation in the GT Championship was the production of at least 25 road cars; so 25 cars were produced in 2004 and another 25 in 2005.
                            The car was based on the Enzo Ferrari chassis and gearbox, mounting a variant of the Ferrari Dino V12 engine.
                            The racing results of the racing version were magnificent. The Maserati MC12 GT1 team managed to end second and third in the debut race, winning the next round's race. The second year Maserati won the Manufacturers' Cup with a great point gap, and continued to compete at great level during the next years. It participated in 94 races, winning 40 of them.",
            "url_image" => "/public/images/coches/maserati/maserati_mc12_gt1.png",
            "brand_id" => 11
        ],
        [
            "name" => "ks_maserati_gt_mc_gt4",
            "category" => "race",
            "power" => 430,
            "torque" => 535,
            "weight" => 1410,
            "power_to_weight_ratio" => 3.27,
            "top_speed" => 298,
            "year" => 2016,
            "description" => "After the experience with Trofeo Series, Maserati is ready to push the GranTurismo MCs into a new challenge: the international GT4 series.
                            The modifications needed for GT4 homologation mainly concern the engine and aerodynamics. The car's overall technical make-up will be unchanged: the 4700cc engine, electro-actuated transmission with paddle-shift commands and a kerb weight of 1410 kg will stay. The fitting of an air scoop will reduce the car's power output to 430 bhp from its current 488 bhp while a newly-designed rear spoiler and modified diffuser will bring the car's performance into line with that of the other GT4 cars.",
            "url_image" => "/public/images/coches/maserati/maserati_gt_mc_gt4.png",
            "brand_id" => 11
        ],
        [
            "name" => "ks_maserati_250f_6cyl",
            "category" => "race",
            "power" => 270,
            "torque" => 0,
            "weight" => 670,
            "power_to_weight_ratio" => 2.48,
            "top_speed" => 290,
            "year" => 1954,
            "description" => "The Maserati 250F took part of Formula One racing between January 1954 and November 1960, when rules allowed 2.5 liter unsupercharged or 750 cc supercharged engines.
                            Maserati went with the former, choosing a straight six aspirated engine configuration; in 1956 it mounted a V12 engine.
                            With a quite roomy cockpit, Maserati 250F featured a 4 gears transmission (plus reverse) and &quot;Continental fashion&quot; pedals arrangement: clutch, throttle and brake in this order.",
            "url_image" => "/public/images/coches/maserati/maserati_250f_6cyl.png",
            "brand_id" => 11
        ],
        [
            "name" => "ks_maserati_250f_12cyl",
            "category" => "race",
            "power" => 310,
            "torque" => 0,
            "weight" => 670,
            "power_to_weight_ratio" => 2.16,
            "top_speed" => 290,
            "year" => 1954,
            "description" => "The Maserati 250F took part of Formula One racing between January 1954 and November 1960, when rules allowed 2.5 liter unsupercharged or 750 cc supercharged engines.
                            Maserati went with the former, choosing a straight six aspirated engine configuration; in 1956 it mounted a V12 engine.
                            With a quite roomy cockpit, Maserati 250F featured a 4 gears transmission (plus reverse) and &quot;Continental fashion&quot; pedals arrangement: clutch, throttle and brake in this order.",
            "url_image" => "/public/images/coches/maserati/maserati_250f_12cyl.png",
            "brand_id" => 11
        ],
        [
            "name" => "ks_maserati_alfieri",
            "category" => "street",
            "power" => 460,
            "torque" => 520,
            "weight" => 1496,
            "power_to_weight_ratio" => 3.25,
            "top_speed" => 340,
            "year" => 2014,
            "description" => "The Alfieri Concept Car, introduced at the 2014 Geneva Auto Show, is more than a concept. It's a statement. Proving once more that Maserati is a sports-car company to its very core, and paving the way for the continuation of Maserati's racing legacy.
                            More than just a modernization of the A6 GCS, the Alfieri is a reduction in complexity, a more compact and aggressive model that takes a modern interpretation of the A6 GCS’s spirit and recreates it into something new. The result is not retro, but a retro-inspired car that says a lot about the design DNA of the Maserati of the future.",
            "url_image" => "/public/images/coches/maserati/maserati_alfieri.png",
            "brand_id" => 11
        ],
        [
            "name" => "ks_maserati_quattroporte",
            "category" => "street",
            "power" => 530,
            "torque" => 710,
            "weight" => 1900,
            "power_to_weight_ratio" => 3.58,
            "top_speed" => 310,
            "year" => 2013,
            "description" => "The Maserati Quattroporte is part of a story that dates back over 100 years. It's a story of endurance. Of embracing challenge. Of going the distance and winning. And doing it all in audacious Italian style. Automotive luxury means something different with the Quattroporte. With this car, it's a decidedly more focused and purposeful concept. It is, after all, a Maserati with a motor sport bloodline and a time-honoured grand touring heritage The flagship Quattroporte engine is  fitted to the GTS version. This is a magnificent 3.8-litre twin-turbo V8, developing output of 530 hp at 6,500-6,800 rpm. Torque is equally impressive at 710 Nm, available between 2,250 and 3,500 rpm in overboost mode. The GTS reaches 100 km/h from a standing start in a breathtaking 4.7 seconds and power to a top speed of 310 km/h. Combined fuel consumption and emissions are 10.7 litres/100 km and 250 g/km.",
            "url_image" => "/public/images/coches/maserati/maserati_quattroporte.png",
            "brand_id" => 11
        ],
        [
            "name" => "ks_maserati_levante",
            "category" => "street",
            "power" => 424,
            "torque" => 580,
            "weight" => 2108,
            "power_to_weight_ratio" => 4.97,
            "top_speed" => 264,
            "year" => 2016,
            "description" => "Maserati Levante is the first SUV in the brand's more than one hundred year history.
                            The design of the Levante features clear associations with the Maserati brand and its distinctive Italian character: the aggressive front introduces new, tapered headlights separated into two elements, with the upper headlight unit connected to the radiator grille. Maserati's design signature is clearly visible on the sides: the three iconic air vents on the front wings, the trapezoidal C-pillar with the &quot;Saetta&quot; logo and the large, frameless door windows. The rear is dominated by the very tapered back window and streamlined shape, both typical of a high-performance sports car.
                            At a technical level, the Levante's chassis is designed to combine the outstanding on-road performance typical of every Maserati with unrivalled handling even on very low-grip surfaces and an excellent off-road performance and ride. The new SUV boasts a high level of content as standard, with all versions featuring: sophisticated electronic suspension with controlled damping and air springs, which can be set on several levels, &quot;Q4&quot; intelligent all-wheel drive and 8-speed automatic transmission specially calibrated for the brand's new SUV.",
            "url_image" => "/public/images/coches/maserati/maserati_levante.png",
            "brand_id" => 11
        ],

        [
            "name" => "ks_mazda_787b",
            "category" => "race",
            "power" => 690,
            "torque" => 608,
            "weight" => 845,
            "power_to_weight_ratio" => 1.22,
            "top_speed" => 344,
            "year" => 1990,
            "description" => "The Mazda 787 is a Group C sports prototype racing car that has taken part to World Sportscar Championship, All Japan Sports Prototype Championship and the 24 Hours of Le Mans from 1990 to 1991. It mounts a Wankel rotary-powered engine, Mazda's R26B
                            The greatest achievement of this car is the victory in the 24 Hours of Le Mans in 1991, last and only victory of the Japanese brand in the famous international event.",
            "url_image" => "/public/images/coches/mazda/mazda_787b.png",
            "brand_id" => 12
        ],
        [
            "name" => "ks_mazda_rx7_tuned",
            "category" => "street",
            "power" => 444,
            "torque" => 398,
            "weight" => 1312,
            "power_to_weight_ratio" => 2.95,
            "top_speed" => 240,
            "year" => 1991,
            "description" => "Because of its nature, the rotary engine is able to run at higher speeds without suffering the detrimental forces of a common engine. This means the owner is not forced to focus on extensive modifications to preserve engine's lifetime.
                            The main steps are remapping the engine, replacing the original turbo system with a bigger unit, improving the air filter to have a higher flow (very important for rotary engines), exhaust pipe and, of course, installing a big rear wing because the rear is really light at high speeds.",
            "url_image" => "/public/images/coches/mazda/mazda_rx7_tuned.png",
            "brand_id" => 12
        ],
        [
            "name" => "ks_mazda_rx7_spirit_r",
            "category" => "street",
            "power" => 276,
            "torque" => 314,
            "weight" => 1270,
            "power_to_weight_ratio" => 4.60,
            "top_speed" => 256,
            "year" => 1991,
            "description" => "The third-generation RX-7, first launched in 1991, has a particularly distinctive exterior design. Its lightweight, compact and high-output rotary engine enables the driver to feel superb driving pleasure. Epitomizing Mazda's spirit of sports car, the RX-7 has won popularity among the customers since its 1978 launch. The production of the RX-7 model (FD-3S) came to an end in August 2002.
                            The Spirit R series is available in three models: the Type-A, a two-seater with a five-speed manual transmission; the Type-B, a four-seater with a five-speed manual transmission; and the Type-C, a four-seater with a four-speed automatic transmission. All three models are equipped with common interior and exterior features, such as BBS-manufactured 17-inch wheels, red brake calipers, and interior panels with a special soft coating, while each model shows off its own equipment to make a difference from the other.
                            The Type-A Spirit R is a two-seater model fitted with the Recaro-made exclusive red full bucket seats. These lightweight seats reduce the overall chassis weight of the vehicle by approximately 10 kg. Braking performance is enhanced through the use of large drilled type ventilated disk brakes for all four wheels and high rigid stainless mesh brake hoses. The Type-A Spirit R model is the ultimate RX-7, boasting the most outstanding driving performance in its history.",
            "url_image" => "/public/images/coches/mazda/mazda_rx7_spirit_r.png",
            "brand_id" => 12
        ],
        [
            "name" => "ks_mazda_mx5_cup",
            "category" => "race",
            "power" => 160,
            "torque" => 200,
            "weight" => 908,
            "power_to_weight_ratio" => 5.67,
            "top_speed" => 230,
            "year" => 2016,
            "description" => "The Mazda MX-5 Miata is famous to be a highly capable racing platform; it's known to be the best-selling roadster in the world, buts some even claim that this model is the most road-raced car in the world.
                            Mazda seems to seriously agree with them so, starting in 2016, there will be multiple Mazda Global MX-5 Cup series around the world, all using the same prepared 4th-generation model.",
            "url_image" => "/public/images/coches/mazda/mazda_mx5_cup.png",
            "brand_id" => 12
        ],
        [
            "name" => "ks_mazda_mx5_nd",
            "category" => "street",
            "power" => 160,
            "torque" => 200,
            "weight" => 1058,
            "power_to_weight_ratio" => 6.61,
            "top_speed" => 214,
            "year" => 2015,
            "description" => "In terms of design, the latest edition of the best-selling roadster in history is arguably the sportiest ever.
                            And what its looks promise, the technology can deliver. Under the bonnet, high-compression SKYACTIV-G petrol engines drive the rear wheels, while the specially-developed SKYACTIV-Chassis ensures the most advanced 'Jinba Ittai' driver-and-car-as-one experience yet, including a choice of two ultra-efficient petrol engines (131bhp and 160bhp), and the first offered with a range of modern active safety and connectivity systems. At the same time, the MX-5 has remained true to its focus on lightweight simplicity and pure driving fun, dropping some 100kg relative to the third-generation model.
                            This MX-5 retains the charm, reliability, affordability and above all lightweight fun of the original model launched 25 years ago.",
            "url_image" => "",
            "brand_id" => 12
        ],
        [
            "name" => "ks_mazda_miata",
            "category" => "street",
            "power" => 130,
            "torque" => 152,
            "weight" => 1040,
            "power_to_weight_ratio" => 8.0,
            "top_speed" => 197,
            "year" => 1990,
            "description" => "The Mazda MX5 NA was presented in Chicago on February 1989. Provided with an all-steel body shell and a light-weight aluminium hood, in Japan it was sold as Eunos Roadster.
                            Initially build mounting a 1.6 L engine, in 1994 the model was freshened with the introduction of the more powerful 1.8 L.",
            "url_image" => "/public/images/coches/mazda/mazda_miata.png",
            "brand_id" => 12
        ],

        [
            "name" => "ks_mclaren_f1_gtr",
            "category" => "spcl",
            "power" => 595,
            "torque" => 693,
            "weight" => 1010,
            "power_to_weight_ratio" => 1.69,
            "top_speed" => 330,
            "year" => 1995,
            "description" => "The McLaren F1 GTR was a racing variant of the McLaren F1 sports car first produced in 1995 for grand touring style racing, such as the BPR Global GT Series, FIA GT Championship, JGTC, and British GT Championship.
                        Following the success of the 1995 season, McLaren set forth to upgrade the car to remain competitive, especially against the threat of newer sports cars appearing such as the Ferrari F50 GT (which was withdrawn quickly enough) and Porsche 911 GT1. They were assisted by BMW Motorsport, who at the time decided to use their connection to McLaren to enter sports car racing by running their own race team with F1 GTRs.
                        Among the modifications were an extension of the front and rear bodywork, including a larger splitter attached to the front of the car. The bodywork was also modified to allow it to be removed more quickly for easier repair. The car's normally stock gearbox was modified to include a lighter magnesium housing and more robust mechanicals. These modifications allowed for the weight of the GTR to be lowered by 38 kg. Although equipped with a restricted engine that produced less power than the road car, slower on an entire lap than the 1997 long-tail version due to the significantly lower downforce (the 1997 model relied on high-speed cornering much like prototypes of the 2000s), the F1 GTR of 1996 was the fastest variant in terms of straight line speed. The car hit 330 km/h on the Mulsanne Straight at Le Mans in 1996, which is 13 km/h faster than the 1997 long-tail F1 GTR and even 6 km/h faster than the 1996 Porsche GT1.
                        McLaren F1 GTRs have been so successful that raced internationally until 2005 when the final race chassis was retired. ",
            "url_image" => "/public/images/coches/mclaren/mclaren_f1_gtr.png",
            "brand_id" => 13
        ],
        [
            "name" => "ks_mclaren_p1_gtr",
            "category" => "sptc",
            "power" => 986,
            "torque" => 1000,
            "weight" => 1400,
            "power_to_weight_ratio" => 1.41,
            "top_speed" => 350,
            "year" => 2015,
            "description" => "Based on the McLaren P1™ road car, the track-focused McLaren P1™ GTR design concept further optimizes the aerodynamically efficient \"shrink-wrapped\" body shape in order to offer maximum performance, superior handling characteristics and optimized driver engagement on track. A host of changes have been made, and the car has been thoroughly re-engineered from the ground up to ensure the McLaren P1™ GTR achieves its target of being the ultimate drivers' car on track.
                            The front track of the McLaren P1™ GTR design concept has been widened by 80mm over the McLaren P1™, and is coupled with a more aggressive GT-style front splitter. Reprofiled low-temperature radiator ducts seamlessly flow into the leading edge of the aggressively flared front wheel arches, while the bodywork is \"shrink-wrapped\" around the carbon fiber MonoCage chassis behind the front wheels, cleaning the flow of air along the car's flanks.
                            The profile of the McLaren P1™ GTR design concept remains as dramatic as ever, hunkered down on to the race-prepared suspension with a fixed ride height, lower than the standard car. The snorkel air intake, inspired by the design of the original McLaren F1, is still present within the roof structure of the carbon fiber MonoCage chassis.
                            At the rear, a large, twin-element wing is mounted on dramatic carbon fiber pylons which extend around the rear of the bodywork. This fixed-height wing is fitted with a hydraulically operated Drag Reduction System (DRS) to boost acceleration performance, and has been honed to provide increased levels of downforce compared to the road car, working with the active aerodynamic flaps located ahead of the front wheels.
                            The road legal McLaren P1™ stows the rear wing within the bodywork, but with the fixed height wing, and therefore no pistons or moving mechanical parts, the bodywork of the McLaren P1™ GTR design concept behind the engine bay is now a smooth, flowing surface, feeding clean air below the wing and over the back of the car.
                            Below the rear wing sits the exposed, centrally mounted exhaust, which is an all-new design, developed exclusively for the McLaren P1™ GTR. Made from inconel and titanium alloy, the system maximizes the aural characteristic of the higher output 3.8-litre twin turbo V8 engine to maintain, and further emphasize, the McLaren sound. The design of the exhaust has also changed, with a straight cut twin-pipe setup now used in place of the single-exit exhaust.",
            "url_image" => "/public/images/coches/mclaren/mclaren_p1_gtr.png",
            "brand_id" => 13
        ],
        [
            "name" => "ks_mclaren_650_gt3",
            "category" => "rccr",
            "power" => 500,
            "torque" => 500,
            "weight" => 1240,
            "power_to_weight_ratio" => 2.48,
            "top_speed" => 275,
            "year" => 2014,
            "description" => "The 650S GT3 builds on the strong reputation that the 12C GT3 established in the racing world. Built around the same lightweight carbon fiber MonoCell chassis found in the 650S, the 650S GT3 offers a number of enhancements that ensure it is optimized on the track.
                            A very aggressive carbon fiber splitter has been added to the front to increase downforce, while larger intakes at the front allow for better cooling. The sides of the car have also been reworked, with optimized air intakes. In the rear, a large fixed carbon fiber wing stands out among the modifications made to the 650S for the GT3 iteration. Below the wing is a large rear diffuser and reworked bodywork.
                            Inside, the driver sits in a fully FIA-approved McLaren GT-developed race seat, which is fitted with a six-point race harness. In front of the driver is a bespoke motorsport digital dash directly behind the 650S GT3 steering wheel, modelled after the McLaren Formula 1 wheel design.
                            Of course, safety is a main concern when it comes to designing race cars, and that is why McLaren put a huge emphasis on this with the 650S GT3. Already mentioned in this article is the carbon fiber MonoCell chassis, with the addition of the FIA-approved rollcage that has been redesigned and is lighter than the one used in the 12C GT3.
                            Power comes from the award-winning 3.8-liter V8 twin turbo &#39;M838T&#39; engine, producing around 500 hp, roughly the same power as the 12C GT3. Mated to the engine is an all-new six-speed sequential motorsport transmission.",
            "url_image" => "/public/images/coches/mclaren/mclaren_650_gt3.png",
            "brand_id" => 13
        ],
        [
            "name" => "mclaren_mp412c_gt3",
            "category" => "rccr",
            "power" => 500,
            "torque" => 500,
            "weight" => 1245,
            "power_to_weight_ratio" => 2.49,
            "top_speed" => 275,
            "year" => 2011,
            "description" => "The new McLaren MP4-12C GT3 will be the first McLaren car built for FIA* GT series racing since the McLaren F1 GTR finished production in1997. The 12C GT3 is based on the new MP4-12C high-performance sports car and a team of engineers, designers and test drivers with vast experience in Formula 1 and GT racing has been assembled to undertake the process of adapting the carbon chassis-based 12C to racing specification.
                            Just as with the 12C road car, McLaren is working closely with specialist suppliers to deliver an innovative and lightweight car. The 3.8-litre McLaren V8 twin turbo ‘M838T' engine supplied in the road car also features in the 12C GT3, but de-tuned to 500 PS (from 600 PS) in order to provide optimum power for this performance-balanced race car.
                            The new MP4-12C GT3 will feature a unique engine calibration, bespoke racing transmission developed in partnership with Ricardo (who also developed the engine with McLaren) and a suspension arrangement tuned specifically for racing.",
            "url_image" => "/public/images/coches/mclaren/mclaren_mp412c_gt3.png",
            "brand_id" => 13
        ],
        [
            "name" => "ks_mclaren_p1",
            "category" => "sptc",
            "power" => 903,
            "torque" => 900,
            "weight" => 1450,
            "power_to_weight_ratio" => 1.60,
            "top_speed" => 350,
            "year" => 2013,
            "description" => "The astonishing new McLaren P1™ has a clear goal - to be the best driver's car in the world on road and track. To achieve this objective, McLaren is using all of its 50 years of racing experience and success, especially in the fields of aerodynamics and lightweight carbon fibre technology.
                            The result is a car that has an unprecedented amount of downforce for a road vehicle. Similar levels to a GT3 racing car and yet with even greater ground effect. This downforce not only boosts cornering and braking performance. It also helps balance, stability and driveability at all speeds.
                            The best driver's car in the world must also have exceptional straight-line performance and instant throttle response. To deliver this, the McLaren P1™ uses an innovative IPAS petrol-electric powertrain comprising a substantially revised 3.8-litre twin-turbo V8 petrol engine, coupled to a single electric motor, collectively known as M838TQ. Combined power output is 916 PS. As important as absolute power is the electric motor's ability to provide instant torque, making the powertrain superbly responsive.
                            Top speed is electronically limited to 350 km/h, with the 0-100 km/h standing start acceleration taking less than three seconds. The McLaren P1™ will power from rest to 200 km/h in less than seven seconds, and on to 300 km/h in less than 17 seconds - a full five seconds quicker than the McLaren F1.",
            "url_image" => "/public/images/coches/mclaren/mclaren_p1.png",
            "brand_id" => 13
        ],
        [
            "name" => "mclaren_mp412c",
            "category" => "sptc",
            "power" => 616,
            "torque" => 600,
            "weight" => 1434,
            "power_to_weight_ratio" => 2.33,
            "top_speed" => 330,
            "year" => 2011,
            "description" => "The 12C has been created at the McLaren Technology Centre in Woking, UK under the same roof as McLaren Racing and the Vodafone McLaren Mercedes Formula 1 team: ‘performance' lies at the heart of the 12C and the McLaren Automotive team responsible for its design, development, engineering and now manufacture.
                            Starting from a clean sheet of paper, the 12C is the first ‘pure McLaren'. From its conception, the 12C has been designed around the driver with a carbon chassis. Every one of the 12C's components is bespoke, and there to either enhance performance or contribute to the unmatched driving experience.
                            Now, the 12C takes carbon innovation to a new level. It is based on a unique one-piece moulded carbon chassis: the MonoCell, which weighs just 75kgs (165lbs). The MonoCell concept required it to provide the perfect combination of occupant space, structural integrity, light weight, and relatively low construction costs. And the ideal chassis from which to deliver ground-breaking efficiency and performance in the sports car market.",
            "url_image" => "/public/images/coches/mclaren/mclaren_mp412c.png",
            "brand_id" => 13
        ],

        [
            "name" => "ks_mercedes_c9",
            "category" => "race",
            "power" => 750,
            "torque" => 500,
            "weight" => 905,
            "power_to_weight_ratio" => 1.20,
            "top_speed" => 380,
            "year" => 1989,
            "description" => "In 1989, the Mercedes-Benz C9 was able to achieve great success. Beside replacing the black colour scheme for its national plain silver scheme, reducing AEG as a minor sponsor, the older M117 5.0L turbocharged V8 engine was upgraded to the M119, which replaced steel heads with new aluminium. The C9 was able to win all but one race in the 1989 season, including the 24 Hours of Le Mans.
                            The car had two variations. The LM version, depicted here, had reduced downforce for less drag and was able to achieve great top speeds at the long straights of the Le Mans circuit.During qualifying for Le Mans, the C9 recorded a speed of 398 km/h on the Mulsanne Straight, a record. Mercedes driver Jean-Louis Schlesser would end up taking the driver's championship that season.
                            The M119 engine could use just 50% of total boost and still produce more than 710bhp with low fuel consumption, very important for the 24 hours race. Alternatively you can crack the turbo boost to 100% and get a power output of more than 900bhp but at the expense of reliability.
                            The car had very high levels of downforce, even in the LM low drag version. The downforce was generated by a very big diffuser and under tray, but this also caused the car to be very pitch sensitive. Very stiff suspension was needed to make the car more stable aerodynamically, but the combination of the suspension setup with the diffuser stall at low speeds and the impressive amounts of torque of the turbo charged engine at low revs, make a car easy to spin at slow turns. Careful throttle application is advised.",
            "url_image" => "/public/images/coches/mercedes/mercedes_c9.png",
            "brand_id" => 14
        ],
        [
            "name" => "mercedes_sls_gt3",
            "category" => "race",
            "power" => 520,
            "torque" => 600,
            "weight" => 1265,
            "power_to_weight_ratio" => 2.43,
            "top_speed" => 280,
            "year" => 2009,
            "description" => "Coinciding with the market launch of the SLS AMG on 27 March 2010, Mercedes-AMG is presenting a GT3 variant. This racing version of the gullwing model stands out with its spectacular design and thoroughbred motor sports technology. Developed to comply with the GT3 specifications of the FIA, the SLS AMG GT3 is designed as a racing sports car for customers competing in sprints and long-distance races.
                            Thanks to uncompromising lightweight construction and superior handling dynamics, the SLS AMG provides an outstanding basis for a highly competitive racing car.T he new SLS AMG GT3 is wide, flat and has spectacular racing car looks. The main focus when modifying the body of this gullwing model was on aerodynamic performance – as is seen not only in the new front apron with a splitter, the bonnet with its central cooling air vent and the wider front and rear wings, but also in the the side wheel arch air vents, the sideskirts with cooling ducts for the rear brakes, the smooth underbody with a rear diffuser and the adjustable rear aerofoil. All these features ensure a low drag coefficient and maximum downforce – while guaranteeing effective cooling of thermally highly stressed components.",
            "url_image" => "/public/images/coches/mercedes/mercedes_sls_gt3.png",
            "brand_id" => 14
        ],
        [
            "name" => "ks_mercedes_amg_gt3",
            "category" => "race",
            "power" => 520,
            "torque" => 600,
            "weight" => 1265,
            "power_to_weight_ratio" => 2.43,
            "top_speed" => 280,
            "year" => 2015,
            "description" => "The design lines of the new Mercedes-AMG GT3 say everything about the character and ambitions of this racer: make way for a car that is primed for the attack, and wants only one thing, namely to win. Its matt paintwork in designo selenite grey magno covers the muscular contours like a second skin. As an alluring contrast, yellow exterior highlights create sophisticated effects in counterlighting. From whatever the viewing angle: this racing car from Affalterbach already makes a mighty impression at standstill, and embodies sheer power.
                            The widened body, the large air inlets, the diffuser and the enormous rear aerofoil – numerous features from motorsport give the Mercedes-AMG GT3 a decidedly dynamic appearance. At the same time it avoids any sign of unnecessary showmanship: all modifications to the body are in the interests of maximum downforce and aerodynamic efficiency, for best results on the racetrack. The specially incorporated features also improve the effective cooling of components subject to high thermal loads.
                            To keep the vehicle weight as low as possible, the body is mainly of carbon-fibre: the bonnet, doors, front wings, front and rear aprons, side walls, side skirts, diffuser, boot lid and rear aerofoil are made from this particularly lightweight yet extremely strong material. As in the roadgoing version, the vehicle structure of the GT3 consists of a likewise extremely lightweight yet rigid aluminium spaceframe. With numerous detailed improvements, systematic implementation of the &quot;AMG Lightweight Performance&quot; strategy has resulted in an even lower kerb weight than that of the SLS AMG GT3.
                            The AMG 6.3-litre V8 engine, with additional improvements for the new racing car, ensures the fulminating power already familiar from the SLS AMG GT3. Low operating costs, long service intervals, the user-friendly technology and, not least, the great reliability of this naturally aspirated, high-revving AMG engine were the reasons for staying with this concept for the customer sports segment. Dry sump lubrication obviates the need for an oil sump, allowing the V8 engine to be installed low down in the chassis and well behind the front axle.",
            "url_image" => "/public/images/coches/mercedes/mercedes_amg_gt3.png",
            "brand_id" => 14
        ],
        [
            "name" => "ks_mercedes_190_evo2",
            "category" => "race",
            "power" => 370,
            "torque" => 310,
            "weight" => 980,
            "power_to_weight_ratio" => 2.64,
            "top_speed" => 280,
            "year" => 1990,
            "description" => "The Mercedes-Benz 190 introduced in 1982 rapidly made a name for itself as the Baby-Benz. But who would have thought that it would also acquire a reputation as a compact sports car over the years and after several engine and equipment refinements?
                            The 190 E 2.5-16 Evolution II - celebrated its world premiere at the Geneva Motor Show in March 1990. The EVO II stood out for its bodywork modifications designed to reduce drag still further and to raise downforce at the front and rear axles. Particularly distinctive and eye-catching features were the large rear airfoil and the wheelarch flares. The EVO II caused quite a stir, quite literally. Within three months, a small series of 502 units was produced to obtain homologation for motor sport.
                            The car may have been ever so well developed and designed - for the motor sport teams, it was no more than the basis for additional modifications. And there was plenty of scope for the latter: engine output was boosted to well over 300 hp and the car's weight was reduced to less than 1,000 kilograms, resulting in a top speed in the range of 300 km/h. It is therefore not surprising that the EVO II was a highly successful competitor on the racetrack - as borne out by the DTM driver's title clinched by Klaus Ludwig in 1992.",
            "url_image" => "/public/images/coches/mercedes/mercedes_190_evo2.png",
            "brand_id" => 14
        ],
        [
            "name" => "mercedes_sls",
            "category" => "street",
            "power" => 571,
            "torque" => 650,
            "weight" => 1620,
            "power_to_weight_ratio" => 2.84,
            "top_speed" => 317,
            "year" => 2009,
            "description" => "First unveiled at the 2009 IAA International Motor Show in Frankfurt/Main, the SLS AMG Coupe was the first car to be developed in-house by Mercedes-AMG.
                            The new super sports car from Mercedes-Benz and AMG makes for an alluring proposition with its unrivalled technology package: aluminium spaceframe body with gullwing doors, AMG 6.3-litre V8 front-mid engine developing 420 kW (571 hp) peak output, 650 Nm of torque and dry sump lubrication, seven-speed double-declutch transmission in a transaxle configuration, sports suspension with aluminium double wishbones a	nd a kerb weight of 1620 kilograms based on the DIN standard – this superlative combination guarantees driving dynamics of the highest order. The ideal front/rear weight distribution of 47 to 53 percent and the vehicle's low centre of gravity are testimony to the uncompromising sports car concept.",
            "url_image" => "/public/images/coches/mercedes/mercedes_sls.png",
            "brand_id" => 14
        ],

        [
            "name" => "ks_nissan_gtr_gt3",
            "category" => "race",
            "power" => 600,
            "torque" => 700,
            "weight" => 1300,
            "power_to_weight_ratio" => 2.17,
            "top_speed" => 280,
            "year" => 2012,
            "description" => "The NISSAN GT-R NISMO GT3, which was developed in line with the FIA GT3 regulations, debuted in 2012. In its first year it competed vigorously in events such as the SUPER GT GT300, the Super Taikyu and the British GT Championship and it attained a number of podium finishes. Furthermore, in 2013 it was the Blancpain Endurance Series Pro-Am class championship vehicle.
                            Using the same VR38DETT engine used in mass production vehicles, it has a maximum output of more than 550ps, generating a maximum torque of over 65.0kgf/m. With only a 6-speed sequential spec gearbox equipped with a semi-automatic paddle shift, the drive system is a FIA regulation approved rear wheel drive. Even more than the 2013 model, which has already demonstrated its speed in the GT3 race world, reliability has been improved and a total reduction in running costs has been achieved.",
            "url_image" => "/public/images/coches/nissan/nissan_gtr_gt3.png",
            "brand_id" => 15
        ],
        [
            "name" => "ks_nissan_gtr",
            "category" => "street",
            "power" => 592,
            "torque" => 652,
            "weight" => 1750,
            "power_to_weight_ratio" => 2.28,
            "top_speed" => 313,
            "year" => 2014,
            "description" => "Since 1984, NISMO has been the official in-house racing arm of Nissan. Started by a group of maverick Nissan engineers almost 30 years ago, NISMO is synonymous with passion, expertise, and the heights of Nissan performance – not to mention decades of racing dominance. The vehicles it creates have one goal in mind: that every time you see a NISMO badge, you'll know it's something extraordinary.The flagship of GT-R. The flagship of NISMO. Engineered with brilliance, designed with an undeniable edge, and most importantly, fueled by passion without a redline.
                            GT-R NISMO has a phenomenal 592bhp, with 652Nm torque, delivering truly unbelievable performance. The 3.8 litre V6 engine benefits from NISMO's unrivalled expertise for unbeatable speed. Its Spec-V, high diameter turbochargers, also used for GT3 racing, improves breathing whilst individual ignition timing control is optimised for each cylinder and its fuel pump provides even better combustion. The smart aerodynamics provide 100kg of additional downforce at 186 mph allowing you to master both track and road at incredible speeds.",
            "url_image" => "/public/images/coches/nissan/nissan_gtr.png",
            "brand_id" => 15
        ],
        [
            "name" => "ks_nissan_skyline_r34",
            "category" => "street",
            "power" => 325,
            "torque" => 392,
            "weight" => 1560,
            "power_to_weight_ratio" => 4.83,
            "top_speed" => 250,
            "year" => 1999,
            "description" => "1999 has seen the introduction of the new Skyline R34 GT-R, with a wealth of history behind it and an enviable reputation to live up to. A 'super-evolution' of the model it replaced, the R34 GT-R is more advanced in every respect. Its body is stiffer and its aerodynamics package is further refined, and in V-spec features front and rear carbonfibre diffusers under the car, and dual wing adjustable aerofoil on the bootlid. Among the many technical refinements under the bonnet are twin ceramic intercooled Turbochargers, which effectively eliminate Turbo-lag. There is also more torque and better power delivery.
                            A six-speed Getrag transmission now delivers the engine's output to the wheels. Improvements have been made to the ATTESA four-wheel drive system, which features E-TS, or Electronic Torque Split. This gives the driver the entertainment of a 100 per cent rear-wheel drive car, together with the traction and safety of a 50:50 four-wheel drive system when conditions demand it. This is further backed up by 'intelligent' electronic limited-slip differential. Refinements to the Super HICAS rear-wheel steer system include an electronic yaw-rate Feedback Control System for even more precise control of the rear wheels in extreme situations.
                            Quicker Turbo response has also been achieved through the use of new Turbochargers. Power is fed through a new six-speed close ratio Getrag gearbox. The basic engine goes back some nine years and was first developed for racing. In racing specification the engine comfortably produces upwards of 507bhp.",
            "url_image" => "/public/images/coches/nissan/nissan_skyline_r34.png",
            "brand_id" => 15
        ],
        [
            "name" => "ks_nissan_370z",
            "category" => "street",
            "power" => 350,
            "torque" => 374,
            "weight" => 1498,
            "power_to_weight_ratio" => 4.28,
            "top_speed" => 250,
            "year" => 2015,
            "description" => "Though it has now been 45 years since the arrival of the original 240Z, its influence remains strong in the sports car world and in the design of the current generation 370Z Coupe. The iconic shape, formed by the combination of a short wheelbase, wide track, low center of gravity and fluid silhouette, is as instantly recognizable today as it was in 1970.
                            Even more than racing-inspired aerodynamic bodies and driver-oriented cockpit-style interiors, at its core NISMO is all about performance. To that end, the 370Z NISMO includes a potent 350-horsepower 3.7-liter DOHC V6 engine with Variable Valve Event and Lift Control (VVEL). The 370Z NISMO's enhanced engine power and acceleration is provided through use of an exclusive H-configured exhaust system design and muffler tuning, along with optimized ECM (Engine Control Module) calibration, to help create 18 horsepower more than a standard 370Z. Torque is rated at 276 lb-ft.",
            "url_image" => "/public/images/coches/nissan/nissan_370z.png",
            "brand_id" => 15
        ],

        [
            "name" => "pagani_zonda_r",
            "category" => "race",
            "power" => 750,
            "torque" => 710,
            "weight" => 1070,
            "power_to_weight_ratio" => 1.43,
            "top_speed" => 350,
            "year" => 2009,
            "description" => "When it comes to the creation of the most extreme versions, Zonda R is a clear indication that the Modenese atelier - on a par with the greatest fashion designers - is capable of strengthening its uniqueness without sacrificing driver comfort.
                            The central monocoque in carbon-titanium, more rigid and lighter than ever, encases a Mercedes-Benz AMG V12 high-performance racing engine as if it were a precious gem. This four wheel prodigy is able to deliver 750 HP and produce a torque of 710 Nm. This engine is bolted directly to the central monocoque. A direct throttle actuation via mechanical cable ensures immediate throttle response, thus achieving improved propulsor performance in terms of reactivity.
                            20 milliseconds is the time needed by the Zonda R to perform gearshifts, thanks to a transversal sequential gearbox in magnesium, enhanced by the Xtrac transmission technolgy, Automac Engineering automation and the shift paddles located behind the steering wheel.
                            A power-to-weight ratio of 701 hp-per-ton combined with Pirelli Pzero tyres can catapult the driver from 0 to 100 km/h in less than 2,7 seconds, while the Brembo carbon ceramic brakes ensure the car comes to a standstill even quicker.
                            A dry weight of 1.070 kg is achieved through the AvionAl suspension components, Aspa machined structural ErgAl parts holding the engine and the gearbox, and Poggipolini Titanium screws. Moreover, aerodynamic setups allows for a high downforce setting of up to 1.500kg and a 350kmh top speed setting. The effectiveness of the rear is matched by the complex new front bonnet, as well as the closed flat underbody and rear diffusor.",
            "url_image" => "/public/images/coches/pagani/pagani_zonda_r.png",
            "brand_id" => 16
        ],
        [
            "name" => "ks_pagani_huayra_bc",
            "category" => "street",
            "power" => 740,
            "torque" => 1100,
            "weight" => 1218,
            "power_to_weight_ratio" => 1.64,
            "top_speed" => 370,
            "year" => 2016,
            "description" => "The name 'BC' represents the initials of Benny Caiola, a person who has greatly inspired Horacio Pagani over the years. Benny was so impressed by the passion and technology of the cars Horacio was designing from the very beginning, he made history as the first customer to buy a Pagani Automobile.
                            The Huayra BC is the most technologically advanced Huayra Coupé yet, introducing innovative technical solutions which will be applied in the Pagani cars of the future. This not just a 'restyling' of the Huayra, but a product that includes innovative changes in every part of the vehicle.
                            The Huayra BC is powered by a V12 Bi-Turbo engine developed by Mercedes AMG exclusively for Pagani. The engine unleashes more than 750 horsepower, and is approved CARB and EU6.
                            The Huayra BC features a 7-speed AMT (Automated Manual Transmission) developed from scratch and represents a new benchmark in this transmission technology.",
            "url_image" => "/public/images/coches/pagani/pagani_huayra_bc.png",
            "brand_id" => 16
        ],
        [
            "name" => "pagani_huayra",
            "category" => "street",
            "power" => 730,
            "torque" => 1000,
            "weight" => 1360,
            "power_to_weight_ratio" => 1.86,
            "top_speed" => 370,
            "year" => 2012,
            "description" => "After seven years of hard work I am now able to tell you a little brief history and the path that led to the birth of the Huayra, project name C9.
                            The Huayra is made of more than 4000 components (engine and gearbox not included). To create them and put them together requires creativity, patience and passion that I shared with a fantastic young team and with the most competent partner in all sectors.
                            The active suspension in the front and the 4 flaps allow to optimally balance the drag coefficient and downforce.
                            Mercedes-AMG has created a truly unique and lightweight engine, a twin turbo with 730 HP and 1000 Nm of torque that perfectly complements the car giving a feeling that has motivated our research: that of the brute force of an airplane taking off.",
            "url_image" => "/public/images/coches/pagani/pagani_huayra.png",
            "brand_id" => 16
        ],

        [
            "name" => "ks_porsche_919_hybrid_2016",
            "category" => "rccr",
            "power" => 900,
            "torque" => 400,
            "weight" => 875,
            "power_to_weight_ratio" => 0.97,
            "top_speed" => 340,
            "year" => 2016,
            "description" => "The WEC regulations lay down strict requirements relating to efficiency, safety and sustainability in motorsports. In short: vehicles that are designed for the future. These requirements have inspired Porsche's engineers to carry on what Porsche has been doing for over 60 years. Avoiding an either/or approach to isolated technologies, and instead examining every possible detail without losing sight of the overall picture.
                            In the LMP1 class, the principle of dominance through maximum performance will give way to the demand for efficiency. For the first time in the race’s history, all of the works teams in the top classification must compete with hybrid racing vehicles.
                            Porsche's choice of combustion engine was born out of an efficiency-optimized approach: a highly compact, turbocharged four-cylinder 2-liter engine with direct fuel injection. The combustion engine is supported by two energy recuperation systems. Years of experience in designing Sports Cars helped us to reduce the weight of individual components even further. The sports prototype is made mainly of carbon. In addition, the engine made of high-strength aluminium and the use of magnesium and various titanium alloys also helped to achieve the ideal system weight.",
            "url_image" => "/public/images/coches/porsche/porsche_919_hybrid_2016.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_919_hybrid_2015",
            "category" => "rccr",
            "power" => 900,
            "torque" => 400,
            "weight" => 875,
            "power_to_weight_ratio" => 0.97,
            "top_speed" => 340,
            "year" => 2015,
            "description" => "The WEC regulations lay down strict requirements relating to efficiency, safety and sustainability in motorsports. In short: vehicles that are designed for the future. These requirements have inspired Porsche's engineers to carry on what Porsche has been doing for over 60 years. Avoiding an either/or approach to isolated technologies, and instead examining every possible detail without losing sight of the overall picture.
                            In the LMP1 class, the principle of dominance through maximum performance will give way to the demand for efficiency. For the first time in the race’s history, all of the works teams in the top classification must compete with hybrid racing vehicles.
                            Porsche's choice of combustion engine was born out of an efficiency-optimized approach: a highly compact, turbocharged four-cylinder 2-liter engine with direct fuel injection. The combustion engine is supported by two energy recuperation systems. Years of experience in designing Sports Cars helped us to reduce the weight of individual components even further. The sports prototype is made mainly of carbon. In addition, the engine made of high-strength aluminium and the use of magnesium and various titanium alloys also helped to achieve the ideal system weight.",
            "url_image" => "/public/images/coches/porsche/porsche_919_hybrid_2015.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_911_gt1",
            "category" => "spcl",
            "power" => 600,
            "torque" => 600,
            "weight" => 950,
            "power_to_weight_ratio" => 1.58,
            "top_speed" => 350,
            "year" => 1996,
            "description" => "The 911 GT1 was developed for works and customer appearances in GT races during the mid-1990s, making its racing debut in 1996. The GT1 was the first ever 911 to have a water-cooled mid-mounted engine, which as well as balanced axle load distribution also offered aerodynamic benefits. Behind a Joest Team TWR Porsche WSC 95, the new GT race car immediately achieved a double victory in the GT1 category at Le Mans in 1996, along with second and third place in the overall ranking.
                            In 1997, both 911 GT1s dropped out of Le Mans due to technical problems encountered just before the end of the race. A year later, a revised version of the 911 GT1 competed at Le Mans, which was the first time Porsche entered a sports car with a carbon fibre chassis. Thanks to its CFK monocoque, reworked front axle suspension and battery and generator weight savings, the 911 GT1 98 weighed around 50 kilograms less than its predecessor. The engine output was increased by a further 50 hp, thanks to its modified engine management system. Another new feature was the three-disc racing clutch made of carbon fibre.
                            As a fitting tribute to the 50th anniversary of the Porsche sports car brand, the 911 GT1 recorded a double victory for the Zuffenhausen-based manufacturer at the 24h of Le Mans in 1998",
            "url_image" => "/public/images/coches/porsche/porsche_911_gt1.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_917_k",
            "category" => "clsc",
            "power" => 600,
            "torque" => 490,
            "weight" => 820,
            "power_to_weight_ratio" => 1.36,
            "top_speed" => 350,
            "year" => 1970,
            "description" => "The bad results of the 917 in the 1969 forced Porsche to review the aero design, since its main problem was handling at high speeds.
                            Those improvements gave birth to the 917 Kurzheck: that year this car won 7 out of 10 races, smashing the record distance by 190 miles at the 24 Hours of Daytona (724 laps).",
            "url_image" => "/public/images/coches/porsche/porsche_917_k.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_908_lh",
            "category" => "spcl",
            "power" => 350,
            "torque" => 320,
            "weight" => 680,
            "power_to_weight_ratio" => 1.94,
            "top_speed" => 320,
            "year" => 1968,
            "description" => "The 908 debut came in the Monza 1000km race on April 25 1968.
                            In September of the same year it was driven at the 24 Hours of Le Mans: here the 908s were the fastest cars in qualifying and the early stages of the race, however, unlucky for them the repair rules were misinterpreted by Porsche team leaders, resulting in their disqualification.
                            Things went better in next year's race: although Jacky Ickx won in a Ford GT40, Hans Herrmann' 908 LH finished in 2nd place, just a few seconds behind due to a brake pad issue towards the end of the race.",
            "url_image" => "/public/images/coches/porsche/porsche_908_lh.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_962c_shorttail",
            "category" => "spcl",
            "power" => 925,
            "torque" => 630,
            "weight" => 850,
            "power_to_weight_ratio" => 1.36,
            "top_speed" => 330,
            "year" => 1984,
            "description" => "First developed in 1984 for use in the USA, from 1985 the Porsche 962 C continued the successful global motorsport story begun by its predecessor model, the 956, in 1982. Porsche undertook pioneering work in developing these race cars, adapting the aerodynamic ground-effect used in Formula 1 to the new race cars. Wing profiles in the sidepods and diffusers in the underbody produced a vacuum that 'sucked' the car to the track surface during driving, resulting in extreme cornering speeds. The 956 and 962 C had aluminium monocoques that were around 80% stiffer than the tubular space frame of their predecessors. As the rules limited fuel consumption, Porsche used ground-breaking injection and ignition systems. Some of the differences between the 962 C and the 956 were a longer wheelbase, narrower tyres and increased weight (minimum weight of 850 instead of 800 kilograms), along with further improved aerodynamics. Initially fitted with a 2.65-litre twin-turbo engine, the 962 C was first powered by a fully water-cooled three-litre twin-turbo engine producing up to 700 hp during practice at Le Mans in 1985. The 962 C won Le Mans in 1986, 1987 and 1994, following the 956's unbeaten run in the 24h race from 1982 to 1985. Porsche won five driver and three manufacturer's World Championship titles with these \"wing cars\" between 1982 and 1986.",
            "url_image" => "/public/images/coches/porsche/porsche_962c_shorttail.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_962c_longtail",
            "category" => "spcl",
            "power" => 650,
            "torque" => 630,
            "weight" => 825,
            "power_to_weight_ratio" => 1.27,
            "top_speed" => 360,
            "year" => 1984,
            "description" => "First developed in 1984 for use in the USA, from 1985 the Porsche 962 C continued the successful global motorsport story begun by its predecessor model, the 956, in 1982. Porsche undertook pioneering work in developing these race cars, adapting the aerodynamic ground-effect used in Formula 1 to the new race cars. Wing profiles in the sidepods and diffusers in the underbody produced a vacuum that 'sucked' the car to the track surface during driving, resulting in extreme cornering speeds. The 956 and 962 C had aluminium monocoques that were around 80% stiffer than the tubular space frame of their predecessors. As the rules limited fuel consumption, Porsche used ground-breaking injection and ignition systems. Some of the differences between the 962 C and the 956 were a longer wheelbase, narrower tyres and increased weight (minimum weight of 850 instead of 800 kilograms), along with further improved aerodynamics. Initially fitted with a 2.65-litre twin-turbo engine, the 962 C was first powered by a fully water-cooled three-litre twin-turbo engine producing up to 700 hp during practice at Le Mans in 1985. The 962 C won Le Mans in 1986, 1987 and 1994, following the 956's unbeaten run in the 24h race from 1982 to 1985. Porsche won five driver and three manufacturer's World Championship titles with these \"wing cars\" between 1982 and 1986.
                            Hans-Joachim Stuck, Derek Bell and Al Holbert won the 24h of Le Mans on 13 and 14 June 1987 in the 962 006. The following year, Mario, Michael and John Andretti used \"006\" as a practice car (T-Car) at Le Mans, after which it was acquired by the Porsche museum.",
            "url_image" => "/public/images/coches/porsche/porsche_962c_longtail.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_935_78_moby_dick",
            "category" => "clsc",
            "power" => 845,
            "torque" => 784,
            "weight" => 1025,
            "power_to_weight_ratio" => 1.21,
            "top_speed" => 366,
            "year" => 1976,
            "description" => "In 1976, the Porsche engineers developed a race car based on the 911 Turbo, which was set to dominate the long-distance races of the FIA Group 5 Manufacturers' World Championship: the Porsche 935. The highlight of this development project was the legendary Porsche 935/78 from 1978 – the most powerful 911 of all time. The differences between this powerhouse - named \"Moby Dick\" on account of its wide, long-tailed body - and previous models were a modified frame, aerodynamically enhanced body and right-hand drive, among other things. With the aim of improving the performance and durability of the engine, the Weissach engineers developed a power unit that was destined to leave the competition standing. As previous models had encountered problems with cylinder head maintenance, these were now simply welded together. A compromise also had to be found for the cooling. So water cooled the heads, and air cooled the cylinders. With the newly-introduced four-valve technology, the six-cylinder horizontally opposed engine relied on two intercooled turbochargers. Increasing the displacement to 3,211 cm³ resulted in brute power of 845 hp. Due to its continued dominance, Porsche withdrew from the long-distance World Championship in 1978, meaning that \"Moby Dick\" saw only a handful of outings. At Le Mans, the race car managed an incredible 366 km/h on the Mulsanne Straight, but in the end its drivers, Manfred Schurti and Rolf Stommelen, only finished in eighth place, due to technical problems. The great successes of the Porsche 935/78 were not achieved until 1978 onwards, as part of the private Kremer team.",
            "url_image" => "/public/images/coches/porsche/porsche_935_78_moby_dick.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_917_30",
            "category" => "clsc",
            "power" => 1200,
            "torque" => 1200,
            "weight" => 800,
            "power_to_weight_ratio" => 0.66,
            "top_speed" => 385,
            "year" => 1973,
            "description" => "The Porsche 917/30 Spyder owed its outstanding performance to its twelve-cylinder twin-turbo engine. Unlike the strictly regulated European motorsport series, the CanAm series placed no restrictions on technicians' ingenuity in terms of weight or displacement limits. The team supporting the Porsche race engine designer, Hans Mezger, was therefore able to dig deep into its box of tricks to ensure that the twelve-cylinder turbo engine of the 917/30 steadfastly produced 1,100 to 1,400 hp and a maximum torque of 1,210 Newton metres, thereby guaranteeing exceptional acceleration: from zero to 100 km/h in just 2.4 seconds, a mere 5.4 seconds to the 200 mark and only 11.3 seconds to reach a speed of 300 km/h.
                            And above all, the turbocharger of the Porsche 917/30 Spyder proved to be highly reliable, even on twisting circuits. Porsche driver Mark Donohue beat his McLaren and Chevrolet rivals so comprehensively, that the race car received the equally rare and coveted title of \"unbeatable\". Only the CanAm series rules prevented the fast, reliable Porsche 917/30 Spyder from entering the race again in 1974. But the Porsche 917/30 Spyder was much talked about even after the 1973 race season.
                            In 1975, Mark Donohue set a new world lap record in Talladega, Alabama, in an aerodynamically optimised 917/30. The absolute top speed of the American's fastest lap was 385.85 km/h.
                            Today, the race car can be admired in the Porsche Museum in Zuffenhausen, where it is considered a highlight of the museum's collection. The 917/30 also regularly tours the world as a brand ambassador as part of the \"Rolling Porsche Museum\"",
            "url_image" => "/public/images/coches/porsche/porsche_917_30.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_911_gt3_cup_2017",
            "category" => "rccr",
            "power" => 485,
            "torque" => 500,
            "weight" => 1220,
            "power_to_weight_ratio" => 2.51,
            "top_speed" => 300,
            "year" => 2017,
            "description" => "The rear of the world's most-produced GT racing car now houses a 4-litre, six-cylinder flat engine for even more drive. Thanks to thoroughbred motorsport technology, the compact engine with direct fuel injection delivers peak performance of 357 kW (485 hp).
                            A range of innovative details also improve efficiency in addition to engine performance, ensuring even better durability of the naturally aspirated engine in racing mode and reduced maintenance costs.
                            Porsche manufactures the 911 GT3 Cup on the same production line as the 911 road car in its main plant in Stuttgart-Zuffenhausen. The basic race tuning is performed at the Weissach motorsport centre, where vehicles are also thoroughly tested by a professional race driver prior to delivery to the customer. Some 3031 units of the 911 GT3 Cup have been built in the 996, 997 and 991 model lines since 1998. This makes the brand cup racing car from Stuttgart the most-produced and most-sold GT racing car in the world.
                            The new 911 GT3 Cup will be used in the 2017 race season, initially exclusively in the Porsche Mobil 1 Supercup and in the Porsche Carrera Cup Deutschland, as well as in North America.",
            "url_image" => "/public/images/coches/porsche/porsche_911_gt3_cup_2017.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_911_gt3_r_2016",
            "category" => "rccr",
            "power" => 500,
            "torque" => 460,
            "weight" => 1245,
            "power_to_weight_ratio" => 2.49,
            "top_speed" => 332,
            "year" => 2016,
            "description" => "Based on the 911 GT3 RS production sports car, the 911 GT3 R has been designed as customer sport race car for GT3 series around the world.
                            In developing the more than 368 kW (500 hp) racing nine-eleven, special attention was paid to lightweight design, better aerodynamic efficiency, reducing consumption, improved handling, further optimised safety as well as lowering service and spare parts costs.
                            The lightweight body design of the 911 GT3 RS production sports car featuring intelligent aluminium-steel composite construction has proven to be the ideal basis for the race car and its cutting-edge four-litre flat-six unit is largely identical to the high-performance production engine of the road-legal model.",
            "url_image" => "/public/images/coches/porsche/porsche_911_gt3_r_2016.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_911_rsr_2017",
            "category" => "rccr",
            "power" => 510,
            "torque" => 500,
            "weight" => 1245,
            "power_to_weight_ratio" => 2.49,
            "top_speed" => 270,
            "year" => 2017,
            "description" => "he new 911 RSR makes full use of the breadth of the Le Mans 24 Hours GT regulations, and in addition to systematic lightweight design, features the ultra-modern, flat-six unit positioned in front of the rear axle. The four-litre, extremely light aggregate features direct fuel injection as well as a rigid valve drive and is characterised by outstanding efficiency. The new 911 RSR did its debut at the Daytona 24-hour race in January 2017.
                            Shift paddles on the steering wheel actuate the sequential six-speed gearbox with a magnesium housing, which delivers power to the 31-centimentre-wide rear wheels. The changeover to the new engine generation is now complete. After the 911 GT3 R and the 911 GT3 Cup, the spearhead of Porsche GT racing cars is now also powered by the same cutting-edge six-cylinder boxer engine family.
                            In the 2017 season, the factory is expected to run the new 911 RSR at 19 outings which equates to more than 140 hours of racing. With two factory-entries, Porsche will tackle the FIA World Endurance Championship (WEC) including the 24 Hours of Le Mans as well as the American IMSA Weathertech Championship.
                            With the look of the body wrapping, the 911 RSR is striking out in a new direction: For the first time, the GT racer bears the new factory design that has further developed the clear and dynamic design language of Porsche Motorsport. From a bird’s eye view, a hint of the Porsche emblem silhouette can be seen. The basic colours remain white, red and black.",
            "url_image" => "/public/images/coches/porsche/porsche_911_rsr_2017.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_911_carrera_rsr",
            "category" => "clsc",
            "power" => 330,
            "torque" => 332,
            "weight" => 850,
            "power_to_weight_ratio" => 2.57,
            "top_speed" => 280,
            "year" => 1974,
            "description" => "When choosing the most exciting 911 of all time, the Porsche 911 Carrera RSR would come out on top. Based on the 911 Carrera RS homologation model, the RSR was built in 1972 as a Group 4 race car, whose performance far exceeded that of its predecessors.
                            The front and rear wings were five centimetres wider, and the oil cooler was located under the car's front-end which visually highlighted the power of the 55 911 Carrera RSRs produced.
                            The rear of the vehicle had a six-cylinder engine with increased displacement, whose performance was increased to 330 hp at 8,000 rpm, thanks to dual ignition and larger valves and cylinders.
                            The Porsche works team competed in the 1973 Manufacturers' World Prototype Championship with the 911 Carrera RSR. In the last Targa Florio World Championship race ever held, the works cars achieved an historic overall victory (Müller/van Lennep), which marked the end of the great road race era. More GT victories followed at the 6h of Vallelunga and the 1000 kilometres of Dijon and Spa.
                            Customer teams also entered motorsport events with the 911 Carrera RSR, winning the 24h of Daytona in 1973, as well as the European and German Rally Championships, among others. For Porsche, this heralded the start of a new era of customer racing. ",
            "url_image" => "/public/images/coches/porsche/porsche_911_carrera_rsr.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_718_spyder_rs",
            "category" => "clsc",
            "power" => 150,
            "torque" => 148,
            "weight" => 580,
            "power_to_weight_ratio" => 3.8,
            "top_speed" => 230,
            "year" => 1960,
            "description" => "In 1960, Porsche continued its long list of victories, which began with the legendary Porsche 550 Spyder race car in 1953, with an exceptional vehicle: the Type 718 RS 60. In response to a new FIA race car rule, which demanded they more closely resemble standard production vehicles, the displacement of the RS 60 developed on the basis of the 718 RSK was not only increased to 1,600 cc, it also gained some rather unusual features for a race car, namely a larger windshield, functional hood and luggage compartment located at the rear, behind the four-cam four-cylinder engine which now produced 160 hp. Externally, the new Spyder was recognisable by its deep, rounded front and a backward tapering bulge at the rear.
                            From the outset, the 718 RS 60 became a racing big shot, recording the sports car manufacturer's greatest successes to date, particularly in long-distance events: at its very first outing, the 12h of Sebring, the Gendebien/Herrmann and Holbert/Sheckter driver teams achieved the top two spots. Overall victory at the 44th Targa Florio in 1960 also went to Porsche, when Joakim Bonnier and Hans Hermann crossed the finish line with a lead of more than six minutes over the three-litre Ferrari. Second place in the 1000 kilometres of Nürburgring completed its triumphant run. With the Swiss racing driver, Heini Walter, at the wheel, the 718 RS proved its climbing qualities by consecutively winning the third and fourth European Hill Climb Championships in 1960 and 1961.",
            "url_image" => "/public/images/coches/porsche/porsche_718_spyder_rs.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_718_boxster_s_pdk",
            "category" => "sptc",
            "power" => 350,
            "torque" => 420,
            "weight" => 1385,
            "power_to_weight_ratio" => 3.95,
            "top_speed" => 285,
            "year" => 2016,
            "description" => "20 years after the first Boxster made its debut, Porsche has restructured its mid-engine roadsters in 2016. The designation for the new generation of models is 718 Boxster and 718 Boxster S. This way, Porsche continues the tradition of the four-cylinder flat engines that were used in the Porsche 718 mid-engine sports cars that won numerous races back in the 1950s and 1960s, among them being the legendary Targa Florio and Le Mans.
                            The centrepiece of the new model series is the newly developed four-cylinder flat engine with turbocharging - the first time since the late 1960s that Porsche is again implementing sports cars with this type of engine. The 718 Boxster S develops 257 kW (350 hp) from 2.5 litres of displacement. In the S-model, Porsche also uses a turbocharger with variable turbine geometry. In fact Porsche is now the only manufacturer to offer VTG technology in production cars with petrol-driven engines, both in the 911 Turbo and in the 718 Boxster S.
                            Turbocharging significantly boosts torque. The 2.5-litre engine of the 718 Boxster S attains 420 Newton metres over a speed range from 1,900 rpm to 4,500 rpm, which also leads to a faster sprint performance. The 718 Boxster S – with Porsche Doppelkupplungsgetriebe (PDK) and Sport Chrono Package – sprints from zero to 100 km/h in 4.2 seconds. The top speed is 285 km/h.
                            In its driving dynamics, the new roadster also follows in the tracks of the original 718. The car's completely retuned chassis enhances cornering performance. The electromechanical steering system is configured to be ten per cent more direct. This makes the 718 Boxster even more agile and easier to steer, both on circuit tracks and in everyday traffic, and provides passionate and sporty driving pleasure.",
            "url_image" => "/public/images/coches/porsche/porsche_718_boxster_s_pdk.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_718_boxster_s",
            "category" => "sptc",
            "power" => 350,
            "torque" => 420,
            "weight" => 1355,
            "power_to_weight_ratio" => 3.87,
            "top_speed" => 285,
            "year" => 2016,
            "description" => "20 years after the first Boxster made its debut, Porsche has restructured its mid-engine roadsters in 2016. The designation for the new generation of models is 718 Boxster and 718 Boxster S. This way, Porsche continues the tradition of the four-cylinder flat engines that were used in the Porsche 718 mid-engine sports cars that won numerous races back in the 1950s and 1960s, among them being the legendary Targa Florio and Le Mans.
                            The centrepiece of the new model series is the newly developed four-cylinder flat engine with turbocharging - the first time since the late 1960s that Porsche is again implementing sports cars with this type of engine. The 718 Boxster S develops 257 kW (350 hp) from 2.5 litres of displacement. In the S-model, Porsche also uses a turbocharger with variable turbine geometry. In fact Porsche is now the only manufacturer to offer VTG technology in production cars with petrol-driven engines, both in the 911 Turbo and in the 718 Boxster S.
                            Turbocharging significantly boosts torque. The 2.5-litre engine of the 718 Boxster S attains 420 Newton metres over a speed range from 1,900 rpm to 4,500 rpm, which also leads to a faster sprint performance. The 718 Boxster S – with Porsche Doppelkupplungsgetriebe (PDK) and Sport Chrono Package – sprints from zero to 100 km/h in 4.2 seconds. The top speed is 285 km/h.
                            In its driving dynamics, the new roadster also follows in the tracks of the original 718. The car's completely retuned chassis enhances cornering performance. The electromechanical steering system is configured to be ten per cent more direct. This makes the 718 Boxster even more agile and easier to steer, both on circuit tracks and in everyday traffic, and provides passionate and sporty driving pleasure.",
            "url_image" => "/public/images/coches/porsche/porsche_718_boxster_s.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_718_cayman_s",
            "category" => "sptc",
            "power" => 350,
            "torque" => 420,
            "weight" => 1355,
            "power_to_weight_ratio" => 3.87,
            "top_speed" => 285,
            "year" => 2016,
            "description" => "The third, redeveloped generation of the mid-engine sport coupé 718 Cayman has a more striking, athletic and efficient appearance than its predecessors. And although it features -- for the first time -- four-cylinder flat engines with turbocharging instead of six-cylinder engines as in the previous generations, the performance has actually improved significantly.
                            The 718 Cayman S model delivers 350 hp (257 kW) with a displacement of 2.5 litres. The tremendous torque of the new engine promises driving fun and agility even at low revs. The 2.5-litre engine of the 718 Cayman S features a turbocharger with variable turbine geometry (VTG), a technology hitherto used exclusively in the 911 Turbo. It delivers up to 420 Nm (an extra 50 Nm) to the crankshaft at engine speeds between 1,900 and 4,500 rpm. For the driver this means even better torque in all engine speed ranges. The 718 Cayman with PDK and optional Sport Chrono Package sprints from zero to 100 km/h in 4.7 seconds. The 718 Cayman S with Porsche-Doppelkupplung (PDK) and optional Sport Chrono Package sprints from zero to 100 km/h in 4.2 seconds. The top speed is 285 km/h.
                            In terms of its driving dynamics, the 718 Cayman S follows in the tracks of the classic 718 race cars. Thanks to their outstanding agility, the historic mid-engine sports cars won numerous races in the 1950s and 1960s such as the Targa Florio and Le Mans. Lateral rigidity and wheel tracking have been improved in the completely retuned chassis; springs and stabilisers have been designed to be firmer and the tuning of the shock absorbers has been revised. The steering, which has been configured to be ten per cent more direct, enhances agility and driving fun. The rear wheels, which are one-half of an inch wider, in combination with the redeveloped tyres result in an increased lateral force potential and hence in greater cornering stability.
                            On account of the car’s greater driving performance capabilities, stronger brake systems are now in use with 330-millimetre brake discs in front and 299-millimetre discs at the rear. The 718 Cayman S, on the other hand, uses the four-piston callipers of the 911 Carrera combined with six-millimetre thicker brake discs.",
            "url_image" => "/public/images/coches/porsche/porsche_718_cayman_s.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_991_carrera_s",
            "category" => "sptc",
            "power" => 420,
            "torque" => 500,
            "weight" => 1515,
            "power_to_weight_ratio" => 3.60,
            "top_speed" => 308,
            "year" => 2015,
            "description" => "The 911 has been the world's best-selling sports car for decades. In 2015, the new generation arrived to further extend this lead. With innovative turbo flat engines, an advanced chassis with an even greater spread between performance and comfort it is exceedingly well-equipped for this. Thanks to more than four decades of experience with turbo engines – in both motor racing and production sports cars – the new engines in the 911 Carrera S offer improved performance, even more emotional driving pleasure and higher efficiency.
                            420 hp (309 kW) of power at the rear are waiting to be unleashed and converted into sporty propulsion. The greater power of the 911 Carrera S results from turbochargers with modified compressors, a specific exhaust system and tuned engine management. The new engines are also characterized by significantly increased torque (60 Nm in each case) with maximum torque of 500 Nm delivered constantly from a low 1,700 rpm up to 5,000 rpm in both cases, thus ensuring excellent driving performance. At the same time with a maximum speed of 7,500 rpm the new engine generation clearly exceeds the top speeds of conventional turbo engines – underscored by the typical sonorous Porsche engine sound.
                            The new 911 also boasts impressive performance: The 911 Carrera S with Porsche-Doppelkupplung (PDK) and Sport Chrono Package performs its showcase discipline – the sprint from zero to 100 km/h – in just 3.9 seconds. This means that it is the first 911 in the Carrera family to undercut the magic four second mark. And the top speed has also increased further: the 911 Carrera S now reaches a mind-blowing 308 km/h.
                            All in all, the 911 Carrera S again sets the benchmark for driving dynamics of all-round sports cars, further increasing the spread between everyday comfort and circuit performance.",
            "url_image" => "/public/images/coches/porsche/porsche_991_carrera_s.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_cayenne",
            "category" => "strt",
            "power" => 570,
            "torque" => 800,
            "weight" => 2235,
            "power_to_weight_ratio" => 3.92,
            "top_speed" => 284,
            "year" => 2015,
            "description" => "As the sports car among sport utility vehicles (SUVs), the Cayenne Turbo S offers a lot of room for a lot of driving fun. With high performance and typical Porsche design DNA, it represents the top version of the sporty SUV model series.
                            The Cayenne Turbo S is characterised by a high level of performance readiness, uninterrupted forward thrust and an ability to handle any driving situation. Its 4.8-liter V8 biturbo engine develops 570 hp (419 kW) and 800 Nm (590 ft lb) of torque.
                            A chassis that is tuned for maximum driving dynamics and packs a wide range of control systems also makes the Cayenne Turbo S a genuine top athlete. It accelerates from zero to 100 km/h in 4.1 seconds, with a top speed of 284 km/h, and can turn a lap of the North Loop of the Nürburgring in 7:59.74 minutes. The Cayenne set a new record for SUVs here, and it also proves that every Porsche is a genuine sports car – even in this vehicle segment.
                            The Cayenne Turbo S also underscores its position as a top athlete in its chassis systems. Its standard Porsche Composite Ceramic Brakes (PCCB) include 420 mm front brake discs and ten-piston calipers. The rear brakes have 370 mm discs and four-piston calipers. The active roll stabilization system, Porsche Dynamic Chassis Control (PDCC) proactively reduces side tilt when driving through curves early on. Porsche Torque Vectoring Plus (PTV Plus) increases dynamic handling and stability by making specific brake interventions at the right or left rear wheel – this noticeably improves steering into curves and steering precision. The active hang-on all-wheel drive system Porsche Traction Management (PTM) permanently drives the rear wheels while offering fully variable power distribution to the front wheels.
                            Some advantages of the interplay between all systems: excellent driving dynamics and traction as well as a high level of agility at any speed.",
            "url_image" => "/public/images/coches/porsche/porsche_cayenne.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_macan",
            "category" => "strt",
            "power" => 400,
            "torque" => 550,
            "weight" => 1925,
            "power_to_weight_ratio" => 4.87,
            "top_speed" => 266,
            "year" => 2014,
            "description" => "The distinctly muscular front apron, with the side airblades of the conspicuously large cooling air intakes, is found nowhere else but on the Macan Turbo. It's a visual promise of thrilling performance. Bi-Xenon main headlights with dynamic cornering lights provide optimum illumination of the road – and therefore a high level of safety.
                            The Macan Turbo also stands out thanks to its front spoiler lip, the design of which is inspired by the 918 Spyder. The direction indicators and position lights have been integrated in such a way that they appear to hover inside the side air intakes. Below them are the LEDs of the fog lights. The sideblades are painted in the exterior color of the body. SportDesign sideskirts underline the powerful profile. Another typical feature of the Turbo is the 'Macan turbo' logo on the rear hatch.
                            Impressively, the 3.6-liter twin-turbo V6 engine delivers an enormous power output of 400 hp. The sprint from 0 to 100 kmh is completed in a mere 4.6 seconds. Top speed is 266 kmh. Those aren't simply bare numbers, but a compelling statement in terms of performance – and efficiency.",
            "url_image" => "/public/images/coches/porsche/porsche_macan.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_panamera",
            "category" => "sptc",
            "power" => 550,
            "torque" => 770,
            "weight" => 2070,
            "power_to_weight_ratio" => 3.76,
            "top_speed" => 306,
            "year" => 2016,
            "description" => "The new Porsche Panamera reconciles two contrasting characteristics more than ever before: the performance of a genuine sports car and the comfort of a luxury saloon. It is a Gran Turismo that has been rethought and realigned. The second generation of the Panamera is advancing to become a performance icon of the luxury class.
                            Its 4.0-litre V8 engine develops between 5,750 and 6,000 rpm and reaches a peak power of 404 kW (550 hp). At just above 3,000 rpm the engine already breaks through the 250-kW (340 hp) threshold – pure power from a mid-range of engine speeds. Its maximum torque of 770 Nm is available between 1,960 and 4,500 rpm – pure force from very low revs. The eight-cylinder accelerates the Panamera Turbo with Sport Chrono Package from a standstill to 100 km/h in 3.6 seconds up to a top speed of 306 km/h.
                            Porsche is also taking the steering precision and handling of sports cars into the class of Gran Turismo cars with rear axle steering – which is also new and has been adapted from the 918 Spyder and 911 Turbo.
                            That way, the Panamera Turbo delivers the performance of a genuine sports car. On the Nürburging-Nordschleife, it set a new world record for a four-door luxury sedan with 7 minutes 38 seconds.",
            "url_image" => "/public/images/coches/porsche/porsche_panamera.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_918_spyder",
            "category" => "sptc",
            "power" => 887,
            "torque" => 1275,
            "weight" => 1640,
            "power_to_weight_ratio" => 0.84,
            "top_speed" => 345,
            "year" => 2014,
            "description" => "The 918 Spyder embodies the essence of the Porsche idea: it combines pedigree motor racing technology with excellent everyday utility, and maximum performance with minimum consumption.
                            The 918 Spyder reveals its close links to motorsport in a variety of ways. It has been designed, developed and produced by Porsche engineers who build race cars, in cooperation with series production specialists. A great deal of insight gained from the development of Porsche race cars for the 24 hours race in Le Mans in 2014 was thus integrated into the 918 Spyder – and vice versa. Also, many parts of the super sports car come from manufacturers who have a proven record as suppliers for motorsport vehicles.
                            The main source of propulsion is the 4.6-litre, eight cylinder engine that produces 608 hp (447 kW) of power. The engine is derived directly from the power unit of the successful RS Spyder, which explains why it can deliver engine speeds of up to 9,150 rpm. The V8 engine is coupled to the hybrid module, which comprises a 115 kW electric motor and a decoupler that serves as the connection with the combustion engine. An additional electric motor with 95 kW drives the front axle. Because of its parallel hybrid configuration, the 918 Spyder can be powered at the rear axle either individually by the combustion engine or electric motors or via both drives jointly, thus giving it a total power of 887 hp (652 kW). The sprint from 0 to 100 km/h is performed within 2.6 seconds, and the top speed is reached at 345 km/h.
                            The car has an unladen weight of approximately 1,640 kg, an excellent low weight for a hybrid vehicle of this performance class. The drivetrain components and all components weighing over 50 kg are located as low and as centrally as possible within the vehicle. This results in a slightly rear end biased axle load distribution of 57 per cent on the rear axle and 43 per cent on the front axle, combined with an extremely low centre of gravity at approximately the height of the wheel hubs, which is ideal for driving dynamics.
                            All of this serves to give the 918 Spyder a superior performance on the racetrack. As the first vehicle to boast global road homologation, the 918 Spyder has conquered the 20.6-kilometre lap around the Nürburgring Nordschleife in less than seven minutes. Achieving a time of exactly six minutes and 57 seconds, the super sportscar shaved an incredible 14 seconds off the previous record.
                            The 918 Spyder continues a long tradition of super sports cars at Porsche: as technology platforms, as the driving force behind both car emotion and car evolution and as the ultimate sports cars of their decades.",
            "url_image" => "/public/images/coches/porsche/porsche_918_spyder.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_cayman_gt4_clubsport",
            "category" => "sptc",
            "power" => 385,
            "torque" => 420,
            "weight" => 1300,
            "power_to_weight_ratio" => 3.37,
            "top_speed" => 295,
            "year" => 2015,
            "description" => "Using the lightweight mid-engine sports car Cayman GT4 as its basis, Porsche Motorsport has developed a racing version solely for the track. Geared for performance, just like its drivers.
                            The Cayman GT4 Clubsport is powered by a 3.8 liter mid-mounted flat-six engine, with an output of 385 hp (283 kW) and a maximum torque of 420 Nm. It reaches a top speed of 295 km/h.
                            The racing version features a Porsche double clutch transmission with shift paddles on the steering wheel and a mechanical rear-axle locking differential. The lightweight suspension strut front axle system is taken from its big 911 GT3 Cup brother, which is campaigned in Porsche's 20 one-make championships around the world. The impressive racing brake system is fitted with steel brake discs all round measuring 380-millimeters in diameter.
                            Tipping the scales at just 2866 lbs. (1,300 kilograms), the Cayman GT4 Clubsport, delivered from the factory with a welded-in safety cage, a racing bucket seat as well as a six-point harness, is truly lightweight and provides the car with a unique agility and driving dynamics on the track.",
            "url_image" => "/public/images/coches/porsche/porsche_cayman_gt4_clubsport.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_911_gt3_rs",
            "category" => "sptc",
            "power" => 500,
            "torque" => 460,
            "weight" => 1420,
            "power_to_weight_ratio" => 2.84,
            "top_speed" => 310,
            "year" => 2015,
            "description" => "With the 911 GT3 RS, Porsche is once again breaking down the barrier between sports cars and race cars. It is equipped with the maximum degree of motorsport technology that is currently possible in a street-legal 911. With a lap time of seven minutes and 20 seconds, the 911 GT3 RS even beats the historic record value of the Carrera GT super sports car of just under seven minutes and 29 seconds on the North Loop of the Nürburgring.
                            Motorsport expertise is the reason for this superior performance. The 911 GT3 RS is powered by a four-litre six-cylinder engine with 500 hp (368 kW) of power and 460 Newton metres of torque, combined with a specially developed PDK transmission. The engine, which has the largest displacement and most power of any naturally aspirated engine with direct fuel injection in the 911 family, accelerates the high-performance sports car from zero to 100 km/h in 3.3 seconds and to 200 km/h in 10.9 seconds.
                            The 911 GT3 RS is a masterpiece of intelligent lightweight design. For the first time, the roof is made of magnesium; carbon fibre is used for the engine and luggage compartment lids, and other lightweight components are made of alternative materials. In addition, the lightweight roof lowers the sports car's centre of gravity which improves its excellent lateral dynamics. The body comes from the 911 Turbo, and it signifies its status as nearly a race car driving machine with its RS-specific aerodynamic add-on parts. The front spoiler lip, which extends nearly to the road, and the large rear wing reinforce its dominant look.
                            Another characteristic is the unique front wheel arch air vents that extend into the upper section of the wings – just as in purebred motorsport cars. They increase downforce at the front axle.
                            The chassis of the 911 GT3 RS has been tuned for maximum driving dynamics and precision. Rear-axle steering and Porsche Torque Vectoring Plus with fully variable rear axle differential lock increase agility and dynamics, and the wider front and rear track widths enable a superior roll stability. In addition, the 911 GT3 RS comes with the widest tyres of any 911 model as standard. The results: even more agile turn-in characteristics and even higher cornering speeds. ",
            "url_image" => "/public/images/coches/porsche/porsche_911_gt3_rs.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_911_r",
            "category" => "sptc",
            "power" => 500,
            "torque" => 460,
            "weight" => 1370,
            "power_to_weight_ratio" => 2.74,
            "top_speed" => 323,
            "year" => 2016,
            "description" => "The chassis of the new 911 R is based on the 911 GT3 and provides extremely sporty day-to-day driving. The tuning is extremely direct and the vehicle lies as low as the 911 GT3. All the chassis control systems have been adapted to the manual transmission.
                            At low speeds, the specially adapted system on the new 911 R steers the rear wheels in the opposite direction to the front wheels. This increases agility, particularly in tight bends. During high-speed manoeuvres, the system steers the rear wheels in the same direction as that of the front wheels. This enhances stability, particularly at high driving speeds.
                            The large-volume flat-six naturally aspirated engine sits right at the back of the new 911 R. Its high-performance unit delivers an impressive maximum engine speed of 8,500 rpm. With its 4-litre displacement it delivers 368 kW (500 hp), corresponding to an output of 92 kW 125 hp) per litre. The maximum torque is 460 Nm at 6,250 rpm.
                            With the very short shift travel of the 6-speed GT sports manual transmission, the 911 R accelerates from 0 to 100 kmh in only 3.8 seconds – provided you're nimble with the shift lever. Top speed is reached in 6th gear: at 323 kmh.
                            Power development of this kind is only possible with a high power-to-weight ratio. With the new 911 R this is a remarkable 2.7 kg/hp.",
            "url_image" => "/public/images/coches/porsche/porsche_911_r.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_991_turbo_s",
            "category" => "sptc",
            "power" => 580,
            "torque" => 750,
            "weight" => 1600,
            "power_to_weight_ratio" => 2.75,
            "top_speed" => 330,
            "year" => 2015,
            "description" => "Porsche has always promised performance. The 911 Turbo S keeps that promise in an exceptionally impressive way: with a 3.8-litre, twinturbo six-cylinder engine that has even larger turbochargers than the 911 Turbo. Developing 427 kW (580 hp), the maximum torque is 750 Nm. You accelerate from 0 to 100 kmh in a breathtaking 2.9 seconds. And reach 200 kmh in 9.9 seconds. Top speed: 330 kmh.
                            From a technical point of view, the 911 Turbo S is just as well equipped as the 911 Turbo. In terms of performance, however, the specification is even more elaborate.
                            Porsche Dynamic Chassis Control (PDCC) provides active roll stabilisation and enhances the neutral handling further. The Porsche Ceramic Composite Brake (PCCB) improves braking performance. New 20-inch 911 Turbo S wheels have a central locking device – technology derived directly from motor racing.
                            The design of the 911 Turbo S is accentuated in a number of ways: on the outside, tailpipe trim in black chrome and SportDesign exterior mirrors with their V-shaped base",
            "url_image" => "/public/images/coches/porsche/porsche_991_turbo_s.png",
            "brand_id" => 17
        ],
        [
            "name" => "ks_porsche_cayman_gt4_std",
            "category" => "sptc",
            "power" => 385,
            "torque" => 420,
            "weight" => 1340,
            "power_to_weight_ratio" => 3.48,
            "top_speed" => 295,
            "year" => 2016,
            "description" => "The Cayman GT4 marks the first time Porsche has introduced a GT sports car based on the Cayman model range which has components of the 911 GT3. A lap time of 7 minutes and 40 seconds on the North Loop of the Nürburgring positions the Cayman GT4 as the new benchmark at the top of its market segment.
                            The engine, chassis, brakes and aerodynamic design of the Cayman GT4 are configured for maximum driving dynamics. It is powered by a 3.8-litre flat-six engine with 385 hp (283 kW), which is derived from the 911 Carrera S engine. Its power is always transmitted by a six-speed manual gearbox with dynamic gearbox mounts. The Cayman GT4 accelerates from zero to 100 km/h in 4.4 seconds; its top speed is 295 km/h. The chassis – which features a 30 mm lower body position and a generously sized brake system – consists nearly entirely of components from the 911 GT3.
                            As a mid-engine sports car and a prime example of driving dynamics in its class, it follows the conceptual tradition of such cars as the 904 Carrera GTS, 911 GT1, Carrera GT and 918 Spyder. Hence, the Cayman GT4 makes a clear statement that Porsche continues to promote radical two-door sports cars in the future – sports cars that are developed at the Motorsport department in Weissach.",
            "url_image" => "/public/images/coches/porsche/porsche_cayman_gt4_std.png",
            "brand_id" => 17
        ],

        [
            "name" => "ks_praga_r1",
            "category" => "race",
            "power" => 210,
            "torque" => 220,
            "weight" => 585,
            "power_to_weight_ratio" => 2.78,
            "top_speed" => 265,
            "year" => 2012,
            "description" => "The Praga R1 is a full-carbon track car designed around a composite monocoque, inspired by endurance prototypes.
                            Teardrop-shaped R1 can generate downforce of up to 1,5x times its weight through its sophisticated aerodynamics. Enhanced traction and the overall capability of the car to go fast around the corners is what differentiate R1 from its competitors. The car can generate up to 3G of lateral force in corners.
                            Lightweight construction and suspension setup is optimised to enhance traction while minimising tyre and brake wear.
                            Engine rebuild time of Praga R1 is 50 racing hours.
                            The use of high quality parts from proven suppliers helps to reduce service costs.",
            "url_image" => "/public/images/coches/praga/praga_r1.png",
            "brand_id" => 18
        ],

        [
            "name" => "ruf_yellowbird",
            "category" => "street",
            "power" => 469,
            "torque" => 553,
            "weight" => 1147,
            "power_to_weight_ratio" => 2.44,
            "top_speed" => 342,
            "year" => 1987,
            "description" => "Introduced for the 1987 model year and based on the Porsche 911, the CTR featured an enlarged and highly tuned version of Porsche's 3.2 litre flat-six cylinder engine, lightened body panels, an integrated roll cage (adding chassis stiffness in addition to occupant safety), upgraded suspension and braking systems, a custom-designed transmission, and several unique trim pieces such as polyurethane bumpers, and the use of the fender-mounted oil filter (a Porsche feature for the 1972 MY only) necessitated by relocating the oil tank forward to clear the intercooler on that side.
                            Much attention was given to aerodynamic considerations, with the body being de-guttered seam welded and the use of filler panels for the door pillars and 935-style mirrors. Prototype models had NACA-style intercooler intake ducts over the rear fenders (later dropped, as it was discovered that air was pulled out, rather than in, at speed due to a low-pressure area), while later models had additional slots in the rear bumper corners for the air to exit.
                            Developing 469 hp (350 kW) and 408 lb·ft (553 N·m) of torque and weighing in it at only 2,530 pounds (1,147 kg), the CTR provided stellar performance, with a 0-60 mph time of around 4 seconds and a top speed in excess of 200 miles per hour (320 km/h). Although a small group of vehicles such as the Ferrari F40 and Porsche 959 were faster to 60 miles per hour (97 km/h), the Yellowbird could outperform all competition when it came to top speed, topping out at 211 miles per hour (340 km/h), a top speed that made it the fastest sports car in the world at the time of its release.
                            The car received its nickname, Yellowbird, during testing by Road & Track magazine, whose staffers noted the contrast created by its yellow paintwork against the overcast skies on the day of their photo shoot.",
            "url_image" => "/public/images/coches/ruf/ruf_yellowbird.png",
            "brand_id" => 19
        ],
        [
            "name" => "ks_ruf_rt12r",
            "category" => "street",
            "power" => 730,
            "torque" => 940,
            "weight" => 1495,
            "power_to_weight_ratio" => 2.00,
            "top_speed" => 370,
            "year" => 2011,
            "description" => "RUF proudly presented the Rt 12 R at the 2011 Geneva International Motorshow. The 3.8 litre bi-turbo boxer engine delivers 537 kW (730 bhp) of power with a maximum torque figure of 940 Nm.
                            The lightweight R using design details originating from motor racing is an optimal choice of vehicle for the race track. The suspension is also adjustable.",
            "url_image" => "/public/images/coches/ruf/ruf_rt12r.png",
            "brand_id" => 19
        ],
        [
            "name" => "ks_ruf_rt12r_awd",
            "category" => "street",
            "power" => 730,
            "torque" => 940,
            "weight" => 1495,
            "power_to_weight_ratio" => 2.00,
            "top_speed" => 370,
            "year" => 2011,
            "description" => "RUF proudly presented the Rt 12 R at the 2011 Geneva International Motorshow. The 3.8 litre bi-turbo boxer engine delivers 537 kW (730 bhp) of power with a maximum torque figure of 940 Nm. A six speed gearbox deals with the power transmission and the 4WD system ensures optimal traction under all driving conditions. The lightweight R using design details originating from motor racing is an optimal choice of vehicle for the race track. The suspension is also adjustable.",
            "url_image" => "/public/images/coches/ruf/ruf_rt12r_awd.png",
            "brand_id" => 19
        ],

        [
            "name" => "ks_glickenhaus_scg003",
            "category" => "race",
            "power" => 530,
            "torque" => 700,
            "weight" => 1350,
            "power_to_weight_ratio" => 2.54,
            "top_speed" => 320,
            "year" => 2015,
            "description" => "Scuderia Cameron Glickenhaus has developed SCG003C aiming to compete in the SP-X Class
                            at the 2015 24-Hours at the Nürburgring.
                            The SCG003C Engineering Team has developed a chassis design by adopting modern technologies while keeping a glance to the past: the car's base structure holds a carbon skeleton where ribs are sustaining the body panels that are a well-known design by Italian Carrozzieri. This design allows the engineering of very light body panels and creates at the same time a main reference structure during the car assembly and maintenance.
                            Front and rear suspensions are double wishbone with pushrod and adjustable anti roll-bar. The suspension layout has been developed based on the experience gained with the P4/5Competizione on the Nordschleife.

                            All the targets were achieved by Scuderia Cameron Glickenhaus' SCG003C during the Qualifying
                            Race that took place at the Nürburgring on 12th April, 2015.

                            Both registered cars were qualified for the 24 Hours \"Top 30\", while all SCG drivers were qualified to the race that will take place on 16th and 17th May, 2015
                            Noise issues were finally solved while the overall car reliability was proved, despite an electrical fault that prevent \"Macchinadue\" to compete in the race.
                            At the start of the race, Manuel Lauck brought Macchinauno to 2nd place and was able to keep this position until the car was black flagged as too loud. The noise issue was definitively solved at the pit box, by the fitting of new mufflers
                            Macchinauno then advanced from 61th to 13th position and won the SP-X Class.
                            Lap time during the race was always at the level of top cars, confirming the car's performance and endurance potential.",
            "url_image" => "/public/images/coches/glickenhaus/glickenhaus_scg003.png",
            "brand_id" => 20
        ],
        [
            "name" => "p4-5_2011",
            "category" => "race",
            "power" => 450,
            "torque" => 500,
            "weight" => 1230,
            "power_to_weight_ratio" => 2.62,
            "top_speed" => 260,
            "year" => 2011,
            "description" => "In 2005 the American investment professional and car collector Jim Glickenhaus asked Andrea Pininfarina to build a one-off sports car with a retro design as a tribute to great endurance cars of the past, particularly to Ferrari P series. Program Manager for this fascinating challenge was Ing. Paolo Garella (at that time Responsible for Special Projects at Pininfarina). Ferrari P4/5 by Pininfarina thus came to fruition. Following the presentation of the car, Glickenhaus proposed Paolo Garella, who in the meanwhile had become an independent consultant, to produce a second prototype intended for races. With the design and manufacturing contribution of an important name in the racing world, L.M. di Gianetti, the P4/5 Competizione Project was engineered under Paolo Garella's supervision and in 2011, the car, developed from a Ferrari 430 Scuderia and a Ferrari 430 GT2, arrived on the scene showing a vintage automotive spirit combining passion and competence, craftsmanship and industrial culture. Since the very first competitions, the whole P4/5 Competizione team, managed by Scuderia Cameron-Glickenhaus, has been showing a spirit returning authenticity to motor racing, focusing the attention both on the sports challenge itself, but also on sharing, through social networks, this unique experience with fans all over the world.
                            2011 Nürburgring 24 Hours
                            Prior to the 24 Hours, the P4/5C contested two earlier six-hour races on the Nürburgring track to give former F1 greats Mika Salo and Nicola Larini, British Touring Car champion Fabrizio Giovanardi, and seasoned Nürburgring veteran Luca Cappellari a taste of what was to come. During the 24 Hours, the team showed to be determined, one way or another, to finish. When the checkered flag fell in bright sun at 4 p.m. Sunday, the P4/5C had covered 133 laps, finishing to 39th, nearly where it had started. The P4/5C, for its part, finished second in its class, the experimental E1-XP2 category. The Nürburgring organizers awarded the P4/5C a Constructor's Trophy for entering a new and significant car. Soon after the race, the P4/5 Competizione took a well-earned vacation by a one-month display in Turin's National Automobile Museum.",
            "url_image" => "/public/images/coches/glickenhaus/p4-5_2011.png",
            "brand_id" => 20
        ],

        [
            "name" => "shelby_cobra_427sc",
            "category" => "race",
            "power" => 500,
            "torque" => 626,
            "weight" => 1110,
            "power_to_weight_ratio" => 2.14,
            "top_speed" => 265,
            "year" => 1966,
            "description" => "Of all the Cobra variants, the 427 Semi/Competition or S/C is the most desirable series. Built from Shelby's competition production line, these were purposeful race-cars that were prepared at the last minute for the road.
                            After considerable racing success, Ford provided the 427 FE engine for the Cobra. With assistance from Ford and AC Cars, the team at Shelby American modified the existing AC chassis design to accommodate the Big Block engine, fitted with one great huge Holley 780 CFM as used on NASCAR machinery.
                            The engine produced somewhere between 490 and 500bhp, allowing the car to accelerate to 100mph and decelerate back to zero in 14 seconds.",
            "url_image" => "/public/images/coches/shelby/shelby_cobra_427sc.png",
            "brand_id" => 21
        ],

        [
            "name" => "tatuusfa1",
            "category" => "race",
            "power" => 198,
            "torque" => 230,
            "weight" => 455,
            "power_to_weight_ratio" => 2.30,
            "top_speed" => 230,
            "year" => 2010,
            "description" => "CSAI, with Abarth, Tatuus and Fiat Powertrain Technologies, has developed an innovative new single-seater with the aim of providing up and coming young drivers with the best possible ratio of Safety/Performance/Quality/Price.
                            safety is the prime factor, in line with FIA Formula 3 Regulations
                            a level of performance which will enable the best drivers to shine
                            a high build quality
                            a successful marriage of innovative design and optimised aerodynamics
                            optimization of operating costs",
            "url_image" => "/public/images/coches/tatuus/tatuusfa1.png",
            "brand_id" => 22
        ],

        [
            "name" => "ks_toyota_ts040",
            "category" => "race",
            "power" => 1000,
            "torque" => 626,
            "weight" => 870,
            "power_to_weight_ratio" => 1.15,
            "top_speed" => 320,
            "year" => 2014,
            "description" => "Thanks to the 480hp exerted by electric motors on the four-wheel drive, in addition to the 520hp produced by its 3.7-liter petrol engine, the TS040 HYBRID expresses a maximum power of 1.000hp and represents the ultimate expression of Hybrid technology applied to the world racing.
                            The transition to a hybrid four-wheel drive Toyota sees the return to a philosophy that since 2007 has been part of the development of hybrid technology applied to racing, when the Supra HV-R-wheel drive was the first hybrid to win an endurance competition, the 24 Hours of Tokachi.
                            The new unit TOYOTA HYBRID Racing has been specifically developed according to the new technical regulations specified by the WEC, particularly frugal. It requires a 25% reduction in fuel consumption compared to 2013, with savings achieved through interventions on the engine, aerodynamic efficiency and driving dynamics.",
            "url_image" => "/public/images/coches/toyota/toyota_ts040.png",
            "brand_id" => 23
        ],
        [
            "name" => "ks_toyota_supra_mkiv_tuned",
            "category" => "street",
            "power" => 690,
            "torque" => 756,
            "weight" => 1505,
            "power_to_weight_ratio" => 2018,
            "top_speed" => 320,
            "year" => 1993,
            "description" => "Toyota Supra was one of the finest Japanese supercar: through tuning it easily reaches 600hp and can go over 1000hp.
                            It's revered as one of the most highly tuneable cars on the planet. The time attack version has much better aerodynamics and plenty of setup options. A much bigger single turbine and tuned engine for higher power make this a very capable car, if you can handle the turbo lag.",
            "url_image" => "/public/images/coches/toyota/toyota_supra_mkiv_tuned.png",
            "brand_id" => 23
        ],
        [
            "name" => "ks_toyota_celica_st185",
            "category" => "race",
            "power" => 295,
            "torque" => 459,
            "weight" => 1045,
            "power_to_weight_ratio" => 3.54,
            "top_speed" => 230,
            "year" => 1989,
            "description" => "The Toyota Celica ST185 is Toyota's most successful rally car, as it won the WRC Driver's Championship in 1992, and the WRC Manufacturer's and Driver's Championships in 1993 and 1994.
                            In order to meet the Group A competition's homologation requirements, 5,000 GT-Four RC production versions of the Celica were manufactured, starting from September 1989.
                            This car made its debut on the Monte Carlo Rally, the opening round of the 1992 World Rally Championship series, but it was not successful until half of the season.",
            "url_image" => "/public/images/coches/toyota/toyota_celica_st185.png",
            "brand_id" => 23
        ],
        [
            "name" => "ks_toyota_supra_mkiv",
            "category" => "street",
            "power" => 280,
            "torque" => 458,
            "weight" => 1510,
            "power_to_weight_ratio" => 5.39,
            "top_speed" => 249,
            "year" => 1993,
            "description" => "In 1979 the Supra's 2.6-liter inline-6 engine was the first Toyota production engine to be equipped with electronic fuel injection. The Supra was available with both a manual and automatic transmission, and came standard with 4-wheel-independent suspension and 4-wheel disc brakes.
                            With the exception of minor styling updates, the next major change occurred in 1993, when the Supra entered the realm of &quot;supercars.&quot; Available in both Turbo and non-Turbo guise, the new Supra was a radical departure from Supras of old. Performance was now the name of the game, and many weight saving measures were employed -- Toyota went so far as to equip the vehicle with hollow carpet fibers and make the rear spoiler (optional on Turbo models) hollow.
                            The Turbo model was hailed by all major magazines as a true worldbeater. With 320hp, the vehicle was capable of 0-100 km/h sprints in under 5 seconds, and carried on to an electronically-limited top speed of 250 km/h. This was the highest level of performance and the strongest commitment to performance Toyota had ever placed in one vehicle.",
            "url_image" => "/public/images/coches/toyota/toyota_supra_mkiv.png",
            "brand_id" => 23
        ],
        [
            "name" => "ks_toyota_supra_mkiv_drift",
            "category" => "street",
            "power" => 624,
            "torque" => 756,
            "weight" => 1505,
            "power_to_weight_ratio" => 2.41,
            "top_speed" => 250,
            "year" => 1993,
            "description" => "Toyota Supra was one of the finest Japanese supercar: through tuning it easily reaches 600hp and can go over 1000hp.
                            It's revered as one of the most highly tuneable cars on the planet. The drift version has a smaller turbine that sacrifices a bit of high end power for a better turbo response with more torque in the mid range revs. Extra modifications on the suspension geometry for more steering lock and setup options are available.",
            "url_image" => "/public/images/coches/toyota/toyota_supra_mkiv_drift.png",
            "brand_id" => 23
        ],
        [
            "name" => "ks_toyota_gt86",
            "category" => "street",
            "power" => 200,
            "torque" => 205,
            "weight" => 1250,
            "power_to_weight_ratio" => 6.25,
            "top_speed" => 233,
            "year" => 2015,
            "description" => "The 86 is a series of grand tourer sports coupés jointly developed by Toyota and Subaru and solely manufactured by the latter.
                            The 86's engine is a naturally aspirated four-cylinder engine that uses Subaru's horizontally opposed boxer engine layout. Toyota added their D-4S injection system which uses both direct and port injection. The engine has a 12.5:1 compression ratio and a bore and stroke of 86 mm that results in 200 bhp at 7,000 rpm and 205Nm of torque at 6,000 rpm.
                            The 86 was designed around a front-mounted boxer engine, rear-wheel drive configuration, inspired by the Toyota AE86. The flat architecture of the boxer engine allows it to be mounted low, dropping the center of gravity down, resulting in sporty handling characteristics. The exterior design of the 86 was inspired by the Toyota 2000GT's extremely low-to-the-ground profile and long, sleek hood.
                            It is sold worldwide under three different brands with respective model names:
                            - Toyota 86 in Asia, South Africa, South America and Australia; GT86 in Europe; both of the preceding names in New Zealand; FT86 in Jamaica;
                            - Subaru BRZ worldwide;
                            - Scion FR-S in the US and Canada.",
            "url_image" => "/public/images/coches/toyota/toyota_gt86.png",
            "brand_id" => 23
        ],
        [
            "name" => "ks_toyota_ae86_tuned",
            "category" => "street",
            "power" => 200,
            "torque" => 206,
            "weight" => 900,
            "power_to_weight_ratio" => 4.50,
            "top_speed" => 193,
            "year" => 1983,
            "description" => "The AE86 generation of the Toyota Sprinter Trueno is a small, lightweight coupe or hatchback introduced by Toyota in 1983.
                            In classic Toyota code, the 'A' represents the engine that came in the car (4A series), 'E' represents the Corolla, '8' represents the fifth generation (E80 series) and '6' represents the variation within this generation.
                            Even after production of the car was discontinued in 1987, many privateer teams still raced the AE86, and it is still a popular choice for rallying and club races today.
                            Part of the continued appeal of the AE86 for motorsports is its rear-drive configuration, a feature not available in most newer lightweight coupes.",
            "url_image" => "/public/images/coches/toyota/toyota_ae86_tuned.png",
            "brand_id" => 23
        ],
        [
            "name" => "ks_toyota_ae86_drift",
            "category" => "street",
            "power" => 185,
            "torque" => 206,
            "weight" => 920,
            "power_to_weight_ratio" => 4.97,
            "top_speed" => 220,
            "year" => 1983,
            "description" => "The overall balance of AE86 and its rear wheel drive configuration made it really popular between street racers and drifters.
                            This is true all around the world, above all in nations where rallying is considered one of the most popular forms of motorsport.",
            "url_image" => "/public/images/coches/toyota/toyota_ae86_drift.png",
            "brand_id" => 23
        ],
        [
            "name" => "ks_toyota_ae86",
            "category" => "street",
            "power" => 122,
            "torque" => 142,
            "weight" => 925,
            "power_to_weight_ratio" => 7.58,
            "top_speed" => 196,
            "year" => 1983,
            "description" => "The AE86 generation of the Toyota Sprinter Trueno is a small, lightweight coupe or hatchback introduced by Toyota in 1983.
                            In classic Toyota code, the 'A' represents the engine that came in the car (4A series), 'E' represents the Corolla, '8' represents the fifth generation (E80 series) and '6' represents the variation within this generation.
                            Even after production of the car was discontinued in 1987, many privateer teams still raced the AE86, and it is still a popular choice for rallying and club races today.
                            Part of the continued appeal of the AE86 for motorsports is its rear-drive configuration, a feature not available in most newer lightweight coupes.",
            "url_image" => "/public/images/coches/toyota/toyota_ae86.png",
            "brand_id" => 23
        ]
    ];

}
