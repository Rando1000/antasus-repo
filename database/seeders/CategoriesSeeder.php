<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $node = Category::create([
            'name' => 'Auto, Rad & Boot',
        
            'children' => [
                [
                    'name' => 'Auto',

                    'children' => [
                        [ 'name' => 'Alfa Romeo' ],
                        [ 'name' => 'Audi' ],
                        [ 'name' => 'BMW' ],
                        [ 'name' => 'Chevrolet' ],
                        [ 'name' => 'Chrysler' ],
                        [ 'name' => 'Citroen' ],
                        [ 'name' => 'Dacia' ],
                        [ 'name' => 'Daewoo' ],
                        [ 'name' => 'Daihatsu' ],
                        [ 'name' => 'Fiat' ],
                        [ 'name' => 'Ford' ],
                        [ 'name' => 'Honda' ],
                        [ 'name' => 'Hyundai' ],
                        [ 'name' => 'Jaguar' ],
                        [ 'name' => 'Jeep' ],
                        [ 'name' => 'Kia' ],
                        [ 'name' => 'Lada' ],
                        [ 'name' => 'Lancia' ],
                        [ 'name' => 'Land Rover' ],
                        [ 'name' => 'Lexus' ],
                        [ 'name' => 'Mazda' ],
                        [ 'name' => 'Mercedes Benz' ],
                        [ 'name' => 'Mini' ],
                        [ 'name' => 'Mitsubishi' ],
                        [ 'name' => 'Nissan' ],
                        [ 'name' => 'Opel' ],
                        [ 'name' => 'Peugeot' ],
                        [ 'name' => 'Porsche' ],
                        [ 'name' => 'Renault' ],
                        [ 'name' => 'Rover' ],
                        [ 'name' => 'Saab' ],
                        [ 'name' => 'Seat' ],
                        [ 'name' => 'Skoda' ],
                        [ 'name' => 'Smart' ],
                        [ 'name' => 'Subaru' ],
                        [ 'name' => 'Suzuki' ],
                        [ 'name' => 'Tesla' ],
                        [ 'name' => 'Toyota' ],
                        [ 'name' => 'Trabant' ],
                        [ 'name' => 'Volkswagen' ],
                        [ 'name' => 'Volvo' ],
                        [ 'name' => 'Weitere Automarken' ],
                    ],
                ],
            
                [
                    'name' => 'Autoteile & Reifen',

                    'children' => [
                        [ 'name' => 'Bremsen & Fahrwerk' ],
                        [ 'name' => 'Auto Hifi & Navigation' ],
                        [ 'name' => 'Ersatz- & Reparaturteile' ],
                        [ 'name' => 'Reifen & Felgen' ],
                        [ 'name' => 'Tuning & Styling' ],
                        [ 'name' => 'Werkzeug' ],
                        [ 'name' => 'Weitere Autoteile' ],
                    ],
                ],
            
                [
                    'name' => 'Boote & Bootszubeh??r',
                    'children' => [
                        [ 'name' => 'Motorboote' ],
                        [ 'name' => 'Segelboote' ],
                        [ 'name' => 'Kleinboote' ],
                        [ 'name' => 'Schlauchboote' ],
                        [ 'name' => 'Jetski' ],
                        [ 'name' => 'Bootstrailer' ],
                        [ 'name' => 'Bootsliegepl??tze' ],
                        [ 'name' => 'Bootszubeh??r' ],
                        [ 'name' => 'Weitere Boote' ],
                    ],
                ],
            
                [
                    'name' => 'Fahrr??der & Zubeh??r',
                    'children' => [
                        [ 'name' => 'Damen' ],
                        [ 'name' => 'Herren' ],
                        [ 'name' => 'Kinder' ],
                        [ 'name' => 'Zubeh??r' ],
                        [ 'name' => 'Weitere Fahrr??der & Zubeh??r' ],
                    ],
                ],
            
                [
                    'name' => 'Motorr??der & Quads',
                    'children' => [
                        [ 'name' => 'Mofas & Mopeds' ],
                        [ 'name' => 'Motorr??der' ],
                        [ 'name' => 'Quads' ],
                        [ 'name' => 'Motorroller & Scooter' ],
                        
                    ],
                ],
            
                [
                    'name' => 'Motorradteile & Zubeh??r',
                    'children' => [
                        [ 'name' => 'Ersatz- & Reparaturteile' ],
                        [ 'name' => 'Reifen & Felgen' ],
                        [ 'name' => 'Motorradbekleidung' ],
                    ],
                ],
            
                [
                    'name' => 'Nutzfahrzeuge & Anh??nger',
                    'children' => [
                        [ 'name' => 'Agrarfahrzeuge' ],
                        [ 'name' => 'Anh??nger' ],
                        [ 'name' => 'Baumaschinen' ],
                        [ 'name' => 'Busse' ],
                        [ 'name' => 'LKW' ],
                        [ 'name' => 'Sattelzugmaschinen & Auflieger' ],
                        [ 'name' => 'Stapler' ],
                        [ 'name' => 'Transporter' ],
                        [ 'name' => 'Nutzfahrzeugteile & Zubeh??r' ],
                    ],
                ],
            
                [
                    'name' => 'Reparaturen & Dienstleistungen',
                    'children' => [
                        [ 'name' => 'Werkstatt' ],
                    ],
                ],
            
                [
                    'name' => 'Wohnwagen & -mobile',
                    'children' => [
                        [ 'name' => 'Alkoven' ],
                        [ 'name' => 'Integrierter' ],
                        [ 'name' => 'Kastenwagen' ],
                        [ 'name' => 'Teilintegrierter' ],
                        [ 'name' => 'Wohnwagen' ],
                        [ 'name' => 'Alkoven' ],
                    ],
                ],
            
                    [
                    'name' => 'Weiteres Auto, Rad & Boot',
                    'children' => [
                        [ 'name' => 'Autos' ],
                    ],
                ],
            ],
        ]);
        
        $node = Category::create([
            'name' => 'Dienstleistungen',
                
            'children' => [        
                [
                    'name' => 'Altenpflege',
                                   
                ],
                [
                    'name' => 'Auto, Rad & Boot',
        
                ],
                [
                    'name' => 'Babysitter & Kinderbetreuung',
        
                ],
                [
                    'name' => 'Elektronik ',
        
                ],
                [
                    'name' => 'Haus & Garten',
        
                    'children' => [
                        [ 'name' => 'InvBau & Handwerkest' ],
                        [ 'name' => 'Garten- & Landschaftsbau' ],
                        [ 'name' => 'Haushaltshilfe' ],
                        [ 'name' => 'Reinigungsservice' ],
                        [ 'name' => 'Reparaturen' ],
                        [ 'name' => 'Wohnungsaufl??sungen' ],
                        [ 'name' => 'Weitere Dienstleistungen' ],
                    ],
                ],
                [
                    'name' => 'K??nstler & Musiker',
        
                ],
                [
                    'name' => 'Reise & Event',
        
                ],
                [
                    'name' => 'Tierbetreuung & Training',
        
                ],
                [
                    'name' => 'Umzug & Transport',
        
                ],
                [
                    'name' => 'Weitere Dienstleistungen',
        
                ],
            ],
        ]);
        
        $node = Category::create([
            'name' => 'Ticketschalter',
                
            'children' => [        
                [
                    'name' => 'Bahn & ??PNV',
        
                ],
                [
                    'name' => 'Comedy & Kabarett',
        
                ],
                [
                    'name' => 'Gutscheine',
        
                ],
                [
                    'name' => 'Kinder',
        
                ],
                [
                    'name' => 'Konzerte',
        
                ],
                [
                    'name' => 'Sport',
        
                ],
                [
                    'name' => 'Theater & Musical',
        
                ],
                [
                    'name' => 'Weitere Eintrittskarten & Tickets',
        
                ],
            ],
        ]);

        $node = Category::create([
            'name' => 'Electronics',
                
            'children' => [        
                [
                    'name' => 'Audio/HIFI',
        
                    'children' => [
                        [ 'name' => 'HIFI' ],
                    ],
                ],
                [
                    'name' => 'Dienstleistungen Elektronik',
        
                ],
                [
                    'name' => 'Foto',
        
                    'children' => [
                        [ 'name' => 'Kamera' ],
                        [ 'name' => 'Objektiv' ],
                        [ 'name' => 'Zubeh??r' ],
                        [ 'name' => 'Kamera & Zubeh??r' ],
                        [ 'name' => 'Weiteres Foto' ],
                    ],
                ],
                [
                    'name' => 'Handy & Telefon',
        
                    'children' => [
                        [ 'name' => 'Apple' ],
                        [ 'name' => 'HTC' ],
                        [ 'name' => 'LG' ],
                        [ 'name' => 'Motorola' ],
                        [ 'name' => 'Nokia' ],
                        [ 'name' => 'Samsung' ],
                        [ 'name' => 'Siemens' ],
                        [ 'name' => 'Sony' ],
                        [ 'name' => 'Faxger??te' ],
                        [ 'name' => 'Telefone' ],
                        [ 'name' => 'Weitere Handys & Telefone' ],
                    ],
                ],
                [
                    'name' => 'Haushaltsger??te',
        
                    'children' => [
                        [ 'name' => 'Haushaltskleinger??te' ],
                        [ 'name' => 'Herde & Back??fen' ],
                        [ 'name' => 'Kaffee- & Espressomaschinen' ],
                        [ 'name' => 'K??hlschr??nke & Gefrierger??te ' ],
                        [ 'name' => 'Sp??lmaschinen' ],
                        [ 'name' => 'Staubsauger' ],
                        [ 'name' => 'Waschmaschinen & Trockner' ],
                        [ 'name' => 'Weitere Haushaltsger??te' ],
                    ],
                ],
                [
                    'name' => 'Konsolen',
        
                    'children' => [
                        [ 'name' => 'Pocket Konsolen' ],
                        [ 'name' => 'PlayStation' ],
                        [ 'name' => 'Xbox' ],
                        [ 'name' => 'Wii' ],
                        [ 'name' => 'Weitere Konsolen' ],
                    ],
                ],
                [
                    'name' => 'Notebooks',
        
                ],
                [
                    'name' => 'PCs',
        
                ],
                [
                    'name' => 'PC-Zubeh??r & Software',
        
                    'children' => [
                        [ 'name' => 'Drucker & Scanner' ],
                        [ 'name' => 'Festplatten & Laufwerke' ],
                        [ 'name' => 'Geh??use' ],
                        [ 'name' => 'Grafikkarten' ],
                        [ 'name' => 'Kabel & Adapter' ],
                        [ 'name' => 'Mainboards' ],
                        [ 'name' => 'Monitore' ],
                        [ 'name' => 'Multimedia' ],
                        [ 'name' => 'Netzwerk' ],
                        [ 'name' => 'Prozessoren / CPUs' ],
                        [ 'name' => 'Speicher' ],
                        [ 'name' => 'Software' ],
                        [ 'name' => 'Tastatur & Maus' ],
                        [ 'name' => 'Weiteres PC-Zubeh??r' ],

                    ],
                ],
                [
                    'name' => 'Tablets & Reader',
        
                    'children' => [
                        [ 'name' => 'iPad' ],
                        [ 'name' => 'Kindle' ],
                        [ 'name' => 'Samsung Tablets' ],
                        [ 'name' => 'Weitere Tablets & Reader' ],
                    ],
                ],
                [
                    'name' => 'TV & Video',
        
                    'children' => [
                        [ 'name' => 'DVD-Player & Recorder' ],
                        [ 'name' => 'Fernseher' ],
                        [ 'name' => 'TV-Receiver' ],
                        [ 'name' => 'Weitere TV & Video' ],
                    ],
                ],
                [
                    'name' => 'Videospiele',
        
                    'children' => [
                        [ 'name' => 'DS(i)- & PSP Spiele' ],
                        [ 'name' => 'Nintendo Spiele' ],
                        [ 'name' => 'PlayStation Spiele' ],
                        [ 'name' => 'Xbox Spiele' ],
                        [ 'name' => 'VR Spiele' ],
                        [ 'name' => 'PC Spiele' ],
                        [ 'name' => 'Weitere Videospiele' ],
                    ],
                ],
                [
                    'name' => 'Weitere Elektronik',
        
                ],
            ],
        ]);

        $node = Category::create([
            'name' => 'Family, Kids & Baby',
                
            'children' => [        
                [
                    'name' => 'Altenpflege ',
        
                ],
                [
                    'name' => 'Baby- & Kinderkleidung',
        
                    'children' => [
                        [ 'name' => 'Hosen & Jeans' ],
                        [ 'name' => 'Kleider & R??cke' ],
                        [ 'name' => 'Shirts & Tops' ],
                        [ 'name' => 'Hemden' ],
                        [ 'name' => 'Jacken & M??ntel' ],
                        [ 'name' => 'Pullover & Strickjacken' ],
                        [ 'name' => 'Sportbekleidung' ],
                        [ 'name' => 'Bademode' ],
                        [ 'name' => 'Accessoires' ],
                        [ 'name' => 'Kleidungspakete' ],
                        [ 'name' => 'Weitere Baby- & Kinderkleidung' ],
                    ],
                ],
                [
                    'name' => 'Baby- & Kinderschuhe',
        
                    'children' => [
                        [ 'name' => 'Ballerinas' ],
                        [ 'name' => 'Halb- & Schn??rschuhe' ],
                        [ 'name' => 'Hausschuhe' ],
                        [ 'name' => 'Sandalen' ],
                        [ 'name' => 'Outdoor & Wanderschuhe' ],
                        [ 'name' => 'Sneaker & Sportschuhe' ],
                        [ 'name' => 'Stiefel & Stiefeletten' ],
                        [ 'name' => 'Badeschuhe' ],
                        [ 'name' => 'Weitere Schuhe' ],
                    ],
                ],
                [
                    'name' => 'Baby-Ausstattung',
        
                ],
                [
                    'name' => 'Babyschalen & Kindersitze',
        
                ],
                [
                    'name' => 'Babysitter & Kinderbetreuung',
        
                ],
                [
                    'name' => 'Kinderwagen & Buggys',
        
                ],
                [
                    'name' => 'Kinderzimmerm??bel',
        
                    'children' => [
                        [ 'name' => 'Betten & Wiegen' ],
                        [ 'name' => 'Hochst??hle & Laufst??lle' ],
                        [ 'name' => 'Schr??nke & Kommoden' ],
                        [ 'name' => 'Wickeltische & Zubeh??r' ],
                        [ 'name' => 'Wippen & Schaukeln' ],
                        [ 'name' => 'Weitere Kinderzimmerm??bel' ],
                    ],
                ],
                [
                    'name' => 'Spielzeug',
        
                    'children' => [
                        [ 'name' => 'Action- & Spielfiguren' ],
                        [ 'name' => 'Babyspielzeug' ],
                        [ 'name' => 'Barbie & Co' ],
                        [ 'name' => 'Dreirad & R??der' ],
                        [ 'name' => 'Gesellschaftsspiele' ],
                        [ 'name' => 'LEGO & Duplo' ],
                        [ 'name' => 'Lernspielzeug' ],
                        [ 'name' => 'Playmobil' ],
                        [ 'name' => 'Puppen' ],
                        [ 'name' => 'Spielzeugautos' ],
                        [ 'name' => 'Spielzeug f??r drau??en' ],
                        [ 'name' => 'Stofftiere' ],
                        [ 'name' => 'Weiteres Spielzeug' ],

                    ],
                ],
                [
                    'name' => 'Weiteres Familie, Kind & Baby',
        
                ],
            ],
        ]);

        $node = Category::create([
            'name' => 'Freizeit, Hobby & Nachbarschaft',
                
            'children' => [        
                [
                    'name' => 'Esoterik & Spirituelles',
        
                ],
                [
                    'name' => 'Essen & Trinken',
        
                ],
                [
                    'name' => 'Freizeitaktivit??ten',
        
                ],
                [
                    'name' => 'Handarbeit, Basteln',
        
                ],
                [
                    'name' => 'Kunst & Antiquit??ten',
        
                ],
                [
                    'name' => 'K??nstler & Musiker',
        
                ],
                [
                    'name' => 'Modellbau',
        
                    'children' => [
                        [ 'name' => 'Mountainbike' ],
                    ],
                ],
                [
                    'name' => 'Reise & Eventservices',
        
                ],
                [
                    'name' => 'Sammeln',
        
                    'children' => [
                        [ 'name' => 'Ansichts- & Postkarten' ],
                        [ 'name' => 'Autogramme' ],
                        [ 'name' => 'Bierkr??ge & -gl??ser' ],
                        [ 'name' => 'Briefmarken' ],
                        [ 'name' => 'Comics' ],
                        [ 'name' => 'Flaggen' ],
                        [ 'name' => 'M??nzen' ],
                        [ 'name' => 'Porzellan' ],
                        [ 'name' => 'Puppen & Puppenzubeh??r' ],
                        [ 'name' => 'Sammelbilder & Sticker' ],
                        [ 'name' => 'Sammelkartenspiele' ],
                        [ 'name' => '??berraschungseier' ],
                        [ 'name' => 'Werbeartikel' ],
                        [ 'name' => 'Weiteres Sammeln' ],
                    ],
                ],
                [
                    'name' => 'Sport & Camping',
        
                    'children' => [
                        [ 'name' => 'Ballsport' ],
                        [ 'name' => 'Camping & Outdoor' ],
                        [ 'name' => 'Fitness' ],
                        [ 'name' => 'Radsport' ],
                        [ 'name' => 'Tanzen & Laufen' ],
                        [ 'name' => 'Wassersport' ],
                        [ 'name' => 'Wintersport' ],
                        [ 'name' => 'Weiteres Sport & Camping' ],
                    ],
                ],
                [
                    'name' => 'Tr??del',
        
                ],
                [
                    'name' => 'Verloren & Gefunden',
        
                ],
                [
                    'name' => 'Weiteres Freizeit & Hobby  ',
        
                ],

            ],
        ]);

        $node = Category::create([
            'name' => 'Haus & Garten',
                
            'children' => [        
                [
                    'name' => 'Badezimmer',
        
                ],
                [
                    'name' => 'B??ro',
        
                ],
                [
                    'name' => 'Dekoration',
        
                    'children' => [
                        [ 'name' => 'Bilder & Poster' ],
                        [ 'name' => 'Kerzen & Kerzenhalter' ],
                        [ 'name' => 'Spiegel' ],
                        [ 'name' => 'Vasen' ],
                        [ 'name' => 'Weitere Dekoration' ],
                    ],
                ],
                [
                    'name' => 'Dienstleistungen Haus & Garten',
        
                    'children' => [
                        [ 'name' => 'Bau & Handwerk' ],
                        [ 'name' => 'Garten- & Landschaftsbau' ],
                        [ 'name' => 'Haushaltshilfe' ],
                        [ 'name' => 'Reinigungsservice' ],
                        [ 'name' => 'Reparaturen' ],
                        [ 'name' => 'Wohnungsaufl??sungen' ],
                        [ 'name' => 'Weitere Dienstleistungen Haus & Garten' ],
                    ],
                ],
                [
                    'name' => 'Gartenzubeh??r & Pflanzen',
        
                    'children' => [
                        [ 'name' => 'RasBlument??pfe' ],
                        [ 'name' => 'Dekoration' ],
                        [ 'name' => 'Gartenger??te' ],
                        [ 'name' => 'Gartenm??bel' ],
                        [ 'name' => 'Pflanzen' ],
                        [ 'name' => 'Weiteres Gartenzubeh??r & Pflanzen' ],
                    ],
                ],
                [
                    'name' => 'Textilien',
        
                ],
                [
                    'name' => 'Heimwerken',
        
                ],
                [
                    'name' => 'K??che & Esszimmer',
        
                    'children' => [
                        [ 'name' => 'Besteck' ],
                        [ 'name' => 'Geschirr' ],
                        [ 'name' => 'Gl??ser' ],
                        [ 'name' => 'Kleinger??te' ],
                        [ 'name' => 'K??chenschr??nke' ],
                        [ 'name' => 'St??hle' ],
                        [ 'name' => 'Tische' ],
                        [ 'name' => 'Weiteres K??che & Esszimmer' ],
                    ],
                ],
                [
                    'name' => 'Lampen & Licht',
        
                ],
                [
                    'name' => 'Schlafzimmer',
        
                    'children' => [
                        [ 'name' => 'Betten' ],
                        [ 'name' => 'Lattenroste' ],
                        [ 'name' => 'Matratzen' ],
                        [ 'name' => 'Nachttische' ],
                        [ 'name' => 'Schr??nke' ],
                        [ 'name' => 'Weiteres Schlafzimmer' ],
                    ],
                ],
                [
                    'name' => 'Wohnzimmer',
        
                    'children' => [
                        [ 'name' => 'Regale' ],
                        [ 'name' => 'Schr??nke & Schrankw??nde' ],
                        [ 'name' => 'Sitzm??bel' ],
                        [ 'name' => 'Sofas & Sitzgarnituren' ],
                        [ 'name' => 'Tische' ],
                        [ 'name' => 'TV & Phonom??bel' ],
                        [ 'name' => 'Weiteres Wohnzimmer' ],
                    ],
                ],
                [
                    'name' => 'Weiteres Haus & Garten',
        
                ],

            ],
        ]);

        $node = Category::create([
            'name' => 'Tierwelt',
                
            'children' => [        
                [
                    'name' => 'Fische',
        
                    'children' => [
                        [ 'name' => 'Aquariumfische' ],
                        [ 'name' => 'Barsche' ],
                        [ 'name' => 'Diskusfische' ],
                        [ 'name' => 'Garnelen & Krebse' ],
                        [ 'name' => 'Koi' ],
                        [ 'name' => 'Schnecken' ],
                        [ 'name' => 'Wasserpflanzen' ],
                        [ 'name' => 'Welse' ],
                        [ 'name' => 'Weitere Fische' ],
                    ],
                ],
                [
                    'name' => 'Hund',
        
                ],
                [
                    'name' => 'Haustiere',
        
                    'children' => [
                        [ 'name' => 'Hund' ],
                    ],
                ],
                [
                    'name' => 'Katzen',
        
                ],
                [
                    'name' => 'Kleintiere',
        
                    'children' => [
                        [ 'name' => 'Hamster' ],
                        [ 'name' => 'Hasen & Kaninchen' ],
                        [ 'name' => 'M??use & Ratten' ],
                        [ 'name' => 'Meerschweinchen' ],
                        [ 'name' => 'Weitere Kleintiere' ],
                    ],
                ],
                [
                    'name' => 'Pferde',
        
                    'children' => [
                        [ 'name' => 'Gro??pferde' ],
                        [ 'name' => 'Kleinpferde & Ponys' ],
                    ],
                ],
                [
                    'name' => 'Reptilien',
        
                    'children' => [
                        [ 'name' => 'Schlangen' ],
                        [ 'name' => 'Echsen' ],
                        [ 'name' => 'Spinnen' ],
                        [ 'name' => 'Weitere Reptilien' ],
                    ],
                ],
                [
                    'name' => 'Tierbetreuung & Training',
        
                ],
                [
                    'name' => 'Vermisste Tiere',
        
                    'children' => [
                        [ 'name' => 'Entlaufen' ],
                        [ 'name' => 'Gefunden' ],
                    ],
                ],
                [
                    'name' => 'V??gel',
        
                ],
                [
                    'name' => 'Zubeh??r',
        
                    'children' => [
                        [ 'name' => 'Fische' ],
                        [ 'name' => 'Hunde' ],
                        [ 'name' => 'Katzen' ],
                        [ 'name' => 'Kleintiere' ],
                        [ 'name' => 'Pferde' ],
                        [ 'name' => 'Reptilien' ],
                        [ 'name' => 'V??gel' ],
                        [ 'name' => 'Weiteres Zubeh??r Haustiere' ],
                    ],
                ],
                [
                    'name' => 'Weitere Haustiere',
        
                ],
            ],
        ]);

        $node = Category::create([
            'name' => 'Immobilien',
                
            'children' => [        
                [
                    'name' => 'Auf Zeit & WG',
        
                    'children' => [
                        [ 'name' => 'Gesamte Unterkunft' ],
                        [ 'name' => 'Privatzimmer' ],
                        [ 'name' => 'Gemeinsames Zimmer' ],
                    ],
                ],
                [
                    'name' => 'Eigentumswohnung',
        
                    'children' => [
                        [ 'name' => 'Apartment' ],
                    ],
                ],
                [
                    'name' => 'Ferien- & Auslandsimmobilien',
        
                    'children' => [
                        [ 'name' => 'Kaufen' ],
                        [ 'name' => 'Mieten' ],
                    ],
                ],
                [
                    'name' => 'Garagen & Stellpl??tze',
        
                    'children' => [
                        [ 'name' => 'Kaufen' ],
                        [ 'name' => 'Mieten' ],
                    ],
                ],
                [
                    'name' => 'Gewerbeimmobilien',
        
                    'children' => [
                        [ 'name' => 'Kaufen' ],
                        [ 'name' => 'Mieten' ],
                    ],
                ],
                [
                    'name' => 'Grundst??cke & G??rten',
        
                    'children' => [
                        [ 'name' => 'Baugrundst??ck' ],
                        [ 'name' => 'Garten' ],
                        [ 'name' => 'Land-/Forstwirtschaft' ],
                        [ 'name' => 'Weitere Grundst??cke & G??rten' ],
                    ],
                ],
                [
                    'name' => 'H??user zum Kauf ',
        
                ],
                [
                    'name' => 'H??user zur Miete',
        
                ],
                [
                    'name' => 'Mietwohnungen',
        
                ],
                [
                    'name' => 'Umzug & Transport',
        
                ],
                [
                    'name' => 'Weitere Immobilien',
        
                ],
            ],
        ]);

        $node = Category::create([
            'name' => 'Jobs',
                
            'children' => [        
                [
                    'name' => 'Ausbildung',
        
                ],
                [
                    'name' => 'Bau, Handwerk & Produktion',
        
                    'children' => [
                        [ 'name' => 'Bauhelfer' ],
                        [ 'name' => 'Lagermitarbeiter' ],
                        [ 'name' => 'Dachdecker' ],
                        [ 'name' => 'Elektriker' ],
                        [ 'name' => 'Fliesenleger' ],
                        [ 'name' => 'Maler' ],
                        [ 'name' => 'Maurer' ],
                        [ 'name' => 'Produktionshelfer' ],
                        [ 'name' => 'Schlosser' ],
                        [ 'name' => 'Tischler' ],
                        [ 'name' => 'Weitere Berufe' ],
                        [ 'name' => 'Web Designer' ],
                    ],
                ],
                [
                    'name' => 'B??roarbeit & Verwaltung',
        
                    'children' => [
                        [ 'name' => 'Buchhalter' ],
                        [ 'name' => 'B??rokauffrau/-mann' ],
                        [ 'name' => 'Sachbearbeiter/-in' ],
                        [ 'name' => 'Sekret??rin' ],
                        [ 'name' => 'Weitere Berufe' ],
                    ],
                ],
                [
                    'name' => 'Gastronomie & Tourismus ',
        
                    'children' => [
                        [ 'name' => 'Barkeeper' ],
                        [ 'name' => 'Hotelfachfrau/-mann' ],
                        [ 'name' => 'Kellner/-in' ],
                        [ 'name' => 'Koch/K??chin' ],
                        [ 'name' => 'Lagermitarbeiter' ],
                        [ 'name' => 'K??chenhilfe' ],
                        [ 'name' => 'Servicekraft' ],
                        [ 'name' => 'Zimmerm??dchen' ],
                        [ 'name' => 'Weitere Berufe' ],
                    ],
                ],
                [
                    'name' => 'Kundenservice & Call Center',
        
                ],
                [
                    'name' => 'Mini- & Nebenjobs',
        
                ],
                [
                    'name' => 'Praktika',
        
                ],
                [
                    'name' => 'Sozialer Sektor & Pflege',
        
                    'children' => [
                        [ 'name' => 'Altenpfleger/-in' ],
                        [ 'name' => 'Arzthelferin' ],
                        [ 'name' => 'Erzieher/-in' ],
                        [ 'name' => 'Krankenschwester/ Krankenpfleger/-in' ],
                        [ 'name' => 'Physiotherapeut/-in' ],
                        [ 'name' => 'Weitere Berufe' ],
                    ],
                ],
                [
                    'name' => 'Transport, Logistik & Verkehr',
        
                    'children' => [
                        [ 'name' => 'Kraftfahrer' ],
                        [ 'name' => 'LagermitaKurierfahrerrbeiter' ],
                        [ 'name' => 'Lagermitarbeiter' ],
                        [ 'name' => 'StaplerfahrerStaplerfahrer' ],
                        [ 'name' => 'Weitere Berufe' ],


                    ],
                ],
                [
                    'name' => 'Vertrieb, Einkauf & Verkauf',
        
                    'children' => [
                        [ 'name' => 'Buchhalter/-in' ],
                        [ 'name' => 'Immobilienmakler' ],
                        [ 'name' => 'Kaufmann/-frau' ],
                        [ 'name' => 'Verk??ufer/-in' ],
                        [ 'name' => 'Weitere Berufe' ],
                    ],
                ],
                [
                    'name' => 'Weitere Jobs',
        
                ],
            ],
        ]);

        $node = Category::create([
            'name' => 'Mode & Beauty',
                
            'children' => [        
                [
                    'name' => 'Accessoires & Schmuck ',
        
                    'children' => [
                        [ 'name' => 'M??tzen, Schals & Handschuhe' ],
                        [ 'name' => 'Schmuck' ],
                        [ 'name' => 'Sonnenbrillen' ],
                        [ 'name' => 'Taschen & Rucks??cke' ],
                        [ 'name' => 'Uhren' ],
                        [ 'name' => 'Weitere Accessoires & Schmuck' ],
                    ],
                ],
                [
                    'name' => 'Beauty & Gesundheit',
        
                    'children' => [
                        [ 'name' => 'Make-Up & Gesichtspflege' ],
                        [ 'name' => 'Haarpflege' ],
                        [ 'name' => 'K??rperpflege' ],
                        [ 'name' => 'Hand- & Nagelpflege' ],
                        [ 'name' => 'Gesundheit' ],
                        [ 'name' => 'Weiteres Beauty & Gesundheit' ],
                    ],
                ],
                [
                    'name' => 'Damenbekleidung',
        
                    'children' => [
                        [ 'name' => 'Hemden & Blusen' ],
                        [ 'name' => 'Hosen' ],
                        [ 'name' => 'Jacken & M??ntel' ],
                        [ 'name' => 'Pullover' ],
                        [ 'name' => 'R??cke & Kleider' ],
                        [ 'name' => 'Shirts & Tops' ],
                        [ 'name' => 'Umstandsmode' ],
                        [ 'name' => 'Weitere Damenbekleidung' ],
                    ],
                ],
                [
                    'name' => 'Damenschuhe',
        
                    'children' => [
                        [ 'name' => 'DaBallerinas' ],
                        [ 'name' => 'Halb- & Schn??rschuhe' ],
                        [ 'name' => 'Hausschuhe' ],
                        [ 'name' => 'Outdoor & Wanderschuhe' ],
                        [ 'name' => 'Pumps & High Heels' ],
                        [ 'name' => 'Sandalen' ],
                        [ 'name' => 'Sneaker & Sportschuhe' ],
                        [ 'name' => 'Stiefel & Stiefeletten' ],
                        [ 'name' => 'Weitere Schuhe' ],
                    ],
                ],
                [
                    'name' => 'Herrenbekleidung',
        
                    'children' => [
                        [ 'name' => 'Hemden' ],
                        [ 'name' => 'Hosen' ],
                        [ 'name' => 'Jacken & M??ntel' ],
                        [ 'name' => 'Pullover' ],
                        [ 'name' => 'Shirts' ],
                        [ 'name' => 'Unisex' ],
                        [ 'name' => 'Weitere Herrenbekleidung' ],
                    ],
                ],
                [
                    'name' => 'Herrenschuhe',
        
                    'children' => [
                        [ 'name' => 'Halb- & Schn??rschuhe' ],
                        [ 'name' => 'Hausschuhe' ],
                        [ 'name' => 'Sandalen' ],
                        [ 'name' => 'Sneaker & Sportschuhe' ],
                        [ 'name' => 'Stiefel & Stiefeletten' ],
                        [ 'name' => 'Outdoor & Wanderschuhe' ],
                        [ 'name' => 'Weitere Schuhe' ],
                    ],
                ],
                [
                    'name' => 'Weiteres Mode & Beauty',
        
                ],
            ],
        ]);

        $node = Category::create([
            'name' => 'Musik, Filme & B??cher',
                
            'children' => [        
                [
                    'name' => 'B??cher & Zeitschriften',
        
                    'children' => [
                        [ 'name' => 'Antiquarische B??cher' ],
                        [ 'name' => 'Kinderb??cher' ],
                        [ 'name' => 'Krimis & Thriller' ],
                        [ 'name' => 'Kunst & Kultur' ],
                        [ 'name' => 'Sachb??cher' ],
                        [ 'name' => 'Science Fiction' ],
                        [ 'name' => 'Unterhaltungsliteratur' ],
                        [ 'name' => 'Zeitgen??ssische Literatur & Klassiker' ],
                        [ 'name' => 'Zeitschriften' ],
                        [ 'name' => 'Weitere B??cher & Zeitschriften' ],
                    ],
                ],
                [
                    'name' => 'B??ro & Schreibwaren',
        
                ],
                [
                    'name' => 'Comics',
        
                ],
                [
                    'name' => 'Fachb??cher, Schule & Studium',
        
                ],
                [
                    'name' => 'Film & DVD',
        
                ],
                [
                    'name' => 'Musik & CDs',
        
                ],
                [
                    'name' => 'Musikinstrumente',
        
                ],
                [
                    'name' => 'Weitere Musik, Filme & B??cher',
        
                ],
            ],
        ]);

        $node = Category::create([
            'name' => 'Nachbarschaftshilfe',
                
            'children' => [        
                [
                    'name' => 'Nachbarschaftshilfe',
        
                    'children' => [
                        [ 'name' => 'Allgemein' ],
                    ],
                ],
            ],
        ]);

        $node = Category::create([
            'name' => 'Online-Unterricht & Kurse',
                
            'children' => [        
                [
                    'name' => 'Beauty & Gesundheit',
        
                ],
                [
                    'name' => 'Computerkurse',
        
                    'children' => [
                        [ 'name' => 'eLearning' ],
                        [ 'name' => 'Online-Unterricht' ],
                        [ 'name' => 'Fernstudium' ],
                    ],
                ],
                [
                    'name' => 'Esoterik & Spirituelles',
        
                ],
                [
                    'name' => 'Kochen & Backen',
        
                ],
                [
                    'name' => 'Kunst & Gestaltung',
        
                ],
                [
                    'name' => 'Musik & Gesang',
        
                ],
                [
                    'name' => 'Nachhilfe',
        
                    'children' => [
                        [ 'name' => 'Online-Nachhilfe' ],
                    ],
                ],
                [
                    'name' => 'Sportkurse',
        
                ],
                [
                    'name' => 'Sprachkurse',
        
                ],
                [
                    'name' => 'Tanzkurse',
        
                ],
                [
                    'name' => 'Weiterbildung',
        
                ],
                [
                    'name' => 'Weitere Unterricht & Kurse',
        
                ],
            ],
        ]);

        $node = Category::create([
            'name' => 'Verschenken & Tauschen',
                
            'children' => [        
                [
                    'name' => 'Tauschen',
        
                ],
                [
                    'name' => 'Verleihen',
        
                ],
                [
                    'name' => 'Verschenken',
        
                ],
            ],
        ]);
    }
}
       

        

                /*
                    'name' => 'Ticketschalter',

                    'children' => [
                        [ 'name' => 'Eintrittskarten & Tickets' ],
                    ],
                ],[
                    'name' => 'Elektronik',
        
                    'children' => [
                        [ 'name' => 'Audio/TV' ],
                    ],
                ],[
                    'name' => 'Familie, Kind & Baby',
        
                    'children' => [
                        [ 'name' => 'Kinderbetten' ],
                    ],
                ],[
                    'name' => 'Freizeit, Hobby & Nachbarschaft',
        
                    'children' => [
                        [ 'name' => 'Mountainbike' ],
                    ],
                ],[
                    'name' => 'Haus & Garten',
        
                    'children' => [
                        [ 'name' => 'Gartenger??te' ],
                    ],
                ],[
                    'name' => 'Tierwelt',
        
                    'children' => [
                        [ 'name' => 'Haustiere' ],
                    ],
                ],[
                    'name' => 'Immobilien',
        
                    'children' => [
                        [ 'name' => 'Eigentumswohnung' ],
                        [ 'name' => 'Apartment' ],
                    ],
                ],[
                    'name' => 'Jobs',
        
                    'children' => [
                        [ 'name' => 'Engeniering' ],
                    ],
                ],[
                    'name' => 'Mode & Beauty',
        
                    'children' => [
                        [ 'name' => 'Naildesign' ],
                    ],
                ],[
                    'name' => 'Musik, Filme & B??cher',
        
                    'children' => [
                        [ 'name' => 'B??cher' ],
                    ],
                ],[
                    'name' => 'Nachbarschaftshilfe',
        
                    'children' => [
                        [ 'name' => 'Nachbarschaftshilfe' ],
                    ],
                ],[
                    'name' => 'Online-Unterricht & Kurse',
        
                    'children' => [
                        [ 'name' => 'eLearning' ],
                    ],
                ],[
                    'name' => 'Verschenken & Tauschen',
        
                    'children' => [
                        [ 'name' => 'Tauschen' ],
                        [ 'name' => 'Zu Verschenken' ],
                    ],
                ],
            ],
        ]);*/
    
