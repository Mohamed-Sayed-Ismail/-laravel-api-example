<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  
        $locations = [
            // Brussels - Fun activities
            [
                'name' => 'Mini-Europe',
                'description' => 'Park with miniature versions of European monuments',
                'type' => 'fun',
                'category' => 'theme_park',
                'latitude' => 50.8944,
                'longitude' => 4.3417,
                'address' => 'Bruparck',
                'city' => 'Brussels',
                'postal_code' => '1020',
                'phone' => '+32 2 474 83 83',
                'website' => 'https://www.minieurope.com'
            ],
            [
                'name' => 'Atomium',
                'description' => 'Iconic building and museum with city views',
                'type' => 'fun',
                'category' => 'museum',
                'latitude' => 50.8949,
                'longitude' => 4.3415,
                'address' => 'Square de l\'Atomium',
                'city' => 'Brussels',
                'postal_code' => '1020',
                'phone' => '+32 2 475 47 75',
                'website' => 'https://atomium.be'
            ],

            // Brussels - Theaters
            [
                'name' => 'La Monnaie',
                'description' => 'Brussels premier opera house',
                'type' => 'theater',
                'category' => 'opera',
                'latitude' => 50.8492,
                'longitude' => 4.3550,
                'address' => 'Place de la Monnaie',
                'city' => 'Brussels',
                'postal_code' => '1000',
                'phone' => '+32 2 229 12 11',
                'website' => 'https://www.lamonnaie.be'
            ],
            [
                'name' => 'Théâtre Royal des Galeries',
                'description' => 'Historic theater in Galeries Royales Saint-Hubert',
                'type' => 'theater',
                'category' => 'drama',
                'latitude' => 50.8486,
                'longitude' => 4.3564,
                'address' => 'Galerie du Roi 32',
                'city' => 'Brussels',
                'postal_code' => '1000',
                'website' => 'https://www.trg.be'
            ],

            // Brussels - Music venues
            [
                'name' => 'Ancienne Belgique',
                'description' => 'Popular concert hall for international artists',
                'type' => 'music',
                'category' => 'concert_hall',
                'latitude' => 50.8475,
                'longitude' => 4.3528,
                'address' => 'Boulevard Anspach 110',
                'city' => 'Brussels',
                'postal_code' => '1000',
                'website' => 'https://www.abconcerts.be'
            ],
            [
                'name' => 'Forest National',
                'description' => 'Large concert and events venue',
                'type' => 'music',
                'category' => 'arena',
                'latitude' => 50.8022,
                'longitude' => 4.3178,
                'address' => 'Avenue du Globe 36',
                'city' => 'Brussels',
                'postal_code' => '1190',
                'website' => 'https://www.forest-national.be'
            ],

            // Brussels - Medical
            [
                'name' => 'Erasmus Hospital',
                'description' => 'University hospital with emergency services',
                'type' => 'medic',
                'category' => 'hospital',
                'latitude' => 50.8150,
                'longitude' => 4.2775,
                'address' => 'Route de Lennik 808',
                'city' => 'Brussels',
                'postal_code' => '1070',
                'phone' => '+32 2 555 31 11',
                'website' => 'https://www.erasme.ulb.ac.be'
            ],
            [
                'name' => 'CHU Brugmann',
                'description' => 'Public hospital with 24/7 emergency',
                'type' => 'medic',
                'category' => 'hospital',
                'latitude' => 50.8800,
                'longitude' => 4.3314,
                'address' => 'Place A. Van Gehuchten 4',
                'city' => 'Brussels',
                'postal_code' => '1020',
                'phone' => '+32 2 477 21 11',
                'website' => 'https://www.chu-brugmann.be'
            ],

            // Antwerp - Fun
            [
                'name' => 'Zoo Antwerpen',
                'description' => 'One of the oldest zoos in the world',
                'type' => 'fun',
                'category' => 'zoo',
                'latitude' => 51.2167,
                'longitude' => 4.4247,
                'address' => 'Koningin Astridplein 20-26',
                'city' => 'Antwerp',
                'postal_code' => '2018',
                'website' => 'https://www.zooantwerpen.be'
            ],

            // Ghent - Music
            [
                'name' => 'Vooruit',
                'description' => 'Cultural center and concert venue',
                'type' => 'music',
                'category' => 'cultural_center',
                'latitude' => 51.0475,
                'longitude' => 3.7244,
                'address' => 'Sint-Pietersnieuwstraat 23',
                'city' => 'Ghent',
                'postal_code' => '9000',
                'website' => 'https://www.vooruit.be'
            ],

            // Leuven - Medical
            [
                'name' => 'UZ Leuven',
                'description' => 'University hospital and research center',
                'type' => 'medic',
                'category' => 'hospital',
                'latitude' => 50.8806,
                'longitude' => 4.6728,
                'address' => 'Herestraat 49',
                'city' => 'Leuven',
                'postal_code' => '3000',
                'phone' => '+32 16 33 22 11',
                'website' => 'https://www.uzleuven.be'
            ],

            // Additional locations across Belgium
            [
                'name' => 'Walibi Belgium',
                'description' => 'Amusement park with roller coasters',
                'type' => 'fun',
                'category' => 'amusement_park',
                'latitude' => 50.7014,
                'longitude' => 4.5903,
                'address' => 'Boulevard de l\'Europe 100',
                'city' => 'Wavre',
                'postal_code' => '1300',
                'website' => 'https://www.walibi.be'
            ],
            [
                'name' => 'Plopsaland De Panne',
                'description' => 'Theme park based on TV characters',
                'type' => 'fun',
                'category' => 'theme_park',
                'latitude' => 51.0750,
                'longitude' => 2.6075,
                'address' => 'De Pannelaan 68',
                'city' => 'De Panne',
                'postal_code' => '8660',
                'website' => 'https://www.plopsaland.de'
            ],

            // Bruges - Fun activities
            [
                'name' => 'Historium Brugge',
                'description' => 'Interactive museum about medieval Bruges',
                'type' => 'fun',
                'category' => 'museum',
                'latitude' => 51.2089,
                'longitude' => 3.2267,
                'address' => 'Markt 1',
                'city' => 'Bruges',
                'postal_code' => '8000',
                'phone' => '+32 50 27 03 11',
                'website' => 'https://www.historium.be'
            ],
            [
                'name' => 'Boudewijn Seapark',
                'description' => 'Water park and dolphinarium',
                'type' => 'fun',
                'category' => 'water_park',
                'latitude' => 51.1881,
                'longitude' => 3.1836,
                'address' => 'A. De Baeckestraat 12',
                'city' => 'Bruges',
                'postal_code' => '8200',
                'website' => 'https://www.boudewijnseapark.be'
            ],

            // Bruges - Theater
            [
                'name' => 'Concertgebouw Brugge',
                'description' => 'Modern concert hall with world-class acoustics',
                'type' => 'theater',
                'category' => 'concert_hall',
                'latitude' => 51.2000,
                'longitude' => 3.2175,
                'address' => 't Zand 34',
                'city' => 'Bruges',
                'postal_code' => '8000',
                'phone' => '+32 50 47 69 99',
                'website' => 'https://www.concertgebouw.be'
            ],

            // Antwerp - Theater
            [
                'name' => 'Bourla Theatre',
                'description' => 'Historic neoclassical theater',
                'type' => 'theater',
                'category' => 'drama',
                'latitude' => 51.2194,
                'longitude' => 4.4097,
                'address' => 'Komedieplaats 18',
                'city' => 'Antwerp',
                'postal_code' => '2000',
                'phone' => '+32 3 201 08 50',
                'website' => 'https://www.toneelhuis.be'
            ],

            // Antwerp - Music
            [
                'name' => 'De Roma',
                'description' => 'Historic concert hall and cultural center',
                'type' => 'music',
                'category' => 'concert_hall',
                'latitude' => 51.2113,
                'longitude' => 4.4336,
                'address' => 'Turnhoutsebaan 286',
                'city' => 'Antwerp',
                'postal_code' => '2140',
                'phone' => '+32 3 760 03 33',
                'website' => 'https://www.deroma.be'
            ],
            [
                'name' => 'Sportpaleis',
                'description' => 'Large indoor arena for concerts and events',
                'type' => 'music',
                'category' => 'arena',
                'latitude' => 51.2358,
                'longitude' => 4.4164,
                'address' => 'Schijnpoortweg 119',
                'city' => 'Antwerp',
                'postal_code' => '2170',
                'website' => 'https://www.sportpaleis.be'
            ],

            // Antwerp - Medical
            [
                'name' => 'UZA - University Hospital Antwerp',
                'description' => 'Leading university hospital',
                'type' => 'medic',
                'category' => 'hospital',
                'latitude' => 51.1894,
                'longitude' => 4.3981,
                'address' => 'Wilrijkstraat 10',
                'city' => 'Antwerp',
                'postal_code' => '2650',
                'phone' => '+32 3 821 30 00',
                'website' => 'https://www.uza.be'
            ],

            // Ghent - Fun
            [
                'name' => 'Gravensteen Castle',
                'description' => 'Medieval castle with torture museum',
                'type' => 'fun',
                'category' => 'museum',
                'latitude' => 51.0573,
                'longitude' => 3.7203,
                'address' => 'Sint-Veerleplein 11',
                'city' => 'Ghent',
                'postal_code' => '9000',
                'phone' => '+32 9 225 93 06',
                'website' => 'https://www.historischehuizen.be'
            ],

            // Ghent - Theater
            [
                'name' => 'NTGent',
                'description' => 'City theater with contemporary productions',
                'type' => 'theater',
                'category' => 'drama',
                'latitude' => 51.0539,
                'longitude' => 3.7236,
                'address' => 'Sint-Baafsplein 17',
                'city' => 'Ghent',
                'postal_code' => '9000',
                'phone' => '+32 9 225 01 01',
                'website' => 'https://www.ntgent.be'
            ],

            // Ghent - Medical
            [
                'name' => 'UZ Gent',
                'description' => 'University hospital with emergency services',
                'type' => 'medic',
                'category' => 'hospital',
                'latitude' => 51.0261,
                'longitude' => 3.7147,
                'address' => 'Corneel Heymanslaan 10',
                'city' => 'Ghent',
                'postal_code' => '9000',
                'phone' => '+32 9 332 21 11',
                'website' => 'https://www.uzgent.be'
            ],

            // Liège - Fun
            [
                'name' => 'Aquarium-Muséum de Liège',
                'description' => 'Aquarium and natural history museum',
                'type' => 'fun',
                'category' => 'aquarium',
                'latitude' => 50.6469,
                'longitude' => 5.5744,
                'address' => 'Quai Van Beneden 22',
                'city' => 'Liège',
                'postal_code' => '4020',
                'phone' => '+32 4 366 50 21',
                'website' => 'https://www.aquarium-museum.be'
            ],

            // Liège - Music
            [
                'name' => 'Reflektor',
                'description' => 'Concert venue for alternative music',
                'type' => 'music',
                'category' => 'concert_hall',
                'latitude' => 50.6403,
                'longitude' => 5.5750,
                'address' => 'Place Xavier Neujean 28',
                'city' => 'Liège',
                'postal_code' => '4000',
                'website' => 'https://www.reflektor.be'
            ],

            // Liège - Medical
            [
                'name' => 'CHU de Liège',
                'description' => 'University hospital of Liège',
                'type' => 'medic',
                'category' => 'hospital',
                'latitude' => 50.6053,
                'longitude' => 5.5972,
                'address' => 'Avenue de l\'Hôpital 1',
                'city' => 'Liège',
                'postal_code' => '4000',
                'phone' => '+32 4 366 71 11',
                'website' => 'https://www.chuliege.be'
            ],

            // Charleroi - Fun
            [
                'name' => 'BPS22',
                'description' => 'Contemporary art museum',
                'type' => 'fun',
                'category' => 'museum',
                'latitude' => 50.4108,
                'longitude' => 4.4439,
                'address' => 'Boulevard Solvay 22',
                'city' => 'Charleroi',
                'postal_code' => '6000',
                'phone' => '+32 71 27 29 71',
                'website' => 'https://www.bps22.be'
            ],

            // Charleroi - Medical
            [
                'name' => 'CHU Charleroi',
                'description' => 'University hospital Marie Curie',
                'type' => 'medic',
                'category' => 'hospital',
                'latitude' => 50.4253,
                'longitude' => 4.4522,
                'address' => 'Chaussée de Bruxelles 140',
                'city' => 'Charleroi',
                'postal_code' => '6042',
                'phone' => '+32 71 92 21 11',
                'website' => 'https://www.chu-charleroi.be'
            ],

            // Namur - Fun
            [
                'name' => 'Citadel of Namur',
                'description' => 'Historic fortress with underground passages',
                'type' => 'fun',
                'category' => 'historic_site',
                'latitude' => 50.4636,
                'longitude' => 4.8625,
                'address' => 'Route Merveilleuse 64',
                'city' => 'Namur',
                'postal_code' => '5000',
                'phone' => '+32 81 24 73 70',
                'website' => 'https://www.citadelle.namur.be'
            ],

            // Namur - Theater
            [
                'name' => 'Théâtre Royal de Namur',
                'description' => 'Historic theater with varied programming',
                'type' => 'theater',
                'category' => 'drama',
                'latitude' => 50.4639,
                'longitude' => 4.8675,
                'address' => 'Place du Théâtre 2',
                'city' => 'Namur',
                'postal_code' => '5000',
                'phone' => '+32 81 22 60 26',
                'website' => 'https://www.theatredenamur.be'
            ],

            // Mons - Fun
            [
                'name' => 'Mons Memorial Museum',
                'description' => 'Museum about WWI and WWII',
                'type' => 'fun',
                'category' => 'museum',
                'latitude' => 50.4542,
                'longitude' => 3.9525,
                'address' => 'Boulevard Dolez 51',
                'city' => 'Mons',
                'postal_code' => '7000',
                'phone' => '+32 65 40 53 20',
                'website' => 'https://www.monsmemorialmuseum.be'
            ],

            // Mechelen - Music
            [
                'name' => 'Cultuurcentrum Mechelen',
                'description' => 'Cultural center with concerts and theater',
                'type' => 'music',
                'category' => 'cultural_center',
                'latitude' => 51.0283,
                'longitude' => 4.4778,
                'address' => 'Minderbroedersgang 5',
                'city' => 'Mechelen',
                'postal_code' => '2800',
                'phone' => '+32 15 29 40 00',
                'website' => 'https://www.cultuurcentrummechelen.be'
            ],

            // Kortrijk - Fun
            [
                'name' => 'Texture Museum',
                'description' => 'Museum dedicated to textile and flax',
                'type' => 'fun',
                'category' => 'museum',
                'latitude' => 50.8278,
                'longitude' => 3.2647,
                'address' => 'Vlaanderenstraat 28',
                'city' => 'Kortrijk',
                'postal_code' => '8500',
                'phone' => '+32 56 21 01 38',
                'website' => 'https://www.texture-kortrijk.be'
            ],

            // Hasselt - Fun
            [
                'name' => 'Japanse Tuin',
                'description' => 'Largest Japanese garden in Europe',
                'type' => 'fun',
                'category' => 'garden',
                'latitude' => 50.9428,
                'longitude' => 5.3214,
                'address' => 'Gouverneur Verwilghensingel 23',
                'city' => 'Hasselt',
                'postal_code' => '3500',
                'phone' => '+32 11 23 95 40',
                'website' => 'https://www.visithasselt.be'
            ],

            // Spa - Medical
            [
                'name' => 'Thermes de Spa',
                'description' => 'Thermal spa and wellness center',
                'type' => 'medic',
                'category' => 'wellness',
                'latitude' => 50.4928,
                'longitude' => 5.8650,
                'address' => 'Colline d\'Annette et Lubin',
                'city' => 'Spa',
                'postal_code' => '4900',
                'phone' => '+32 87 77 25 60',
                'website' => 'https://www.thermesdespa.com'
            ],

            // Ostend - Fun
            [
                'name' => 'Mu.ZEE',
                'description' => 'Museum of modern and contemporary art',
                'type' => 'fun',
                'category' => 'museum',
                'latitude' => 51.2272,
                'longitude' => 2.9142,
                'address' => 'Romestraat 11',
                'city' => 'Ostend',
                'postal_code' => '8400',
                'phone' => '+32 59 50 81 18',
                'website' => 'https://www.muzee.be'
            ],
            [
                'name' => 'Atlantikwall Raversyde',
                'description' => 'WWII Atlantic Wall fortification museum',
                'type' => 'fun',
                'category' => 'museum',
                'latitude' => 51.2050,
                'longitude' => 2.8800,
                'address' => 'Nieuwpoortsesteenweg 636',
                'city' => 'Ostend',
                'postal_code' => '8400',
                'phone' => '+32 59 70 22 85',
                'website' => 'https://www.raversyde.be'
            ]
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