/*
'name' => 'Auto, Rad & Boot',
        
            'children' => [
                [
                    'name' => 'Auto',
        
                    'children' => [
                        [ 'name' => 'Cabrio' ],
                        [ 'name' => 'limosine' ],
                        [ 'name' => 'SUV' ],
                    ],

                    'name' => 'Autoteile & Reifen',
                    'children' => [
                        [ 'name' => 'Bremsen' ],
                        [ 'name' => 'Fahrwerk' ],
                        [ 'name' => 'Reifen & R??der' ],
                    ],

                    'name' => 'Boote & Bootszubeh??r',
                    'children' => [
                        [ 'name' => 'Motorboot' ],
                        [ 'name' => 'Segelboot' ],
                    ],

                    'name' => 'Fahrr??der & Zubeh??r',
                    'children' => [
                        [ 'name' => 'E-Bike' ],
                    ],

                    'name' => 'Motorr??der & Motorroller',
                    'children' => [
                        [ 'name' => 'Enduro' ],
                        [ 'name' => 'Supersportler' ],
                        [ 'name' => 'Sporttourer' ],
                        [ 'name' => 'Super Moto' ],
                    ],

                    'name' => 'Motorradteile & Zubeh??r',
                    'children' => [
                        [ 'name' => 'Reifen & R??der' ],
                    ],

                    'name' => 'Nutzfahrzeuge & Anh??nger',
                    'children' => [
                        [ 'name' => 'Anh??nger' ],
                    ],

                    'name' => 'Reparaturen & Dienstleistungen',
                    'children' => [
                        [ 'name' => 'Fahrzeug??berf??hrung' ],
                    ],

                    'name' => 'Wohnwagen & -mobile',
                    'children' => [
                        [ 'name' => 'Wohnmobil' ],
                    ],
                ],
            ],
*/